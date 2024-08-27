<?php 
    get_header();

    while(have_posts()) :
        the_post();

        if(get_field('hero')):
            get_template_part( 'template-parts/datasheet/content', 'hero' );
        endif;

        if(get_field('content')):
            get_template_part( 'template-parts/datasheet/content', 'body' );
        endif;

        if(get_field('modal')):
            get_template_part( 'template-parts/datasheet/content', 'modal' );
        endif;
    endwhile;

    get_footer();
?>
