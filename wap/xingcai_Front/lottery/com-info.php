<?php
	$bet=$this->getRow("select * from {$this->prename}bets where id=?", $args[0]);
	if(!$bet) throw new Exception('单号不存在');
	$modeName=array('2.000'=>'元', '0.200'=>'角', '0.020'=>'分', '0.002'=>'厘','1.000'=>'1元');
	$weiShu=$bet['weiShu'];
	if($weiShu){
		$w=array(16=>'万', 8=>'千', 4=>'百', 2=>'十',1=>'个');
		foreach($w as $p=>$v){
			if($weiShu & $p) $wei.=$v;
		}
		$wei.=':';
	}
	$betCont=$bet['mode'] * $bet['beiShu'] * $bet['actionNum'] * ($bet['fpEnable']+1);
?>
<div class="popupModal">
	<table cellpadding="0" cellspacing="0" width="100%" style="width: 100%;margin-top: 15px;" class="form-tips">
		
		<tr>
			<td ><em>投注用户：</em><span class="red"><?=$this->iff($bet['username']==$this->user['username'], $bet['username'], preg_replace('/^(\w).*(\w{2})$/', '\1***\2', $bet['username']))?></span></td>
			<td ><em>彩种：</em><span class="red"><?=$this->types[$bet['type']]['title']?></span></td>
			
            <td><em>购买倍数：</em><span class="red"><?=$bet['beiShu'].'倍'?></span></td>
            <td ><em>订单状态：</em><em>
			<?php
//                            var_dump($bet['kjTime'],time());
				if($bet['isDelete']==1){
					echo '<font color="#999999">已撤单</font>';
				}elseif($bet['zjCount']){
					echo '<font color="red">已派奖</font>';
				}elseif(!$bet['lotteryNo'] && $bet['kjTime']>time()){
					echo '<font color="#009900">未开奖</font>';
				}elseif($bet['lotteryNo']){
					echo '<font color="#00CC00">未中奖</font>';
				}else{
					echo '已过期';
				}
			?>
            </em>
            </td>
		</tr>
        <tr>
			<td><em>订单编号：</em><span class="red"><?=$bet['wjorderId']?></span></td>
			<td ><em>玩法：</em><span class="red"><?=$this->playeds[$bet['playedId']]['name']?></span></td>
            
			<td><em>购买模式：</em><span class="red"><?=$modeName[$bet['mode']]?></span></td>
            <td><em>投注期号：</em><span class="red"><?=$bet['actionNo']?></span></td>
		</tr>
        <tr>
		
			<td><em>奖金返点：</em><span class="red"><?=number_format($bet['bonusProp'], 2)?>－<?=number_format($bet['fanDian'],1)?>%</span></td>
			<td><em>返点金额：</em><span class="red"><?=$this->iff($bet['lotteryNo'], number_format(($bet['fanDian']/100)*$betCont, 3). '元', '－')?></span></td>
			
			<td><em>中奖注数：</em><span class="red"><?=$this->iff($bet['lotteryNo'], $bet['bonus']/$bet['bonusProp'].'注', '－')?></span></td>
			<td><em>投注时间：</em><span class="red"><?=date('m-d H:i:s',$bet['actionTime'])?></span></td>
			
		</tr>
		<tr>
		<td ><em>购买盈亏：￥&nbsp</em><em class="green"><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'] - $betCont + ($bet['fanDian']/100)*$betCont, 3), '－')?></em> 元<em class="green">&nbsp(<?=$this->iff($bet['lotteryNo'], $this->iff(number_format($bet['bonus'] - $betCont + ($bet['fanDian']/100)*$betCont, 3)>=0,"赢","亏"), '－')?>)</em></td>
			
			
			<td><em>购买金额：</em><span class="red"><?=number_format($betCont, 3)?></span></td>
			
			<td><em>中奖金额：</em><span class="red"><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'], 3) .'元', '－')?></span></td>
			<td><em>开奖时间：</em><span class="red"><?=$this->iff($bet['lotteryNo'], date('m-d H:i:s',$bet['kjTime']), '－')?></span></td>
			
		</tr>
         <tr>
			
			<td colspan="4"><em>开奖号码：</em><span class="red"><?=$this->ifs($bet['lotteryNo'], '－')?></span></td>
			
			
		</tr>
        <tr class="nobd">
			<td colspan="4"><em>方案内容：</em><p class="tzdata"><?=$wei.$bet['actionData']?></p></td>
		</tr>
		
        
	</table>
</div>