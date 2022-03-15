<?php if( have_rows('values') ): ?>
  <?php while( have_rows('values') ): the_row(); ?>

  <?php
    $section_title = get_sub_field('titel');
  ?>

  <section data-scroll id="values">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h2><?php echo $section_title ?></h2>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">

        <?php if( have_rows('value') ): ?>
          <?php while( have_rows('value') ): the_row(); ?>

          <?php
            $title = get_sub_field('titel');
            $desc = get_sub_field('beschreibung');
          ?>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="value__container">
                  <h3><?php echo $title; ?></h3>
                  <p><?php echo $desc; ?></p>
                </div>
              </div>

          <?php endwhile; ?>
        <?php endif; ?>
        
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>
