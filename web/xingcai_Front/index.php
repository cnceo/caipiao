﻿<!DOCTYPE html>
<!--  -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="referrer" content="always">
		<meta name="referrer" content="unsafe-url">
		<meta name="renderer" content="webkit">
		
		<title>福彩168</title>
		<!--<link type="image/x-icon" rel="shortcut icon" href="http://www.cy16cp.com/fhcp/statics/images/favicon.ico?20170114" media="screen"/>-->
		<link type="text/css" rel="stylesheet" href="./files/_home.css">
		<link type="text/css" rel="stylesheet" href="./files/_tip.css">
		<link type="text/css" rel="stylesheet" href="./files/style.css">
		<!-- 主页独立的css -->
		<link type="text/css" rel="stylesheet" href="./files/index.css">
		<!--[if lte IE 8]><style>.ie-alert-bg,.ie-alert-wrap { display:block!important;}</style><![endif]-->
		<!--[if lte IE 7]><style>.ie-alert-bg,.ie-alert-wrap { display:block!important;}</style><![endif]-->
		<!--[if lte IE 6]><style>.ie-alert-bg,.ie-alert-wrap { display:block!important;}</style><![endif]-->
		<script>
			try {
				//下面是静态资源url的前缀
				if(typeof(_prefixURL) != "object") {
					window._prefixURL = {
						statics: "/sscp/statics",
						common: "/common/statics"
					};
				}
			} catch(e) {console.log(e);}
			try {
				//注：下一行代码毋删除，或重复定义，或在其他文件出现一样的代码 ,也不要在其他文件定义window.name（  __openWin 方法会用到这个变量）
				if(!window.opener) {
					window.name = "wn_1_home_first";
				} else if(window.name != "wn_1_home_first") {
					window.name = "wn_1_home_first";
				}
			} catch(e) {console.log(e);}
		</script>
		<!--<script type="text/javascript" src="./files/jquery-1.11.2.min.js.下载"></script>-->
		<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>

		<script type="text/javascript" src="./files/unslider.min.js.下载"></script>
		<script src="./files/_user_.js.下载"></script>
<script type="text/javascript" src="/skin/main/onload.js"></script>
<script type="text/javascript" src="/skin/main/function.js"></script>
<script type="text/javascript" src="/js/nsc/main.js"></script>
    <script type="text/javascript" src="/skin/main/charge_pour.js"></script>
<link href="/css/nsc/plugin/dialogUI/dialogUI.css" media="all" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="/js/nsc/dialogUI/jquery.dialogUI.js"></script>
<script type="text/javascript" src="/skin/layer/layer.js"></script>

	
		<!--<script type="text/javascript" src="./files/_home_menu.js.下载"></script>-->
		<script type="text/javascript">
		function zxkf(){
	 <?php if($this->settings['kefuStatus']){ ?>
	layer.open({
	  type: 2,
	  area: ['800px', '550px'],
	  zIndex:1999,
	  //fixed: false, //不固定
	  title:'在线客服',
	  scrollbar: false,//屏蔽滚动条
	  //maxmin: true,
	  content:'<?=$this->settings['kefuGG']?>'
	});
	<?php }else{?>
	$.alert("客服系统维护中");
	<?php }?>
	return false;
}
			$(document).ready(function() {
				$('#mylottery').unbind().hover(function() {
					$(this).addClass('mylottery-on');
					$('#mylottery_dropdown').show();
				}, function() {
					$(this).removeClass('mylottery-on');
					$('#mylottery_dropdown').hide();
				});
				
			});
		</script>
		<style type="text/css">
