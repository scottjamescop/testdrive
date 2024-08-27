<?php
    $content = get_field('content');
    $content_title = ($content['content_title']) ? $content['content_title'] : 'Content Title';
    $content_body = ($content['content_body']) ? $content['content_body'] : 'Content Body';
?>

<div class="content">
    <div class="content-column content-title">
        <h2><?php echo $content_title; ?></h2>
    </div>
    <div class="content-column content-body">
        <?php echo $content_body; ?>
    </div>
</div>