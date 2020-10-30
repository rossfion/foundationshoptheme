<?php get_header(); ?>

<?php if (is_active_sidebar('showcase')) : ?>
    <div class="row showcase">
        <div class="large-12 columns">
            <div class="callout secondary">
                <?php dynamic_sidebar('showcase'); ?>
            </div><!-- .callout secondary -->
        </div><!-- .large-12 columns -->
    </div><!-- .row showcase -->
<?php endif; ?>

<div class="row">
    <div class="large-8 medium-8 columns">
        <div class="products row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="large-4 medium-4 small-12 columns product end">
                        <h3><?php the_title(); ?></h3>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
						<h3>$9.99</h3>
                        <a class="button" href="<?php echo the_permalink(); ?>">Details</a>
                    </div><!-- .large-4 medium-4 small-12 columns product end -->	
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