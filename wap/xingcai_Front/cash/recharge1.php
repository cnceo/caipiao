  <?php $this->display('inc_daohang.php'); ?>
  <link rel="stylesheet" href="/css/nsc_m/m-lott.css?v=1.16.11.16">
<script type="text/javascript" src="/js/nsc_m/res.js?v=1.16.12.4"></script>
<!-- 中间部分开始 -->
 <section class="wraper-page">
		<div style="padding:0.714286rem ;">
    <div id="siderbar" style="display:none"></div>
    <div id="mainContent">

        <div id="contentBox">	
		 <div class="step">
		     <div class="item">
                        <div class="item_l">充值处理时间：</div>
                        <div class="item_r"><span class="z_font1">7*24小时充值服务</span></div>
                </div>
			<!-- 逻辑内容开始 -->
			<div data-init="content" class="content">
				<div class="wrapper">
					  
          
           
				  <div class="recharege-leibie">
             
                
                  <div class="recharege-lb">
				  <?php
				$sql="select * from {$this->prename}bank_list b, {$this->prename}sysadmin_bank m where m.admin=1 and m.enable=1 and b.isDelete=0 and b.id=m.bankId and b.id not in(1,3,4,6)";
				$banks=$this->getRows($sql);	
				if($banks){
				if($this->user['coinPassword']){
				?>
				  <form action="/index.php/cash/inRecharge" method="post" target="ajax" onajax="checkRecharge" call="toCash" dataType="html">
				<div class="item">
                        <div class="item_l">选择充值银行：</div>
                        <div class="item_r">
                           	<select name="mBankId"  style="font-size: 20px;width:150px;margin-top: 5px;">
								<span><option value=''>点此选择</option>
                            <?php
								$set=$this->getSystemSettings();
								if($banks) foreach($banks as $bank){
							?>
								<option value='<?=$bank['id']?>'><?=$bank['name']?></option>
							<?php } ?>
							</select>
                        </div>
                </div>
				<div class="item">
                        <div class="item_l money_hanggao">充值金额(人民币)：</div>
                        <div class="item_r">
                            <input name="amount" class="cz_input1" min="<?=$set['rechargeMin']?>" max="<?=$set['rechargeMax']?>" min1="<?=$set['rechargeMin1']?>" max1="<?=$set['rechargeMax1']?>" value="" id="ContentPlaceHolder1_txtMoney" onkeyup="showPaymentFee();">
                            <span class="yuan">元</span>
                            <p class="tips">单笔充值限额：
							最低 <b id="m_min"><?=$set['rechargeMin']?></b>元，
							最高 <b id="m_max"><?=$set['rechargeMax']?></b>元</p>
                        </div>
                </div>
				  <div class="item">
                        <div class="item_l">充值金额(大写)：</div>
                        <div class="item_r">
						<span class="money" id="chineseMoney"></span>
						</div>
                </div>
				<div class="item">
                        <div class="item_l">验证码：</div>
                        <div class="item_r">
						 <input name="vcode" maxlength="4" type="text" class="text" style="width:75px;margin-top:5px;"/>
						 <img width="65" height="31" border="0" style="cursor:pointer;margin-bottom:5px;" id="vcode" alt="看不清？点击更换" align="absmiddle" src="/index.php/user/vcode/<?= $this->time ?>" title="看不清楚，换一张图片" onclick="this.src='/index.php/user/vcode/'+(new Date()).getTime()"/>
						</div>
                </div>
				   
				<div class="cz_btn_box">
                    <p>*平台填写金额应当与网银汇款金额完全一致，否则将无法即时到账！</p>
      
					<input id="setcz" class="next" type="submit" value="进入充值" >
                </div>
                  </div>
                  </div> </div>
                  </div>
			<!-- 逻辑内容结束 -->
           	<!-- 中间部分结束 -->
           </form>
	    <?php }else{?>
     	<div id="subContent_bet_re">
		<div id="error">
		<h3>
			<font class="hint_red">您尚未设置资金密码，请先设置资金密码！</font>
		</h3>
		<div class="yhlb_back"><a href="/index.php/safe/passwd" target="_top">设置资金密码</a></div>
						</div>

﻿</div>	
    <?php }?>
         <?php }else{ ?>
	<div id="subContent_bet_re">
		<div id="error">
		<h3>
			<font class="hint_red">由于银行网络原因，充值暂停！给您带来不便敬请谅解！</font>
		</h3>
		
						</div>

﻿</div>	
            <?php }?>	
  </div> </div> </div> </div>
</body></html>
  
   
 