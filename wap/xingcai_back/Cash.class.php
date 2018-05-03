<?php
@session_start();
class Cash extends WebLoginBase{
	public $pageSize=20;
	private $vcodeSessionName='blast_vcode_session_name';

	public final function toCash(){
		$this->display('cash/to-cash.php');
	}
	
	public final function toCashLog(){
		$this->display('cash/tocash.php');
	}
	public final function detail($id){
		$this->getTypes();
		$this->getPlayeds();
		$this->display('cash/detail.php',0 , $id);
	}
	public final function todetail($id){
		$this->getTypes();
		$this->getPlayeds();
		$this->display('cash/todetail.php',0 , $id);
	}
	public final function toCashResult(){
		$this->display('cash/cash-result.php');
	}
	
	public final function recharge(){
		$this->display('cash/recharge.php');
	}
	
	
		public final function rechargeLog(){
		$this->display('cash/recharge-log.php');
	}
		public final function rechargelist(){
		$this->display('cash/recharge-list.php');
	}

	
		public final function toCashlist(){
		$this->display('cash/to-cash-list.php');
	}
	/**
	 * 点卡充值
	 */
	public final function card(){
		$this->display('cash/card.php');
	}
	public final function yanzheng(){
		if(!$_POST['amount'])  throw new Exception('提交数据出错，请重新操作!');
		
		//检查卡密是否正确
		$sql="select * from {$this->prename}card where card_str=?";
		$isRight = $this->getRow($sql, $_POST['amount']);
		if(!$isRight) throw new Exception('卡密不存在');
		if($isRight['status'] == 1) throw new Exception('卡密已使用');
		
		$update['id']=$isRight['id'];
		$update['uid']=$this->user['uid'];
		$update['useranme']=$this->user['useranme'];
		$update['use_time']=time();
		$update['status']=1;
		$sql="update {$this->prename}card set uid={$this->user['uid']}, username='{$this->user['username']}', use_time={$update['use_time']}, status={$update['status']} where id={$isRight['id']}";
		$cardResult = $this->update($sql);

		$coinResult = $this->addCoin(array(
				//'uid'=>$this->user['uid'],
				'coin'=>intval($isRight['price']),
				'liqType'=>111,
				'extfield0'=>0,
				'extfield1'=>0,
				'info'=>"卡密充值-{$_POST['amount']}"
		));
		
		
		return '充值成功';
	
				
	}
	/**
	 * 提现申请
	 */
	public final function getListToCash(){
		 $sql="select c.*, b.name bankName from {$this->prename}member_cash c, {$this->prename}bank_list b where c.bankId=b.id and uid={$this->user['uid']} and b.isDelete=0 and c.isDelete=0";
		 if($_POST['type']||$_POST['type']===0){
                $sql.=" and state = ".$_POST['type'];
            }
        $sql.=' order by c.id desc';
        $list=$this->getPage($sql, $_POST['pageIndex'], $this->pageSize);
        $d['data']=$list;
        $d['status']=200;
        return $d;
	}
	public final function getList(){
	 $sql="select a.rechargeId,a.id,a.amount,a.rechargeAmount,a.info,a.state,a.actionTime,b.name as bankName from {$this->prename}member_recharge a left join {$this->prename}bank_list b on b.id=a.bankId where a.isDelete=0 and a.uid={$this->user['uid']}";
            if($_POST['type']){
	            	if(intval($_POST['type'])== 1){
	                $sql.=" and state = 1";
	            }elseif(intval($_POST['type'])== 0){
	                $sql.=" and state = 0";
	            }
            }
            
            $sql.=' order by a.id desc';
            $list=$this->getPage($sql, $_POST['pageIndex'], 10);
            $d['data']=$list;
            $d['status']=200;
            return $d;

	}
	public final function ajaxToCash(){
		if(!$_POST) return ('参数出错');
//add 2017-07-19 测试帐户不能提款
		if($this->user['parentId']==312)
		{
			throw new Exception('测试帐户不能提款');
		}
		$para['amount']=$_POST['amount'];
		$para['coinpwd']=$_POST['coinpwd'];
		$bank=$this->getRow("select username,account,bankId from {$this->prename}member_bank where uid=? limit 1",$this->user['uid']);
		$para['username']=$bank['username'];
		$para['account']=$bank['account'];
		$para['bankId']=$bank['bankId'];
		if(!ctype_digit($para['amount'])) return ('提现金额包含非法字符');
		if($para['amount']<=0) return ("提现金额只能为正整数");
		if($para['amount']>$this->user['coin']) return ("提款金额大于可用余额，无法提款");
		if($this->user['coin']<=0) return ("可用余额为零，无法提款");
		
		//提示时间检查
		$baseTime=strtotime(date('Y-m-d ',$this->time).'06:00');
		$fromTime=strtotime(date('Y-m-d ',$this->time).$this->settings['cashFromTime'].':00');
		$toTime=strtotime(date('Y-m-d ',$this->time).$this->settings['cashToTime'].':00');
		if($toTime<$baseTime) $toTime+=24*3600;
		if($this->time<$baseTime) $fromTime-=24*3600;
		if($this->time < $fromTime || $this->time > $toTime ) return ("提现时间：从".$this->settings['cashFromTime']."到".$this->settings['cashToTime']);

		//消费判断
		$cashAmout=0;
		$rechargeAmount=0;
		$rechargeTime=strtotime('00:00');
		if($this->settings['cashMinAmount']){
			$cashMinAmount=$this->settings['cashMinAmount']/100;
			$gRs=$this->getRow("select sum(case when rechargeAmount>0 then rechargeAmount else amount end) as rechargeAmount from {$this->prename}member_recharge where  uid={$this->user['uid']} and state in (1,2,9) and isDelete=0 and rechargeTime>=".$rechargeTime);
			if($gRs){
				$rechargeAmount=$gRs["rechargeAmount"]*$cashMinAmount;
			}
			if($rechargeAmount){
				//消费总额
				$cashAmout=$this->getValue("select sum(mode*beiShu*actionNum) from {$this->prename}bets where actionTime>={$rechargeTime} and uid={$this->user['uid']} and isDelete=0");
				if(floatval($cashAmout)<floatval($rechargeAmount)) return ("消费满".$this->settings['cashMinAmount']."%才能提现");
			}
		}//消费判断结束
		$this->beginTransaction();
		try{
			$this->freshSession();
			if($this->user['coinPassword']!=md5($para['coinpwd'])) return ('资金密码不正确');
			unset($para['coinpwd']);
			
			if($this->user['coin']<$para['amount']) return ('你帐户资金不足');
		
			// 查询最大提现次数与已经提现次数
			//$time=strtotime(date('Y-m-d', $this->time));
			//if($times=$this->getValue("select count(*) from {$this->prename}member_cash where actionTime>=$time and uid=?", $this->user['uid'])){
				//$cashTimes=$this->getValue("select maxToCashCount from {$this->prename}member_level where level=?", $this->user['grade']);
				//if($times>=$cashTimes) return ('对不起，今天你提现次数已达到最大限额，请明天再来');
			//}
			
			// 插入提现请求表
			$para['actionTime']=$this->time;
			$para['uid']=$this->user['uid'];
			if(!$this->insertRow($this->prename .'member_cash', $para)) return ('提交提现请求出错');
			$id=$this->lastInsertId();
			
			// 流动资金
			$this->addCoin(array(
				'coin'=>0-$para['amount'],
				'fcoin'=>$para['amount'],
				'uid'=>$para['uid'],
				'liqType'=>106,
				'info'=>"提现[$id]资金冻结",
				'extfield0'=>$id
			));

			$this->commit();
			 return '申请提现成功，提现将在10分钟内到帐，如未到账请联系在线客服。';
		}catch(Exception $e){
			$this->rollBack();
			//return 9999;
			throw $e;
		}
	}
	
