<?php
  $content = get_field('mission');
  if ( $content ):
?>

<section data-scroll data-scroll-speed="0.5" id="mission">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2><?php echo $content; ?></h1>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>