._notice{
	position: fixed;
	z-index: 1000;
	background-color: rgba(0,0,0,0.7);
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
    display: none;
}
._notice-wrapper{
	position: absolute;
	left:15%;
	top: 15%;
	width: 70%;
	height: 70%;
	overflow-x: hidden;
	overflow-y: auto;
    background-color: #fff;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 0 0 5px rgba(255,255,255,.3);
}
._notice-wrapper .title{
	height: 64px;
	line-height: 64px;
	text-align: center;
	font-size: 20px;
	font-weight: 400;
	letter-spacing: 3px;
	color: #fff;
	background-color: #F13131;
	position: relative;
	background-color: #F13131;
	background-image: linear-gradient(to bottom, #b31515, #f13131);
}
/*._notice-wrapper .title:before{
	content: "asdfasdfsad";
	display: block;
}*/
._notice-wrapper .close{
	height: 64px;
	position: absolute;
	top: 0;
	right: 0;
	font-size: 28px;
	line-height: 64px;
	color: #fff;
	padding:0 15px;
	cursor: default;
}
._notice-content{
	position: absolute;
	top: 64px;
	left: 0px;
	right: 0;
	bottom:0px;
	padding: 10px 0;
	overflow-x: hidden;
	overflow-y: auto;
}
._notice-nav{
	width: 199px;
	position: absolute;
	left: 0;
	top: 0px;
	bottom: 0;
	border-right: 1px solid #DBDBDB;
}
._notice-nav li{
	position: relative;
	display: block;
	height: 40px;
	border-bottom: 1px solid #DBDBDB;
}
._notice-nav li a{
	display: block;
	text-indent:30px;
	width: 188px;
	border-right: 2px solid transparent;
	padding-right: 10px;
	color: #4c4c4c;
	line-height: 40px;
	font-size: 16px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
._notice-nav li.active a{
	border-color: #F13131;
};
._notice-nav li:before{
	
}
._notice-context{
	position: absolute;
	top: 0;
	left:200px;
	right: 0;
	bottom: 0;
	padding: 10px;
	overflow-y: auto;
}
._icon{
	content: "";
	display: block;
	width: 12px;
	height: 12px;
	border-radius: 50%;
	background-color: #F13131;
	top: 14px;
	left: 10px;
	position: absolute;
}
		</style>
	</head>
	<body>
		<div class="_notice">
		<div class="_notice-wrapper">
			<div class="title">平台公告<span class="close">×</span></div>
			<div class="_notice-content">
				<ul class="_notice-nav">

				</ul>
				<div class="_notice-context"></div>
			</div>
		</div>
    </div>
		<div class="header-plus" id="header_plus">
			<div class="header-toptray-plus">
				<div class="quick-tpis">
					<div>您好,欢迎来到福彩168!</div>
					<div class="top_dr_zc">
                        <a class="top_qdr" onclick="__openWin('login','/index.php/user/login?is_login=1')">请登录</a>
                        |
                        <a class="top_ljdr" onclick="__openWin('login','/index.php/user/login')">立即注册</a>
                    </div>
					<div class="header-right fr">
						<ul class="header-top-center fl">
							<li class="c-grey topscan">
								<div class="header-gou"><i class="icon-iphone-icon"></i>手机购彩<span class="head-select"></span></div>
								<div class="scancode" hidden="">
									<img src="<?= $this->settings['ioscode'] ?>" width="124px" height="124px">
									<p>微信扫一扫</p>
									<p>彩票随身买</p>
								</div>
							</li>
						</ul>
						<ul class="header-top-right fr ">
							
							<li><a id="agent_reg_url" class="right-border" href="http://daili.fcyl168.com" >代理登陆</a></li>
							
							
							<li><a class="right-border" href="/index.php/index/help?page=default">玩法</a></li>
							
							<li><a target="_self" onclick="zxkf();">在线客服</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			<div class="liansai-wrap" id="liansai-wrap">
				<div class="liansai" id="liansai">
					<div class="wrapper clearfix relative">
						<h1 class="sprite sprite-logo"></h1>
						<div id="header_user_login" class="wrap-login" style="display: none;">
							<div class="logxinxi" id="logxinxi">
								<div class="top_login">
									<div style="float:right;">
										<div style="float: left;">
											<div class="top-login-bg"><i class="icon-6"></i><input class="top_loginip" name="username" type="text" id="username" placeholder="请输入用户名"></div>
											<div class="top-login-bg"><i class="icon-lock-icon"></i><input class="top_loginip" name="passwd" id="password" type="password" placeholder="请输入密码"></div>
												<div class="need_captcha">
													<div class="top_click" name="div_top_click" style="display: none;">请输入验证码</div>
													<div class="yanzhengma">
														<div class="top-login-bg2">
															<input class="top_loginmm" id="authnum" name="authnum" maxlength="4" type="text" placeholder="">
																<span class="register_captcha_span" style="margin:0; position: relative;">
	                                                            <img name="login_img" class="login_img" style="margin-top:4px" src="/index.php/user/vcode/1498379763" title="点击刷新" onclick="this.src='/index.php/user/vcode/'+(new Date()).getTime()">
	                                                            <!-- <a name="btn_refresh"><img src="/common/statics/img/refresh_1.png"></a> -->
	                                                        </span>
														</div>
													</div>
												</div>
										</div>
										<div style="float: left;margin-top: 1px">
											<input style="margin-right: 14px;" class="dr_anniu" onclick="index_userLogin();" type="button" name="login" value="登录">
											<input class="dr_anniu reg_anniu" type="button" onclick="__openWin('login','/index.php/user/login')" value="注册">
										</div>
									</div>
									<input type="hidden" name="ref_url" value="">
									<input type="hidden" name="form_submit" value="ok">
									<input type="hidden" name="formhash" value="">
								</div>
							</div>
						</div>
						<div id="header_user" class="logxinxi" hidden="" style="display: block;">
							<div class="top_login">
								<span>您好，<a onclick="__openWin('user_center','/index.php/box/receive');" rel="nofollow" class="play-jl" target="_blank" name="user_name"><?=$this->user['username']?></a></span>
								<span>可用余额：</span>
								<span><a class="balance colorRed" id="refff" rel="nofollow" style="color: #e4393c;"><span id="balance" class="orange">￥0.000</span></a>
								</span>
								<span><a id="header_money_refresh"><i class="icon-refresh-icon"></i></a></span>
								<span>&nbsp;|&nbsp;
                                    <a onclick="__openWin('user_center','/index.php/box/receive')">用户中心</a>&nbsp;|&nbsp;
                                    <a onclick="__openWin('user_center','/index.php/cash/recharge2')">充值</a>&nbsp;|&nbsp;
                                    <a onclick="topay();">提现</a>&nbsp;|&nbsp;
                                    <a  onclick="__openWin('user_center','/index.php/record/search')">交易记录</a>&nbsp;|&nbsp;
                                    <a style="display:none;" onclick="__openWin('user_center','/index.php/safe/tuiguang');">我的推广</a>
                                	<a href="javascript:loginout()" onclick="loginout();">退出</a>&nbsp;
                                </span>
							</div>
						</div>
					</div>
				</div>
				<div class="header-navbar-plus">
					<div class="wrapper clearfix" id="header_box">
						<div class="lottery-plus" id="lotterys">
							<h2 class=""><span class="hanbo_icon"><i></i><i></i><i></i></span>热门彩种</h2>

<div class="lotterys-list-hd" id="lotterysList" style="display:block">
  <ul class="lottery-list-box" id="lottery-list-box">
    
    <li class="mainGame">
      <a onclick="__openWin('lottery_hall','/index.php/index/game/1/2/12/重庆时时彩');" class="mainA">
        <i class="icon nav40-9">
          <img src="./files/5.png"></i>
      </a>
      <div class="fl">
        <a onclick="__openWin('lottery_hall','/index.php/index/game/1/2/12/重庆时时彩');" class="mainA">
          <span class="color333">重庆时时彩</span>
          <p onclick="__openWin('lottery_hall','/index.php/index/game/1/2/12/重庆时时彩');" target="_blank" class="status-desc">最火爆的快彩</p></a>
      </div>
    </li>
    <li class="mainGame">
      <a onclick="__openWin('lottery_hall','/index.php/index/game/20/27/北京PK拾');" class="mainA">
        <i class="icon nav40-9">
          <img src="./files/9.png"></i>
      </a>
      <div class="fl">
        <a onclick="__openWin('lottery_hall','/index.php/index/game/20/27/北京PK拾');" class="mainA">
          <span class="color333">北京PK拾</span>
          <p>
            <span class="normal-desc">彩友中200注</span></p>
        </a>
      </div>
    </li>
	<li class="mainGame">
      <a onclick="__openWin('lottery_hall','/index.php/index/game/86/香港三分彩');" class="mainA">
        <i class="icon nav40-9">
          <img src="./files/3fssc.png"></i>
      </a>
      <div class="fl">
        <a onclick="__openWin('lottery_hall','/index.php/index/game/86/香港三分彩');" class="mainA">
          <span class="color333">香港三分彩</span>
          <p>
            <span class="normal-desc"></span>
          </p>
        </a>
      </div>
    </li>
    <li class="mainGame">
      <a onclick="__openWin('lottery_hall','/index.php/index/game/5/腾讯分分彩');" class="mainA">
        <i class="icon nav40-9">
          <img src="./files/42.png"></i>
      </a>
      <div class="fl">
        <a onclick="__openWin('lottery_hall','/index.php/index/game/5/腾讯分分彩');" class="mainA">
          <span class="color333">腾讯分分彩</span>
          <p>
            <span class="normal-desc"></span>
          </p>
        </a>
      </div>
    </li>
     <li class="mainGame">
      <a onclick="__openWin('lottery_hall','/index.php/index/game/80/104/339/幸运28');" class="mainA">
        <i class="icon nav40-9">
          <img src="./files/xy28.png"></i>
      </a>
      <div class="fl">
        <a onclick="__openWin('lottery_hall','/index.php/index/game/80/104/339/幸运28');" class="mainA">
          <span class="color333">幸运28</span>
          <p>
            <span class="normal-desc"></span>
          </p>
        </a>
      </div>
    </li>
    <li class="mainGame">
      <a onclick="__openWin('lottery_hall','/index.php/index/game/34/香港⑥合彩');" class="mainA">
        <i class="icon nav40-9">
          <img src="./files/18.png"></i>
      </a>
      <div class="fl">
        <a onclick="__openWin('lottery_hall','/index.php/index/game/34/香港⑥合彩');" class="mainA">
          <span class="color333">香港⑥合彩</span>
          <p onclick="__openWin('lottery_hall','/index.php/index/game/34/香港⑥合彩');" target="_blank" class="status-desc">每周开奖三期</p></a>
      </div>
    </li>
    <li class="allGames clearfix" data-type="1">
      <h3>
        <i class="icon-ALARM"></i>
        <span>高频彩</span></h3>
      <ul class="clearfix game-list">
       <li>
          <a onclick="__openWin('lottery_hall','/index.php/index/game/1/2/12/重庆时时彩');">重庆时时彩</a></li>
        <li>
          <a onclick="__openWin('lottery_hall','/index.php/index/game/20/27/北京PK拾');">北京PK拾</a></li>
          <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/5/腾讯分分彩');">腾讯分分彩</a></li>
        <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/60/2/12/天津时时彩');">天津时时彩</a></li>
				 <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/86/2/12/香港三分彩');">香港三分彩</a></li>
                <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/77/⑥合彩');">高速⑥合彩</a></li>
        
      </ul>
      <i class="icon" id="open-btn-1" style="display: block;"></i>
      <div class="line-fff"></div>
      <div class="moreGames clearfix" style="display: none;" id="moreGames_1">
        <div class="moreGames-box fl">
          <div class="otherGames num-games">
            <h3>高频彩</h3>
            <ol>
             
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/1/2/12/重庆时时彩');">重庆时时彩</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/20/27/北京PK拾');">北京PK拾</a></li>
                 <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/5/腾讯分分彩');">腾讯分分彩</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/14/2/12/澳门五分彩');">澳门五分彩</a></li>
              
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/60/2/12/天津时时彩');">天津时时彩</a></li>
			   <li><a onclick="__openWin('lottery_hall','/index.php/index/game/86/2/12/香港三分彩');">香港三分彩</a></li>
			   <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/85/27/三分PK10');">三分PK拾</a></li> 
               <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/80/104/339/幸运28');">幸运28</a></li>
              
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/12/2/12/新疆时时彩');">新疆时时彩</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/79/39/江苏快三');">江苏快三</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/7/10/山东11选5');">山东11选5</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/15/10/上海11选5');">上海11选5</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/16/10/江西11选5');">江西11选5</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/6/10/广东11选5');">广东11选5</a></li>
              
             
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/81/39/安徽快三');">安徽快三</a></li>
            </ol>
          </div>
        </div>
      </div>
    </li>
    <li class="allGames" data-type="2">
      <h3>
        <i class="icon-TIME"></i>
        <span>低频彩</span></h3>
      <ul class="clearfix game-list">
        <li>
          <a onclick="__openWin('lottery_hall','/index.php/index/game/34/香港⑥合彩');">香港⑥合彩</a></li>
        <li>
          <a onclick="__openWin('lottery_hall','/index.php/index/game/9/3D福彩');">福彩3D</a></li>
        <li>
          <a onclick="__openWin('lottery_hall','/index.php/index/game/10/排列3');">排列三</a></li>
      </ul>
    </li>
    <li class="allGames clearfix" data-type="3">
      <h3>
        <i class="icon-billiard-ball"></i>
        <span>全部</span></h3>
      <ul class="clearfix game-list">
        
        <li>
          <a onclick="__openWin('lottery_hall','/index.php/index/game/1/2/12/重庆时时彩');">重庆时时彩</a></li>
        <li>
          <a onclick="__openWin('lottery_hall','/index.php/index/game/20/27/北京PK拾');">北京PK拾</a></li>
        <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/5/腾讯分分彩');">腾讯分分彩</a></li>
		
       <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/85/27/三分PK10');">三分PK拾</a></li> 
               <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/80/104/339/幸运28');">幸运28</a></li>
        <li>
          <a onclick="__openWin('lottery_hall','/index.php/index/game/34/香港⑥合彩');">香港⑥合彩</a></li>
      </ul>
      <i class="icon" id="open-btn-1" style="display: block;"></i>
      <div class="line-fff"></div>
      <div class="moreGames clearfix" style="display: none;" id="moreGames_3">
        <div class="moreGames-box fl">
          <div class="otherGames num-games">
            <h3>全部</h3>
            <ol>
                          
                <a onclick="__openWin('lottery_hall','/index.php/index/game/1/2/12/重庆时时彩');">重庆时时彩</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/20/27/北京PK拾');">北京PK拾</a></li>
              
             <li>
             	 <a onclick="__openWin('lottery_hall','/index.php/index/game/77/高速⑥合彩');">高速⑥合彩</a></li>
             </li>
              <li><a onclick="__openWin('lottery_hall','/index.php/index/game/5/腾讯分分彩');">腾讯分分彩</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/14/2/12/河内5分彩');">澳门五分彩</a></li>
              
              
			   <li><a onclick="__openWin('lottery_hall','/index.php/index/game/86/2/12/香港三分彩');">香港三分彩</a></li>
			   <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/85/27/三分PK10');">三分PK拾</a></li> 
               <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/80/104/339/幸运28');">幸运28</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/60/2/12/天津时时彩');">天津时时彩</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/12/2/12/新疆时时彩');">新疆时时彩</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/79/39/江苏快三');">江苏快三</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/7/10/山东11选5');">山东11选5</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/15/10/上海11选5');">上海11选5</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/16/10/江西11选5');">江西11选5</a></li>
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/6/10/广东11选5');">广东11选5</a></li>
              
           
              <li>
                <a onclick="__openWin('lottery_hall','/index.php/index/game/81/39/安徽快三');">安徽快三</a></li>
			<li>
			  <a onclick="__openWin('lottery_hall','/index.php/index/game/34/香港⑥合彩');">香港⑥合彩</a></li>
			<li>
			  <a onclick="__openWin('lottery_hall','/index.php/index/game/9/3D福彩');">福彩3D</a></li>
			<li>
			  <a onclick="__openWin('lottery_hall','index.php/index/game/10/排列3');">排列三</a></li>
            </ol>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
