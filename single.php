<?php
/* 		POST-TEMPLATE

	*		TODO: Post-Seitentemplate nach Design erstellen
	*		TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen

*/

get_header(); ?>
<?php include 'sections/01_ui/mobile__nav.php'; ?>
<main data-scroll-container role="main">
  <div data-scroll-section>

  <?php include 'sections/01_ui/navigation.php'; ?>
  <?php include 'sections/01_ui/pagebuild.php';?>

  <?php get_footer(); ?>
