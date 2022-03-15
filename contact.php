<?php
/* 		Template Name: Kontakt
 	* 	TODO: Sonderseiten-Template nach Design erstellen
	* 	TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen
*/
get_header(); ?>

<?php
$footer = get_term_by('name', 'footer', 'nav_menu');
$footer_id = $footer->term_id;
$footer_menu = wp_get_nav_menu_object( $footer_id );
?>
<?php include 'sections/01_ui/mobile__nav.php'; ?>
<main data-scroll-container role="main">
  <div data-scroll-section class="">

    <?php include 'sections/01_ui/navigation.php';  ?>
    <section data-scroll id="hero3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center">Wir würden
              <span class="img__reveal load__effect">
                dich
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
                </span> gerne kennen lernen
              </h1>
          </div>
        </div>
      </div>
      <div class="container-fluid hero__image">
        <div class="row d-flex justify-content-center">
          <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
            <p class="text-center mx-auto">Lorem Ipsum dolor sit met ist nur ein Dummytext für Entwickler und Designer. Lorem Ipsum dolor sit met ist nur ein Dummytext für Entwickler und Designer.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="image" data-scroll>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/assets/team.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <style>
        #image {
            padding-bottom: 100px;
        }
    </style>

    <section id="contact">
      <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 company__info">
            <?php if ( have_rows( 'company_info', $footer_menu ) ):
              while ( have_rows('company_info', $footer_menu ) ) : the_row(); ?>
              <h3>Kontakt</h3>
              <div class="information">
                <?php $adress = get_sub_field('adress');
                if ( !empty ( $adress ) ) {
                  echo $adress;
                }; ?>
              </div>

              <div class="links">
								<?php if ( have_rows( 'additional_links' ) ):
									while ( have_rows('additional_links' ) ) : the_row();
									$footer_link = get_sub_field('link');
									$footer_link_target = $link['target'] ? $link['target'] : '_self';?>

									<a href="<?php echo esc_url($footer_link['url']); ?>" target="<?php echo esc_attr( $footer_link_target ); ?>"><?php echo esc_html( $footer_link['title'] ); ?></a>

									<?php endwhile;
								endif; ?>
							</div>

              <?php endwhile;
            endif; ?>
          </div>
          <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 form__container">
            <h3>Get in Touch</h3>
            <h2>Schick uns ein paar Zeilen.</h2>
            <span>Schicke uns eine Mail unter <a href="mailto:hello@eisgold.de">hello@eisgold.de<svg xmlns="http://www.w3.org/2000/svg" width="590.379" height="27.3" viewBox="0 0 590.379 27.3"><defs><style>.a{fill:none;stroke:#faaf3a;stroke-width:3px;}</style></defs><path class="a" d="M2436.292,753.92l212.883-9.938s142.5-5.96,78.307,12.414,26.139,8.975,148.277,5.545,150.8-4.471,150.8-4.471" transform="translate(-2436.222 -741.516)"/></svg></a> oder melde dich kurz übers Formular bei uns</span>
            <?php echo do_shortcode('[contact-form-7 id="29" title="Contact"]'); ?>
          </div>
        </div>
      </div>
    </section>
    <section data-scroll data-scroll-speed="0.5" id="cta">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <h2 class="call">Einfach mal schreiben</h1>
              <a href="mailto:hello@eisgold.com">hello@eisgold.com<svg xmlns="http://www.w3.org/2000/svg" width="590.379" height="27.3" viewBox="0 0 590.379 27.3"><defs><style>.a{fill:none;stroke:#faaf3a;stroke-width:3px;}</style></defs><path class="a" d="M2436.292,753.92l212.883-9.938s142.5-5.96,78.307,12.414,26.139,8.975,148.277,5.545,150.8-4.471,150.8-4.471" transform="translate(-2436.222 -741.516)"/></svg></a>
            </div>
          </div>
        </div>
      </section>
      <script type="text/javascript">
        window.addEventListener("load", ()=>{
          document.querySelector('.load__effect').classList.add('active');
        })
      </script>
    <?php get_footer(); ?>
  </div>
</main>
