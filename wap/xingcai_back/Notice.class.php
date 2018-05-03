<?php

class Notice extends WebLoginBase
{
    public $pageSize = 10;

    /**
     * 列表页
     */
    public final function info()
    {
        $sql = "select * from {$this->prename}content where enable=1 and nodeId=1";
        $sql .= ' order by id desc';
        $info = $this->getPage($sql, $this->page, $this->pageSize);
        $this->action = 'notice';
        $this->display('notice/list.php', 0, $info);

    }

    /**
     * 列表页
     */
    public final function getList()
    {
        $sql = "select * from {$this->prename}content where  enable=1 and nodeId=1";
       $sql .= ' order by id desc';
       $list = $this->getPage($sql, $this->page, $this->pageSize);
       foreach ($list['data'] as &$value) {
           $value['addTime'] = date('Y-m-d', $value['addTime']);
       }
        print_r( $sql);
        die(json_encode(array('status' => '200', 'data' => $list['data'])));
    }
  public final function getList1()
    {
        $sql =$this->getRow( "select * from {$this->prename}message_receiver where is_deleted=0 and is_readed=0 and to_uid={$this->user['uid']}");
		//if($sql) return 88;
        //$sql .= ' order by id desc';
       // $list = $this->getPage($sql, $this->page, $this->pageSize);
       // foreach ($list['data'] as &$value) {
           //$value['addTime'] = date('Y-m-d', $value['addTime']);
      // }
       //print_r($sql);
		//if
		if($sql)
		{die(json_encode(array('status' => '200', 'data' => $list['data'])));}
		else{die(json_encode(array('status' => '400', 'data' => $list['data'])));}
       //die(json_encode(array('status' => '200', 'data' => $list['data'])));
    }

    /**
     * 详情页
     */
    public final function view($infoid)
    {
        $infoid = intval($infoid);
        $info = $this->getRow("select * from {$this->prename}content where id=?", $infoid);
        $this->action = 'notice';
        $this->display('notice/view.php', 0, $info);
    }

    /**
     * 活动页
     */
    public final function huodong2()
    {
        $this->display('notice/loginhuodong.php');
    }
}