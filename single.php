<?php get_header(); ?>

<div class="row singlepage">
	<div class="row">
		<div class="medium-3 columns">
			<?php wp_nav_menu(); ?>
		</div>
		<div class="medium-6 columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		<div class="row">
			<div class="small text-center">
				<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
						} ; ?>
			

			<h1><?php the_title(); ?></h1>
			

			<article><?php the_content(); ?></article>

			</div>
		</div>
			
			<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		</div>
		<div class="medium-3 columns">
			
		</div>
	</div>
</div>

<?php get_footer(); ?>