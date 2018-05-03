<?
$api = 'http://gf3.dyj659.com:97/Result/GetLotteryResultList?gameID=75&pageSize=20&pageIndex=1';
$resource = file_get_contents( $api );  
$data = json_decode( $resource , true );
$data1 =$data['list'][0];
//var_dump($data1);

$ct = $data1['period'];

$cd = $data1['date'];

$cr = $data1['result'];

header('Content-Type: text/xml;charset=utf8');
$catime = strtotime($cd);//
$cd = date('Y-m-d H:i:s',$catime);
$limit=strlen($ct)-4;

$ct=substr($ct,0,$limit).'-'.substr($ct,$limit,$limit+3);

echo '<xml>
<row expect="'.$ct.'" opencode="'.$cr.'" opentime="'.str_replace('/','-',$cd).'"/>
</xml>';