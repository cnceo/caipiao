<?php $this->display('inc_skin.php'); ?>
 <link rel="stylesheet" href="/assets/statics/css/style.css" type="text/css">
    <link rel="stylesheet" href="/assets/statics/css/global.css" type="text/css">

<body>
	<div id="body">
	<div class="header">
	    <div class="headerTop">
	        <div class="ui-toolbar-left">
	           <button id="reveal-left" onclick="history.go(-1)">reveal</button>
	        </div>
	        <h1 class="ui-toolbar-title">充值记录</h1>
	        <div class=" header-icon">
	            <a class="header-setting" href="/index.php/safe/more"></a>
	        </div>
	    </div>
	</div>
		<header class="header" style=
	"display: none">
	<!-- <a href="/index.php"><img class="logo" src="/images/nsc_m/index/logo.png?v=1.16.11.16"></a> -->
	<a class="m-return" onclick="checkbackspace();">返回</a>
	<span class="btn-slide-bar"></span>
	<div class="wercom">欢迎您,<b class="username"> <?=$this->user['username']?></b>
	<a href="/?controller=user&amp;action=main&amp;tag=messages" class="ui_message">
          <!--      <i></i> -->
               <i class="ui_msgnum" style="display:none">0</i>
           </a> </div>
	<!-- <h1 class="page-title">header</h1> -->
