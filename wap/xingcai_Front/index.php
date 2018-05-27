<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	
	
	<meta http-equiv=Content-Type content="text/html;charset=utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport" />
    <meta name=format-detection content="telphone=no" />
    <meta name=apple-mobile-web-app-capable content=yes />
    
    <title><?= $this->settings['webName'] ?></title>
    
    <link rel="stylesheet" href="assets/statics/css/global.css" type="text/css">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="uploadimg/wapicon/icon-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="uploadimg/wapicon/icon-72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="uploadimg/wapicon/icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="uploadimg/wapicon/icon-144.png">
    
    <link rel="stylesheet" href="assets/statics/css/index.css" type="text/css">
    
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

<style>

.notice-index {
	padding-top: 10px;
}
.notice-index dl dd.time {
    color: #f00;
    text-align: center;
    margin-top: 5px;
}

.notice-index dl dd.cont {
    font-size: 14px;
    line-height: 24px;
    margin-top: 10px;
    text-indent: 2em;
}
		
.notice-index dl dt {
    text-align: center;
    font-size: 16px;
    font-weight: bold;
}
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
	left: 20px;
	right: 20px;
	top: 50%;
	transform: translate3d(0,-50%,0);
    background-color: #fff;
    border-radius: 5px;
     height: 80%;
    overflow-y: auto;
    box-shadow: 0 0 0 5px rgba(255,255,255,.3);
}
._notice-wrapper .title{
	height: 40px;
	line-height: 40px;
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 400;
	letter-spacing: 3px;
	color: #fff;
	background-color: #F13131;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 2;
}
._notice-wrapper .close{
	height: 40px;
	position: absolute;
	top: 0;
	right: 0;
	font-size: 28px;
	line-height: 40px;
	color: #fff;
	padding:0 15px;
}
._notice-list{
	width: 100%;
	box-sizing: border-box;
	padding: 10px 10px 10px;
	position: absolute;
	top: 40px;
	left: 0;
	right: 0;
	bottom: 0;
	box-sizing: border-box;
	overflow: hidden;
   overflow-y: auto;
    overflow-x: hidden;
}
._notice-list li{
	width: 100%;
	border-bottom: 1px dashed #dbdbdb;
}
._notice-list li.active .notice-content{
	display: block;
}
.notice-tit{
	height: 40px;
}
.notice-tit p:last-child{
	margin: 0 100px 0 0;
	height: 100%;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	line-height: 40px;
	text-indent: 20px;
	position: relative;
	font-size: 16px;
	color: #212A31;
}
.notice-tit p:last-child:before{
	content: "";
	display: block;
	width: 12px;
	height: 12px;
	border-radius: 50%;
	background-color: #F13131;
	top: 14px;
	left: 0;
	position: absolute;
}
.notice-tit p:first-child{
	float: right;
	width: 90px;
	padding: 0 0 0 10px;
	white-space: nowrap;
	line-height:40px;
	box-sizing: content-box;
	text-align: right;
	font-size: 14px;
	color: #A9A9A9;
}
.notice-content{
	color: #5C5C5C;
	padding-bottom: 15px;
	display: none;
}
</style>

