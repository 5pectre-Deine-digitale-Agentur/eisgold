<?php
$args = array(
  'post_type' => 'Post'
);

$post_query = new WP_Query($args);
if($post_query->have_posts() ) : ?>

    <section data-scroll data-scroll-speed="0.5" id="blog" class="container-fluid">
      <div class="splide row">
        <div class="title__container">
          <h2>Die neusten<br>News + Updates</h2>
        </div>
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="70.203" height="71.524" viewBox="0 0 70.203 71.524">
              <defs>
                <style>
                  .cls-1 {
                    fill: none;
                    stroke-linecap: round;
                    stroke-width: 3px;
                  }
                </style>
              </defs>
              <g id="Gruppe_2704" data-name="Gruppe 2704" transform="translate(68.081 69.403) rotate(180)">
                <line id="Linie_178" data-name="Linie 178" class="cls-1" x1="66.581" transform="translate(0 33.641)"/>
                <line id="Linie_179" data-name="Linie 179" class="cls-1" x1="33.641" y1="33.641" transform="translate(0 33.641)"/>
                <line id="Linie_180" data-name="Linie 180" class="cls-1" x1="33.641" y2="33.641" transform="translate(0)"/>
              </g>
            </svg>
          </button>
          <button class="splide__arrow splide__arrow--next">
            <svg xmlns="http://www.w3.org/2000/svg" width="70.203" height="71.524" viewBox="0 0 70.203 71.524">
              <defs>
                <style>
                  .cls-1 {
                    fill: none;
                    stroke-linecap: round;
                    stroke-width: 3px;
                  }
                </style>
              </defs>
              <g id="Gruppe_2704" data-name="Gruppe 2704" transform="translate(68.081 69.403) rotate(180)">
                <line id="Linie_178" data-name="Linie 178" class="cls-1" x1="66.581" transform="translate(0 33.641)"/>
                <line id="Linie_179" data-name="Linie 179" class="cls-1" x1="33.641" y1="33.641" transform="translate(0 33.641)"/>
                <line id="Linie_180" data-name="Linie 180" class="cls-1" x1="33.641" y2="33.641" transform="translate(0)"/>
              </g>
            </svg>

          </button>
        </div>
        <div class="splide__track col-12">
          <div class="splide__list">

            <?php while($post_query->have_posts() ) : $post_query->the_post();
              $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_query->ID ), 'single-post-thumbnail' )[0];
              $post_url = get_permalink($post_query->ID);
              $post_output = get_the_excerpt($post_query->ID); ?>

              <a href="<?php echo the_permalink(); ?>" class="splide__slide">
                <div class="image__container">
                  <img src="<?php echo $post_image; ?>" alt="<?php echo $post_output; ?>">
                </div>
                <div class="text__container">
                  <p class="time"><?php echo get_the_date($post_query->ID); ?></p>
                  <h3 class="desc"><?php echo the_title(); ?></h3>
                </div>
              </a>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      var splide = new Splide( '.splide', {
      perPage: 4,
      perMove: 1,
      gap: "30px",
      rewind : true,
      pagination: false,
      arrows: false,
      breakpoints: {
        992: {
          perPage: 3,
        },
        576: {
          perPage: 1,
        },
        300: {

        }
      },
      } );

      splide.mount();
    </script>

<?php else : ?>

  <section data-scroll data-scroll-speed="0.5" id="blog" class="container-fluid">
    <div class="row">
      <div class="title__container">
        <h2>Hier siehts aktuell noch ziemlich leer aus..</h2>
      </div>
    </div>
  </section>

<?php endif ?>
