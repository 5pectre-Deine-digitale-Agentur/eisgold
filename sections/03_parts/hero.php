<?php if( have_rows('hero') ): ?>
  <?php while( have_rows('hero') ): the_row(); ?>

  <?php
    $image = get_sub_field('titelbild');
    $subtitle = get_sub_field('untertitel');
    $button = get_sub_field('button');
    $effect = get_sub_field('show_hover_images');
  ?>
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
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

          <?php if( $subtitle ): ?>
            <p><?php echo $subtitle; ?></p>
          <?php endif; ?>

          <?php if( $button ):
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
            ?>

            <a href="<?php echo $button_url; ?>" class="button" target="<?php echo $button_target; ?>">
              <span><?php echo $button_title; ?></span>
            </a>

          <?php endif; ?>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 sticky__container">
          <div class="orbit">
            <div class="ball"></div>
          </div>
          <div class="sticky">
            <div class="image__container">
              <?php if( $image ):
                $image_url = $image['url'];
                $image['alt']; ?>

                <img data-scroll data-scroll-speed="5" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if( $effect == true ): ?>

    <script type="text/javascript">

    var targetWidth = 768;
    if ( $(window).width() >= targetWidth) {
      (function( root, $, undefined ) {
        "use strict";

        $(function () {
          $('.img__reveal').mouseenter(function(){
            var img1 = $(this).attr('data-img1');
            var img2 = $(this).attr('data-img2');
            $('.img1').attr('src', img1);
            $('.img1').css('opacity', '1');
            $('.img2').attr('src', img2);
            $('.img2').css('opacity', '1');
          });
          $('.img__reveal').mouseleave(function(){
            $('.img1').css('opacity', '0');
            $('.img2').css('opacity', '0');
            $('.img1').attr('src', img);
            $('.img2').attr('src', img2);
          });
          $(".img__reveal").on('mousemove', function (e) {
            let imgX = -($(".img__reveal").position().left - e.clientX) * 0.25;
            let imgY = -($(".img__reveal").position().top - e.clientY) * 0.25;
            $(".data__img").css("transform", "translate(" + imgX + "px, " + imgY + "px)");
          });
          $(document).scroll(function (e) {
            // containerPosition = $('.sticky__container').scrollTop()
            console.log($('').scrollTop())
          });
        });

      } ( this, jQuery ));
    } else {
      window.addEventListener("load", ()=>{
        setTimeout(function() {
            $('.img__reveal').addClass('active');
        }, 500);
      });
    }
    </script>

  <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>
