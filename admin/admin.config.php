<?php
require_once('blast_sqlin.php');
$conf['debug']['level']=5;

/*		���ݿ�����		*/
$conf['db']['dsn']='mysql:host=127.0.0.1;dbname=nxc1;port=3307';
$conf['db']['user']='root';
// $conf['db']['password']='3020x63032979';
$conf['db']['password']='';
$conf['db']['charset']='utf8';
$conf['db']['prename']='blast_';

$conf['safepass']='ggsmdl77';     //��̨��½��ȫ��

$conf['cache']['expire']=0;
$conf['cache']['dir']='_blast_buffer/';     //ǰ̨����Ŀ¼
$conf['url_modal']=2;
$conf['action']['template']='blast_Front/admin/';
$conf['action']['modals']='blast_back/admin/';
$conf['member']['sessionTime']=15*60;	// �û���Чʱ��
$conf['node']['access']='http://127.0.0.1:8802';	// node���ʻ���·��

error_reporting(E_ERROR & ~E_NOTICE);
ini_set('date.timezone', 'asia/shanghai');
ini_set('display_errors', 'Off');