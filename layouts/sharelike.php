<?php 

	/**
	 * sharelike
	 */

?>

<?php if ( akina_option('post_like') == 'yes') { ?>
<div class="post-like">
<a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="specsZan <?php if(isset($_COOKIE['specs_zan_'.get_the_ID()])) echo 'done';?>">
	<i class="iconfont">&#xe669;</i> <span class="count">
		<?php if( get_post_meta(get_the_ID(),'specs_zan',true) ){
			echo get_post_meta(get_the_ID(),'specs_zan',true);
		} else {
			echo '0';
		}?></span>
	</a>
</div>
<?php } ?>
<?php if ( akina_option('post_share') == 'yes') { ?>		
<div class="post-share">
	<ul class="sharehidden">
		<li><a href="http://api.addthis.com/oexchange/0.8/forward/wechat/offer?url=<?php the_permalink(); ?>&title=<?php the_title(''); ?>" onclick="window.open(this.href, 'renren-share', 'width=490,height=700');return false;" class="s-weixin"><img src="<?php bloginfo('template_url'); ?>/images/sns/wechat.png"/></a></li>
		<li><a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php the_permalink(); ?>&title=<?php the_title(''); ?>&desc=<?php the_excerpt(); ?>" onclick="window.open(this.href, 'qzone-share', 'width=730,height=500');return false;" class="s-qq"><img src="<?php bloginfo('template_url'); ?>/images/sns/qzone.png"/></a></li>
		<li><a href="http://v.t.sina.com.cn/share/share.php?url=<?php the_permalink(); ?>&title=<?php the_title(''); ?>" onclick="window.open(this.href, 'weibo-share', 'width=730,height=500');return false;" class="s-sina"><img src="<?php bloginfo('template_url'); ?>/images/sns/sina.png"/></a></li>
		<li><a href="http://www.douban.com/recommend/?url=<?php the_permalink(); ?>&title=<?php the_title(''); ?>" onclick="window.open(this.href, 'douban-share', 'width=730,height=500');return false;" class="s-douban"><img src="<?php bloginfo('template_url'); ?>/images/sns/douban.png"/></a></li>
	</ul>
	<i class="iconfont show-share">&#xe6eb;</i>
</div>
<?php } ?>