</div>
						
						<ul class="nav-plus clearfix">
							<li  class="on"><a href="/">首页</a></li>
							<li><a onclick="__openWin('lottery_hall','/index.php/index/hall/');" target="_blank">购彩大厅</a></li>
				<!-- 			<li><a href="/index.php/index/help?page=phone"><i class="icon-iphone-icon"></i>&nbsp;手机购彩</a><em style="z-index: 9;right: -11px;" class="hot-icon"></em></li> -->
							<li><a href="/index.php/index/help?page=huodong">优惠活动</a><em class="hot-icon"></em></li>
							<li><a onclick="__openWin('user_center','/zst/index.php?typeid=1');" class="dropdown-desc">走势图表</a></li>
							<li><a href="/index.php/index/help?page=kjgg">开奖公告</a></li>
						</ul>
					</div>
				</div>
				<div class="article-center">
						<!--二维码 -->
					<div class="right-info">
	                    <div class="health-tab">
	                        <ul class="mobile-tab">
	                            <li class="tab-mobile" data-val="1"><a onclick=""><i class="icon-appleinc"></i>iOS版</a></li>
	                            <li class="tab-mobile on" data-val="2"><a onclick=""><i class="icon-android"></i>Android版</a></li>
	                        </ul>
	                    </div>
	                    <div style="clear: both;">
	                        <div class="mobile-main">
	                            <div class="" id="tab-mobileapp-1" style="display: none;">
	                                <div class="iosqr">
	                                    <p>适用于IOS6.0及以上平台</p>
	                                    <img style="width:125px;" src="<?=$this->settings['ioscode']?>">
	                                    <p>扫一扫二维码下载Iphone版</p>
	                                </div> 
	                            </div>
		                                            
		                        <div class="" id="tab-mobileapp-2">
		                            <div class="androidqr">
		                                <p>适用于Android及以上平台</p>
		                                <img style="width:125px;" src="<?=$this->settings['androidCode']?>">
		                                <p>扫一扫二维码下载Android版</p>
		                            </div>
		                        </div>
	                        </div>            
	                    </div>
	                </div>
					<!-- 轮播图 -->
					<div class="slide">
						<div id="slides">
							<div class="slides_container">
								<div class="slides_container banner has-dots" id="b04" style="overflow: hidden; width: 522px; height: 248px;">
									<ul style="width: 400%; position: relative;  height: 248px; overflow: hidden;">
                                        <li class="show_picture" id="show_pic_0" style="width: 25%;">
                                            <img src="./files/1.jpg" class="sliderimg" width="522px" height="248px">
                                        </li>
                                        <li class="show_picture" id="show_pic_1" style="width: 25%;">
                                            <img src="./files/2.jpg" class="sliderimg" width="522px" height="248px">
                                        </li>
                                        <li class="show_picture" id="show_pic_2" style="width: 25%;">
                                            <img src="./files/3.jpg" class="sliderimg" width="522px" height="248px">
                                        </li>
                                        <li class="show_picture" id="show_pic_3" style="width: 25%;">
                                            <img src="./files/4.jpg" class="sliderimg" width="522px" height="248px">
                                        </li>
                                    </ul>
								<ol class="dots"><li class="dot">1</li><li class="dot">2</li><li class="dot">3</li><li class="dot">4</li></ol></div>
							</div>
						</div>
						
						<div style="position: relative;width: 100%;">
							<div style="position: absolute;left: 65%;">
								
							</div>
						</div>
					</div>
	            </div>
				<div class="wrap-bg">
					<div class="wrapper">
						<div class="submain">
							<div class="submain-tip" id="sys_tip_outer">
								<i class="icon-acc"></i>
								<!-- 这里是跑马灯<marquee>标签，由js加入dom  -->
							<marquee id="sys_tip" behavior="scroll"><?=$this->settings['webGG']?></marquee></div>
							<div class="home-wrapper">
								<div class="quick-buy-box">
								
								<!-- 快速投注_时时彩 -->
									<div  name="content" class="qb qb-box-list" id="_index_countdownIssue">
										<ul name="quick_tab_list" class="quick-tab-list"><li class="tab-sel-open on" data-gameid="5" name="gameid_5"><a>重庆时时彩</a></li><li class="tab-sel-open" data-gameid="1" name="gameid_1"><a>福彩3D</a></li><li class="tab-sel-open" data-gameid="9" name="gameid_9"><a>北京PK拾</a></li><li class="tab-sel-open" data-gameid="2" name="gameid_2"><a>排列三</a></li><li class="tab-sel-open" data-gameid="12" name="gameid_12"><a>山东11选5</a></li></ul>
										<ul class="qb-info clearfix">
											<li>
											<span style="font-size: 18px"><span name="issue">随机一注</span></span>
												<span class="c-gray" style=" display:none;">截止：</span>
												<span class="sale_end_timer" style=" display:none;">
                                                    <span>
                                                        <span name="day" class="time-color">0</span>天
														<span name="h" class="time-color">0</span>小时
														<span name="m" class="time-color">8</span>分
														<span name="s" class="time-color">36</span>秒
													</span>
												</span>
											</li>
											<li class="bztz">
												<a name="btn_game_play">自助选号</a>
												
											</li>
										</ul>
										<div class="qb-selectnumber">
											<i class="sprite sprite-sscd"></i>
											<ul name="num_list" class="qb-selectnum clearfix qb_dlt_select"><img class="bett-icon" src="./files/5.png"><li class="qb-red lot_sn_red"><input value="9" readonly=""></li><li class="qb-red lot_sn_red"><input value="5" readonly=""></li><li class="qb-red lot_sn_red"><input value="4" readonly=""></li><li class="qb-red lot_sn_red"><input value="8" readonly=""></li><li class="qb-red lot_sn_red"><input value="7" readonly=""></li></ul>
										</div>
										<div class="qb-tz-box clearfix">
											<div class="fl bei-box clearfix">
                                                <a onclick="setTimesNum(1)" data-type="fc3d" class="tz_bei_sub">−</a>
                                                <input name="times_nums" type="text" maxlength="3" data-type="fc3d" id="times_nums" onblur="setTimesNum(0)" class="multiple" value="1">
                                                <a onclick="setTimesNum(2)" class="tz_bei_add" data-type="fc3d">+</a>
                                                <span class="mr10">倍</span> 共 <strong name="bet_amount" id="bet_amount" class="money time-color">2</strong> 元
											</div>
											<div class="dg-btn-box">
                                                <a name="change_gameNum" class="change-btn" id="fc3d_random">
                                                    <i class="icon-refresh-icon"></i> 换一注
                                                </a>
                                                <a name="doBet" onclick="rightNow()" class="dg-tz-btn icon" id="fc3d_submit_index">立即投注</a>
                                            </div>
										</div>
										
									</div>
								
									
									<div class="help-tab-box">
										<ul class="help-tab">
											<li id="help_tab_hot" class="on" onmouseover="setHelpTab(this, 'hot')"><a class="web-notice">网站公告</a></li>
											<li id="help_tab_newer" onmouseover="setHelpTab(this, 'newer')" class=""><a class="user-help">新手指导</a></li>
										</ul>
										<ul class="web-notice-box help-ul" id="cont_help_hot" style="">
										<!--<li><a onclick="__openWin('home2','/index/newsContent.html?skey=DF42E62C-61A1-F85A-D3DA-7BD08D161FCE')">通知：有任何问题请咨询在线...</a></li></ul>-->
										<?php
							$bool = true;
							foreach ($args[0]['data'] as $var) {
							if ($bool) {
							$bool = false;
							$val  = $var;
							}
							if($cout>=8){
								
								break;
							}
							$cout += 1;
							$mod = $cout % 2;
						?>                
										<li><a title="系统公告" href="/index.php/notice/view_new/<?=$var['id']?>" class="notice"> <?= $var['title'] ?> </a></li>
										<?php
						}
						?>	   
										</ul>
										<ul class="user-help-box help-ul" id="cont_help_newer" style="display: none;">
											<li><a href="/index.php/notice/view_new/118">如何注册成为福彩168会员？</a></li>
											<li><a href="/index.php/notice/view_new/117">忘记登录密码了怎么办？</a></li>
											<li><a href="/index.php/notice/view_new/116">在网站充值要手续费吗？</a></li>
										</ul>
										<div class="helr_ruhe">
											<span>如何：</span>
											<a href="/index.php/notice/view_new/118">注册 ＞ </a>
											<a href="/index.php/notice/view_new/115">购彩 ＞ </a>
											<a href="/index.php/notice/view_new/116">充值 ＞ </a>
											<a href="/index.php/notice/view_new/116">提款</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-box clearfix wrapper" id="main">
					<div class="part-2 clearfix js-lazy">
						<!-- 中奖排行榜 -->
						<div class="part-3-cont-right part-right">
							<div class="ratetop">
								<div><span>中奖排行榜</span>
									
								</div>
							</div>
							<div class="tableCarousel" cellspacing="0" cellpad="" c-greyding="0" style="">
							  <div id="prizeUser" class="tbody" style="margin-top: -20px;">
							   <p><span><span class="bg_green">18</span>she***</span><span class="orange">137.2元</span></p>
                                  <p><span><span class="bg_green">19</span>lhp***</span><span class="orange">107.8元</span></p>
                                  <p><span><span class="bg_green">20</span>zcm***</span><span class="orange">105.84元</span></p>
                                  <p><span><span class="bg_orange">01</span>atj***</span><span class="orange text_orange">5880元</span></p>
                                  <p><span><span class="bg_orange">02</span>888***</span><span class="orange text_orange">1960元</span></p>
                                  <p><span><span class="bg_orange">03</span>che***</span><span class="orange text_orange">1960元</span></p>
                                  <p><span><span class="bg_green">04</span>qi3***</span><span class="orange">1411.2元</span></p>
                                  <p><span><span class="bg_green">05</span>722***</span><span class="orange">909.548元</span></p>
                                  <p><span><span class="bg_green">06</span>hxz***</span><span class="orange">882元</span></p>
                                  <p><span><span class="bg_green">07</span>194***</span><span class="orange">686元</span></p>
                                  <p><span><span class="bg_green">08</span>aaa***</span><span class="orange">441元</span></p>
                                  <p><span><span class="bg_green">09</span>df6***</span><span class="orange">392元</span></p>
                                  <p><span><span class="bg_green">10</span>xie***</span><span class="orange">362.6元</span></p>
                                  <p><span><span class="bg_green">11</span>lxy***</span><span class="orange">294元</span></p>
                                  <p><span><span class="bg_green">12</span>lyq***</span><span class="orange">205.8元</span></p>
                                  <p><span><span class="bg_green">13</span>129***</span><span class="orange">196元</span></p>
                                  <p><span><span class="bg_green">14</span>521***</span><span class="orange">196元</span></p>
                                  <p><span><span class="bg_green">15</span>q66***</span><span class="orange">183.456元</span></p>
                                  <p><span><span class="bg_green">16</span>768***</span><span class="orange">176.4元</span></p>
                                  <p><span><span class="bg_green">17</span>bao***</span><span class="orange">147元</span></p>
							  </div>
							<!-- 	<div id="prizeUser" class="tbody" style="margin-top: -20px;"><p><span><span class="bg_green">18</span>she***</span><span class="orange">137.2元</span></p><p><span><span class="bg_green">19</span>lhp***</span><span class="orange">107.8元</span></p><p><span><span class="bg_green">20</span>zcm***</span><span class="orange">105.84元</span></p><p><span><span class="bg_orange">01</span>atj***</span><span class="orange text_orange">5880元</span></p><p><span><span class="bg_orange">02</span>888***</span><span class="orange text_orange">1960元</span></p><p><span><span class="bg_orange">03</span>che***</span><span class="orange text_orange">1960元</span></p><p><span><span class="bg_green">04</span>qi3***</span><span class="orange">1411.2元</span></p><p><span><span class="bg_green">05</span>722***</span><span class="orange">909.548元</span></p><p><span><span class="bg_green">06</span>hxz***</span><span class="orange">882元</span></p><p><span><span class="bg_green">07</span>194***</span><span class="orange">686元</span></p><p><span><span class="bg_green">08</span>aaa***</span><span class="orange">441元</span></p><p><span><span class="bg_green">09</span>df6***</span><span class="orange">392元</span></p><p><span><span class="bg_green">10</span>xie***</span><span class="orange">362.6元</span></p><p><span><span class="bg_green">11</span>lxy***</span><span class="orange">294元</span></p><p><span><span class="bg_green">12</span>lyq***</span><span class="orange">205.8元</span></p><p><span><span class="bg_green">13</span>129***</span><span class="orange">196元</span></p><p><span><span class="bg_green">14</span>521***</span><span class="orange">196元</span></p><p><span><span class="bg_green">15</span>q66***</span><span class="orange">183.456元</span></p><p><span><span class="bg_green">16</span>768***</span><span class="orange">176.4元</span></p><p><span><span class="bg_green">17</span>bao***</span><span class="orange">147元</span></p></div> -->
							</div>
						</div>
						<!-- 新闻资讯 -->
						<div class="part-2-cont-right part-right">
							<div class="lottery-news-box">
								<div class="news-title clearfix">
                                    <?php
                                    $one_news = $this->getRow("select * from blast_content where nodeId=2 limit 0,1");
                                    ?>
									<a href="/index.php/notice/view_new/<?=$one_news['id']?>" target="_self" id="newsTitle_1"><?=$one_news['title']?></a>
								</div>
								<div class="news-bar">
									<div class="news-bar-content" id="news-bar-content1">
										<ul class="news-bar-list news-bar-left clearfix">
                                        <?php
                                        $more_one_news = $this->getRows("select * from blast_content where nodeId=2 limit 1,5");
                                        foreach ($more_one_news as $value) {
                                            echo '<li><a onclick="" class="c-grey">新闻</a><span class="pad c-grey">|</span> <a href="/index.php/notice/view_new/'.$value['id'].'">'.$value['title'].'</a> </li>';
                                        }
                                        ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="lottery-news-box">
								<div class="news-title clearfix">
                                    <?php
                                    $two_news = $this->getRow("select * from blast_content where nodeId=2 limit 6,1");
                                    ?>
                                    <a href="/index.php/notice/view_new/<?=$two_news['id']?>" target="_self" id="newsTitle_2"><?=$two_news['title']?></a>
								</div>
								<div class="news-bar">
									<div class="news-bar-content" id="news-bar-content2">
										<ul class="news-bar-list news-bar-left clearfix">
                                            <?php
                                            $more_two_news = $this->getRows("select * from blast_content where nodeId=2 limit 7,5");
                                            foreach ($more_two_news as $value) {
                                                echo '<li><a onclick="" class="c-grey">新闻</a><span class="pad c-grey">|</span> <a href="/index.php/notice/view_new/'.$value['id'].'">'.$value['title'].'</a> </li>';
                                            }
                                            ?>
                                        </ul>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="part-2-cont-left part-left">
							<div id="draw_box" class="draw-notice">
								<div>
									<div class="title-top">
										<ul class="notice-tab">
											<li class="tab-sel on" data-val="1"><a onclick="">高频开奖</a></li>
											<li class="tab-sel" data-val="2"><a onclick="">低频开奖</a></li>
											<!-- <li class="tab-more"><a onclick="__openWin('home2','/draw/index.html')">更多</a></li> -->
										</ul>
									</div>
									<div style="clear:both;"></div>
									<div class="notice-main">
										<!-- 高频彩 -->
										<div class="draw-contents" id="tab-cont-1" style="">
											<ul class="notice-list" id="lastOpenSsc">
											<li><div><span class="lot-name"><a onclick="">上海时时乐&nbsp;</a>0627007期</span><span class="term">06-27</span><span class="clear"></span><div class="clear"></div><div class="redball">4</div><div class="redball">0</div><div class="redball">1</div><br><div class="fr"><a onclick="">投注</a></div><div class="clear"></div></div></li>
											<li><div><span class="lot-name"><a onclick="">天津时时彩&nbsp;</a>0627029期</span><span class="term">06-27</span><span class="clear"></span><div class="clear"></div><div class="redball">5</div><div class="redball">4</div><div class="redball">3</div><div class="redball">7</div><div class="redball">7</div><br><div class="fr"><a onclick="">投注</a></div><div class="clear"></div></div></li>
											<li><div><span class="lot-name"><a onclick="')">重庆时时彩&nbsp;</a>0627047期</span><span class="term">06-27</span><span class="clear"></span><div class="clear"></div><div class="redball">7</div><div class="redball">8</div><div class="redball">8</div><div class="redball">8</div><div class="redball">8</div><br><div class="fr"><a onclick="">投注</a></div><div class="clear"></div></div></li>
											<li><div><span class="lot-name"><a onclick="">新疆时时彩&nbsp;</a>0627023期</span><span class="term">06-27</span><span class="clear"></span><div class="clear"></div><div class="redball">8</div><div class="redball">0</div><div class="redball">9</div><div class="redball">7</div><div class="redball">3</div><br><div class="fr"><a onclick="">投注</a></div><div class="clear"></div></div></li>
											<li><div><span class="lot-name"><a onclick="">广东11选5&nbsp;</a>0627029期</span><span class="term">06-27</span><span class="clear"></span><div class="clear"></div><div class="redball">06</div><div class="redball">05</div><div class="redball">04</div><div class="redball">03</div><div class="redball">10</div><br><div class="fr"><a onclick="">投注</a></div><div class="clear"></div></div></li>
											</ul>
										</div>
										<!-- 低频彩 -->
										<div class="draw-contents" id="tab-cont-2" style="display: none;">
												<ul class="notice-list" id="lastOpenQt">
                                                <?php
                                                /*获取低频彩-最新一期*/
                                                $sql = 'SELECT t.`shortName`,(SELECT t1.data FROM blast_data t1 WHERE t1.type = t.`id`  ORDER BY t1.number DESC LIMIT 1) data,(SELECT t2.number FROM blast_data t2 WHERE t2.type = t.`id`  ORDER BY t2.number DESC LIMIT 1) number,t.`id` FROM  blast_type t WHERE t.id IN (34,10,9)';
                                                $dpcl = $this->getRows($sql);
                                                //print_r($dpcl);
                                                foreach ($dpcl as $key => $value) {
                                                    if($key == 0){
                                                        echo '<li><div><span class="lot-name"><a onclick="">'.$value['shortName'].'&nbsp;</a>'.$value['number'].'期</span><span class="term"></span><span class="clear"></span><div class="clear"></div>';
                                                        $data_number = explode(',',$value['data']);
                                                        foreach ($data_number as $val){
                                                            echo '<div class="redball">'.$val.'</div>';
                                                        }
                                                        echo '<br><div class="fr"><a onclick="__openWin(\'lottery_hall\',\'/index.php/index/game/'.$value['id'].'\');">投注</a></div><div class="clear"></div></div></li>';
                                                    }else{
                                                        echo '<li><div><span class="lot-name"><a onclick="">'.$value['shortName'].'&nbsp;</a>'.$value['number'].'期</span><span class="term">'.date('m-d',$value['time']).'</span><span class="clear"></span><div class="clear"></div>';
                                                        $data_number = explode(',',$value['data']);
                                                        foreach ($data_number as $val){
                                                            echo '<div class="redball">'.$val.'</div>';
                                                        }
                                                        echo '<br><div class="fr"><a onclick="__openWin(\'lottery_hall\',\'/index.php/index/game/'.$value['id'].'\');">投注</a></div><div class="clear"></div></div></li>';
                                                    }
                                                }
                                                ?>
												</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="jc-footer">
    <div class="footer-cn js-lazy">
        <div class="cnRight">
            <div class="cnTop">
                <!--logo区-->
                <div class="cn-list service">
                    <i class="sprite sprite-end_logo"></i>
                </div>
               <div class="cn-list">
                    <h3>&nbsp;&nbsp;账户相关</h3>
                    <ul>
                        <li><a href="/index.php/index/help?page=detail#help-1" title="">如何注册账号</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-3" title="">怎么找回登录密码</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-37" title="">如何修改手机号码</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-26" title="">如何修改真实姓名</a></li>
                    </ul>
                </div>
                <div class="cn-list">
                    <h3>&nbsp;&nbsp;充值购彩</h3>
                    <ul>
                        <li><a href="/index.php/index/help?page=detail#help-tit3" title="">如何进行充值</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-tit4" title="">如何购买彩票</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-9" title="">如何查询购彩记录</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-tit3" title="">充值没到账怎么办</a></li>
                    </ul>
                </div>
                <div class="cn-list">
                    <h3>&nbsp;&nbsp;兑奖提款</h3>
                    <ul>
                        <li><a href="/index.php/index/help?page=detail#help-10">怎样进行兑奖</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-12">如何进行提款</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-13">提款是否收手续费</a></li>
                        <li><a href="/index.php/index/help?page=detail#help-16">提款不成功怎么办</a></li>
                    </ul>
                </div>
                <div class="cn-list service">
                    <h3>&nbsp;&nbsp;APP下载</h3>
                    
                    <div class="app-down">
                        
                        <div class="down-img" id="img-apple1">
                            <img src="<?=$this->settings['ioscode']?>">
                        </div>
                        <div class="down-img" id="img-andoid1" style="display: none">
                            <img src="<?=$this->settings['androidCode']?>">     
                        </div>
                        <div class="down-txt">
                            <!-- <a class="down-apple1">Iphone版</a>
                            <a class="down-andoid1">Android版</a> -->
                            <p class="phine_ban_p" id="ba-apple1">Iphone版</p>
                            <p class="phine_ban_p" id="ba-andoid1" style="display: none;">Android版</p>
                            <p>手机投注 随时随地</p>
                            <a class="down-apple1 down_now"><i class="icon-appleinc"></i></a>
                            <a class="down-andoid1"><i class="icon-android"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_box">
        <div class="about_box">
            <p>2009-2017©<span>福彩168 | </span> 客服邮箱福彩168cai688@vip.qq.com<!-- 客服QQ：201716002 | 流量统计 -->
            <br><span class="c-grey">福彩168郑重提示：彩票有风险，投注需谨慎！ 不向未满18周岁的青少年出售彩票</span></p>
            <ul class="foot_info">
                <li class="foot_wljc"></li>
                <li class="foot_wangan"></li>
                <li class="foot_wsjy"></li>
                <li class="foot_xylh"></li>
                <li class="foot_kxwz"></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
