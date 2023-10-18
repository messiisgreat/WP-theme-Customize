<?php /* Template Name: Landing Page Custom Template */?>

<?php get_header();?>

<?php if ( get_theme_mod( 'yourseobook_main_land_display_control' ) ) : ?>

<div class="main-land">

<?php include (TEMPLATEPATH . '/design/landing/breaking-news.php');?>
  <?php // include (TEMPLATEPATH . '/design/landing/jump-links.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/above-the-fold.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/below-the-fold.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/about-section.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/services.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/faqs.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/our-team.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/cases.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/portfolio.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/latest-news.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/gallery.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/videos.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/user-testimonials.php');?>
  <?php include (TEMPLATEPATH . '/design/landing/logos-slider.php');?>


</div>
<?php endif; ?>

<?php get_footer();?>
