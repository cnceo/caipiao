<?
$api = 'https://129kai.net/index.php?c=api&a=updateinfo&cp=bjpk10&uptime=1508207195&chtime=305&catid=2&modelid=9';
$resource = file_get_contents( $api );  

$data = json_decode( $resource , 1 );
//var_dump($data);

$ct = $data['c_t'];

$cd = $data['c_d'];

$cr = $data['l_r'];

header('Content-Type: text/xml;charset=utf8');
$limit=strlen($ct)-2;

$ct=substr($ct,0,$limit).''.substr($ct,$limit,$limit+2);


echo '<xml>
<row expect="'.$ct.'" opencode="'.$cr.'" opentime="'.str_replace('/','-',$cd).'"/>
</xml>';