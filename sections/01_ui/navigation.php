<?php
$term = get_term_by('name', 'main', 'nav_menu');
$menu_id = $term->term_id;
$menu = wp_get_nav_menu_object( 2 );
?>

<section data-scroll id="navigation">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 menu-item-col ninja d-flex">
          <div class="nav-img-col">
            <?php if ( !empty(get_field('logo', $menu))):
              $logo = get_field('logo', $menu);
              if( !empty( $logo ) ): ?>

                <a href="<?php echo get_home_url();?>">
                  <img class="logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                </a>

              <?php endif; ?>
            <?php else: ?>
              <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.svg" alt="">
            <?php endif; ?>
          </div>
          <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4  nav-icon-col d-flex flex-row">
          <?php wp_nav_menu(array( 'theme_location' => 'extra' )); ?>
        </div>
      </div>
    </div>
</section>
