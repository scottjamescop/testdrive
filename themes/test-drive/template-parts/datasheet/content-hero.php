<?php
    $hero = get_field('hero');
    $hero_bg = ($hero["hero_background"]) ? $hero["hero_background"] : 'https://placehold.co/400';
    $hero_title = ($hero["hero_title"]) ? $hero["hero_title"] : "Hero Title";
    $hero_subtitle = ($hero["hero_subtitle"]) ? $hero["hero_subtitle"] : "Hero Subtitle";
?>

<div class="hero" style="background-image: url(<?php echo $hero_bg; ?>);">
    <div class="hero-content">
        <h1 class="hero-title"><?php echo $hero_title; ?></h1>
        <h2 class="hero-subtitle"><?php echo $hero_subtitle; ?></h2>
    </div>
</div>