	/**
	 * 确认提现到帐
	 */
	public final function toCashSure($id){
		if(!$id=intval($id)) throw new Exception('参数出错');
		
		$this->beginTransaction();
		try{
			
			// 查找提现请求信息
			if(!$cash=$this->getRow("select * from {$this->prename}member_cash where id=$id"))
			throw new Exception('参数出错');
			
			if($cash['uid']!=$this->user['uid']) throw new Exception('您不能代别人确认');
			switch($cash['state']){
				case 0:
					throw new Exception('提现已经确认过了');
				break;
				case 1:
					throw new Exception("提现请求正在处理中...");
				break;
				case 2:
					throw new Exception("该提现请求已经取消，冻结资金已经解除冻结\r\n如需要提现请重新申请");
				break;
				case 3:
					
				break;
				case 4:
					throw new Exception("该提现请求已经失败，冻结资金已经解除冻结\r\n如需要提现请重新申请");
				break;
				default:
					throw new Exception('系统出错');
				break;
			}
			
			if($this->update("update {$this->prename}member_cash set state=0 where id=$id"))
			$this->addCoin(array(
				'liqType'=>12,
				'uid'=>$this->user['uid'],
				'info'=>"提现[$id]资金确认",
				'extfield0'=>$id
			));
			
		}catch(Exception $e){
			$this->rollBack();
			throw $e;
		}
	}
	
