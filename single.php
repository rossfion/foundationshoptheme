<?php get_header(); ?>

<hr />

<div class="row">
    <div class="large-8 medium-8 columns">
        <div class="products row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row single-product">
                        
                        <div class="large-5 columns">
                            <a href="<?php echo site_url(); ?>">Go Back</a>
                            <br />
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div><!-- .large-5 columns -->
                        
                        <div class="large-7 columns">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
							<h4>$9.99</h4>
							<button class="button">Buy Now</button>
                            <hr />
                            <?php if (the_tags()) : ?>
                                <?php if (function_exists('the_tags')) { ?>
                                    <strong>Tags: </strong><?php the_tags('', ', ', ''); ?><br /><?php } ?>
                            <?php endif; ?>
                        </div><!-- .large-7 columns -->
                        
                    </div><!-- .row single-product -->
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- .products row -->
    </div><!-- .large-8 medium-8 columns-->

    <div class="large-4 medium-4 columns">
        <?php if (is_active_sidebar('showcase')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div><!-- .large-4 medium-4 columns-->
</div><!-- .row --> 

<?php get_footer(); ?>