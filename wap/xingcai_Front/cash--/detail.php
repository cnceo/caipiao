<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html;charset=utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport" />
    <meta name=format-detection content="telphone=no" />
    <meta name=apple-mobile-web-app-capable content=yes />
    
    <title>福彩168</title>
    
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
<?php
    $sql="select r.* from {$this->prename}member_recharge r where r.id={$args[0]}";
    $rechargeInfo=$this->getRow($sql, $args[0]);
    if($rechargeInfo['mBankId']){
        $sql="select mb.username accountName, mb.account account, b.name bankName from {$this->prename}members u,{$this->prename}member_bank mb, {$this->prename}bank_list b where b.isDelete=0 and u.uid={$rechargeInfo['uid']} and mb.id={$rechargeInfo['mBankId']} and mb.bankId=b.id";
        $bankInfo=$this->getRow($sql);
    }
?>
<body class="login-bg">
	<div class="header">
		<div class="headerTop">
	        <div class="ui-toolbar-left">
	            <button id="reveal-left" onclick="history.go(-1)">reveal</button>
	        </div>
	        <h1 class="ui-toolbar-title">入款明细</h1>
	   	</div>
   	</div>
    <div id="wrapper_1" class="scorllmain-content scorll-order top_bar nobottom_bar">
    <div class="sub_ScorllCont">
        <div class="recharge">
            <ul>
	            <li>
	                <span class="recharge-left">&nbsp;订&nbsp;单&nbsp;号：</span>
	                <span><?=$rechargeInfo['rechargeId']?></span>
	            </li>
                <li>
                	<span class="recharge-left">用户：</span>
                	<span><?=$rechargeInfo['username']?></span>
               	</li>
                <li>
	                <span class="recharge-left">存款金额：</span>
	                <span><?=$rechargeInfo['amount']?>元</span>
                </li>
                <li>
	                <span class="recharge-left">充值前资金：</span>
	                <span><?=number_format($rechargeInfo['coin'],2)?>元</span>
                </li>
                <li>
	                <span class="recharge-left">充值银行：</span>
	                <span><?=$this->ifs($bankInfo['account'], '--')?></span>
                </li>
                <li>
	                <span class="recharge-left">银行账号：</span>
	                <span><?=$this->ifs($bankInfo['account'], '--')?></span>
                </li>
                <li>
                	<span class="recharge-left">开户名：</span>
                	<span class="red"><?=$this->ifs($bankInfo['accountName'], '--')?></span>
                	
                	
                </li>
                <li>
                	<span class="recharge-left">充值时间：</span>
                	<span class="red"><?=date("Y-m-d H:i:s",$rechargeInfo['actionTime'])?></span>
                </li>
                <li>
	                <span class="recharge-left">备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注：</span>
	                <span><?=$this->iff($var['state'], '充值成功', '<span style="color:#653809">正在处理</span>')?></span>
                </li>
        	</ul>
        </div>
    </div>
</body>
</html>