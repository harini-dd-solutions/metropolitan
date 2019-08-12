<?php
/**
 * The Header template for our theme
 */

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="cufon-active cufon-ready" <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font/font.css" type="text/css">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js"></script>
<style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/Robust_ICG_400.font.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cufon.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/form.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom-form-elements.js"></script><style type="text/css">input.styled { display: none; } select.styled { position: relative; width: autopx; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slides.min.jquery.js"></script>
<script type="text/javascript">
	jQuery(function(){
            jQuery('#slides').slides({
                play: 5000,
                pause: 5000,
                hoverPause: true
            });
        });

</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.infieldlabel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/calendar-brown.css"> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/calendar_stripped.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/calendar-en.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/calendar-setup_stripped.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" type="text/css" />
<!--[if IE ]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie-9.css" type="text/css" /><![endif]-->

</head>

<body <?php body_class(); ?>>

<div class="container">
  <div class="header"> 
    <a id="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    
      <?php //wp_nav_menu(array('theme_location'=>'primary', 'menu_class'=>'nav-menu')); ?>
<?php  $args = array(
  'theme_location'  => '',
 'container'       => '',
 'container_class' => '',
 'container_id'    => '',
 'menu_class'      => 'nav',
 'echo'            => true,
 'fallback_cb'     => 'wp_page_menu',
 'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
 'depth'           => 0,
 'walker'          => new Child_Wrap()
); ?>
<?php wp_nav_menu($args); ?>
    
