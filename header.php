<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akina
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title itemprop="name">
			<?php global $page, $paged;
        wp_title('-', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) echo " - $site_description";
        if ($paged >= 2 || $page >= 2) echo ' - ' . sprintf(__('第 %s 页'), max($paged, $page)); 
			?>
    </title>

    <!--网站标题自动判断	设置/*-->
    <?php if (akina_option('web_title') != '0') {
        $onblur_text = akina_option('onblur');
        $onfocus_text = akina_option('onfocus');
        ?>

        <script type="text/javascript">
            var title = document.title;
            // window 失去焦点
            window.onblur = function () {
                document.title = '<?php echo $onblur_text;?>';
            };
            // window 获得焦点
            window.onfocus = function () {
                document.title = '<?php echo $onfocus_text;?>';
                setTimeout("document.title=title", 3000);
            }
        </script>

    <?php } ?>

		<?php
		if ( akina_option('progress_type') == 'loadprogress') { ?>
			<script src="<?php bloginfo('template_url'); ?>/js/nprogress.js"></script>
		<?php }?>

    <?php
    if (akina_option('akina_meta') == true) {
        $keywords = '';
        $description = '';
        if (is_singular()) {
            $keywords = '';
            $tags = get_the_tags();
            $categories = get_the_category();
            if ($tags) {
                foreach ($tags as $tag) {
                    $keywords .= $tag->name . ',';
                };
            };
            if ($categories) {
                foreach ($categories as $category) {
                    $keywords .= $category->name . ',';
                };
            };
            $description = mb_strimwidth(str_replace("\r\n", '', strip_tags($post->post_content)), 0, 240, '…');
        } else {
            $keywords = akina_option('akina_meta_keywords');
            $description = akina_option('akina_meta_description');
        };
        ?>
        <meta name="description" content="<?php echo $description; ?>"/>
        <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <?php } ?>
    <link rel="shortcut icon" href="<?php echo akina_option('favicon_link', ''); ?>"/>
    <?php wp_head(); ?>
    <script type="text/javascript">
        var t1 = new Date().getTime();
        if (!!window.ActiveXObject || "ActiveXObject" in window) { //is IE?
            alert('请抛弃万恶的IE系列浏览器吧！');
        }
        ;
    </script>

    <!--/*阅读进度条js*/-->
    <?php
    if (akina_option('progress_type') == 'readprogress') { ?>
        <script type="text/javascript">
            document.onscroll = function () {
                var scrollDistance = getScrollTop();
                var pxx = scrollAct(scrollDistance)
                document.getElementById("readprogress").style.width = pxx;
            }

            function scrollAct(insetOff) {
                var webHeight = document.body.scrollHeight - window.innerHeight;
                var p = (insetOff / webHeight ) * 100;
                return p.toString() + "%";
            }

            function getScrollTop() {
                var scrollPos;
                if (window.pageYOffset) {
                    scrollPos = window.pageYOffset;
                }
                else if (document.compatMode && document.compatMode != 'BackCompat') {
                    scrollPos = document.documentElement.scrollTop;
                }
                else if (document.body) {
                    scrollPos = document.body.scrollTop;
                }
                return scrollPos;
            }
        </script>
    <?php } ?>

		<script type="text/javascript">
		function rbq() { 
				var audio = document.createElement('audio');
				var body = document.body;
				audio.autoplay = true;
				body.appendChild(audio);
				audio.addEventListener('ended', function() {
						body.removeChild(audio);  // 播放完毕后从HTML中删除该音频
				}, false);
		};
		</script>

		<!--[if lt IE 8]>
			<div class="old-browser">
				<a href="http://browsehappy.com/">
					<img src="<?php bloginfo('template_url'); ?>/images/older-browsers.png" alt="您的浏览器版本过低，为了保障您的访问安全，以及获得更友好的用户体验，建议您升级您的浏览器到最新版本。">
				</a>
			</div>
		<![endif]-->

	</head>
<body <?php body_class(); ?>>

<!--/*阅读进度条布局*/-->

<?php
if ( akina_option('progress_type') == 'readprogress') { ?>
<div id="readprogress"></div>
<?php }?>

	<section id="main-container">

		<?php 
		if(!akina_option('head_focus')){ 
		$filter = akina_option('focus_img_filter');
		?>
		<div id="large-header" class="headertop large-header <?php echo $filter; ?>">
			<?php get_template_part('layouts/imgbox'); ?>
			<?php if (akina_option('focus_canvas_animinte') == 'bubble'){ ?>
				<canvas id="bubble-canvas" class="bubble"></canvas>
			<?php } ?>
		</div>	
		<?php } ?>
		<div id="page" class="site wrapper">
			<header class="site-header" role="banner">
				<div class="site-top">
					<div class="site-branding">
						<?php if (akina_option('akina_logo')){ ?>
						<div class="site-title"><a href="<?php bloginfo('url');?>" ><img class="tiaodan" OnMouseOver="rbq()" src="<?php echo akina_option('akina_logo'); ?>"></a></div>
						<?php }else{ ?>
						<h1 class="site-title"><a href="<?php bloginfo('url');?>" ><?php bloginfo('name');?></a></h1>	
						<?php } ?><!-- logo end -->
					</div><!-- .site-branding -->
					<?php header_user_menu(); if(akina_option('top_search') == 'yes') { ?>
					<div class="searchbox"><i class="iconfont js-toggle-search iconsearch">&#xe65c;</i></div>
					<?php } ?>
					<div class="lower"><?php if(!akina_option('shownav')){ ?>
						<div id="show-nav" class="showNav">
							<div class="line line1"></div>
							<div class="line line2"></div>
							<div class="line line3"></div>
						</div><?php } ?>
						<nav><?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?></nav><!-- #site-navigation -->
					</div>	
				</div>
			</header><!-- #masthead -->
			<?php the_headPattern(); ?>
		    <div id="content" class="site-content">