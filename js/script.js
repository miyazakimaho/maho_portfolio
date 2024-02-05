jQuery(function(){
    // // カルーセル
    jQuery('.mv-carousel').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        autoplaySpeed: 5000,
        arrows: false,
    });

    jQuery('.works-carousel').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        autoplaySpeed: 5000,
        arrows: false,
    });
});

jQuery(function(){
    // hamburger
    jQuery('.hamburger').on('click', function() {
        hamburger();
    });

    jQuery('.menu a').on('click', function() {
        hamburger();
    });

    jQuery(window).scroll(function() {
        // スクロール位置を取得
        let scroll = jQuery(window).scrollTop();
    
        /*=================================================
        ロゴ、ハンバーガーメニューの表示
        ===================================================*/
        // スクロール位置が520pxを超えた場合
        if (scroll > 520) {
            // ロゴとハンバーガ―メニュをfadeInで表示する
            jQuery('#contact-btn').fadeIn(500);
            jQuery('.menu li').fadeIn(500);
        // スクロール位置が520px未満の場合
        } else {
            // ロゴとハンバーガ―メニュをfadeOutで非表示にする
            jQuery('#contact-btn').fadeOut(500);
            jQuery('.menu li').fadeOut(500);
        }
    });

    jQuery(".inview").on("inview", function (event, isInView) {
        if (isInView) {
          // 要素（inviewクラス）が表示されたらshowクラスを追加する
          jQuery(this).stop().addClass("show");
        }
      });
})

// hamburger共通処理
function hamburger() {
    jQuery('.hamburger').toggleClass('active');

    if (jQuery('.hamburger').hasClass('active')) {
        jQuery('.nav-list').addClass('active');
    } else {
        jQuery('.nav-list').removeClass('active');
    }
}

// scroll時のheader背景変更
jQuery(function () {
    jQuery(window).on('scroll', function () {
        const sliderHeight = jQuery("#mv-img").height();
        if ( sliderHeight < jQuery(this).scrollTop()) {
            jQuery('#container').addClass('change-color');
        } else {
            jQuery('#container').removeClass('change-color');
        }
    });
});