<?php
/**
 * The template for displaying all pages, single posts and attachments
 *
 * This is a new template file that WordPress introduced in
 * version 4.3. Note that it uses conditional logic to display
 * different content based on the post type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stylumia WordPress Theme
 * @subpackage Templates
 * @version 0.0.1
 */

get_header(); ?>


<div class="singl_wrpr">    
    <?php // Start loop
        while ( have_posts() ) : the_post();
    ?>
    <div class="banner featured-image" style="background-image: url(<?php echo the_post_thumbnail_url();?>)">
		<div class="featured-caption">
			<h4 class="featured-caption-title"><?php  the_title(); ?></h4>
			<!-- <p class="featured-caption-desc">Skirts have always been a wardrobe staple for women. And as trends keep evolving, the skirt too has seen various adaptations in silhouettes and patterns.</p> -->
		</div>
    </div>
    <div class="container">
        <div id="single-page" class="content-area clr row">
            <!-- post content -->
            <div class="post_content col s12 m9 l8">
                <div class="right">
                    <?php
                        echo do_shortcode('[jmliker]');
                    ?>
                </div>
                <div class="post-date">posted on <?php echo get_the_date('F j, Y' ); ?></div>

                <div class="entry clr">
                    <?php the_content(); ?>
                </div><!-- .entry -->
            </div>

            <div class="col m3 l4 sidebar">
                <?php get_sidebar(); ?>
                <!-- <div class="recent_post_heading">
                    Recent Posts
                </div> -->
            </div>
        </div>
    </div>
    <?php endwhile; ?>     
</div>



<?php
    get_footer();
?>