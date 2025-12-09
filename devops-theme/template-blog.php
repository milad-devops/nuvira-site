<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        $args = array( 'post_type' => 'post' );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part( 'template-parts/content', get_post_format() );
            }
            the_posts_navigation();
        } else {
            get_template_part( 'template-parts/content', 'none' );
        }
        ?>
    </main>
</div>

<?php get_footer(); ?>
