<?php if( have_rows('about') ): ?>
  <?php while( have_rows('about') ): the_row(); ?>

  <?php
    $titel = get_sub_field('titel');
    $content = get_sub_field('content');
  ?>

  <section id="story" data-scroll>
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="col-lg-10 col-12">
              <?php if ( $titel ): ?>

                <h2 class="text-center text-white"><?php echo $titel ?></h2>

              <?php endif; ?>
              <?php if ( $content ) :?>

                  <p class="text-center mx-auto text-white"><?php echo $content; ?></p>

              <?php endif; ?>

              </div>
          </div>
      </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('highlight') ): ?>
  <?php while( have_rows('highlight') ): the_row(); ?>

  <?php
    $image1 = get_sub_field('image1');
    $image2 = get_sub_field('image2');
    $content = get_sub_field('content');
  ?>

<section id="history">
    <div data-scroll data-scroll-speed="-1.5" class="container">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="topic__container second">
            <div class="image__container">

              <?php if ( $image1 ): ?>
                <?php
                  $image1_url = $image1['url'];
                  $image1_alt = $image1['alt'];
                ?>

                <img class="topic__image" src="<?php echo esc_url($image1_url) ?>" alt="<?php echo esc_attr($image1_alt) ?>">

              <?php endif; ?>

            </div>
            <div class="text__container d-block d-md-none">

              <?php if ( $content ): ?>

                <h2 class="text-white"><?php echo $content; ?></h2>

              <?php endif; ?>

            </div>
          </div>
        </div>
        <div class=" col-md-6 col-12">
          <div class="topic__container">
            <div class="image__container">

              <?php if ( $image2 ): ?>
                <?php
                  $image2_url = $image2['url'];
                  $image2_alt = $image2['alt'];
                ?>

                <img class="topic__image" src="<?php echo esc_url($image2_url) ?>" alt="<?php echo esc_attr($image2_alt) ?>">

              <?php endif; ?>

            </div>
            <div class="text__container d-none d-md-block">

              <?php if ( $content ): ?>

                <h2 class="text-white"><?php echo $content; ?></h2>

              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
      #topic {
          padding-bottom: 300px;
      }
  </style>

  <?php endwhile; ?>
<?php endif; ?>
