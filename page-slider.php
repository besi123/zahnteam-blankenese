<?php
/**
 * Template Name: Slider
  **/
?>

<?php get_header(); ?>

<div class="row">
	<div class="medium-3 columns text-right">
	<h1 class="menu-name text-right"><span class="firstletter">W</span>ir <span class="firstletter">F</span>ür <span class="firstletter">S</span>ie</h1>
		<?php wp_nav_menu(); ?>
	</div>
	<div class="medium-6 columns">
		

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="slickslider">
			<?php while ( have_rows('slider') ) : the_row(); ?>
		
				<div>
					<img src="<?php the_sub_field('image')?>" alt="">
				</div>
		
			<?php endwhile; ?>
		</div>
			<div class="page-slider-content">
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; ?>

		
	</div>
	<div class="medium-3 columns text-left">
		<h1 class="menu-name text-left"><span class="firstletter">S</span>ervice <span class="firstletter">F</span>ür <span class="firstletter">S</span>ie</h1>
         <?php
			$args = array(
			 'menu' => 'menu-contact'
			);
			wp_nav_menu($args);
			?>
	</div>
</div>


<?php get_footer(); ?>
  