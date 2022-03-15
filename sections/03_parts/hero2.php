<?php if( have_rows('hero') ): ?>
  <?php while( have_rows('hero') ): the_row(); ?>

  <?php
    $image = get_sub_field('image');
    $titel1 = get_sub_field('titel1');
    $titel2 = get_sub_field('titel2');
    $desc = get_sub_field('beschreibung');
  ?>

  <section data-scroll id="hero2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center"><?php echo $titel1; ?></h1>
          <h1 class="text-center load__effect">
            <?php echo $titel2; ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="430.906" height="283.707" viewBox="0 0 430.906 283.707">
              <defs>
                <style>
                .cls-1 {
                fill: none;
                stroke: #faaf3a;
                stroke-width: 5px;
                }
                </style>
              </defs>
              <path id="Pfad_495" data-name="Pfad 495" class="cls-1" d="M5040.446,504.668s-8.12-99.013,74.508-139.111,137.993-28.764,223.084-7.331,115.482,71.984,115.482,71.984S5493.181,499.86,5431.552,555s-143.245,65.212-177.681,61.932-190.355-10.718-185.746-151.891" transform="translate(-5037.699 -336.297)"/>
            </svg>
          </h1>
        </div>
      </div>
    </div>
    <div class="container-fluid hero__image">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-6 col-lg-8 col-12">
          <p class="text-center mx-auto">
            <?php echo $desc; ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php if ( $image ): ?>

    <?php
      $image_url = $image['url'];
      $image_alt = $image['alt']; ?>

    <section id="image" data-scroll>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img class="w-100" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt) ?>">
                </div>
            </div>
        </div>
    </section>

  <?php endif; ?>

  <style>
      #image {
          padding-bottom: 100px;
      }
  </style>
  <?php endwhile; ?>
<?php endif; ?>
