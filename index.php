<?php
// Main Tempate file
    get_header();
?>


<div class="main-content-width-wrapper">

    <div class="banner featured-image">
		<div class="featured-caption">
			<h4 class="featured-caption-title">Soaring skirt trends for SS-17</h4>
			<p class="featured-caption-desc">Skirts have always been a wardrobe staple for women. And as trends keep evolving, the skirt too has seen various adaptations in silhouettes and patterns.</p>
		</div>
    </div>

    <div class="filter-wrapper">
        <ul id="filters">
            <li><a href="#" data-filter="*" class="selected">All</a></li>
            <?php 
                $terms = get_terms("category"); // get all categories, but you can use any taxonomy
                $count = count($terms); //How many are they?
                if ( $count > 0 ){  //If there are more than 0 terms
                    foreach ( $terms as $term ) {  //for each term:
                        echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
                        //create a list item with the current term slug for sorting, and name for label
                    }
                } 
            ?>
        </ul>
    </div>

    <main class="main-content container">
        <div id="blog-grid" class="row">
            <?php
            // the query to set the posts per page to 3
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('posts_per_page' => 3, 'paged' => $paged );
                query_posts($args);
                // Start the loop
                if (have_posts()) :
                    while (have_posts()) : the_post(); 
                    $termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
                    $image = get_field('thumbnail_image');                    
                    $termsString = ""; //initialize the string that will contain the terms
                    foreach ( $termsArray as $term ) { // for each term 
                        $termsString .= $term->slug.' '; //create a string that has all the slugs 
                    }
                    ?>
                        <div class="col s12 m6 l4 <?php echo $termsString; ?> post-item">
                                <div class="card">
                                <a href="<?php echo get_the_permalink()?>">
                                    <div class="card-image">
                                        <img src="<?php echo $image['url']; ?>">
                                    </div>
                                    <div class="card-content">
                                        <div class="date"><?php echo get_the_date('M j' ); ?></div>
                                        <span class="card-title"><?php  the_title(); ?></span>
                                        <p><?php  echo wp_trim_words( get_the_content(), 20, ' ...' ); ?></p>
                                    </div>
                            </a>      
                                    
                                    <div class="card-action">
                                        <?php
                                            echo do_shortcode('[jmliker]');
                                        ?>
                                        <a class="read-more" href="<?php echo get_the_permalink()?>">read more</a>
                                    </div> 
                                </div> 
                        </div>
                    <?php
                        endwhile;
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'stylumiablog' ),
                            'next_text'          => __( 'Next page', 'stylumiablog' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'stylumiablog' ) . ' </span>',
                        )); 
                        endif;
                    ?>

                    <div class="page-load-status">
                        <p class="infinite-scroll-request">
                            <image src="<?php echo get_bloginfo('template_url') ?>/images/imageloader.gif" width="100px"></image>
                            <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i> -->
                        </p>
                        <p class="infinite-scroll-last">That's it for now, come back for more updates <br> till then, checkout our <a href="https://www.stylumia.com/products">Products</a></p>
                        <p class="infinite-scroll-error">No more pages to load</p>
                    </div>
        </div>
    </main>

</div>


<?php
    get_footer();
?>