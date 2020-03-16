$(function () {
    // 在jQuery中如果需要值行動化，建議在執行動畫前先調用stop方法，然後再執行動畫
    // 1.監聽一級菜單的移入事件
    $('.title>li').mouseenter(function () {
        // 1.1拿到二級菜單
        var $sub = $(this).children('.sub');
        // 停止當前正在運行的動畫
        $sub.stop();
        // 1.2讓二級菜單展開
        $sub.slideDown(200);
    });
    // 2.監聽一級菜單的移出事件
    $('.title>li').mouseleave(function () {
        var $sub = $(this).children('.sub');
        // 停止當前正在運行的動畫
        $sub.stop();
        // 1.2讓二級菜單收起
        $sub.slideUp(200);
    });
});