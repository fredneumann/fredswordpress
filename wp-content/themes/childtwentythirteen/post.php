<?php
/*
Single Post Template Name: Blog Unique Post
Template Post Type: blog post
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="fb-comments" data-href="<?php the_permalink(); ?> " data-numposts="5"></div>
		<div id="content" class="site-content" role="main">

			<?php /* The goofie */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>


			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>