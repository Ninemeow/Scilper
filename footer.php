<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akina
 */

?>
</div><!-- #content -->
<?php
if (akina_option('general_disqus_plugin_support')) {
    get_template_part('layouts/duoshuo');
} else {
    comments_template('', true);
}
?>
</div><!-- #page Pjax container-->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <div class="footertext">
            <p class="foo-logo"
               style="background-image: url('<?php bloginfo('template_url'); ?>/images/f-logo.png');"></p>
            <div class="footer-device"><?php echo akina_option('admin_des', ''); ?></div>
        </div>
        <!--显示底部加载所用时间-->
        <?php if (akina_option('load-timeshow') != '0') { ?>
            <div class="footer-device" id="TimeShow"></div>
        <?php } ?>
        <!--显示网站已运行多长时间-->
        <?php if (akina_option('web_runtime') != '0') {
            $web_buildtime = akina_option('web_buildtime');
            ?>
            <div class="footer-device">
                <span id="span_dt_dt"></span>
                <script type="text/javascript">
                    function show_date_time() {
                        window.setTimeout("show_date_time()", 1000);
                        BirthDay = new Date("<?php echo $web_buildtime;?>");//这个日期是可以修改的
                        today = new Date();
                        timeold = (today.getTime() - BirthDay.getTime());
                        sectimeold = timeold / 1000
                        secondsold = Math.floor(sectimeold);
                        msPerDay = 24 * 60 * 60 * 1000
                        e_daysold = timeold / msPerDay
                        daysold = Math.floor(e_daysold);
                        e_hrsold = (e_daysold - daysold) * 24;
                        hrsold = Math.floor(e_hrsold);
                        e_minsold = (e_hrsold - hrsold) * 60;
                        minsold = Math.floor((e_hrsold - hrsold) * 60);
                        seconds = Math.floor((e_minsold - minsold) * 60);
                        span_dt_dt.innerHTML = " <?php bloginfo('name');?>已经勉强存活了：" + daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒";
                    }

                    show_date_time();
                </script>
            </div>
        <?php } ?>
        <div class="footer-device"><?php echo akina_option('footer_info', ''); ?></div>
        <div class="footer-device">
            <?php
            $statistics_link = akina_option('site_statistics_link') ? '<a href="' . akina_option('site_statistics_link') . '" target="_blank" rel="nofollow">Statistics</a>' : '';
            $site_map_link = akina_option('site_map_link') ? '<a href="' . akina_option('site_map_link') . '" target="_blank" rel="nofollow">Sitemap</a>' : '';
            printf(esc_html__('%1$s &nbsp; %2$s &nbsp; %3$s &nbsp; %4$s', 'akina'), $site_map_link, '<a href="http://i94.me" rel="designer" target="_blank" rel="nofollow">Theme</a>', '<a href="https://wordpress.org/" target="_blank" rel="nofollow">WordPress</a>', $statistics_link);
            ?>
        </div>
        <div class="footer-device"><?php echo akina_option('copyrightlink') ? '<a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow">' . akina_option('copyrightlink') . '</a>' : ''; ?></div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
<div class="openNav">
    <div class="iconflat">
        <div class="icon"></div>
    </div>
    <div class="site-branding">
        <?php if (akina_option('akina_logo')) { ?>
            <div class="site-title"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo akina_option('akina_logo'); ?>"></a></div>
        <?php } else { ?>
            <h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } ?>
    </div>
</div><!-- m-nav-bar -->
</section><!-- #section -->
<!-- m-nav-center -->
<div id="mo-nav">
    <div class="m-avatar">
        <?php $ava = akina_option('focus_logo') ? akina_option('focus_logo') : get_template_directory_uri() . '/images/avatar.jpg'; ?>
        <img src="<?php echo $ava ?>">
    </div>
    <div class="m-search">
        <form class="m-search-form" method="get" action="<?php echo home_url(); ?>" role="search">
            <input class="m-search-input" type="search" name="s" placeholder="<?php _e('搜索...', 'akina') ?>" required>
        </form>
    </div>
    <?php wp_nav_menu(array('depth' => 2, 'theme_location' => 'primary', 'container' => false)); ?>
</div><!-- m-nav-center end -->
<a href="#" class="cd-top"></a>
<!-- search start -->
<form class="js-search search-form search-form--modal" method="get" action="<?php echo home_url(); ?>" role="search">
    <div class="search-form__inner">
        <div>
            <p class="micro mb-"><?php _e('输入后按回车搜索 ...', 'akina') ?></p>
            <i class="iconfont">&#xe65c;</i>
            <input class="text-input" type="search" name="s" placeholder="<?php _e('Search', 'akina') ?>" required>
        </div>
    </div>
    <div class="search_close"></div>
</form>
<!-- search end -->

<!-- page loading -->
<div id="loading">
    <div id="loading-center-absolute">
			<span class="heartbeat-loader">Loading&#8230;</span>
			<p>正在玩命加载中...</p>
    </div>
</div>

<?php wp_footer(); ?>
<?php if (akina_option('site_statistics')) { ?>
    <div class="site-statistics">
        <script type="text/javascript"><?php echo akina_option('site_statistics'); ?></script>
    </div>
<?php } ?>

<!-- 波浪动画 -->
<?php if (akina_option('focus_canvas_animinte') == 'waveloop') { ?>
    <script>
        $(function () {
            //底部波浪动画
            function waveloop1() {
                $("#banner_bolang_bg_1").css({"left": "-236px"}).animate({"left": "-1233px"}, 25000, 'linear', waveloop1);
            }

            function waveloop2() {
                $("#banner_bolang_bg_2").css({"left": "0px"}).animate({"left": "-1009px"}, 60000, 'linear', waveloop2);
            }

            //循环播放
            if (screen && screen.width > 480) {
                waveloop1();
                waveloop2();
            }
        });
    </script>
<?php } ?>

<!-- 气泡动画 -->
<?php if (akina_option('focus_canvas_animinte') == 'bubble') { ?>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/bubble.js"></script>
    <script>
        $(document).ready(function () {
            $(".bubble").show();
        });
    </script>
<?php } ?>

<!-- 引入峰窝canvas 如果屏幕大于480的话 -->
<?php if (akina_option('canvas_nest') != '0') { ?>
    <script>
        if (screen && screen.width > 480) {
            document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/canvas-nest.min.js" type="text/javascript"><\/script>');
        }
    </script>
<?php } ?>

<!-- nprogress进度条加载 -->
<?php
if (akina_option('progress_type') == 'loadprogress') { ?>
    <script>
        $('body').show();
        $('.version').text(NProgress.version);
        NProgress.start();
        setTimeout(function () {
            NProgress.done();
            $('.fade').removeClass('out');
        }, 1000);
    </script>
<?php } ?>

</body>
</html>