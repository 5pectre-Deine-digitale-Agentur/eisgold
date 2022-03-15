<?php if( have_rows('icons') ): ?>
  <?php while( have_rows('icons') ): the_row(); ?>

  <?php
    $title = get_sub_field('titel');
  ?>

  <section id="icons" data-scroll>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-12">
          <h2 class="title"><?php echo $title; ?></h2>
        </div>
        <div class="col-lg-8 col-12">
          <div class="row">

            <?php if( have_rows('values') ): ?>
              <?php while( have_rows('values') ): the_row(); ?>

              <?php
                $value = get_sub_field('value');
                $icon = get_sub_field('icon');
                $desc = get_sub_field('beschreibung');
              ?>

              <div class="col-sm-6 col-12 icon">
                <?php if ( $icon ): ?>

                  <?php
                    $icon_url = $icon['url'];
                    $icon_alt = $icon['alt']
                  ?>

                  <div class="icon__container">
                    <img src="<?php echo esc_url( $icon_url ); ?>" alt="<?php echo esc_attr( $icon_alt ); ?>">
                  </div>

                <?php endif; ?>

                <?php if ( $value ): ?>

                  <h3><?php echo $value; ?></h3>

                <?php endif; ?>
                <?php if ( $desc ): ?>

                  <p><?php echo $desc; ?></p>

                <?php endif; ?>

              </div>

              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>
