<?php get_header(); ?>


<div class="row">
	<div class="span8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Page template -->
		  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
		  <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    	  <hr>


		<?php endwhile; else: ?>
		  <p><?php _e('Sorry, There are no posts.'); ?></p>
		<?php endif; ?>

	</div>
	<div class="span4">
		<!-- Side bar content -->
		<h2>Sidebar</h2>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>