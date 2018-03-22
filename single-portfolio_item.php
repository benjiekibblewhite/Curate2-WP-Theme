<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="hero">
		<h1 class="heading heading-secondary">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
            </a>
        </h1>
	</section>
	<main role="main">
	<!-- section -->
	<section>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); // Dynamic Content ?>
            <p class="portfolio-single--description"><?php the_field( 'description' ); ?></p>
            <?php
                $images = get_field('gallery');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)

                if( $images ): ?>
                    <section class="portfolio-single--gallery">
                        <?php foreach( $images as $image ): ?>
                            <div class="portfolio-single--gallery__image">
                                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                             </div>
                        <?php endforeach; ?>
                    </section>
                <?php endif; ?>
			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
