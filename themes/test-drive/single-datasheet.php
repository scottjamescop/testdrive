<?php 
get_header();

while (have_posts()) :
    the_post();

    $hero_image = get_field('hero_image');
    $hero_title = get_field('hero_title');
    $hero_content = get_field('hero_content');

    $modal_title = get_field('modal_title');
    $modal_content = get_field('modal_content');
?>

<section class="hero-section" style="background-image: url('<?php echo esc_url($hero_image); ?>');">
    <div class="hero-content">
        <h1><?php echo esc_html($hero_title); ?></h1>
        <p><?php echo wp_kses_post($hero_content); ?></p>
    </div>

    <div class="cta-button container text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#datasheetModal">
            Open Data
        </button>
    </div>
</section>

<div class="modal fade" id="datasheetModal" tabindex="-1" aria-labelledby="datasheetModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="datasheetModalLabel"><?php echo esc_html($modal_title); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo wp_kses_post($modal_content); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
endwhile;

get_footer();