<div class="clear nospace"></div>
</div>
<!-- 更新浏览器 -->
<div class="ie-alert-wrap" style="display: none;">
    <h1>是时候升级你的浏览器了</h1>
    <p>你正在使用 Internet Explorer 的早期版本（IE9以下版本 或使用该内核的浏览器）。这意味着在升级浏览器前，你将无法访问此网站。</p>
    <hr>
    <h2>请注意：Windows XP 及 Internet Explorer 早期版本的支持已经结束</h2>
    <p>自 2016 年 1 月 12 日起，Microsoft 不再为 IE 11 以下版本提供相应支持和更新。没有关键的浏览器安全更新，您的 PC 可能易受有害病毒、间谍软件和其他恶意软件的攻击，它们可以窃取或损害您的业务数据和信息。请参阅 <a href="https://www.microsoft.com/zh-cn/WindowsForBusiness/End-of-IE-support">微软对 Internet Explorer 早期版本的支持将于 2016 年 1 月 12 日结束的说明</a> 。</p>
    <hr>
    <h2>更先进的浏览器</h2>
    <p>推荐使用以下浏览器的最新版本。如果你的电脑已有以下浏览器的最新版本则直接使用该浏览器访问<b id="referrer"></b>即可。</p>
    <ul class="browser">
      <li class="browser-chrome"><a href="http://www.google.cn/chrome/browser/index.html?hl=zh-CN&amp;standalone=1" target="_blank"> 谷歌浏览器<span>Google Chrome</span></a></li>
      <li class="browser-360"><a href="http://se.360.cn/" target="_blank"> 360安全浏览器 <span>360用户推荐</span></a></li> <!-- 2016-08-06 -->
      <li class="browser-firefox"><a href="http://www.firefox.com.cn/" target="_blank"> 火狐浏览器<span>Mozilla Firefox</span></a></li>
      <li class="browser-ie"><a href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank"> IE浏览器<span>Internet Explorer</span></a></li>
      <li class="browser-qq"><a href="http://browser.qq.com/" target="_blank"> QQ浏览器9 <span>全新升级版本</span></a></li> <!-- 9.4.8187.400 -->
      
      <div class="clean"></div>
    </ul>
    <hr>
    <h2>为什么会出现这个页面？</h2>
    <p>如果你不知道升级浏览器是什么意思，请请教一些熟练电脑操作的朋友。如果你使用的不是IE6/7/8/9/10，而是360浏览器、QQ浏览器、搜狗浏览器等，出现这个页面是因为你使用的不是该浏览器的最新版本，升级至最新即可。</p>
    <hr>
