<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html;charset=utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport" />
    <meta name=format-detection content="telphone=no" />
    <meta name=apple-mobile-web-app-capable content=yes />
    
    <title>彩票38</title>
    
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="uploadimg/wapicon/icon-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="uploadimg/wapicon/icon-72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="uploadimg/wapicon/icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="uploadimg/wapicon/icon-144.png">
    
    <link rel="stylesheet" href="/assets/statics/css/style.css" type="text/css">
    <link rel="stylesheet" href="/assets/statics/css/global.css" type="text/css">
    
    <script type="text/javascript">
    	if(('standalone' in window.navigator)&&window.navigator.standalone){
	        var noddy,remotes=false;
	        document.addEventListener('click',function(event){
	                noddy=event.target;
	                while(noddy.nodeName!=='A'&&noddy.nodeName!=='HTML') noddy=noddy.parentNode;
	                if('href' in noddy&&noddy.href.indexOf('http')!==-1&&(noddy.href.indexOf(document.location.host)!==-1||remotes)){
	                        event.preventDefault();
	                        document.location.href=noddy.href;
	                }
	        },false);
		}
    </script>
</head>

<style type="text/css">
    .recharge_box{width:210px;padding:20px;font:14px/26px "Microsoft YaHei"}
	.recharge_box h2{font-size: 13px;font-weight: bold;}
	.recharge_box p{font:14px/26px "Microsoft YaHei";text-indent:0px}
	.recharge_box .recharge_edit{margin-top:10px;text-align:center;}
	.recharge_box .recharge_edit a{display:inline-block;height:24px;font:14px/24px "Microsoft YaHei";background-color:#337ab7;color: #fff;margin-right:10px;padding:2px 10px}
	.recharge_box .recharge_edit a.go{background-color:#f0ad4e; }
	
	.rech-money input {
	    float: none;
	}
	.test {
	    width: 50px;
	    height: 30px;
	    line-height: 30px;
	    text-align: center;
	    float: left;
        background: #ddd;
        margin-left: 5px;
    }
    
    .test1 {
	    height: 30px;
	    line-height: 30px;
	    text-align: center;
	    float: left;
        background: #ddd;
        margin-left: 5px;
        
	    width: 40px;
        border: 1px solid red;
    }
    .mycss { background:#ec2929; border:0; border-radius: 5px; color: #fff; height:36x; font-size: 100%; line-height: 36px; width: 95%; margin:20px auto 0; display: block; outline: none;  }
</style>

<body class="login-bg">
	<div class="header">
	    <div class="headerTop">
	        <div class="ui-toolbar-left">
	            <button id="reveal-left">reveal</button>
	        </div>
	        <h1 class="ui-toolbar-title">充值</h1>
	        <div class="ui-bett-right">
	            <a class="bett-head" href="javascript:;"></a>
	        </div>
	    </div>
	</div>
	
	<div id="wrapper_1" class="scorllmain-content scorll-order top_bar bottom_bar">
	    <div class="sub_ScorllCont">
	        <div class="rech-top">
	            <div class="rech-top-left">用户名：<span class="red"><?php echo $this->user['username'] ?></span></div>
	            <div class="rech-top-right"><a class="fr" href="javascript:;"><img src="/assets/statics/images/cz_img_03.png"></a>账户余额：<span class="red" id="balance"><?php echo $this->user['coin'] ?></span>元</div>
	        </div>
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
				$sql="select * from {$this->prename}bank_list b, {$this->prename}sysadmin_bank m where m.admin=1 and m.enable=1 and b.isDelete=0 and b.id=m.bankId and b.id not in(10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31)";
				$banks=$this->getRows($sql);	
				if($banks){
				if($this->user['coinPassword']){
				?>
				  <form action="/index.php/cash/inRecharge" method="post" target="ajax" onajax="checkRecharge" call="toCash" dataType="html">
				<div class="item">
                        <div class="item_l">选择充值通道：</div>
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
	<!-- 菜单右侧tips -->
	<!-- 菜单右侧tips -->
	<div class="beet-rig" style="height: 85px;display: none;">
	    <ul>
	        <li><a href="/index.php/cash/rechargeLog">充值记录</a></li>
	        <li style="border-color: #c91b1c;"><a href="http://api.pop800.com/chat/263818" target="_blank">在线客服</a></li>
	    </ul>
	</div>
	
	
	<script src="/assets/js/require.js" data-main="/assets/js/application/recharge"></script>
	<script src="/assets/js/require.config.js?v=2.11"></script>
	
	
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
  
   
 