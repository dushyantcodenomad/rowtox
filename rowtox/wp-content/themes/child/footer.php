<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<!--footer-->
	<section class="footer" id="footer">
	<p class="text-center">
		<a href="#banner" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
	</p>
	<div class="container">
	    <div class="row text-center">
		<div class="ft_lt">
		<?php //echo do_shortcode(' [shs_slider_show]')?></div>
	     <div class="ft_rt"> <?php dynamic_sidebar('Main Widget Area'); ?></div>
      </div>
      

      <p class="bft_para" style="margin-top:20px">©2015 ROWTOX. ALL RIGHTS RESERVED.</p>
		</div>
	</section>
	
</div><!--wrapper end-->
	

<!--Javascripts-->
<script src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/menustick.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/parallax.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/easing.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/smoothscroll.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/masonry.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/imgloaded.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/classie.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/colorfinder.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/gridscroll.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/contact.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/common.js"></script>



 <script>
$(function() {

       // grab the initial top offset of the navigation 
       var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;
       
       // our function that decides weather the navigation bar should have "fixed" css position or not.
       var sticky_navigation = function(){
               var scroll_top = $(window).scrollTop(); // our current vertical position from the top
               
               // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
               if (scroll_top > sticky_navigation_offset_top) { 
                       $('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0 });
               } else {
                       $('#sticky_navigation').css({ 'position': 'relative' }); 
               }   
       };
       
       // run our function on load
       sticky_navigation();
       
       // and run it again every time you scroll
       $(window).scroll(function() {
                sticky_navigation();
       });
       
       // NOT required:
       // for this demo disable all links that point to "#"
       $('a[href="#"]').click(function(event){ 
               event.preventDefault(); 
       });
       
});
</script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'specialties',
		  3: 'gallery',
		  4: 'feedback',
		  5: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
});
</script>

<script>
new WOW().init();
</script>
	<?php wp_footer(); ?>
</body>
</html>