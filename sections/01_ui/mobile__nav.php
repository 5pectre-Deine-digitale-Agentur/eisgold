<?php
$term = get_term_by('name', 'main', 'nav_menu');
$menu_id = $term->term_id;
$menu = wp_get_nav_menu_object( 2 );
?>

<section data-scroll id="mobile__navigation">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6 d-flex">
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
      </div>
      <div class="col-6 nav-icon-col d-flex flex-row">
        <div class="burger">
          <div class="style1"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="nav__items">
  <div class="container">
    <div class="row">
      <div class="col-12 nav-item__container">
        <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
      </div>
    </div>
  </div>
</section>
