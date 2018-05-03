<?php
ob_start('ob_output');
function ob_output($html) {
	// 一些用户喜欢使用windows笔记本编辑文件，因此在输出时需要检查是否包含BOM头
	if (ord(substr($html, 0, 1)) === 239 && ord(substr($html, 1, 2)) === 187 && ord(substr($html, 2, 1)) === 191) $html = substr($html, 3);
	// gzip输出
	if(
		!headers_sent() && // 如果页面头部信息还没有输出
		extension_loaded("zlib") && // 而且zlib扩展已经加载到PHP中
		array_key_exists('HTTP_ACCEPT_ENCODING', $_SERVER) &&
		stripos($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip") !== false // 而且浏览器说它可以接受GZIP的页面 
	) {
		$html = gzencode($html, 3);
		header('Content-Encoding: gzip'); 
		header('Vary: Accept-Encoding');
	}
	header('Content-Length: '.strlen($html));
	return $html;
}
require('../xingcai_config.php');
$id=array('85','20');
//$id=array('1','6','9','10','12','14','26','15','16','34','20','7','5','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','85','86','87');
$pgsid=array('30','50','80','100','120','200','300','');
include(dirname(__FILE__)."/inc/comfunc.php");
//此处设置彩种id
$typeid=intval($_GET['typeid']);
if(!in_array($typeid,$id))
{
 echo "<script>alert('当前彩种暂没有走势图')</script>";
 	$typeid=1;
}
if(!$typeid) $typeid=14;
//每页默认显示
$pgs=intval($_GET['pgs']);
if(!in_array($pgs,$pgsid)) die("pgs error");
if(!$pgs) $pgs=30;
//当前页面
$page=intval($_GET['page']);
if(!$page) $page=1;
//传参
$toUrl="?page=";
$params=http_build_query($_REQUEST, '', '&');
if(!$mydb) $mydb = new MYSQL($dbconf);
$gRs = $mydb->row($conf['db']['prename']."type","shortName","id=".$typeid);
if($gRs){
	$shortName=$gRs[0][0];
}

$fromTime=$_GET['fromTime'];
$toTime=$_GET['toTime'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:esun=""><head>
<title>福彩168  - 查看历史号码走势  </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Pragma" content="no-cache">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/line.css"  rel="stylesheet" type="text/css">

<script type="text/javascript" src="/js/nsc/jquery-1.7.min.js?v=1.17.1.23"></script>
<script language="javascript" type="text/javascript" src="js/line.js"></script>

<script type="text/javascript" src="js/layui.js"></script>
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script language="javascript">
fw.onReady(function(){
	Chart.init();	
	DrawLine.bind("chartsTable","has_line");

		DrawLine.color('#499495');
	DrawLine.add((parseInt(0)*10+10+1),2,10,0);

		DrawLine.color('#E4A8A8');
	DrawLine.add((parseInt(1)*10+10+1),2,10,0);

		DrawLine.color('#499495');
	DrawLine.add((parseInt(2)*10+10+1),2,10,0);

		DrawLine.color('#E4A8A8');
	DrawLine.add((parseInt(3)*10+10+1),2,10,0);

		DrawLine.color('#499495');
	DrawLine.add((parseInt(4)*10+10+1),2,10,0);

    DrawLine.color('#499495');
    DrawLine.add((parseInt(5)*10+10+1),2,10,0);

    DrawLine.color('#499495');
    DrawLine.add((parseInt(6)*10+10+1),2,10,0);

    DrawLine.color('#499495');
    DrawLine.add((parseInt(7)*10+10+1),2,10,0);

    DrawLine.color('#499495');
    DrawLine.add((parseInt(8)*10+10+1),2,10,0);

    DrawLine.color('#499495');
    DrawLine.add((parseInt(9)*10+10+1),2,10,0);

		DrawLine.draw(Chart.ini.default_has_line);
	if($("#chartsTable").width()>$('body').width())
	{
	   $('#searchBox').width($("#chartsTable").width() + "px");
	}
	$("#container").height($("#chartsTable").height() + "px");
	$("#missedTable").width($("#chartsTable").width() + "px");
    resize();

	var nols = $(".ball04,.ball03");
	$("#no_miss").click(function(){
		
		var checked = $(this).attr("checked");
		$.each(nols,function(i,n){
			if(checked==true || checked=='checked'){
				n.style.display='none';
			}else{
				n.style.display='block';
			}
		});
	});
	//切换漏号分析
	$('.lhfx_tit').hover(function(){
		$('.lhfx_lotterylist').show();
		$('.lhfx_lotterylist').unbind().hover(function(){
		},function(){
			$(this).hide();
		});
	},function(){});
});
function resize(){
    window.onresize = func;
    function func(){
        window.location.href=window.location.href;
    }
}
$(function(){
	$(".datetxt").datepicker({ onSelect: function(dateText, inst) {$(this).val(dateText);} });	
})
</script>
<script>
layui.use('laydate', function(){
  var laydate = layui.laydate;
  
  var start = {
    min: laydate.now()
    ,max: '2099-06-16 23:59:59'
    ,istoday: false
    ,choose: function(datas){
      end.min = datas; //开始日选好后，重置结束日的最小日期
      end.start = datas //将结束日的初始值设定为开始日
    }
  };
  
  var end = {
    min: laydate.now()
    ,max: '2099-06-16 23:59:59'
    ,istoday: false
    ,choose: function(datas){
      start.max = datas; //结束日选好后，重置开始日的最大日期
    }
  };
  
  document.getElementById('LAY_demorange_s').onclick = function(){
    start.elem = this;
    laydate(start);
  }
  document.getElementById('LAY_demorange_e').onclick = function(){
    end.elem = this
    laydate(end);
  }
  
});
</script>

<body style="background:none;">
<div id="searchBox" style="background: #f8f8f8; padding:10px 0;height: 110px;">
	<div class="lhfx_tit"><span><?=$shortName?></span><span class="showAll"></span>基本走势</div>
    <div class="secondary_tabs">
        <ul>
            <li data="num_30" class="hover"><a href="?typeid=<?=$typeid?>&pgs=30" class="ml10<?php if($pgs==30) echo ' on'?>" target="_self">最近30期</a></li>
            <li data="num_50"><a href="?typeid=<?=$typeid?>&pgs=50" class="ml10<?php if($pgs==50) echo ' on'?>" target="_self">最近50期</a></li>
            <li data="num_100"><a href="?typeid=<?=$typeid?>&pgs=80" class="ml10<?php if($pgs==80) echo ' on'?>" target="_self">最近80期</a></li>
			<li data="num_100"><a href="?typeid=<?=$typeid?>&pgs=200" class="ml10<?php if($pgs==200) echo ' on'?>" target="_self">最近200期</a></li>
			<li data="num_100"><a href="?typeid=<?=$typeid?>&pgs=300" class="ml10<?php if($pgs==300) echo ' on'?>" target="_self">最近300期</a></li>
        </ul>
    </div>
    	<div class="lhfx_search_time">
		<form action="" method="get">
		<input type="hidden" name="typeid" value="<?=$typeid?>" />
            <input type="hidden" name="pgs" value="<?=$pgs?>" />
		时间范围：
		<input type="text" value="<?=$fromTime?>" name="fromTime" onclick="layui.laydate({elem: this, festival: true})" class="time_input">
		<span class="image"></span>
		<label>至</label>
		<input type="text" value="<?=$toTime?>" onclick="layui.laydate({elem: this, festival: true})" name="toTime" class="time_input">
		<span class="image"></span>
		<input type="submit" value="查询" id="showissue1" class="time_btn">
		</form>
	</div>
	<div class="clearfix"></div>
</div>
<div class="wo_choose">
<span>标注形式选择</span><input type="checkbox" name="checkbox2" value="checkbox" id="has_line" class="no_bk-bg"><label for="has_line">显示走势折线</label>
    <input type="checkbox" name="checkbox" value="checkbox" id="no_miss" onclick="toggleMiss();" /><label for="has_line">不带遗漏数据</label> 
	</div>


<div style="position: relative; height: 1107px;" id="container">
<table id="chartsTable" width="100%" cellpadding="0" cellspacing="0" border="0" style="position:absolute; top:0; left:0;">
      <tbody>
	  <tr id="title">
             <td rowspan="2"><strong>期号</strong></td>
             <td rowspan="2" colspan="10" class="redtext"><strong>开奖号码</strong></td>
                          <td colspan="10"><strong>第一位</strong></td>
                          <td colspan="10"><strong>第二位</strong></td>
                          <td colspan="10"><strong>第三位</strong></td>
                          <td colspan="10"><strong>第四位</strong></td>
                          <td colspan="10"><strong>第五位</strong></td>
                          <td colspan="10"><strong>第六位</strong></td>
                          <td colspan="10"><strong>第七位</strong></td>
                          <td colspan="10"><strong>第八位</strong></td>
                          <td colspan="10"><strong>第九位</strong></td>
                          <td colspan="10"><strong>第十位</strong></td>
                 </tr>
                    <tr id="head">
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                        <td class="wdh" align="center"><strong>0</strong></td>
                        <td class="wdh" align="center"><strong>1</strong></td>
                        <td class="wdh" align="center"><strong>2</strong></td>
                        <td class="wdh" align="center"><strong>3</strong></td>
                        <td class="wdh" align="center"><strong>4</strong></td>
                        <td class="wdh" align="center"><strong>5</strong></td>
                        <td class="wdh" align="center"><strong>6</strong></td>
                        <td class="wdh" align="center"><strong>7</strong></td>
                        <td class="wdh" align="center"><strong>8</strong></td>
                        <td class="wdh" align="center"><strong>9</strong></td>
                    </tr>
          		<?php
				if($fromTime) $fromTime=strtotime($fromTime);
				if($toTime) $toTime=strtotime($toTime)+24*3600;
				
				$pg=trim($_REQUEST["page"]);
				if(!$pg){$pg=1;}
				if(!$pgs){$pgs=30;}
				$tableStr=$conf['db']['prename']."data";
				$tableStr2=$conf['db']['prename']."data a";
				$fieldsStr="time, number, data";
				
				$fieldsStr2="a.time, a.number, a.data";
				$whereStr=" type=$typeid ";
				$whereStr2=" a.type=$typeid ";
				if($fromTime && $toTime){
					$whereStr.=" and time between $fromTime and $toTime";
					$whereStr2.=" and a.time between $fromTime and $toTime";
				}elseif($fromTime){
					$whereStr.=' and time>='.$fromTime;
					$whereStr2.=' and a.time>='.$fromTime;
				}elseif($toTime){
					$whereStr.=' and time<'.$toTime;
					$whereStr2.=' and a.time<'.$toTime;
				}else{}
				$orderStr=" order by a.id desc";//排序
				//$data=array_reverse($data);//排序
				$totalNumber = $mydb->row_count($tableStr,$whereStr);

				if ($totalNumber>0){
			 
                $countcount=0;
				$perNumber=$pgs; //每页显示的记录数
				$page=$pg; //获得当前的页面值
				if (!isset($page)) $page=1;
				
				$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
				$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
				$data = $mydb->row($tableStr2,$fieldsStr2,$whereStr2.' '.$orderStr." limit $startCount,$perNumber");
				
				if($data) foreach($data as $var){
					
				$dArry=explode(",",$var[2]);
				$var['d1']=$dArry[0];
				$var['d2']=$dArry[1];
				$var['d3']=$dArry[2];
				$var['d4']=$dArry[3];
				$var['d5']=$dArry[4];
				$var['d6']=$dArry[5];
				$var['d7']=$dArry[6];
				$var['d8']=$dArry[7];
				$var['d9']=$dArry[8];
				$var['d10']=$dArry[9];

				echo '<tr>';
				echo '<td id="title">'.$var[1].'</td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d1'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d2'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d3'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d4'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d5'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d6'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d7'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d8'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d9'].'</div></td>';
				echo '<td class="wdh" align="center"><div class="ball02">'.$var['d10'].'</div></td>';

				for($i=0;$i<10;$i++) //万位
				{
					if($i==intval($var['d1'])){
						echo '<td class="charball" align="center"><div class="ball01">'.$var['d1'].'</div></td>';
						$five['LW'.$i]=0;  //遗漏
						if($five['SW'.$i]){$five['SW'.$i]++;}else{$five['SW'.$i]=1;} //出现总次数
						if($five['LCW'.$i]){$five['LCW'.$i]++;}else{$five['LCW'.$i]=1;} //最大连出值
					}else{
						if($five['LW'.$i]){$five['LW'.$i]++;}else{$five['LW'.$i]=1;}
						echo '<td class="wdh" align="center"><div class="ball03">'.$five['LW'.$i].'</div></td>';
						$five['LCW'.$i]=0;
					}
					//遗漏总计
					if($five['ZW'.$i]){$five['ZW'.$i]+=$five['LW'.$i];}else{$five['ZW'.$i]=$five['LW'.$i];}
					//最大遗漏值
					if($five['MW'.$i]<$five['LW'.$i]){$five['MW'.$i]=$five['LW'.$i];}
					//最大连出值
					if($five['MLCW'.$i]<$five['LCW'.$i]){$five['MLCW'.$i]=$five['LCW'.$i];}
					
				}
				
				for($i=0;$i<10;$i++) //千位
				{
					if($i==intval($var['d2'])){
						echo '<td class="charball" align="center"><div class="ball02">'.$var['d2'].'</div></td>';
						$five['LQ'.$i]=0;
						if($five['SQ'.$i]){$five['SQ'.$i]++;}else{$five['SQ'.$i]=1;}
						if($five['LCQ'.$i]){$five['LCQ'.$i]++;}else{$five['LCQ'.$i]=1;}
					}else{
						if($five['LQ'.$i]){$five['LQ'.$i]++;}else{$five['LQ'.$i]=1;}
						echo '<td class="wdh" align="center"><div class="ball04">'.$five['LQ'.$i].'</div></td>';
						$five['LCQ'.$i]=0;
					}
					if($five['ZQ'.$i]){$five['ZQ'.$i]+=$five['LQ'.$i];}else{$five['ZQ'.$i]=$five['LQ'.$i];}
					if($five['MQ'.$i]<$five['LQ'.$i]){$five['MQ'.$i]=$five['LQ'.$i];}
					if($five['MLCQ'.$i]<$five['LCQ'.$i]){$five['MLCQ'.$i]=$five['LCQ'.$i];}
		
				}
				for($i=0;$i<10;$i++) //百位
				{
					if($i==intval($var['d3'])){
						echo '<td class="charball" align="center"><div class="ball01">'.$var['d3'].'</div></td>';
						$five['LB'.$i]=0;
						if($five['SB'.$i]){$five['SB'.$i]++;}else{$five['SB'.$i]=1;}
						if($five['LCB'.$i]){$five['LCB'.$i]++;}else{$five['LCB'.$i]=1;}
					}else{
						if($five['LB'.$i]){$five['LB'.$i]++;}else{$five['LB'.$i]=1;}
						echo '<td class="wdh" align="center"><div class="ball03">'.$five['LB'.$i].'</div></td>';
						$five['LCB'.$i]=0;
					}
					if($five['ZB'.$i]){$five['ZB'.$i]+=$five['LB'.$i];}else{$five['ZB'.$i]=$five['LB'.$i];}
					if($five['MB'.$i]<$five['LB'.$i]){$five['MB'.$i]=$five['LB'.$i];}
					if($five['MLCB'.$i]<$five['LCB'.$i]){$five['MLCB'.$i]=$five['LCB'.$i];}
				
				}

				for($i=0;$i<10;$i++) //十位
				{
					if($i==intval($var['d4'])){
						echo '<td class="charball" align="center"><div class="ball02">'.$var['d4'].'</div></td>';
						$five['LS'.$i]=0;
						if($five['SS'.$i]){$five['SS'.$i]++;}else{$five['SS'.$i]=1;}
						if($five['LCS'.$i]){$five['LCS'.$i]++;}else{$five['LCS'.$i]=1;}
					}else{
						if($five['LS'.$i]){$five['LS'.$i]++;}else{$five['LS'.$i]=1;}
						echo '<td class="wdh" align="center"><div class="ball04">'.$five['LS'.$i].'</div></td>';
						$five['LCS'.$i]=0;
					}
					if($five['ZS'.$i]){$five['ZS'.$i]+=$five['LS'.$i];}else{$five['ZS'.$i]=$five['LS'.$i];}
					if($five['MS'.$i]<$five['LS'.$i]){$five['MS'.$i]=$five['LS'.$i];}
					if($five['MLCS'.$i]<$five['LCS'.$i]){$five['MLCS'.$i]=$five['LCS'.$i];}
			
				}
				
				for($i=0;$i<10;$i++)  //个位
				{
					if($i==intval($var['d5'])){
						echo '<td class="charball" align="center"><div class="ball01">'.$var['d5'].'</div></td>';
						$five['LG'.$i]=0;
						if($five['SG'.$i]){$five['SG'.$i]++;}else{$five['SG'.$i]=1;}
						if($five['LCG'.$i]){$five['LCG'.$i]++;}else{$five['LCG'.$i]=1;}
					}else{
						if($five['LG'.$i]){$five['LG'.$i]++;}else{$five['LG'.$i]=1;}
						echo '<td class="wdh" align="center"><div class="ball03">'.$five['LG'.$i].'</div></td>';
						$five['LCG'.$i]=0;
					}
					if($five['ZG'.$i]){$five['ZG'.$i]+=$five['LG'.$i];}else{$five['ZG'.$i]=$five['LG'.$i];}
					if($five['MG'.$i]<$five['LG'.$i]){$five['MG'.$i]=$five['LG'.$i];}
					if($five['MLCG'.$i]<$five['LCG'.$i]){$five['MLCG'.$i]=$five['LCG'.$i];}
				}

                for($i=0;$i<10;$i++)  //个位
                {
                    if($i==intval($var['d6'])){
                        echo '<td class="charball" align="center"><div class="ball02">'.$var['d6'].'</div></td>';
                        $five['L6'.$i]=0;
                        if($five['S6'.$i]){$five['S6'.$i]++;}else{$five['S6'.$i]=1;}
                        if($five['LC6'.$i]){$five['LC6'.$i]++;}else{$five['LC6'.$i]=1;}
                    }else{
                        if($five['L6'.$i]){$five['L6'.$i]++;}else{$five['L6'.$i]=1;}
                        echo '<td class="wdh" align="center"><div class="ball04">'.$five['L6'.$i].'</div></td>';
                        $five['LC6'.$i]=0;
                    }
                    if($five['Z6'.$i]){$five['Z6'.$i]+=$five['L6'.$i];}else{$five['Z6'.$i]=$five['L6'.$i];}
                    if($five['M6'.$i]<$five['L6'.$i]){$five['M6'.$i]=$five['L6'.$i];}
                    if($five['MLC6'.$i]<$five['LC6'.$i]){$five['MLC6'.$i]=$five['LC6'.$i];}
                }

                for($i=0;$i<10;$i++)  //个位
                {
                    if($i==intval($var['d7'])){
                        echo '<td class="charball" align="center"><div class="ball01">'.$var['d7'].'</div></td>';
                        $five['L7'.$i]=0;
                        if($five['S7'.$i]){$five['S7'.$i]++;}else{$five['S7'.$i]=1;}
                        if($five['LC7'.$i]){$five['LC7'.$i]++;}else{$five['LC7'.$i]=1;}
                    }else{
                        if($five['L7'.$i]){$five['L7'.$i]++;}else{$five['L7'.$i]=1;}
                        echo '<td class="wdh" align="center"><div class="ball03">'.$five['L7'.$i].'</div></td>';
                        $five['LC7'.$i]=0;
                    }
                    if($five['Z7'.$i]){$five['Z7'.$i]+=$five['L7'.$i];}else{$five['Z7'.$i]=$five['L7'.$i];}
                    if($five['M7'.$i]<$five['L7'.$i]){$five['M7'.$i]=$five['L7'.$i];}
                    if($five['MLC7'.$i]<$five['LC7'.$i]){$five['MLC7'.$i]=$five['LC7'.$i];}
                }

                    for($i=0;$i<10;$i++)  //个位
                    {
                        if($i==intval($var['d8'])){
                            echo '<td class="charball" align="center"><div class="ball02">'.$var['d8'].'</div></td>';
                            $five['L8'.$i]=0;
                            if($five['S8'.$i]){$five['S8'.$i]++;}else{$five['S8'.$i]=1;}
                            if($five['LC8'.$i]){$five['LC8'.$i]++;}else{$five['LC8'.$i]=1;}
                        }else{
                            if($five['L8'.$i]){$five['L8'.$i]++;}else{$five['L8'.$i]=1;}
                            echo '<td class="wdh" align="center"><div class="ball04">'.$five['L8'.$i].'</div></td>';
                            $five['LC8'.$i]=0;
                        }
                        if($five['Z8'.$i]){$five['Z8'.$i]+=$five['L8'.$i];}else{$five['Z8'.$i]=$five['L8'.$i];}
                        if($five['M8'.$i]<$five['L8'.$i]){$five['M8'.$i]=$five['L8'.$i];}
                        if($five['MLC8'.$i]<$five['LC8'.$i]){$five['MLC8'.$i]=$five['LC8'.$i];}
                    }
                    for($i=0;$i<10;$i++)  //个位
                    {
                        if($i==intval($var['d9'])){
                            echo '<td class="charball" align="center"><div class="ball01">'.$var['d9'].'</div></td>';
                            $five['L9'.$i]=0;
                            if($five['S9'.$i]){$five['S9'.$i]++;}else{$five['S9'.$i]=1;}
                            if($five['LC9'.$i]){$five['LC9'.$i]++;}else{$five['LC9'.$i]=1;}
                        }else{
                            if($five['L9'.$i]){$five['L9'.$i]++;}else{$five['L9'.$i]=1;}
                            echo '<td class="wdh" align="center"><div class="ball03">'.$five['L9'.$i].'</div></td>';
                            $five['LC9'.$i]=0;
                        }
                        if($five['Z9'.$i]){$five['Z9'.$i]+=$five['L9'.$i];}else{$five['Z9'.$i]=$five['L9'.$i];}
                        if($five['M9'.$i]<$five['L9'.$i]){$five['M9'.$i]=$five['L9'.$i];}
                        if($five['MLC9'.$i]<$five['LC9'.$i]){$five['MLC9'.$i]=$five['LC9'.$i];}
                    }
                    for($i=0;$i<10;$i++)  //个位
                    {
                        if($i==intval($var['d10'])){
                            echo '<td class="charball" align="center"><div class="ball02">'.$var['d10'].'</div></td>';
                            $five['L10'.$i]=0;
                            if($five['S10'.$i]){$five['S10'.$i]++;}else{$five['S10'.$i]=1;}
                            if($five['LC10'.$i]){$five['LC10'.$i]++;}else{$five['LC10'.$i]=1;}
                        }else{
                            if($five['L10'.$i]){$five['L10'.$i]++;}else{$five['L10'.$i]=1;}
                            echo '<td class="wdh" align="center"><div class="ball04">'.$five['L10'.$i].'</div></td>';
                            $five['LC10'.$i]=0;
                        }
                        if($five['Z10'.$i]){$five['Z10'.$i]+=$five['L10'.$i];}else{$five['Z10'.$i]=$five['L10'.$i];}
                        if($five['M10'.$i]<$five['L10'.$i]){$five['M10'.$i]=$five['L10'.$i];}
                        if($five['MLC10'.$i]<$five['LC10'.$i]){$five['MLC10'.$i]=$five['LC10'.$i];}
                    }
                    echo '</tr>';
			
            } 
			
			
		?>                          
    <tr>
    <td nowrap="">出现总次数</td>
    <td align="center" colspan="10">&nbsp;</td>
    <?php 
	foreach(array('W','Q','B','S','G','6','7','8','9','10') as $var){
		for($i=0;$i<10;$i++)
		{
			if($five['S'.$var.$i]){
				$five['D'.$var.$i]=$five['S'.$var.$i];
			}else{
				$five['D'.$var.$i]=0;
			}
			echo '<td align="center">'.$five['D'.$var.$i].'</td>';
		}
	}
	?>  
    </tr>
    <tr>
    <td nowrap="">平均遗漏值</td>
    <td align="center" colspan="10">&nbsp;</td>
    <?php 
	foreach(array('W','Q','B','S','G','6','7','8','9','10') as $var){
		for($i=0;$i<10;$i++)
		{
			$five['P'.$var.$i]=intval($pgs/($five['D'.$var.$i]+1));
			echo '<td align="center">'.$five['P'.$var.$i].'</td>';
		}
	}
	?>
    </tr>
    <tr>
    <td nowrap>最大遗漏值</td>
    <td align="center" colspan="10">&nbsp;</td>
    <?php 
	foreach(array('W','Q','B','S','G','6','7','8','9','10') as $var){
		for($i=0;$i<10;$i++)
		{
			if($five['M'.$var.$i]){
				$five['Max'.$var.$i]=$five['M'.$var.$i];
			}else{
				$five['Max'.$var.$i]=0;
			}
			echo '<td align="center">'.$five['Max'.$var.$i].'</td>';
		}
	}
	?>
    </tr>
    <tr>
    <td nowrap>最大连出值</td>
    <td align="center" colspan="10">&nbsp;</td>
    <?php 
	foreach(array('W','Q','B','S','G','6','7','8','9','10') as $var){
		for($i=0;$i<10;$i++)
		{
			if($five['MLC'.$var.$i]){
				$five['MaxLC'.$var.$i]=$five['MLC'.$var.$i];
			}else{
				$five['MaxLC'.$var.$i]=0;
			}
			echo '<td align="center">'.$five['MaxLC'.$var.$i].'</td>';
		}
	}
	?>
    </tr>
    <tr id="head">
        <td rowspan="2" align="center"><strong>期号</strong></td>
        <td rowspan="2" align="center" colspan="10"><strong>开奖号码</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
        <td align="center"><strong>0</strong></td>
        <td align="center"><strong>1</strong></td>
        <td align="center"><strong>2</strong></td>
        <td align="center"><strong>3</strong></td>
        <td align="center"><strong>4</strong></td>
        <td align="center"><strong>5</strong></td>
        <td align="center"><strong>6</strong></td>
        <td align="center"><strong>7</strong></td>
        <td align="center"><strong>8</strong></td>
        <td align="center"><strong>9</strong></td>
    </tr>
    <tr id="title">
      <td colspan="10"><strong>第一位</strong></td>
      <td colspan="10"><strong>第二位</strong></td>
      <td colspan="10"><strong>第三位</strong></td>
      <td colspan="10"><strong>第四位</strong></td>
      <td colspan="10"><strong>第五位</strong></td>
      <td colspan="10"><strong>第六位</strong></td>
      <td colspan="10"><strong>第七位</strong></td>
      <td colspan="10"><strong>第八位</strong></td>
      <td colspan="10"><strong>第九位</strong></td>
      <td colspan="10"><strong>第十位</strong></td>
    </tr>
    <?php	  
			  
		}
	?>
</tbody></table>
</div>


<div class="lhfx_lotterylist">
  		<dl>
		<dt>时时彩</dt>
		<dd><a href="/zst/index.php?typeid=1 ">重庆时时彩</a></dd>
		<dd><a href="/zst/index.php?typeid=12">新疆时时彩</a></dd>
		<dd><a href="/zst/index.php?typeid=60">天津时时彩</a></dd>
		
		<dd><a href="/zst/index.php?typeid=5">腾讯分分彩</a></dd>
		
		<!--<dd><a href="/zst/index.php?typeid=14">河内5分彩</a></dd>
		<dd><a href="/zst/index.php?typeid=5">河内1分彩</a></dd>-->
  	</dl>
	<dl>
		<dt>11选5</dt>
		<dd><a href="/zst/11x5.php?typeid=7">山东11选5</a></dd>
		<dd><a href="/zst/11x5.php?typeid=16">江西11选5</a></dd>
		<dd><a href="/zst/11x5.php?typeid=6">广东11选5</a></dd>
		<dd><a href="/zst/11x5.php?typeid=15">上海11选5</a></dd>
	</dl>
	<dl>
		<dt>快3-3D-排3</dt>
      	<dd><a href="/zst/k3.php?typeid=79">江苏快三</a></dd>
      	<dd><a href="/zst/k3.php?typeid=81">安徽快三</a></dd>
		
		<dd><a href="/zst/3d.php?typeid=9">福彩3D</a></dd>
		<dd><a href="/zst/3d.php?typeid=10">排列三</a></dd>
	</dl>
	

    <dl>
        <dt>PK10</dt>
        <dd><a href="/zst/pk10.php?typeid=20">北京PK10</a></dd>
       
    </dl>
    <dl>
        <dt>六合彩</dt>
        <dd><a href="/zst/lhc.php?typeid=34">六合彩</a></dd>
        <dd><a href="/zst/lhc.php?typeid=77">高速六合彩</a></dd>
    </dl>
</div>
</body>
</html>
