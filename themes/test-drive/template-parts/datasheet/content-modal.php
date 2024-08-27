<?php
    $modal = get_field('modal');
    $modal_content = ($modal["modal_content"]) ? $modal["modal_content"] : "Content Here";
    $cta_text = ($modal["cta_text"]) ? $modal["cta_text"] : "Click Me!";
    $cta_mediatext = ($modal["cta_mediatext"]) ? $modal["cta_mediatext"] : "";
?>

<dialog id="datasheetModal">
  <p><?php echo $modal_content; ?></p>
  <button autofocus id="datasheetModalClose">Close</button>
</dialog>

<div class="cta" style="background-image: url(<?php echo $cta_mediatext; ?>);">
    <div class="cta-content">
      <h2 class="">READY TO EXPLORE?</h2>
      <button id="datasheetModalCta">
          <?php echo $cta_text; ?>
      </button>
    </div>
</div>
