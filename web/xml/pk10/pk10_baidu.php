
<?php
 function GetRameResult_ssc()
{
	$url = "https://www.cp8s.com/getLotteryBase.do?gameCode=bjpk10";
	   //$url="http://a.apiplus.net/newly.do?token=tacb7c408bde8fbk&code=cqssc&rows=10&format=json";
	$kjcontent = file_get_contents($url);
	$arr = json_decode($kjcontent,true);
	//$arrList =$arr['result']['data'];
	return $arrList;
	
}
$kjcontent = GetRameResult_ssc();
//var_dump($kjcontent);
$qh=strval($kjcontent['preDrawIssue']);
$num=strval($kjcontent['preDrawCode']);
$kjtime=strval($kjcontent['drawTime']);
$qian= $rest = substr($qh, 0,-3);
$hou=substr($qh,-3);
//echo $qh;
header("Content-type:text/xml;charset=utf-8");
echo "<xml>";
echo "<row expect=\"$qh\" opencode=\"$num\" opentime=\"$kjtime\"/>";
echo "</xml>"
?>