<?php 
    get_header();

    while(have_posts()) :
        the_title();
        the_post();
        the_content();
    endwhile;

    get_footer();
?>
