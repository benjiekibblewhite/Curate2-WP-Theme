<?php get_header(); ?>
 <?php if (have_posts()): while (have_posts()) : the_post(); ?>
	    <section class="hero">
	        <?php if ( get_field( 'hero_image') ) { ?>
            	<img src="<?php the_field( 'hero_image' ); ?>" />
            <?php } ?>
	    </section>
	<main role="main" class="main-home">
		<!-- section -->
		<section class="main-home_intro">
		    <div class="row">
                <div class="greeting main-home_one-col"><p class="text"><?php the_field( 'intro_text' ); ?></p></div>
                <div class="headshot main-home_one-col">
                    <?php if ( get_field( 'headshot') ) { ?>
                    	<img src="<?php the_field( 'headshot' ); ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="company-info">
                    <h1 class="company-info_name heading heading-main"><?php the_field( 'company_name' ); ?></h1>
                    <h3 class="company-info_tagline heading heading-tagline"><?php the_field( 'tag_line' ); ?></h3>
                    <p class="company-info_about text"><?php the_field( 'about_company' ); ?></p>
                </div>
            </div>
            <div>
                  <?php 
                    $images = get_field('front_page_gallery');
                    
                    if( $images ): ?>
                        <ul class="front-page-gallery row">
                            <?php foreach( $images as $image ): ?>
                                <li class="main-home_one-col">
                                         <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
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
		        $post_type = 'portfolio_item';
		        $category_id = 2;
	            $category_link = get_category_link( $category_id );
		        $args = array(
                    'post_type' => $post_type,
                    'category' => $category_id,
                    'tag' => 'featured',
                );
                
                $the_query = new WP_Query($args);
                
                if($the_query->have_posts()): while($the_query->have_posts()):$the_query->the_post();

		    ?>
		    <div class="featured_main row">
		        <?php $featured_main = get_field( 'featured_main' ); ?>
                    <?php if ( $featured_main ) { ?>
                    	<img src="<?php echo $featured_main['url']; ?>" alt="<?php echo $featured_main['alt']; ?>" />
                    <?php } ?>
		    </div>
		    <div class="row">
		        <div class="main-home_one-col main-home_inset_to_right featured-text">
        		    <h1 class="heading heading-secondary">Latest Projects</h1>
        		    <h3 class="heading heading-tagline"><?php the_title(); ?></h3>
        		    <a class="seemore" href="<?php echo esc_url( $category_link ); ?>">See More</a>
    		    </div>
    		    <div class="main-home_one-col main-home_inset_right">
    		        <?php $featured_secondary = get_field( 'featured_secondary' ); ?>
                        <?php if ( $featured_secondary ) { ?>
                        	<img src="<?php echo $featured_secondary['url']; ?>" alt="<?php echo $featured_secondary['alt']; ?>" />
                        <?php } ?>
                </div>
		    </div>
		    <?php endwhile; endif; ?>
		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>