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
