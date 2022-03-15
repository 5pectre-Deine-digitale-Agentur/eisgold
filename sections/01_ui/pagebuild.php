  <?php if( have_rows('content') ):
      while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'pagetitle' ) {
          include __DIR__ . '/../03_parts/hero2.php';
        } elseif( get_row_layout() == 'blog' ) {
          include __DIR__ . '/../03_parts/news.php';
        } elseif( get_row_layout() == 'topics' ) {
          include __DIR__ . '/../03_parts/topics.php';
        } elseif( get_row_layout() == 'values' ) {
          include __DIR__ . '/../03_parts/values.php';
        } elseif( get_row_layout() == 'icons' ) {
          include __DIR__ . '/../03_parts/icons.php';
        } elseif( get_row_layout() == 'contact' ) {
          include __DIR__ . '/../03_parts/contact.php';
        } elseif( get_row_layout() == 'chance' ) {
          include __DIR__ . '/../03_parts/chance.php';
        } elseif( get_row_layout() == 'video__content' ) {
          include __DIR__ . '/../02_content/video.php';
        } elseif( get_row_layout() == 'text_content' ) {
          include __DIR__ . '/../02_content/text_content.php';
        } elseif( get_row_layout() == 'image' ) {
          include __DIR__ . '/../02_content/image.php';
        }
      endwhile;
    endif;
  ?>
