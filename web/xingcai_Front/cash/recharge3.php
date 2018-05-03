 <?php $this->freshSession(); 
		//更新级别
		$ngrade=$this->getValue("select max(level) from {$this->prename}member_level where minScore <= {$this->user['scoreTotal']}");
		if($ngrade>$this->user['grade']){
			$sql="update blast_members set grade={$ngrade} where uid=?";
			$this->update($sql, $this->user['uid']);
		}else{$ngrade=$this->user['grade'];}
		
		$date=strtotime('00:00:00');
?>
<!doctype html>
<html>
<?php $this->display('C38_header_new.php'); ?>
<script src="../../team_js/bootstrap-datetimepicker.min.js"></script>
<script src="../../team_js/bootstrap-datetimepicker.zh-CN.js"></script>

<script src="../../team_js/bootstrap-datepicker.min.js"></script>


  <script type="text/javascript" src="/newskin/js/common.js"></script>

 


<link rel="stylesheet" href="/files/pay.css" type="text/css">
    <div id="h2" class="wrap" style=" width:1220px; margin:0 auto;">
<style type="text/css">
	.pay-top_1>a{
		float: none;
		display: inline-block;
		width: 18%;
		font-size: 15px;
	}
	.wechat-tit{
		text-align: left !important;
		text-indent: 57px;
	}
  
  .wechat-top p{
  	text-align: left;
  	text-indent: 57px;
  }  
   .bank-tit,.bank-tit ul{
   	width: 100%;
   	height: 40px;
   	text-align: center;
   }
  .bank-tit ul li{
  	width: 24% !important;
  	float: none;
  	display: inline-block;
  }
  #div_2{
  	float: left;
  	width: 1046px;
  	background-color: #f1f1f1;
  }
  .datepicker-dropdown{
  	position: absolute;
  	border: 1px solid #ccc !important;
  }
  .datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top{
  	position: absolute !important;
  	background-color: #fff;
  	border: 1px solid #ccc !important;
  }
</style>
<?php $this->display('siderbar.php'); ?>
<link rel="stylesheet" href="/css/nsc/list.css?v=1.16.11.9" />
        <div id="div_1" class="clearfix right-div">
            <div class="play-wrap">
                <div class="deposit-info subContent_bet_re" style="width: 1046px;margin-left: 0;">
                    <div class="pay-top_1 clearfix" style="text-align: left;width: 875px;text-indent: 21px;">
                        <a class="" href="/index.php/cash/recharge" >支付宝支付</a>
						<a class="" href="/index.php/cash/recharge2" >微信支付</a>
                        <a class="current" href="/index.php/cash/recharge3" >QQ钱包</a>
                        <a class="" href="/index.php/cash/recharge4" >银行入款</a>
                        
                    </div>
<body>


<table class="topName" width="100%"><tbody><tr><td>

<div class="recharege-leibie" id="point">
<?php
			$set=$this->getSystemSettings();
				$sql="select * from {$this->prename}bank_list b, {$this->prename}sysadmin_bank m where m.admin=1 and m.enable=1 and b.isDelete=0 and b.id=m.bankId and b.id not in(1,2,3,4,5,6,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31)";
				$banks=$this->getRows($sql);	
				if($banks){
				if($this->user['coinPassword']){
				?>
       <div class="pay-info-tit">                            
                                <div class="tip_input_blue bold">
                                    操作步骤：  
                                </div>
                                <div class="tips f12">
                                    <p>※ 1.QQ钱包（扫一扫直接到账） 方便快捷，支付完成立即到账。</p>
                                    <p>※ 24小时存款不限次数，免除所有手续费，3分钟火速到账。</p>
                                    <p>※ 存款遇到问题？立即联络在线客服为您服务。</p>                                   
                                </div>
                            </div>
       
				  <form action="/index.php/cash/inRecharge" method="post" target="ajax" onajax="checkRecharge" call="toCash" dataType="html">
                                
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
              <tbody><tr>
                                
                 </tr>
                <tr>
                <td align="right">充值金额：</td>
                <td><input type="text" name="amount" min="<?=$set['rechargeMin']?>" max="<?=$set['rechargeMax']?>" min1="<?=$set['rechargeMin1']?>" max1="<?=$set['rechargeMax1']?>" value="" id="ContentPlaceHolder1_txtMoney" onkeyup="showPaymentFee();" class="forminputT6"/>
				
				
			
                <span class="red">&nbsp;&nbsp;(单笔充值限额：最低 <span><?=$set['rechargeMin']?></span>,最高 <span><?=$set['rechargeMax']?></span>)
               </span></td>
              </tr>

              <tr>
                <td align="right">充值金额(大写)：</td>
                <td><span class="red" id="chineseMoney"></span></td>
              </tr>
			  
			   <tr>
                <td align="right">验证码：</td>
                <td><input name="vcode" type="text" style="/*ime-mode:disabled;margin-left:6px;width:200px;height:38px;*/" />&nbsp;&nbsp;<img width="80" height="29" id="vcode" alt="看不清？点击更换" align="absmiddle" src="/index.php/user/vcode/<?= $this->time ?>" title="看不清楚，换一张图片" onClick="this.src='/index.php/user/vcode/'+(new Date()).getTime()"/></td>
              </tr>
                          </tbody></table>

                        <style>
           
            </style>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
              <tbody><tr>
                  <td><h3>请选择支付通道</h3></td>
              </tr>
              <tr>
                <td>
                    <ul class="bank-list">
					 <?php	
							$idx = 0;
							if($banks) foreach($banks as $bank){
							if($idx == 0){
							$bnm = $bank['name'];
					} ?>
                       <label><input type="radio" class="xuan" name="mBankId" cname="<?=$bank['name'] ?>" value="<?=$bank['id']?>" <?=$this->iff($idx==0, 'checked', '') ?> data-bank='<?=json_encode($bank)?>'/><img src="/<?=$bank['logo']?>" alt="" style="height:2.74rem;"/></label>
					
                       <?php 
								$idx++;}
							?>
                    </ul>
                </td>
              </tr>
            </tbody></table>
                  
				<div id="2tips" data="0"></div>
		          <div align="center">
				  <input type="submit" name="submit" value="下一步" class="formNext">
				  <input name="" type="button" value="返回" class="formBack" onclick="Suke.common.goBack();">
				  </div>
       
        </form>
</div>
<div><a class="pay-online-btn" target="_blank" href="http://api.pop800.com/chat/263818"><i></i>联系在线客服</a></div>
	                </div>
	<?php }else{?>
		<div class="container" style=" width: auto">
			<div id="error">
				<h3 class="title">	
					<font color="#ff0000">您还未设定提款密码，为了您的账户安全，请先设定好您的提款密码</font>
				</h3>
				<br>
				<br>
				 <div align="center">
				 <p class="msg_buttom">
					 <a href="/index.php/safe/passwd" target="_top" class="btn btn-red">设定提款密码</a>
				 </p>
				</div>
			</div>
        </div>
    <?php }?>
      <?php }else{ ?>
        <div class="container" style=" width: auto">
			<div id="error">
				<h3 class="title">	
				<font color="#ff0000">对不起，未开通该银行的充值权限，请使用在线充值或其它银行进行充值。</font>
				</h3>
			</div>
        </div>
     <?php }?>		