</div>
<div class="ie-alert-bg" style="display: none;"></div>
<!-- start :  浮动图标  -->
<!-- <div  id="_leftAD" class="_float_AD l_AD hide" ">
    <img src="<?=$this->settings['leftimg']?>">
    <div name="close_btn"></div>
	<a class="top1_btn" href="tencent://message/?uin=<?=$this->settings['qqkefuGG']?>&amp;Site=%E5%BD%A916&amp;Menu=yes"></a>
    <a class="top2_btn" href="tencent://message/?uin=<?=$this->settings['qqkefuGG']?>&amp;Site=%E5%BD%A916&amp;Menu=yes"></a>
    <div class="two_img" style="display: none;"><img src="./files/getIosPng.html"></div>
</div> -->
<!-- <div id="_rightAD" class="_float_AD r_AD " >
    <img src="<?=$this->settings['rightimg']?>">
    <div name="close_btn"></div>
    <div class="top1_btn" onclick="zxkf();"></div>
    <div class="top2_btn" onclick="__openWin('user_center','/index.php/safe/tuiguang')"></div>
    <div class="two_img" style="display: none;"><img src="./files/getAndroidPng.html"></div>
</div> -->
<script type="text/javascript">

</script>
<!-- end :  浮动图标  -->

<!-- 倒计时维护 -->
<div class="maintain-countdown" style="display: none;">
  <div class="maintain-time" id="main_count_down">  
    维护倒计时<br>
    <div id="mian_time"></div>
  </div>
