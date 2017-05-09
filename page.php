<?php get_header(); ?>

<div class="row">
	<div class="medium-3 columns">
		<?php wp_nav_menu(); ?>
	</div>
	<div class="medium-6 columns">


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php while ( have_rows('team') ) : the_row(); ?>
				<img src="<?php the_sub_field('image') ?>" alt="">
				<h2><?php the_sub_field('name') ?></h2>
				<p><?php the_sub_field('description') ?></p>
			<?php endwhile; ?>

		<?php endwhile; endif; ?>

		
			
	</div>
	<div class="medium-3 columns">
		<h1 class="menu-name text-left"><span class="firstletter">S</span>ervice <span class="firstletter">F</span>ur <span class="firstletter">S</span>ie</h1>
         <?php
			$args = array(
			 'menu' => 'menu-contact'
			);
			wp_nav_menu($args);
			?>
	</div>
</div>


<?php get_footer(); ?>