<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="entry-header clearfix">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php if ( is_single() ) { ?>
                    <p>by <?php echo get_the_author(); ?></p>
                <?php } elseif (is_front_page()) {?>
                    <p><?php bloginfo('description'); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>