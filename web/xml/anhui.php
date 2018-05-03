<?php

ob_start();

$url='http://kaijiang.500.com/static/info/kaijiang/xml/ahk3/20171107.xml';
$content=file_get_contents($url);
var_dump($content);
header("Content-type: application/xml");
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'."$expect".'" opencode="'."$opencode".'" opentime="'."$opentime".'" /></xml>';
ob_end_flush();
;echo '
'
?>