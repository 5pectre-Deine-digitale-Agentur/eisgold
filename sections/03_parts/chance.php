<?php if( have_rows('freie_stellen') ): ?>
  <?php while( have_rows('freie_stellen') ): the_row(); ?>

  <?php
    $section_title = get_sub_field('titel');
  ?>

  <section id="chance" data-scroll>
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <h2 class="h2 text-center text-white chance__title"><?php echo $section_title; ?></h2>
              </div>
              <?php if( have_rows('angebote') ): ?>
                <?php while( have_rows('angebote') ): the_row(); ?>

                <?php
                  $stelle = get_sub_field('stelle');
                  $status = get_sub_field('status');
                  $ort = get_sub_field('ort');
                  $link = get_sub_field('bewerbung');
                ?>

                <a class="col-12" href="mailto:<?php echo $link; ?>">
                    <div class="row p-3 bg-grey">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                        <?php if ( $stelle ): ?>
                          <h3 class="text-white"><?php echo $stelle; ?></h3>
                        <?php endif; ?>

                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">

                          <?php if ( $ort ): ?>
                            <h3 class="text-white"><?php echo $ort; ?></h3>
                          <?php endif; ?>

                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">

                          <?php if ( $status ): ?>
                            <h3 class="text-white"><?php echo $status; ?></h3>
                          <?php endif; ?>

                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 text-end"><i class="text-white fa-solid fa-arrow-right"></i></div>
                    </div>
                </a>

              <?php endwhile; ?>
            <?php endif; ?>

          </div>
      </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>