</div>

<script>
    //全屏高度，防止内容过短的时候，下面出现白边
    $(function(){
        var winH = document.documentElement.clientHeight?document.documentElement.clientHeight:document.body.scrollHeight;
        $("body>div.wrap-bg").css("minHeight", ( winH - $("body>#header_plus").height() - $("body>.jc-footer").height() ) + "px" );
    })
</script>

<script>
function CULS(){
	$.ajax({
		type : 'GET',
		url  : '/index.php/index/getUserInfo',
		timeout : 10000,
		dataType: "json",
		success : function(data){
			 //console.log(data);
			if (!data||data=="null") {
				$("#header_user_login").show();
				$("#header_user").hide();
				$("#wdtg").hide();
				$(".top_dr_zc").show();
				
			}
			 else if (data.coin>=0) {
				culs = true;	
				$("a[name=user_name]").html(data.username);
				$("#wdtg").show();
				 $(".top_dr_zc").hide();
		 }
			
		},
		error: function() {
			//alert('服务器异常');
			CULS();
		},
		complete:function(XHR,textStatus){
			XHR = null;
		}
	});  
}
function zjph(){
	var music="";
	$.ajax({
		type : 'GET',
		url  : '/index.php/index/getBonus',
		timeout : 10000,
		dataType: "json",
		success : function(data){
			 

			var jsonarray= $.parseJSON(data);
			//alert(jsonarray);
			$.each(jsonarray, function (i, n)
			{
				
			music+="<p>"; 
			music+="<span><span class=\"bg_orange\">"+i+"</span>"; 
			music+=n["nickname"].substr(0,2)+"***</span>";
			music+="<span class=\"orange text_orange\">"+n["bonus"]+"</span>"; 
			music+="</p>"; 
			//alert(i+"|"+n);
			}			//i表示在data中的索引位置，n表示包含的信息的对象 
			
			); 
			
		//	p++;
		},
		error: function() {
			//alert('服务器异常');
			zjph();
		},
		complete:function(XHR,textStatus){
			XHR = null;
			$("#prizeUser").html(music);
		}
		
	});  
	
}
$("#header_money_refresh").click(function(){
		$("#refff").text("000,000,000");
		refreshMoney();
		return false;
	});
