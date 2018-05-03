
<?php
class Random extends WebBase{
	/**
	 *  ��ѡ����
	 */
	public final function getLotteryRandom($playid,$count=1){
		$sql="select type,selectNum from {$this->prename}played where id=?";
		$row=$this->getRow($sql, $playid);
		$number=array();
		if($row)
		{
			for($i=0;$i<$count;$i++)
			{
			switch ($row['type'])
			{
				case 1://ʱʱ��
					$number[]=$this->getSSCRandom($row['selectNum'],$playid);
				break;
				case 2://ʮһѡ��
					$number[]= $this->get11x5Random($row['selectNum'],$playid);
				break;
				case 3://3d����
					$number[]= $this->get3dRandom($row['selectNum'],$playid);
				break;
				case 6://PK10
					$number[]= $this->getPK10Random($row['selectNum'],$playid);
				break;
				case 9://����
					$number[]= $this->getK3Random($row['selectNum'],$playid);
				break;
				case 10://����28
				break;
				case 11://���ϲ�
				break;
			}	
			}
			
		}
		foreach($number as $n)
		{
			echo $n['number'].'-'.$n['count'].'<br />';
		}
		return $number;
	}
	
	/*
	*ʱʱ�ʻ�ѡ
	*/
	public  function getSSCRandom($num,$playid)
	{
		$number="";
		$zhixuan=array('2','4','6','10','12','25');
		$hezhi=array('305','303','306','318','320','328','375','376');
		$dxds=array('42','43','265','266');
		$start=0;
		$end=0;
		$count=1;
		if(in_array($playid,$zhixuan))
		{
			$number=$this->getRandom($num,$num,0,9,1,0);
		}else if(in_array($playid,$hezhi))
		{
			if($playid=='303')
			{
				$start=0;
				$end=18;
			}else if($playid=='305'||$playid=='306')
			{
				$start=1;
				$end=17;
			}else if($playid=='318'||$playid=='320')
			{
				$start=0;
				$end=27;
			}else if($playid=='328'||$playid=='375')
			{
				$start=1;
				$end=26;
			}else
			{
				$start=3;
				$end=24;
			}
			$number=$this->getRandom($num,$num,$start,$end,0,0);
			$count=intval($this->getCount($number,$playid));
		}else if(in_array($playid,$dxds))
		{
			if($playid=='42'||$playid=='43')
			{
				$number=implode(" ",$this->getRandomDXDS(2));
			}else
			{
				$number=implode(" ",$this->getRandomDXDS(3));
			}
			
		}else
		{
			$number=$this->getRandom($num,1,0,9,0,0);
			$count=intval($this->getCount($number,$playid));
		}
			return array('number'=>str_ireplace(" ","",$number),'count'=>$count);
	}
	/*3d������ѡ*/
	public  function get3DRandom($num,$playid)
	{
		$number="";
		$zhixun=array('57','67','69');
		$count=1;
		if(in_array($playid,$zhixuan))//ֱѡ
		{
			$number=$this->getRandom($num,$num,0,9,1,0);
		}else if($playid=='72')//��С��˫
		{
			$number=implode(" ",$this->getRandomDXDS(2));
		}else if($playid=='300')//ֱѡ��ֵ
		{
			$number=$this->getRandom(1,1,0,27,0,0);
			$count=intval($this->getCount($number,$playid));
		}else if($playid=='301')//��ѡ��ֵ
		{
			$number=$this->getRandom(1,1,1,26,0,0);
			$count=intval($this->getCount($number,$playid));
		}else
		{
			$number=$this->getRandom($num,1,0,9,0,0);
			$count=intval($this->getCount($number,$playid));
		}
		return array('number'=>str_ireplace(" ","",$number),'count'=>$count);
	}
	/*11ѡ���ѡ*/
	public  function get11x5Random($num,$playid)
	{
		$number=$this->getRandom($num,$num,0,11,0,1);
		return array('number'=>$number,'count'=>1);
	}
	/*K3��ѡ*/
	public  function getK3Random($num,$playid)
	{
		$number="";
		if($playid=='118')//��ֵ
		{
			$number=$this->getRandom($num,$num,3,18,0,0);
		}else if($playid=='119')//��ͬ��ͨѡ
		{
			$number="111,222,333,444,555";
		}else if($playid=='120')//��ͬ�ŵ�ѡ
		{
			$tong= mt_rand(1, 6);
			$number=$tong.$tong.$tong;
		}else if($playid=='121')//��ͬ�Ÿ�ѡ
		{
			$tong= mt_rand(1, 6);
			$number=$tong.$tong.'*';
		}else if($playid=='122')//��ͬ�ŵ�ѡ
		{
			$number=$this->getRandom(2,2,1,6,0,0);
			$number=strpos($number,0,1).$number;
		}else if($playid=='123')//����ͬ��
		{
			$number=$this->getRandom(3,1,1,6,0,0);
		}else if($playid=='124')//����ͬ��
		{
			$number=$this->getRandom(2,1,1,6,0,0);
		}else if($playid=='125')//������ͨѡ
		{
			$number="123,234,345,456,567";
		}else if($playid=='126')//��С��˫
		{
			$number=implode(" ",$this->getRandomDXDS(1));
		}
		
		return array('number'=>$number,'count'=>1);
	}
	/*PK10��ѡ*/
	public  function getPK10Random($num,$playid)
	{
		$number="";
		$dxds=array('225','226','227','228','229','230','231','232','233','234','235','236');
		$longhu=array('238','239','240','241','242','243','244');
		$zhixuan=array('93','94','95','244');
		if(in_array($playid,$zhixuan))//ֱѡ
		{
			$number=$this->getRandom($num,$num,0,10,0,1);
		}else if(in_array($playid,$longhu))//����
		{
			$number=$this->getRandomLH();
		}else if(in_array($playid,$dxds))//��С��˫
		{
			$number=implode(" ",$this->getRandomDXDS(1));
		}else if($playid=='246')//��ֵ
		{
			$number=$this->getRandom(1,1,3,19,0,0);
		}else if($playid=='247')//���Ǿ����
		{
			$gyzh=$this->getRandomNumber(2,1,10);
			sort($gyzh);
			$number=implode("-",$gyzh);
		}
		return array('number'=>$number,'count'=>1);
	}
	/*���ѡ�� λ�� ѡ�Ÿ��� ��ֹ �Ƿ������ͬ �Ƿ�0*/
	public  function getRandom($num,$row,$start,$end,$diff,$bu)
	{
		$number="";
		$array=array();
		if($bu==0)
		{
			$array=$this->getRandomNumber($num,$start,$end);
		}else
		{
			$array=$this->get11x5RandomNumber($num,$start,$end);
		}
		
		if($diff==1)
		{
			if($row==$num)
			{
				for($i=0;$i<$num;$i++)
				{
					$number.=rand($start,$end);
					if($i!=$num-1)
					{
						$number.=",";
					}
				}
			}else
			{
				$number=implode(" ",$array);
			}
		}else
		{
			if($row==$num)
			{
				$number=implode(",",$array);
			}else
			{
				$number=implode(" ",$array);
			}
		}
		return $number;
		
	}
	/**��ȡssc�����*/
	public  function getRandomNumber($num,$start,$end)
	{
		$return = array();
		$count=0;
		while ($count < $num) 
		{
		$return[] = mt_rand($start, $end);
		$return = array_flip(array_flip($return));
		$count = count($return);
		}
			
		return $return;
	}
	/**��ȡ��С��˫�����*/
	public  function getRandomDXDS($row)
	{
		$return = array();
		$dxds=array('��','С','��','˫');
		$count=0;
		while ($count < $row) 
		{
		$return[] = $dxds[mt_rand(0, 3)];
		$count = count($return);
		}
			
		return $return;
	}
	/**��ȡ���������*/
	public  function getRandomLH()
	{

		$dxds=array('��','��');
		$return = $dxds[mt_rand(0, 1)];			
		return $return;
	}
	/**��ȡ11x5�����*/
	public  function get11x5RandomNumber($num,$start,$end)
	{
		$return = array();
		$count=0;
		while ($count < $num) 
		{
		$return[] = str_pad(mt_rand($start, $end),2,"0",STR_PAD_LEFT);
		$return = array_flip(array_flip($return));
		$count = count($return);
		}
			
		return $return;
	}
	/*��ȡע��*/
	public  function getCount($number,$playid)
	{
		$ssczux_count = array('1', '2', '2', '4', '5', '6', '8', '10', '11', '13', '14', '14', '15', '15', '14', '14', '13', '11', '10', '8', '6', '5', '4', '2', '2', '1');
		$ssczx_count =  array('1', '3', '6', '10', '15', '21', '28', '36', '45', '55', '63', '69', '73', '75', '75', '73', '69', '63', '55', '45', '36', '28', '21', '15', '10', '6', '3', '1');
		$ssc2zx_count =  array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '9', '8', '7', '6', '5', '4', '3', '2', '1');
		$ssc2zux_count =  array('1', '1', '2', '2', '3', '3', '4', '4', '5', '4', '4', '3', '3', '2', '2', '1', '1');
		if($playid=='300'||$playid=='318'||$playid=='320')
		{
			return $ssczx_count[intval($number)];
		}else if($playid=='328'||$playid=='375'||$playid=='301')
		{
			return $ssczux_count[intval($number)-1];
		}else if($playid=='305'||$playid=='306')
		{
			return $ssc2zux_count[intval($number)-1];
		}else if($playid=='303')
		{
			return $ssc2zx_count[intval($number)-1];
		}else if($playid=='246')
		{
			return '1';
		}else if ($playid=='118')
		{
			return '1';
		}else if($playid=='16'||$playid=='19'||$playid=='59'||$playid=='289'||$playid=='373')
		{
			return '2';
		}else
		{
			return '1';
		}			
	}
}