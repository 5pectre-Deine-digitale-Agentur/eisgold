<?php
/* 		Template Name: Legal */
get_header();

$legal = get_field('legal');
$subtitle = get_field('subtitel');
?>
<?php include 'sections/01_ui/mobile__nav.php'; ?>
<main data-scroll-container role="main">
  <div data-scroll-section>

    <?php include 'sections/01_ui/navigation.php';  ?>
    <section data-scroll id="hero3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center">
              <?php echo the_title(); ?>
              </h1>
          </div>
        </div>
      </div>
      <div class="container-fluid hero__image">
        <div class="row d-flex justify-content-center">
          <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
            <p class="text-center mx-auto">

              <?php if ( $subtitle ) {
                echo $subtitle;
              } ?>

            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 company__info">

            <?php if ( $legal ){
              echo $legal;
            }; ?>

          </div>
          <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 content__container">
            <?php echo the_content(); ?>
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
