<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<style type="text/css">
	.game .pp input.code.reset2{
		margin-top: -4px;
	}
</style>
<div class="pp pp11" action="ssch3ts" length="1">
    &nbsp
	<div class="title">选择</div>
	<div class="code-wrapper" style="margin-top: 6px;">
	<input type="button" value="豹子" class="code reset2" />
	<input type="button" value="顺子" class="code reset2" />
	<input type="button" value="对子" class="code reset2" />
	</div>
</div>
<?php $maxPl=$this->getPl($this->type, $this->played); ?>
<script type="text/javascript">
$(function(){
	gameSetPl(<?=json_encode($maxPl)?>);
})
</script>