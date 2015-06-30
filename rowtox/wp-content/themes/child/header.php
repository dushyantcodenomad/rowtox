<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory');?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/font-awesome.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/theme.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/hover.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/fontkit/stylesheet.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
	
	<script>
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#booknow" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
  </script>
	
	<?php wp_head(); ?>
	
</head>

<body >
	<!--div id="page" class="hfeed site"-->
		<!--header-->
	<header>
	<div class="banner row" id="banner">		
		<div class="parallax text-center"> 
			<div class="parallax-pattern-overlay">
				<div class="container text-center" style="height:618px;padding-top:170px;">
					<a href="#"><img id="site-title"  src="<?php bloginfo('template_directory');?>/images/logo.png" alt="logo"/></a>
					<div id="booknow" class="take-action ">
       <span  class="ft"><?php echo do_shortcode ('[AnythingPopup id="1"]')?></span>
      </div>
	  
	  <div class="hd_email">
	  <span class="em_nme_tp">EMAIL</span> <?php dynamic_sidebar('Secondary Widget Area'); ?>
				</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="menu">
		<div id="sticky_navigation" class="navbar-wrapper">
			<div class="container">
				<div class="navwrapper">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="cnt_mnu">
							<div class="navArea">
								<div class="navbar-collapse collapse">
								<ul>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
										<li class="menuItem icons">
										<?php dynamic_sidebar('SocialIcons Widget Area'); ?>
											
									  </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</header>

		<!--div id="main" class="site-main"-->
