<?php
require_once('xingcai_sqlin.php');
$conf['debug']['level']=5;

/*		数据库配置		*/
$conf['db']['dsn']='mysql:host=127.0.0.1;dbname=nxc1;charset=utf8;port=3307';
$dbname='nxc1';
$dbhost='127.0.0.1';
$conf['db']['user']='root';
$conf['db']['password']='';
// $conf['db']['password']='';
$conf['db']['charset']='utf8';
$conf['db']['prename']='blast_';
$conf['cache']['expire']=0;
$conf['cache']['dir']='_xingcai_buffer/';

$conf['url_modal']=2;

$conf['action']['template']='xingcai_Front/';
$conf['action']['modals']='xingcai_back/';

$conf['member']['sessionTime']=15*60;	// 用户有效时长
$conf['node']['access']='http://localhost:65531';	// node访问基本路径
error_reporting(E_ERROR & ~E_NOTICE);

ini_set('date.timezone', 'PRC');

ini_set('display_errors', 'Off');


if(strtotime(date('Y-m-d',time()))>strtotime(date('Y-m-d',time()))){
	$GLOBALS['fromTime']=strtotime(date('Y-m-d',strtotime("-1 day")));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',time()));
}else{
	
	$GLOBALS['fromTime']=strtotime(date('Y-m-d'));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',strtotime("+1 day")));
}
?>