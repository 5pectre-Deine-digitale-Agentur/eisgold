<?php if( have_rows('themen') ): ?>
  <?php $post_count = 0; ?>

    <section id="topic">
      <div data-scroll data-scroll-speed="-1.5" class="container">
        <div class="row">

          <?php while( have_rows('themen') ): the_row(); ?>
            <?php
              $featured_posts = get_sub_field('featured_posts');
              if ( $featured_posts ):
                $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_posts->ID ), 'single-post-thumbnail' )[0];
                $post_url = get_permalink($featured_posts->ID);
                $post_output = get_the_excerpt($featured_posts->ID);
                ?>

            <?php if ( ($post_count % 2) == 0): ?>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <a href="<?php echo $post_url ?>" class="topic__container">
                    <div class="image__container">
                      <img class="topic__image" src="<?php echo esc_url( $post_image ) ?>" alt="">
                    </div>
                    <div class="text__container">
                      <h3><?php echo esc_html( $featured_posts -> post_title ); ?></h3>
                      <p><?php echo esc_html($post_output); ?></p>
                    </div>
                  </a>
                </div>

              <?php $post_count++; ?>

              <?php else: ?>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <a href="<?php echo $post_url ?>" class="topic__container second">
                    <div class="image__container">
                      <img class="topic__image" src="<?php echo esc_url( $post_image ) ?>" alt="">
                    </div>
                    <div class="text__container">
                      <h3><?php echo esc_html( $featured_posts -> post_title ); ?></h3>
                      <p><?php echo esc_html($post_output); ?></p>
                    </div>
                  </a>
                </div>

                <?php $post_count++; ?>

              <?php endif; ?>
            <?php endif; ?>
          <?php endwhile; ?>

        </div>
      </div>
    </section>
<?php endif; ?>