function refreshMoney() {
	$.ajax({
		type : 'GET',
		url  : '/index.php/safe/userInfo',
		timeout : 10000,
		success : function(data){
			autoRefresh = true;
			if(data == "error") {
				$("#refff").html("正在读取资金");
				return false;
			}else{
				if(isNaN(data)){
					alert("获取余额失败，您的登录可能已经过期，请重新登录");
					//location.href="/";
					return false;
				}else{
					$("#refff").html(moneyFormat(data).substr(0,14)).attr("title",moneyFormat(data));
					return true;
				}
			}
		},
		error: function() {
			$("#refff").html("正在读取资金");
		},
		complete:function(XHR,textStatus){
			XHR = null;
		}
	});  
}
refreshMoney();
	zjph();
	CULS();
function index_userLogin(){
	userLogin();
	CULS();
}
 $("body").keydown(function() {
             if (event.keyCode == "13") {//keyCode=13是回车键
                index_userLogin();
             }
         });

</script>	

<script>
	$(window).bind("load", function() {
		var _flag = false;
		$("input[name=wpass],input[name=amount]").bind("click", function() {
			//如果鼠标人为进行一次点击过,则进入下面逻辑
			_flag = true;
		});
		$("input[name=wpass],input[name=amount]").bind("input", function() {
			if(!_flag) { //如果鼠标没有进行一次点击过,则进入下面逻辑
				$("input[name=wpass],input[name=amount]").val("");
			}
		});
		$("input[name=wpass],input[name=amount]").val("");
	});
</script>
<!-- scan code -->
        <script language="javascript" src="/files/index.js"></script>
<script>
function registertest()
{
  $.ajax({
    type:"POST",
    url:"/index.php/user/registertest",
    timeout : 10000,
    dataType: "json",
    success : function(data){
      if(data.code==0)
      {
        alert(data.msg);
      }else{
        alert(data.msg);
      }

     
    },
    error: function(error) {
      alert('服务器异常');
    },
    complete:function(XHR,textStatus){
      XHR = null;
    }
  });
}

