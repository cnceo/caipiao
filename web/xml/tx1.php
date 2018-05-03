

<?
$api = 'https://yc030.com/proxy/lottery/game/category/tencent/drawing';
$resource = file_get_contents($api);  
$data = json_decode( $resource , true );
$data1 =$data['data'];
//var_dump($data1);

$ct = $data1['issue'];

$cd = $data1['publish_time'];

$cr = $data1['result'];

header('Content-Type: text/xml;charset=utf8');
$limit=strlen($ct)-4;

$ct=substr($ct,0,$limit).'-'.substr($ct,$limit,$limit+3);

echo '<xml>
<row expect="'.$ct.'" opencode="'.$cr.'" opentime="'.str_replace('/','-',$cd).'"/>
</xml>';