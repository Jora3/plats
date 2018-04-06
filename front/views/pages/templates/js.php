<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 18:28
 */
?>
<script src="<?php echo $baseUrl ?>/front/views/assets/js/jquery.js"></script>
<script src="<?php echo $baseUrl ?>/front/views/assets/js/jquery-migrate-1.1.1.js"></script>
<script src="<?php echo $baseUrl ?>/front/views/assets/js/superfish.js"></script>
<script src="<?php echo $baseUrl ?>/front/views/assets/js/jquery.easing.1.3.js"></script>
<script src="<?php echo $baseUrl ?>/front/views/assets/js/sForm.js"></script>
<script src="<?php echo $baseUrl ?>/front/views/assets/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="<?php echo $baseUrl ?>/front/views/assets/js/tms-0.4.1.js"></script>
<script>
    $(window).load(function(){
        $('.slider')._TMS({
            show:0,
            pauseOnHover:false,
            prevBu:'.prev',
            nextBu:'.next',
            playBu:false,
            duration:800,
            preset:'fade',
            pagination:true,//'.pagination',true,'<ul></ul>'
            pagNums:false,
            slideshow:8000,
            numStatus:false,
            banners:false,
            waitBannerAnimation:false,
            progressBar:false
        })
    });

    $(window).load (
        function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
            visible : {min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,

        }, responsive: false,

            scroll: 1,

            mousewheel: false,

            swipe: {onMouse: false, onTouch: false}});


        });

</script>
