<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109818-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-109818-10');
</script>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<?php if (is_single()): ?>
<script type="text/javascript" async src="https://relap.io/api/v6/head.js?token=AXkB83fzosg1jktO"></script>
<?php endif; ?>
</head>
<body>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-18457303-3']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
<div id="page">
<div id="header">
<div id="headertitle">
<h1><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>: <?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
<p><?php bloginfo('description') ?></p>
</div>
<!-- Search box (If you prefer having search form as a sidebar widget, remove this block) -->
<div class="search">
<?php  include (TEMPLATEPATH . "/searchform.php"); ?>
</div>
<!-- Search ends here-->
</div>

<div id="navbar">
<ul id="nav">
	<li><a href="<?php echo get_settings('home'); ?>"><?php _e('Home') ?></a></li>
	<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order') ?>
	<li><a rel="nofollow" href="http://dotu.ru/2005/09/09/about_cob/">О КОБ вкратце</a></li>
</ul>
</div>
<div id="wrapper">
