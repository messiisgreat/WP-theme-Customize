<!doctype html>
<html <?php language_attributes(); ?>>
<head>
 <?php include (TEMPLATEPATH . '/seo/api/tracking/g-stack.php');?>
 <?php // include (TEMPLATEPATH . '/seo/api/tracking/pinterest.php');?>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <?php include (TEMPLATEPATH . '/seo/header-meta/header-seo-meta.php');?>
<meta name="robots" content="index, follow">
<meta name="robots" content="max-snippet:20, max-image-preview:large">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=yes,maximum-scale=5">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/ico"/>
<!-- All In One SEO - /design/ folder is home is page -->

<meta name="author" content="">
<link rel="canonical" href="<?php echo get_permalink( $post->ID );?>">
<?php // include (TEMPLATEPATH . '/api/seo/json-ld-router.php');?>
<?php include (TEMPLATEPATH . '/api/assets/fonts/fonts-router.php');?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>


<?php wp_head();?>
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>

<?php wp_body_open(); ?>
 <?php include (TEMPLATEPATH . '/seo/api/tracking/g-stack-body.php');?>

  <?php include (TEMPLATEPATH . '/design/header/navigation-main.php');?>

<main id="main-content">




