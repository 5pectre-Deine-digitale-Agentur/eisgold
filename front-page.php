<?php
/*    STARTSEITE

  *   TODO: Startseite nach Design umsetzen
  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Bereiche wie im Beispiel umsetzen
  *   TODO: Bei Bedarf ist die Bootstrap-Integration in der header.php und footer.php auskommentiert
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind Asana zu entnehmen

*/
get_header(); ?>
<?php include 'sections/01_ui/mobile__nav.php'; ?>
<main data-scroll-container role="main" id="fixed__target">
  <div data-scroll-section>
    <?php include 'sections/01_ui/navigation.php'; ?>
    <?php include 'sections/01_ui/styles.php'; ?>
    <?php include 'sections/03_parts/hero.php'; ?>
    <?php include 'sections/03_parts/mission.php'; ?>
    <?php include 'sections/03_parts/topics.php'; ?>
    <?php include 'sections/03_parts/values.php'; ?>
    <?php include 'sections/03_parts/video.php'; ?>
    <?php include 'sections/03_parts/news.php'; ?>
    <?php include 'sections/03_parts/contact.php'; ?>
<?php get_footer(); ?>
