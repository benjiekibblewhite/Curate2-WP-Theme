<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<h1><?php single_cat_title(); ?></h1>
			<div class="category--grid">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->
					<!-- featured image -->
					<div class="category--featured-img">
					<img src="<?php 
						$featured_main = get_field( 'featured_main' );
						if ( $featured_main ) :
							echo $featured_main['url'];
						elseif (has_post_thumbnail()) :
							echo the_post_thumbnail_url();
						endif;
					?>">
					</div>
				</article>
				<?php endwhile; ?>
				<?php else: ?>
					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->
				<?php endif; ?>
			</div>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