	/* 进入充值，生产充值订单 */
	public final function inRecharge(){

		if(!$_POST) throw new Exception('参数出错');
		$para['mBankId']=intval($_POST['mBankId']);
		$para['amount']=floatval($_POST['amount']);
        // if(strtolower($_POST['vcode'])!=$_SESSION[$this->vcodeSessionName]) throw new Exception('验证码不正确。');
		if($para['amount']<=0) throw new Exception('充值金额错误，请重新操作');
		if($id=$this->getValue("select bankId from {$this->prename}sysadmin_bank where id=?",$para['mBankId'])){
			if($id==2 || $id==3){
				if($para['amount']<$this->settings['rechargeMin1'] || $para['amount']>$this->settings['rechargeMax1']) throw new Exception('支付宝/财付通充值最低'.$this->settings['rechargeMin1'].'元，最高'.$this->settings['rechargeMax1'].'元');
			}else{
				if($para['amount']<$this->settings['rechargeMin'] || $para['amount']>$this->settings['rechargeMax']) throw new Exception('银行卡充值最低'.$this->settings['rechargeMin1'].'元，最高'.$this->settings['rechargeMax1'].'元');
			}
		}else{
				throw new Exception('充值银行不存在，请重新选择');
			}

		//if(strtolower($_POST['vcode'])!=$_SESSION[$this->vcodeSessionName]){
			//throw new Exception('验证码不正确。');
		//}else{
			// 插入充值请求表
			unset($para['coinpwd']);
			$para['rechargeId']=$this->getRechId();
			$para['actionTime']=$this->time;
			$para['uid']=$this->user['uid'];
			$para['username']=$this->user['username'];
			$para['actionIP']=$this->ip(true);
			$para['info']='用户充值';
			$para['bankId']=$id;
			
			if($this->insertRow($this->prename .'member_recharge', $para)){
				$this->display('cash/recharge-copy.php',0,$para);
			}else{
				throw new Exception('充值订单生产请求出错');
			}
		}
		//清空验证码session
	   //unset($_SESSION[$this->vcodeSessionName]);
	//}
	
	public final function getRechId(){
		$rechargeId=mt_rand(100000,999999);
		if($this->getRow("select id from {$this->prename}member_recharge where rechargeId=$rechargeId")){
			getRechId();
		}else{
			return $rechargeId;
		}
	}
	
	//充值提现详细信息弹出
	public final function rechargeModal($id){
		$this->getTypes();
		$this->getPlayeds();
		$this->display('cash/recharge-modal.php', 0 , $id);
	}
	public final function cashModal($id){
		$this->getTypes();
		$this->getPlayeds();
		$this->display('cash/cash-modal.php', 0 , $id);
	}
	public final function withdraw(){
		$bank=$this->getRow("select m.*,b.logo logo, b.name bankName from {$this->prename}member_bank m, {$this->prename}bank_list b where b.isDelete=0 and m.bankId=b.id and m.uid=? limit 1", $this->user['uid']);
		if(!$bank){
			header('location: /index.php/safe/info');
		}else{
			$this->display('cash/withdraw.php');
		}
	}
	//充值演示
	public final function paydemo($id){
		$this->display('cash/paydemo.php', 0 , $id);
	}
}