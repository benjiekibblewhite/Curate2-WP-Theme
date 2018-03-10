<?php get_header(); ?>
 <?php if (have_posts()): while (have_posts()) : the_post(); ?>
	    <section class="hero">
	        <?php if ( get_field( 'hero_image') ) { ?>
            	<img src="<?php the_field( 'hero_image' ); ?>" />
            <?php } ?>
	    </section>
	<main role="main">
		<!-- section -->
		<section>
            <div class="intro"><?php the_field( 'intro_text' ); ?></div>
            <div class="headshot">
                <?php if ( get_field( 'headshot') ) { ?>
                	<img src="<?php the_field( 'headshot' ); ?>" />
                <?php } ?>
            </div>
            <div class="company-info">
                <h1><?php the_field( 'company_name' ); ?></h1>
                <h3><?php the_field( 'tag_line' ); ?></h3>
                <p><?php the_field( 'about_company' ); ?></p>
            </div>
            <div class="front-page-gallery">
                  <?php 
                    $images = get_field('front_page_gallery');
                    
                    if( $images ): ?>
                        <ul>
                            <?php foreach( $images as $image ): ?>
                                <li>
                                    <a href="<?php echo $image['url']; ?>">
                                         <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </a>
                                    <p><?php echo $image['caption']; ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
    		    <?php endwhile; endif; ?>
            </div>
		</section>
		<!-- /section -->
		<section>
		    <?php 
		        $args = array(
                    'post_type' => 'portfolio_item',
                );
                
                $the_query = new WP_Query($args);
                
                if($the_query->have_posts()): while($the_query->have_posts()):$the_query->the_post();

		    ?>
		    <h1><?php the_field( 'title' ); ?></h1>
		    <?php 
                $images = get_field('gallery');
                
                if( $images ): ?>
                    <ul>
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>">
                                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                                <p><?php echo $image['caption']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
		    <p><?php the_field( 'description' ); ?></p>
		    <?php endwhile; endif; ?>
		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>