</header>
<!--侧导航 -->
		<section class="slide-bar" style="display: none;">
			<ul class="tree">
				<li class="tree_list"><h3 class="one_nav_list home"><a href="/?index.php">首页</a></h3>
					<div class="m_nav_line"></div>
				</li>
				<li class="tree_list">
	                <h3 class="one_nav_list uc_icon_r"><a href="/index.php/safe/Personal">用户中心</a></h3>
	                <div class="m_nav_line"></div>
				</li>
				<li class="tree_box tree_list">
					<h3 class="one_nav_list  game_icon tree_box">彩票游戏<i class="lnstruction-top"></i></h3>
					<ul class="tree_one" style="display:block">
						<li class="lotter_list_game">
						<div class="m_nav_line"></div>
							<dl>
								<dt>高频彩</dt>
								<dd>
									<ul class="lot_list">
										<li><a href="/index.php/index/game/1/2/12">重庆时时彩<i>H</i></a> </li>
										<li><a href="/index.php/index/game/12/2/12">快乐时时彩</a> </li>
										<li><a href="/index.php/index/game/60/2/12">天津时时彩</a> </li>
										<li><!--<a href="/index.php/index/game/61/59/193">澳门时时彩<i>H</i>--></a> </li>
										<li><!--<a href="/index.php/index/game/62/59/193">台湾时时彩<i>H</i>--></a> </li>
										<li><a href="/index.php/index/game/5/59/193">河内1分彩<i>H</i></a> </li>
										<li><!--<a href="/index.php/index/game/26/59/193">河内2分彩<i>H</i>--></a> </li>
										<li><a href="/index.php/index/game/14/59/193">澳门五分彩<i>H</i></a></li>
										<li><!--<a href="/index.php/index/game/76/59/193">巴西1.5分彩<i>H</i>--></a></li>
										<li><!--<a href="/index.php/index/game/75/59/193">巴西快乐彩<i>H</i>--></a></li>
										
										<!-- comingsoon();  如果需要禁用用这个函数即可--> 
									</ul>
								</dd>
							</dl>
							<dl>
							<dt>PK拾</dt>
								<dd>
									<ul class="lot_list">
										<li><a href="/index.php/index/game/20">北京PK拾<i class="m-yellow">N</i></a> </li>
										<li><!--<a href="/index.php/index/game/65">澳门PK拾<i class="m-yellow">N</i>--></a> </li>
										<li><!--<a href="/index.php/index/game/66">台湾PK拾<i class="m-yellow">N</i>--></a> </li>
									</ul>
								</dd>
							</dl>
							<dl>
							<dt><!--快3--></dt>
								<dd>
									<ul class="lot_list">
										<li><!--<a href="/index.php/index/game/79">江苏快三<i>H</i></a></li>
										<li><a href="/index.php/index/game/63">澳门快三</a></li>
										<li><a href="/index.php/index/game/64">台湾快三</a></li>-->
									</ul>
								</dd>
							</dl>
							<dl>
							<dt>11选5</dt>
								<dd>
									<ul class="lot_list">
										<li><a href="/index.php/index/game/6">广东11选5<i>H</i></a></li>
										<li><a href="/index.php/index/game/16">江西11选5</a></li>
										<li><a href="/index.php/index/game/7">山东11选5</a></li>
										<li><!--<a href="/index.php/index/game/15">上海11选5--></a></li>
										<li><!--<a href="/index.php/index/game/67">澳门11选5<i>H</i>--></a></li>
										<li><!--<!--<a href="/index.php/index/game/68">台湾11选5--></a></li>
									</ul>
								</dd>
							</dl>
							<dl>
							<dt>快乐8</dt>
								<dd>
									<ul class="lot_list">
										<li><a href="/index.php/index/game/78">北京快乐8<i>H</i></a></li>
										<li><!--<a href="/index.php/index/game/74">韩国快乐8<i>H</i>--></a></li>
										<li><!--<a href="/index.php/index/game/73">澳门快乐8--></a></li>
									</ul>
								</dd>
							</dl>
							<dl>
								<dt><!--3D-排列3--></dt>
								<dd>
									<ul class="lot_list">
										<li><!--<a href="/index.php/index/game/9">福彩3D<i>H</i></a></li>
										<li><a href="/index.php/index/game/69">澳门3D</a></li>
										<li><a href="/index.php/index/game/70">台湾3D</a></li>
										<li><a href="/index.php/index/game/10">排列3</a></li>-->
									</ul>
								</dd>
							</dl>
						</li> 
					</ul>
					<div class="m_nav_line"></div>
				</li>
				
				<li class="tree_box tree_list">
					<h3 class="one_nav_list account_icon">账户管理<i class="lnstruction-top"></i></h3>
					<ul class="tree_one">
						<li class="lotter_list_game">
							<div class="m_nav_line"></div>
								<dl class="lnstruction">
									<dd>
										<ul class="lot_list">
											<li class="tree_list"> <a href="/index.php/record/search">投注记录</a></li>
											<li class="tree_list"> <a href="/index.php/report/coin">帐变记录</a></li>
											<li class="tree_list"> <a href="/index.php/report/count">盈亏报表</a></li>
											<li class="tree_list"><a href="/index.php/safe/info">绑定卡号 </a></li>
											<li class="tree_list"><a href="/index.php/safe/loginpasswd">登入密码</a></li>
											<li class="tree_list"><a href="/index.php/safe/passwd">提款密码</a></li>
										</ul>
									</dd>
								</dl>
						</li>
					</ul>
					<div class="m_nav_line"></div>
				</li>
				<?php if($this->user['type']){?>
				<li class="tree_box tree_list">
					<h3 class="one_nav_list team_icon">团队管理<i class="lnstruction-top"></i></h3>
					<ul class="tree_one">
						<li class="lotter_list_game">
								<div class="m_nav_line"></div>
							<dl class="lnstruction">
								<dd>
									<ul class="lot_list">
										<li class="tree_list"><a href="/index.php/team/gameRecord">团队记录</a></li>
										<li class="tree_list"><a href="/index.php/team/coin">团队帐变</a></li>
										<li class="tree_list"><a href="/index.php/team/report">团队盈亏</a></li>
										<li class="tree_list"><a href="/index.php/team/memberList">用户列表</a></li>
										<li class="tree_list"><a href="/index.php/team/addMember">注册管理</a></li>
										<li class="tree_list"><a href="/index.php/team/addlink">推广设定</a></li>
										<li class="tree_list"><a href="/index.php/team/linkList">链接管理</a></li>
										<li class="tree_list"><a href="/index.php/team/coinall">团队统计</a></li>
									</ul>
								</dd>
							</dl>
						</li>
					</ul>
					<div class="m_nav_line"></div>
				</li>
				<?}?>
				<li class="tree_box tree_list">
					<h3 class="one_nav_list account_icon">充值提现<i class="lnstruction-top"></i></h3>
					<ul class="tree_one">
						<li class="lotter_list_game">
							<div class="m_nav_line"></div>
								<dl class="lnstruction">
									<dd>
										<ul class="lot_list">
											<li class="tree_list"> <a href="/index.php/cash/recharge">充值</a></li>
											<li class="tree_list"> <a href="/index.php/cash/toCash">提现</a></li>
											<li class="tree_list"> <a href="/index.php/cash/rechargeLog">充值记录</a></li>
											<li class="tree_list"><a href="/index.php/cash/toCashLog">提现记录 </a></li>
										</ul>
									</dd>
								</dl>
						</li>
					</ul>
					<div class="m_nav_line"></div>
				</li>
				<li class="tree_box tree_list">
					<h3 class="one_nav_list activity_icon">优惠活动<i class="lnstruction-top"></i></h3>
					<ul class="tree_one">
						<li class="lotter_list_game">
							<div class="m_nav_line"></div>
								<dl class="lnstruction">
									<dd>
										<ul class="lot_list">
											<li class="tree_list"><a href="/index.php/score/lucky">幸运抽奖</a></li>
											<li class="tree_list"><a href="/index.php/cash/card">卡密充值</a></li>
											<li class="tree_list"><a href="/index.php/lottery/hemai">合买中心</a></li>
											<li class="tree_list"><a class="notice" href="/index.php/notice/info">系统公告</a></li>
										</ul>
									</dd>
								</dl>
						</li>
					</ul>
					<div class="m_nav_line"></div>
				</li>			
			</ul>
		</section>
		<div class="home_b">
			<div class="m_nav_line"></div>
				<!-- <a href="">首页</a> -->
				<a class="one_nav_list conpt_icon" href="/?v=2">电脑版</a>
				<a class="one_nav_list retreat_icon" href="javascript:m_loginout()">安全退出</a>
		</div>
		<div class="shady"></div>	