$(document).ready(function() {
				var culs = null;

$("#_leftAD [name=close_btn],#_rightAD [name=close_btn]").click(function(){
            $(this).parent().hide();
        });

            
 $('.allGames').mouseover(function (e) {
                        var tag = $(this).data('type');
                        $(this).addClass('allGames-on').siblings('li').removeClass('allGames-on').find('.moreGames').css({'display': 'none'});
                        $('#moreGames_' + tag).css({'display': 'block'});
                        $('#lotterysList').addClass('lotterys-list-hd-border1');
                        $(this).children('.icon').hide();
                        $(this).children('.line-fff').show();
                    });
                    $('.allGames').mouseout(function (e) {
                        $(this).removeClass('allGames-on').find('.moreGames').css({'display': 'none'});
                        $('#lotterysList').removeClass('lotterys-list-hd-border1');
                        $(this).children('.icon').show();
                        $(this).children('.line-fff').hide();
                    });
	$('.header-top-center').hover(function() {
		$(this).find('.header-gou').addClass('header-hover');
		$(this).find('.header-gou').next('.scancode').show();
	}, function() {
		$(this).find('.header-gou').removeClass('header-hover');
		$(this).find('.header-gou').next('.scancode').hide();
	})
					var unslider04 = $('#b04').unslider({
                        dots: true
                    }),
                    data04 = unslider04.data('unslider');
                     
                    $('.unslider-arrow04').click(function() {
                        var fn = this.className.split(' ')[1];
                        data04[fn]();
                    });
					
		$(" [name=quick_tab_list]>li").bind('mouseover',function(e){
                //各彩种中奖号码
                $(" [name=quick_tab_list]>li").removeClass("on");
                $(this).addClass("on");
               
            });
            $("[name=change_gameNum]").live('click',function(){
                var gameId = $(".tab-sel-open.on").attr("data-gameid");
                gameListData_charge_index(gameId);
            });
		$('.tab-sel').on('mouseover', function (e) { //各彩种开奖公告
        for (i = 1; i < 5; i++) { //共3个标签
            if (i == $(this).data('val')) {
                $('#tab-cont-' + i).css('display', '');
            } else {
                $('#tab-cont-' + i).css('display', 'none');
            }
        }
		$('.tab-sel').removeClass("on");
        $(this).addClass("on");
		});

		$('#_index_countdownIssue ul[name=quick_tab_list] li').on('mouseover', function (e) { //各彩种开奖公告
		var s = "";
			if($(this).attr("data-gameid")==5){//重庆时时彩快速投注
					$("span[name=issue]").text("随机一注");
					//$("a[name=doBet]").attr("onclick","__openWin('user_center','index.php/index/game/1/2/12/重庆时时彩');");
				 var numList = [parseInt(Math.random(10) * 10),parseInt(Math.random(10) * 10),parseInt(Math.random(10) * 10),parseInt(Math.random(10) * 10),parseInt(Math.random(10) * 10)];

                    for( var i = 0;i<numList.length;i++ ){
                        s += "<li class=\"qb-red lot_sn_red\"><input value=\""+numList[i]+"\" readonly></li>"
                    }
			}else if($(this).attr("data-gameid")==12){ //十一选五
			$("span[name=issue]").text("随机一注");
			//$("a[name=doBet]").attr("onclick","__openWin('user_center','index.php/index/game/7/10/山东11选5');");
				var numList = [];
                    for (var i = 0; i <= 4; i++) {
                        var num = parseInt(Math.random(10) * 11 + 1);
                        while ($.inArray(num, numList) != -1) {
                            num = parseInt(Math.random(10) * 11 + 1);
                        }
                        numList.push(num);
                    }
                    for( var i = 0;i<numList.length;i++ ){
                        s += "<li class=\"qb-red lot_sn_red\"><input value=\""+numList[i]+"\" readonly></li>"
                    }
			}else if($(this).attr("data-gameid")==1){ //福彩3D 9/3D福彩
			$("span[name=issue]").text("随机一注");
			//$("a[name=doBet]").attr("onclick","__openWin('user_center','index.php/index/game/9/3D福彩');");
				var numList = [parseInt(Math.random(10) * 10),parseInt(Math.random(10) * 10),parseInt(Math.random(10) * 10)];

                    for( var i = 0;i<numList.length;i++ )
                    {
                        s += "<li class=\"qb-red lot_sn_red\"><input value=\""+numList[i]+"\" readonly></li>"
                    }
			}else if($(this).attr("data-gameid")==2){ //排列三
			$("span[name=issue]").text("随机一注");
				 var numList = [parseInt(Math.random(10) * 10),parseInt(Math.random(10) * 10),parseInt(Math.random(10) * 10)];
                   for( var i = 0;i<numList.length;i++ )
                    {
                        s += "<li class=\"qb-red lot_sn_red\"><input value=\""+numList[i]+"\" readonly></li>";
                    }
			}else if($(this).attr("data-gameid")==9){ //PK10
			$("span[name=issue]").text("随机一注");
			//$("a[name=doBet]").attr("onclick","__openWin('user_center','index.php/index/game/20/27/北京PK拾');");
				 var arr = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10'];
                    var numList = arr.sort(randomsort);

                    for( var i = 0;i<9;i++ )
                    {
                        s += "<li class=\"qb-red lot_sn_red\"><input value=\""+numList[i]+"\" readonly></li>"
                    }
			}
			$("[name=num_list]").html('<img class="bett-icon" src="/files/'+$(this).attr("data-gameid")+'.png">'+s);
		});

/* 		 $.get("/index.php/getOpenLotteryNumber",function(data,textStatus){
               alert(data);
		
		 }); */
		 var arr_gp= [ "1", "12", "86", "6" ]; //高频彩种ID
		 var arr_dp= [ "34", "9", "10" ]; //低频彩种ID
		 var kj_html="";
		 
$.ajax({
   type: "get",
   url: "/index.php/getOpenLotteryNumber",
	//dataType: "json",
   success: function(msg){

var jsonarray= $.parseJSON(msg);
$.each(jsonarray, function (i, n)
{
    //alert(n.title);
	if($.inArray(n.type, arr_gp)>-1){
		//<li><div><span class="lot-name"><a onclick="">上海时时乐&nbsp;</a>0627007期</span><span class="term">06-27</span><span class="clear"></span><div class="clear"></div><div class="redball">4</div><div class="redball">0</div><div class="redball">1</div><br><div class="fr"><a onclick="">投注</a></div><div class="clear"></div></div></li>
		kj_html+="<li><div><span class=\"lot-name\"><a onclick=\"__openWin('lottery_hall','/index.php/index/game/"+n.type+"');\">"+n.title+"&nbsp;</a>"+n.number+"期</span><span class=\"term\"></span><span class=\"clear\"></span><div class=\"clear\"></div>"
		var strs= new Array(); //定义一数组 
		strs=n.data.split(","); //字符分割 
		for(var y=0;y<strs.length;y++){
		kj_html+="<div class=\"redball\">"+strs[y]+"</div>"
		//"<div class=\"redball\">4</div><div class=\"redball\">0</div><div class="redball">1</div><br><div class="fr"><a onclick="">投注</a></div><div class="clear"></div></div></li>"
		}
		kj_html+="<br><div class=\"fr\"><span class=\"lot-name\" style=\"margin:0 8px 0 0; float:left;\">"+n.time+"</span><a onclick=\"__openWin('lottery_hall','/index.php/index/game/"+n.type+"');\">投注</a></div><div class=\"clear\"></div></div></li>";
	}
});
	$("#lastOpenSsc").html(kj_html);
   }
});
		
});


$("._notice-nav li").click(function(){
	$(this).addClass("active").siblings("li").removeClass("active");
});

$("._notice .close").click(function(){
    setCookie('yiShowNotice',1,1000*60*1);
	$("._notice").hide();
});
var yishownotice = getCookie('yiShowNotice');
if(yishownotice == 1){
    $('._notice').hide();
}else{
    $('._notice').show();
}
</script