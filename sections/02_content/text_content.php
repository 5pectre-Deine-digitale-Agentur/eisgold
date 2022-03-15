<div class="container-fluid" id="text__content">
  <div class="row">
    <div class="col-12">
      <div class="content__wrapper">
        <?php if (get_sub_field('title')): ?>
          <h2 class="h2"><?php echo the_sub_field('title'); ?></h2>
        <?php endif; ?>
        <?php if (get_sub_field('text')): ?>
          <p class="text">
            <?php echo the_sub_field('text'); ?>
          </p>
        <?php endif; ?>
        <?php if (get_sub_field('button')): ?>
          <div class="button">
            <a href="<?php echo esc_url(get_sub_field('button')['url']); ?>"><?php echo esc_html( get_sub_field('button')['title'] ); ?></a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
