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
            <div class="company-info row">
                <h1 class="company-info_name"><?php the_field( 'company_name' ); ?></h1>
                <h3 class="company-info_tagline"><?php the_field( 'tag_line' ); ?></h3>
                <p class="company-info_about text"><?php the_field( 'about_company' ); ?></p>
            </div>
            <div class="row">
                  <?php 
                    $images = get_field('front_page_gallery');
                    
                    if( $images ): ?>
                        <ul class="front-page-gallery">
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
		        $args = array(
                    'post_type' => 'portfolio_item',
                    'category_name' => 'latest-projects',
                );
                
                $the_query = new WP_Query($args);
                
                if($the_query->have_posts()): while($the_query->have_posts()):$the_query->the_post();

		    ?>
		    <h1 class="row"><?php the_field( 'title' ); ?></h1>
		    <div class="featured_main row">
		        <?php $featured_main = get_field( 'featured_main' ); ?>
                    <?php if ( $featured_main ) { ?>
                    	<img src="<?php echo $featured_main['url']; ?>" alt="<?php echo $featured_main['alt']; ?>" />
                    <?php } ?>
		    </div>
		    <div class="row">
		        <div class="main-home_one-col main-home_inset_to_right">
        		    <p><?php the_field( 'description' ); ?></p>
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