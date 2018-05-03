/**
 * 添加投注--随机一注
 */
function gameActionAddCode_random() {
    //奖金返点限制[如奖金模式在1920以下才能购买分模式(返点大于最大返点-11)]
    //代理不能买单
    if ($('#wjdl')) {
        if (parseInt($('#wjdl').val()) > 0) {
            alert('代理不能买单');
            return false;
        }
    }
    var modeName = {
            '2.000': '元',
            '0.200': '角',
            '0.020': '分',
            '0.002': '厘'
        },
        $mode = $('.danwei.dwon'),
        $slider = $("#slider-range-min"),
        fanDian = gameGetFanDian(),
        modeFanDian = $mode.data().maxFanDian,
        userFanDian = $slider.attr('fan-dian'),
        mode = $mode.attr("value");

        //var playid = game.played;
        var playid = $('#submenu .tag').attr('data_id');
        console.log(playid);
    if (userFanDian - fanDian > modeFanDian) {
        var pl = $('#fandian-value').data(),
            _amount = (pl.maxpl - pl.minpl) / $slider.attr('game-fan-dian') * modeFanDian + (pl.minpl - 0);
        alert(modeName[mode] + '模式最大奖金只能为' + _amount.toFixed(2));
        return false;
    }
    // 单笔中奖限额
    var maxZjAmount = $slider.data().betZjAmount;

    if (maxZjAmount) {
        if ($('#fandian-value').data('pl') * mode / 2 * ($('#beishu').val() || 1) > maxZjAmount) {
            alert('单笔中奖奖金不能超过' + maxZjAmount + '元');
            return false;
        }
    }
    $.ajax({
        url: '/index.php/Random/getlotteryrandom',
        type: 'GET',
        dataType: 'json',
        //async: false,
        data: {
            'playid' : playid
        },
        timeout: 30000,
        success: function (result) {
            var obj = $.parseJSON(result);
            try {
                $(".tzTrans-wrapper").css("top",0);
                var maxBetCount = $slider.data().betCount;
                if (maxBetCount && obj.actionNum > maxBetCount) {
                    alert('单笔投注注数最大不能超过' + maxBetCount + '注');
                    return false;
                }
                if (typeof obj != 'object') {
                    throw ('未知出错');
                } else {
                    gameAddCode(obj);
                }
            } catch(err) {
                alert(err);
            }
        }
    });
}