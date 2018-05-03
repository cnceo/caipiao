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

<body class="login-bg">
	<div class="header">
	    <div class="headerTop">
	        <div class="ui-toolbar-left">
	            <button id="reveal-left" onclick="history.go(-1)">reveal</button>
	        </div>
	        <h1 class="ui-toolbar-title">推广注册</h1>
	    </div>
	</div>


<?php $this->display('inc_skin_zc.php'); ?>
<link rel="stylesheet" href="/css/nsc/login.css?v=1.16.12.15">
<link rel="stylesheet" href="/css/nsc/reset.css?v=1.16.12.15">
   <style media="screen">
		#success h3,#error h3{text-align:center;font-size:18px;}
		#error{background:url("/images/nsc/icon_error-big.png") no-repeat center 30px;padding:128px 15px;}
		#success{background:url("/images/nsc/icon_success-big.png") no-repeat center 100px;padding:180px 0  100px;}
		.hint_red{color:#fb2323;}
		.hint_green{color:#60a52c;}
		.hint_green p{margin-bottom:10px;}
    </style>
<script type="text/javascript">
function registerBeforSubmit(){
	var type=$('[name=type]:checked',this).val();
	if(!this.username.value) throw('请输入用户名');
	if(!/^\w{5,15}$/.test(this.username.value)) throw('用户名由5到15位的字母、数字及下划线组成');
	if(!this.password.value) throw('请输入密码');
	if(this.password.value.length<6) throw('登入密码至少6位');
	//if(!this.cpasswd.value) throw('请输入确认密码');
	//if(this.cpasswd.value!=this.password.value) throw('两次输入密码不一样');
	if(!this.qq.value) throw('请输QQ号码');
	if(!this.vcode.value) throw('请输入验证码');
}
function registerSubmit(err, data){
	if(err){
		xingcai(err);
		$("#vcode").trigger("click");
		
	}else{
		layer.open({
                content:(data),
                btn:['确定'],
                yes:function(){
                    window.location='/index.php/user/login';
                }
            })
	}
}
document.onkeydown = keyDown;
function keyDown(e){
	if(event.keyCode == 13){
		$(this).closest('form').submit()
	}
}
</script>  
</head>
<body style="overflow-x:hidden;">


<div class="zc_cont">
    <div class="zc_content">
        <span class="zc_xing"></span>
       
        <div class="zc_list" id="apDiv4">
            <ul id="reg_con" style="    padding-top: 3em;">
            <?php if($args[0]){ ?>
            <form action="/index.php/user/rog" onkeydown="if(event.keyCode==13){return false;}"  method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
			<input type="hidden" name="codec" value="<?=$args[0]?>" />
                <li>
                    <label class="zc_label">登录账号</label>
                    <div class="zc_input"><i class="iczc-number"></i>
                        <input type="text" name="username" id="username" maxlength="13" class="forget_input" placeholder="请输入用户名" onKeyUp="value=value.replace(/[\W]/g,'')">
                        <p>由字母或数字组成的6-13个字符</p>
                        <div class="tip"><em></em><p></p></div>
                    </div>
                </li>
                 <li class="password">
                    <label class="zc_label">登录密码</label>
                    <div class="zc_input"><i class="iczc-password"></i>
                        <input type="password" name="password" id="password" maxlength="13" class="forget_input" placeholder="请输入登录密码" onKeyUp="value=value.replace(/[\W]/g,'')">
                         <p>字母和数字组成6-13个字符（必须包含数字和字母）</p>
                        <div class="tip"><em></em><p></p></div>
                    </div>
                </li>
                <li>
                    <label class="zc_label">QQ号码</label>
                    <div class="zc_input"><i class="iczc-username"></i>
                        <input type="text" name="qq" id="qq" maxlength="11" class="forget_input" placeholder="请输入QQ号码" onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9]/,'');}).call(this)">
                        <p>QQ号码由5至11个纯数字组成</p>
                        <div class="tip"><em></em><p></p></div>
                    </div>
                </li>
               
                <li>
                    <label class="zc_label">验证码</label>
                    <div class="zc_input"><i class="iczc-warning"></i>
                        <input type="text" name="vcode" id="vcode" class="forget_input" style="width:135px;" placeholder="验证码">
                        <img onclick="this.src='/index.php/user/vcode/'+(new Date()).getTime()" title="点击刷新" style="cursor:pointer; border: 0px solid #999; vertical-align:middle;" src="/index.php/user/vcode/<?=$this->time?>" class="zc_code">
                        <p></p>
                        <div class="tip"><em></em><p></p></div>
                    </div>
                </li>
                <li>
                    <label class="zc_label"></label>
                    <div class="zc_input" style="text-align:center">
                     
                        <input name="action" type="submit" class="login_btn submit zc_btn" value="立即注册">
                       
                    </div>
                </li>
                </form> 
            </ul>
        </div>
     <?php }else{?>
  <section class="wraper-page">
	<div id="error">
		<h3>
			<font class="hint_red">无效的推广链接！</font>
		</h3>						
	</div>
</section>
    <?php }?>
    </div>
</div>
</body></html>