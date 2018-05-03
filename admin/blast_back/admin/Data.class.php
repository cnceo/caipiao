<?php

/**
 * 与开奖数据有关
 */
class Data extends AdminBase{
	public $pageSize=15;
	private $encrypt_key='I/On?u8v(^PQGlCMKGLt#2R&ylR06nc315/r`k-(b94@bV<sOo#u:1@BW27,N^TQOlkRvhuu,U5mUhpfWnfZu$>-=rx)rNlSH-Oc,*oUGI*a/X`YFmgM-Bre(wfFf5Gx*qE_L@~pCtr0BOfCO#n=0w:+@l,k$y5r75Q/)~.z%&kTZDjR0OM7*xlnyyfO1JL&VtRzYrF(a~2(yz1Fz:ZB#uAR;pt`4Wg;*$+G<EWhZ~o5G$8,u=PHsGr@NI*N%sdF';	// 256位随便密码
	private $dataPort=8802;
	
	public final function index($type){
		$this->type=$type;
		$this->display('data/index.php');
	}
	
	public final function add($type, $actionNo, $actionTime){
		$para=array(
			'type'=>$type,
			'actionNo'=>$actionNo,
			'actionTime'=>$actionTime
		);
		$this->display('data/add-modal.php', 0, $para);
	}

    public final function updatedata($type, $actionNo, $actionTime){
		$para=array(
			'type'=>$type,
			'actionNo'=>$actionNo,
			'actionTime'=>$actionTime
		);
		$this->display('data/update-modal.php', 0, $para);
	}
	
	public final function kj(){
		$para=$_GET;
		$para['key']=$this->encrypt_key;
		$url=$GLOBALS['conf']['node']['access'] . '/data/kj';
		echo $this->http_post($url, $para);
	}

	public final function added(){
		if(!$this->getValue("select data from {$this->prename}data where type={$_POST['type']} and number='{$_POST['number']}'")){
			$para['type']=intval($_POST['type']);
			$para['number']=$_POST['number'];
			$para['data']=$_POST['data'];
			$para['time']=$this->time;
			try{
				$this->beginTransaction();
				$this->insertRow($this->prename .'data', $para);
				$this->addLog(17,$this->adminLogType[17].'['.$para['data'].']', 0, $this->getValue("select shortName from {$this->prename}type where id=?",$para['type']).'[期号:'.$para['number'].']');
				$this->commit();
				return "添加成功！";
			}catch(Exception $e){
				$this->rollBack();
				throw $e;
			}
		}else{
			try{
				$para['data']=$_POST['data'];
				$para['time']=$this->time;
				$this->beginTransaction();
				if($this->updateRows($this->prename .'data', $para,'id='.$_POST['id'])){
					$this->addLog(17,$this->adminLogType[17].'['.$para['data'].']', 0, $this->getValue("select shortName from {$this->prename}type where id=?",$para['type']).'[期号:'.$para['number'].']');
					$this->commit();
					return "添加成功！";
				}
			}catch(Exception $e){
				$this->rollBack();
				throw $e;
			}
		}
	}

	public final function updatedataed(){
		$id=intval($_POST['id']);
		$para['data']=$_POST['data'];
		$sql="update {$this->prename}data set data='{$para['data']}' where id={$id}";
		if($this->update($sql)){
			echo '修改成功';
		}
	}
	
	public function http_post($url, $data) {
		$data_url = http_build_query ($data);
		$data_len = strlen ($data_url);
	
		return file_get_contents ($url, false, stream_context_create (array ('http'=>array ('method'=>'POST'
				, 'header'=>"Connection: close\r\nContent-Length: $data_len\r\n"
				, 'content'=>$data_url
				))));
	}
// /*****開始/
	
	//添加号码
	public final function add2($type, $actionNo, $actionTime){
		$para=array(
			'type'=>$type,
			'actionNo'=>$actionNo,
			'actionTime'=>$actionTime
		);
		$this->display('data/add-admin.php', 0, $para);
	}
	
	public final function modify($type, $actionNo, $data){
		$para=array(
			'type'=>$type,
			'actionNo'=>$actionNo,
			'data'=>$data
		);
		$this->display('data/modify-modal.php', 0, $para);
	}
	public final function index2($type){
		$this->type=$type;
		$this->display('data/index2.php');
	}
	
	public final function modifyed(){
		$para=$_POST;
		$para['type']=intval($para['type']);
		$para['key']=$this->encrypt_key;
		//修改数据
		$sql ="update {$this->prename}data_admin set data='{$para['data']}' where type={$para['type']} and number='{$para['number']}'";
		$return=$this->getRow($sql);
		
		
	}
	//撤销
	public final function chexiao(){
			$para=$_GET;
			$number=$_GET['number'];
			$type=$_GET['type'];
			$this->getRow("delete from {$this->prename}data_admin where type={$type} and number='$number'");
		
	}
	
	public final function added2(){
		$para=$_POST;
		$para['type']=intval($para['type']);
		$para['key']=$this->encrypt_key;
        $para['time']=strtotime($para['time']);
		//增加数据
		$sql ="insert into {$this->prename}data_admin(type, time, number, data)values({$para['type']},{$para['time']},'{$para['number']}','{$para['data']}')";
		$return =$this->getRow($sql);
		
	}	
	// /*****結束/
}