<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $this->display('inc_skin.php'); ?>
<meta name="keywords" content="" />
<meta nam ="description" content="" />
<meta name="renderer" content="webkit">
<link rel="stylesheet" href="/css/nsc/home/reset.css?v=1.16.11.5">
<link rel="stylesheet" href="/css/nsc/home/theme.css?v=1.16.11.5">
<link href="/css/nsc/plugin/dialogUI/dialogUI.css?v=1.16.11.5" media="all" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/nsc/dialogUI/jquery.dialogUI.js?v=1.16.11.5"></script>
<script type="text/javascript" src="/skin/js/hklhc.js"></script>
<script type="text/javascript" src="/newskin/js/common.js"></script>
<script type="text/javascript" src="/skin/main/onload.js"></script>
<script type="text/javascript" src="/skin/main/function.js"></script>
<script type="text/javascript" src="/skin/js/jqueryui/jquery-ui-1.8.23.custom.min.js"></script>

<script type="text/javascript" src="/js/nsc/main.js"></script>

<link rel="stylesheet" href="/css/nsc/foot.css?v=1.16.11.5">

<script src="/js/nsc/zr-script.js?v=1.16.11.5" charset="utf-8"></script>
<script type="text/javascript" src="/js/nsc/soundBox.js"></script>
<script type="text/javascript" src="/js/nsc/lottery/youxi_lang_zh.js?v=1.16.11.5"></script>
<script type="text/javascript" src="/js/nsc/lottery/jquery.youxi.main.js?v=1.16.11.5"></script>
<script type="text/javascript" src="/js/nsc/lottery/jquery.youxi.selectarea.js?v=1.16.11.5"></script>
<script type="text/javascript" src="/js/nsc/lottery/jquery.youxi.trace.js?v=1.16.11.5"></script>
<script type="text/javascript" src="/skin/layer/layer.js"></script>
<script type="text/javascript" src="/css/layui/layui.js"></script>
<link rel="stylesheet" type="text/css" href="/js/riqi/jquery.datetimepicker.css"/>
<script src="/js/riqi/jquery.datetimepicker.js"></script>
<script>

$('#datetimepicker10').datetimepicker({
	step:5,
	inline:true
});
$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
});
$('#datetimepicker').datetimepicker();
//$('#datetimepicker').datetimepicker({value:'2014/04/25 03:00',step:10});
//$('#datetimepicker4').datetimepicker({value:'2014/04/26 03:00',step:10});
$('#datetimepicker1').datetimepicker({
	datepicker:false,
	format:'H:i',
	step:5
});
$('#datetimepicker2').datetimepicker({
	yearOffset:222,
	lang:'ch',
	timepicker:false,
	format:'d/m/Y',
	formatDate:'Y/m/d',
	minDate:'-1970/01/02', // yesterday is minimum date
	maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
$('#datetimepicker3').datetimepicker({
	inline:true
});
$('#datetimepicker4').datetimepicker();
$('#open').click(function(){
	$('#datetimepicker4').datetimepicker('show');
});
$('#close').click(function(){
	$('#datetimepicker4').datetimepicker('hide');
});
$('#reset').click(function(){
	$('#datetimepicker4').datetimepicker('reset');
});
$('#datetimepicker5').datetimepicker({
	datepicker:false,
	allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00']
});
$('#datetimepicker6').datetimepicker();
$('#destroy').click(function(){
	if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
		$('#datetimepicker6').datetimepicker('destroy');
		this.value = 'create';
	}else{
		$('#datetimepicker6').datetimepicker();
		this.value = 'destroy';
	}
});
var logic = function( currentDateTime ){
	if( currentDateTime.getDay()==6 ){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
$('#datetimepicker7').datetimepicker({
	onChangeDateTime:logic,
	onShow:logic
});
$('#datetimepicker8').datetimepicker({
	onGenerate:function( ct ){
		$(this).find('.xdsoft_date')
			.toggleClass('xdsoft_disabled');
	},
	minDate:'-1970/01/2',
	maxDate:'+1970/01/2',
	timepicker:false
});
$('#datetimepicker9').datetimepicker({
	onGenerate:function( ct ){
		$(this).find('.xdsoft_date.xdsoft_weekend')
			.addClass('xdsoft_disabled');
	},
	weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
	timepicker:false
});
</script>

</head>
  
<script type="text/javascript">
$(document).ready(function(){
    //没有开放导航弹窗提示
    var NoDagin = true;
    $(".v-NoDagin").click(function(){
   		if(NoDagin){
	    	NoDagin = false;
	    	$("#v-dalog").fadeIn(200,function(){
	    	}).delay(2000).fadeOut(200,function(){
	    		NoDagin = true;
	    	});
    	}
    });
 
});
</script>


<style>
input[type='submit'], .formZjbd, .formZjbd_sjh {
	
	letter-spacing:0px !important;
	position: initial !important;
    width: 90px !important;
    height: 33px !important;
    line-height: 33px !important;
    font-size: 16px!important;
    color: #fff !important;
    padding: 0!important;
    font-family: Microsoft Yahei !important;
    margin: 0 10px !important;
    background: url("/images/nsc/btn-modification_bg.png") no-repeat !important;
    border: 0!important;
    cursor: pointer !important;
    letter-spacing: 3px !important;
	    border-radius: 0px !important;
    font-weight: normal !important;
}

	#siderbar1{background-color: #f8f8f8;
    border-color: #e7e7e7;
}

	
	#siderbar1 ul{text-align: center}

#siderbar1 ul li{
	width: 8%;
	padding: 0;
	background-color: #fff;
	border-bottom: 1px solid #e7e7e7;
	    float: left;
}
#siderbar1 ul li a{
    color: #777;
	    font-size: 14px;
text-align: center;
	position: relative;
    display: block;
    padding: 10px 15px;
}
#siderbar1 ul li.current a{
	background: none;
	background-color: #f1f1f1;
}
#siderba1r ul li a:hover{
	color: #C52135;
}
#siderba1r ul li.current a{
	color: #C52135;
}


</style>