<body>
	<div class="_notice">
		<div class="_notice-wrapper">
			<div class="title">平台公告<span class="close">×</span></div>
			<ul class="_notice-list">
				<li>

				</li>
			</ul>
		</div>
    </div>

	<div class="header">
        <div class="headerTop header-logo">
            <?php if($_SESSION[$this->memberSessionName]){?>
            <div class="ui-toolbar-left">
                <button id="header-left" onclick="location.href='/index.php/safe/Personal';return false;">reveal</button>
            </div>
            <div class="ui-betting-title  header-center">
                <div class="header-title" style="margin-top:0px;background: url(/images/logo.png); background-size:100px 35px; width: 100px; height: 35px;">
                    <span class="header-tit"></span>
                </div>
            </div>
                <!--<button id="header-checkin" onclick="location.href='/';return false;"></button>-->
         <?php }else{?>
            <div class="ui-toolbar-left">
                <button id="header-left2" onclick="location.href='/index.php/user/login';return false;">reveal</button>
            </div>
            <div class="ui-betting-title  header-center">
                <div class="header-title" style="margin-top:0px;background: url(/images/logo.png); background-size:100px 35px; width: 100px; height: 35px;">
                    <span class="header-tit"></span>
                </div>
            </div>
<!--             <div class=" header-icon">
                <a class="header-head" href="/index.php/user/regs"></a>
            </div> -->

         <?}?>
           	
        </div>
    </div>
    <div id="wrapper_1" class="scorllmain-content top_bar bottom_bar">
        <div class="sub_ScorllCont">
            <div class="header-banner" style="height: 160px; overflow: hidden;">
                <!-- <a href="/index.php/index/activity"><img class="banner" style="width: 100%;height:157px; display: block;" src="/images/img1.jpg"></a> -->
                <a href="/index.php/index/activity"><img class="banner" style="width: 100%;height:157px; display: block;" src="/images/img2.jpg"></a>
                <!-- <a href="/index.php/index/activity"><img class="banner" style="width: 100%;height:157px; display: none;" src="/images/img3.jpg"></a> -->
                <a href="/index.php/index/activity"><img class="banner" style="width: 100%;height:157px; display: none;" src="/images/img4.jpg"></a>
            </div>
            <div class="bulletin" onclick="location.href='/index.php/notice/info';">
                <i class="bull-ila"></i>
                <marquee behavior="scroll"><span id="horse"></span> <?php
                    $seting = $this->getSystemSettings();
                  /* $sql="select title from {$this->prename}content where enable=1 and nodeId=1";
                    $sql.=' order by addTime desc';
                    $val = $this->getValue($sql);*/
                    echo $seting['webGG'];
                ?></marquee>   
                <i class="bull-arrow"></i>
            </div>
            <div class="index-menu">
                <ul>
                    <li>
                        <a href="/index.php/safe/Personal"><img src="assets/statics/images/index_zoushi.png"></a>
                    </li>
                    <li>
                        <a href="/index.php/record/search"><img src="assets/statics/images/index_goucai.png"></a>
                    </li>
                    <li>
                        <!-- <a href="/index.php/index/activity"><img src="assets/statics/images/index_youhui.png"></a> -->
                        <a href="#"><img src="assets/statics/images/index_youhui.png"></a>
                    </li>
                    <li>
                        <!-- <a href="/index.php/box/receive" style="color: rgb(255, 255, 255);line-height: 45px;"><img src="assets/statics/images/index_kefu.png"></a> -->
                        <a href="#" style="color: rgb(255, 255, 255);line-height: 45px;"><img src="assets/statics/images/index_kefu.png"></a>
                    </li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            <div class="hot-tit "><a href="javascript:;">热门彩种</a></div>
            <div class="hot-lot">
                <ul>
                	
                   
                    
                    <li>
                        <a href="/index.php/index/game/1/2/12">
                            <div class="hot-icon icon_idx_0"><img class="" src="assets/statics/images/icon/5.png"></div>
                            <p class="hot-text text_idx_0">重庆时时彩</p>
                        </a>
                    </li>

                    <li>
                        <a href="/index.php/index/game/5">
                            <div class="hot-icon icon_idx_0"><img class="" src="assets/statics/images/icon/5tt.png"></div>
                            <p class="hot-text text_idx_0">腾讯分分彩</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="/index.php/index/game/20">
                            <div class="hot-icon icon_idx_0"><img class="" src="assets/statics/images/icon/9.png"></div>
                            <p class="hot-text text_idx_0">北京赛车(PK10)</p>
                        </a>
                    </li>
					<li>
                        <!-- <a href="/index.php/index/game/85"> -->
                        <a data-href="#">
                            <div class="hot-icon icon_idx_0"><img class="" src="assets/statics/images/icon/3fpk.png"></div>
                            <p class="hot-text text_idx_0">三分PK10</p>
                        </a>
                    </li>
                    
                    <li>
                        <a data-href="#">
                        <!-- <a href="/index.php/index/game/34"> -->
                            <div class="hot-icon icon_idx_0"><img class="" src="assets/statics/images/icon/18.png"></div>
                            <p class="hot-text text_idx_0">香港⑥合彩</p>
                        </a>
                    </li>
                    

                   
                    <li>
                        <a data-href="#">
                        <!-- <a href="/index.php/index/game/86"> -->
                            <div class="hot-icon icon_idx_0"><img class="" src="assets/statics/images/icon/3fssc.png"></div>
                            <p class="hot-text text_idx_0">香港三分彩</p>
                        </a>
                    </li>
                    <li>
                        <a data-href="#">
                        <!-- <a href="/index.php/index/game/14"> -->
                            <div class="hot-icon icon_idx_0"><img class="" src="assets/statics/images/icon/5.png"></div>
                            <p class="hot-text text_idx_0">河内5分彩</p>
                        </a>
                    </li>
                   <li>
                        <a data-href="#">
                        <!-- <a href="/index.php/index/game/80"> -->
                            <div class="hot-icon icon_idx_0"><img class="" src="assets/statics/images/icon/xy28.png"></div>
                            <p class="hot-text text_idx_0">幸运28</p>
                        </a>
                    </li>
                    
                    <li>
                        <a data-href="#">
                        <!-- <a href="/index.php/index/hall"> -->
                            <div class="hot-icon"><img src="assets/statics/images/icon/logo_more.png"></div>
                            <p class="hot-text">更多彩种</p>
                        </a>
                    </li>
                </ul>
            </div>

    

	<div class="menu">
	      <ul>
             <li>
                <a class="menu-home" href="/"><img src="assets/statics/images/nav_01.png"></a>
             </li>
             <li>
                 <a class="menu-color" href="/index.php/index/hall"><img src="assets/statics/images/nav_2.png"></a>
             </li>
             <li>
                 <a class="menu-lot" href="/index.php/index/draw"><img src="assets/statics/images/nav_3.png"></a>
             </li>
             <li>
                 <a class="menu-news" href="/zst/zst.php?typeid=20&g=1"><img src="assets/statics/images/nav_4.png"></a>
             </li>
             <li>
                 <a class="menu-my" href="/index.php/safe/Personal"><img src="assets/statics/images/nav_5.png"></a>
             </li>
         </ul>
   	</div>

    <script src="/assets/js/plugins/jquery/jquery.min.js"></script>
    <script src="assets/js/require.js" data-main="assets/js/index"></script>
    <script src="assets/js/require.config.js?v=2.1"></script>
    <script>
    	$("._notice-list").on("click","li",function(){
    		if($(this).is(".active")){
    			$(this).removeClass("active").siblings("li").removeClass("active");
    		}else{
    			$(this).addClass("active").siblings("li").removeClass("active");
    		}
    	})
    	$("._notice .close").click(function(){
            setCookie('yiShowNoticeWap',1,1*86400*1000);
    		$("._notice").hide();
    	})
        var yishownotice = getCookie('yiShowNoticeWap');
        if(yishownotice == 1){
            $('._notice').hide();
        }else{
            $('._notice').hide();
        }
        function setCookie(name,value,expire,path) {
            var curdate=new Date();
            var cookie=name+"="+encodeURIComponent(value)+"; ";
            if(expire!=undefined||expire==0){
                if(expire==-1){
                    expire=366*86400*1000;//保存一年
                }else{
                    expire=parseInt(expire);
                }
                curdate.setTime(curdate.getTime()+expire);
                cookie+="expires="+curdate.toUTCString()+"; ";
            }
            path = path || "/";
            cookie += "path=" + path;
            document.cookie=cookie;
        }
        function getCookie(name) {
            var re = "(?:; )?" + encodeURIComponent(name) + "=([^;]*);?";
            re = new RegExp(re);
            if (re.test(document.cookie)) {
                return decodeURIComponent(RegExp.$1);
            }
            return '';
        }
    </script>
</body>
</html>