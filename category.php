<?php get_header(); ?>
	<!-- hero -->
	<section class="hero">
		<h1 class="heading heading-secondary"><?php single_cat_title(); ?></h1>	
	</section>
	<main role="main">
		<!-- section -->
		<section>
			<div class="category--grid">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<<<<<<< HEAD
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- featured image -->
					<div class="category--featured-img">
						<img src="<?php
=======
				<article id="post-<?php the_ID(); ?>" <?php post_class('category--item'); ?>>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<!-- featured image -->
					<div class="category--item__img">
						<img src="<?php 
>>>>>>> b152a945450b948f467ab947e60e502cd12ea21c
							$featured_main = get_field( 'featured_main' );
							if ( $featured_main ) :
								echo $featured_main['url'];
							elseif (has_post_thumbnail()) :
								echo the_post_thumbnail_url();
							endif;
						?>">
					</div>
					<!-- post title -->
					<h2 class="heading category--item__title">
						<?php the_title(); ?>
					</h2>
					</a>
					<!-- /post title -->
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
