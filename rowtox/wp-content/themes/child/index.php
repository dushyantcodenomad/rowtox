<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<!--about us-->
	<section class="aboutus" id="aboutus">
	<div class="container">
		<div class="heading text-center">
		<?php dynamic_sidebar('Heading1 Widget Area'); ?>
		</div>			
		<div class="row">
				<?php
query_posts('cat=3&order=asc');

if (have_posts()) {
	while (have_posts()) {
		the_post();
//the_title();
the_content();
the_post_thumbnail();
	}
}

wp_reset_query();

?>
			</div>
	<div class="clear"></div>		
		</div>
		<!--div class="abt_join">
		<div class=" text-center">
		<?php //dynamic_sidebar('Join1 Widget Area'); ?>
        </div>
		</div>
		 <!--div class="col-sm-offset-1">   
        <!-- Begin Signup Form -->
        <!--div id="frm_signup">

        <div class="frm_group">
			       <span class="em_nme">EMAIL ADDRESS*</span> <?php //dynamic_sidebar('Secondary Widget Area'); ?>
       
		</div>
		</div>
	</div-->
	</div>
	</section>
	
<!-------sep_img1----->
	<section class="alternate alternate-one">
  <div class="img_container">
    <?php dynamic_sidebar('ImageText1 Widget Area'); ?>
 
  </div>
</section><!---sep_img end---->
	
<!--Why ROWTOX-->
	<section class="specialties benefit" id="whyrowtox">
	<?php
query_posts('page_id=8');

if (have_posts()) {
	while (have_posts()) {
		the_post();
//the_title();
the_content();
the_post_thumbnail();
	}
}

wp_reset_query();

?>
	</section>
	
<!-------sep_img2---->
	<section class="alternate alternate-two">
  <div class="img_container">
    <?php dynamic_sidebar('ImageText2 Widget Area'); ?>
 
  </div>
</section><!---sep_img end---->
	
<!--classes-->
	<section class="gallery classes" id="classes">
	<?php
query_posts('page_id=10');

if (have_posts()) {
	while (have_posts()) {
		the_post();
//the_title();
the_content();
//the_post_thumbnail();
	}
}

wp_reset_query();

?>
	</section>

<!-------sep_img3---->
	<section class="alternate alternate-three">
  <div class="img_container">
    <?php dynamic_sidebar('ImageText3 Widget Area'); ?>
      
 
  </div>
</section><!---sep_img end---->
	
<!--FAQ-->
	<section class="faq" id="faq">
	<?php
query_posts('page_id=12');

if (have_posts()) {
	while (have_posts()) {
		the_post();
//the_title();
the_content();
//the_post_thumbnail();
	}
}

wp_reset_query();

?>
	</section>	

<!-------sep_img4---->
	<section class="alternate alternate-four">
  <div class="img_container">
    <?php dynamic_sidebar('ImageText4 Widget Area'); ?>
 
  </div>
</section><!---sep_img end---->

<section class="specialties location" id="location">
	 <?php dynamic_sidebar('Map Widget Area'); ?>
	</section>
<div class="clear"></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
