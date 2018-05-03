<?php
 function GetRameResult_ssc()
{
	$url = "http://www.pk10357.com/pk10/getPk10AwardData.do?ajaxhandler=GetPk10AwardData&_=" . rand(100000,999999);
	   //$url="http://a.apiplus.net/newly.do?token=tacb7c408bde8fbk&code=cqssc&rows=10&format=json";
	$kjcontent = file_get_contents($url);
	$arr = json_decode($kjcontent,true);
	$arrList =$arr['current'];
	return $arrList;
	
}
$kjcontent = GetRameResult_ssc();
//var_dump($kjcontent);
$qh=strval($kjcontent['periodNumber']);
$num=strval($kjcontent['awardNumbers']);
$kjtime=strval($kjcontent['awardTime']);
$qian= $rest = substr($qh, 0,-3);
$hou=substr($qh,-3);
$a=$num;
            #1.先将字符串分割成数组
            $_arr = explode(',',$a);
            #2.遍历进行处理
            foreach($_arr as $v)
            {
                if(empty($v)) continue;
                if($v < 10)
                {
                    $new_arr[]= '0'.$v;
                }
                else
                {
                    $new_arr[] = $v;
                }
            }
            #3.再把数组组装成字符串
            $b = implode(',',$new_arr);
           
//echo $qh;
header("Content-type:text/xml;charset=utf-8");
echo "<xml>";
echo "<row expect=\"$qh\" opencode=\"$b\" opentime=\"$kjtime\"/>";
echo "</xml>"
?>