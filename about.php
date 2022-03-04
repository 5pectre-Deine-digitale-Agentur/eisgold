<?php
/* 		Template Name: About
 	* 	TODO: Sonderseiten-Template nach Design erstellen
	* 	TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen
*/
get_header(); ?>



<main data-scroll-container role="main">
  <div data-scroll-section class="">
  <?php 
      include 'sections/01_ui/navigation.php'; 
      include 'sections/01_ui/styles.php'; 
      include 'sections/03_parts/hero2.php';
      include 'sections/03_parts/image.php';
      include 'sections/03_parts/about.php';
      include 'sections/03_parts/values.php';
      include 'sections/03_parts/chance.php';
      include 'sections/03_parts/contact.php';
      ?>
    <?php get_footer(); ?>

  </div>
</main>