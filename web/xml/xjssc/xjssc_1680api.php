<?
$api = 'http://api.api68.com/CQShiCai/getBaseCQShiCai.do?lotCode=10004';
$resource = file_get_contents( $api );  
$data1 = json_decode( $resource , 1 );
$data=$data1['result']['data'];
//var_dump($data);
$ct = $data['preDrawIssue'];

$cd = $data['preDrawTime'];

$cr = $data['preDrawCode'];

header('Content-Type: text/xml;charset=utf8');

$limit=strlen($ct)-2;

$ct=substr($ct,0,$limit).'-'.substr($ct,$limit,$limit+2);

echo '<xml>
<row expect="'.$ct.'" opencode="'.$cr.'" opentime="'.$cd.'"/>
</xml>';