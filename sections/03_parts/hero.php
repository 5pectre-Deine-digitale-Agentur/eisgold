<?php if( have_rows('hero') ): ?>
  <?php while( have_rows('hero') ): the_row(); ?>

    <section id="hero" style=" background:
    <?php if(get_sub_field('background')): ?>
      url(<?php echo the_sub_field('background'); ?>)
    <?php else: ?>
      #000
    <?php endif; ?>; background-size: cover; background-position: center;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="h1"><?php the_title(); ?></h1>
            <span class="h4"><?php echo the_sub_field('subtitle'); ?></span>
          </div>
        </div>
      </div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>

<section data-scroll id="hero">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <img class="data__img img1" src="" alt="">
        <img class="data__img img2" src="" alt="">
        <h1>Du findest uns an der Kreuzung zwischen
          <span class="img__reveal" data-img1="<?php echo get_template_directory_uri(); ?>/img/ressources/Erdbeer.png" data-img2="<?php echo get_template_directory_uri(); ?>/img/ressources/Mango.png">Eiscreme<svg xmlns="http://www.w3.org/2000/svg" width="590.379" height="27.3" viewBox="0 0 590.379 27.3"><defs><style>.a{fill:none;stroke:#faaf3a;stroke-width:3px;}</style></defs><path class="a" d="M2436.292,753.92l212.883-9.938s142.5-5.96,78.307,12.414,26.139,8.975,148.277,5.545,150.8-4.471,150.8-4.471" transform="translate(-2436.222 -741.516)"/></svg></span>
          und
          <span class="img__reveal" data-img1="<?php echo get_template_directory_uri(); ?>/img/ressources/Himbeer.png" data-img2="<?php echo get_template_directory_uri(); ?>/img/ressources/Rhabarber.png">Kultur<svg xmlns="http://www.w3.org/2000/svg" width="590.379" height="27.3" viewBox="0 0 590.379 27.3"><defs><style>.a{fill:none;stroke:#faaf3a;stroke-width:3px;}</style></defs><path class="a" d="M2436.292,753.92l212.883-9.938s142.5-5.96,78.307,12.414,26.139,8.975,148.277,5.545,150.8-4.471,150.8-4.471" transform="translate(-2436.222 -741.516)"/></svg></span></h1>
      </div>
    </div>
  </div>
  <div class="container-fluid hero__image">
    <div class="row">
      <div class="col-6">
        <p>Lorem Ipsum dolor sit met ist nur ein Dummytext für Entwickler und Designer. Lorem Ipsum dolor sit met ist nur ein Dummytext für Entwickler und Designer.</p>
        <a href="#" class="button">
          <span>Erfahre Mehr</span>
        </a>
      </div>
      <div class="col-6 sticky__container">
        <div class="orbit">
          <div class="ball"></div>
        </div>
        <div class="sticky">
          <div class="image__container">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/assets/video__placeholder.png" alt=""> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
