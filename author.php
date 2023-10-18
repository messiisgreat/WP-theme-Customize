<?php get_header();?>


<div class="container-fluid single-page-template" style="margin:90px auto;padding: 0px;">

<div class="container" style="padding: 90px 0px 90px 0px;">
  <div class="row" style="margin:0px auto;padding: 0px 15px 0px 15px;display: flex;flex-wrap: wrap;flex-direction: row;justify-content: space-between;align-content: stretch;">


<div id="single-page-section" class="col-sm-8 col-md-8" style="margin:0px 0px 30px 0px;border-bottom: 1px dotted #000;padding: 0px 0px 40px 0px;">

  <?php include (TEMPLATEPATH . '/design/content/meta/breadcrumbs/spb.php');?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>



 <header id="headertitle">

<h1 class="single-page-header-title">
  <?php
  $customTitle = get_theme_mod('yourseobook_single_page_heading_title_setting');

  if (!empty($customTitle)) {
    echo esc_html($customTitle);
  } else {
    the_title();
  }
  ?>
</h1>



 </header>



 <div class="entry-content">
<?php include (TEMPLATEPATH . '/api/func/content/single/featured-image-fallback.php');?>
  <?php include (TEMPLATEPATH . '/design/content/meta/sp/single-page-top-meta.php');?>

<?php echo yourseobook_generate_table_of_contents(); ?>


            <?php the_content(); ?>

<?php yourseobook_set_post_views(get_the_ID());?>

 </div>

 <footer>
<hr>

<?php include (TEMPLATEPATH . '/design/content/meta/sp/single-page-bottom-meta.php');?>
<?php include (TEMPLATEPATH . '/design/content/meta/sp/single-page-bottom-share-buttons.php');?>
<?php include (TEMPLATEPATH . '/design/content/meta/sp/single-page-bottom-author.php');?>


 </footer>
</article>

<?php endwhile; else : ?>

<?php endif; ?>
<p>Written by:
<?php the_author_posts_link(); ?></p>
<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<p>This is <?php echo $curauth->nickname; ?>'s page</p>
</div>

 <?php if ( get_theme_mod( 'yourseobook_single_page_sidebar_display_control' ) ) : ?>
<div id="spsdc" class="col-sm-3 col-md-3">
<aside>
<div class="bg-success p-2 text-white">This is default success background</div>
<div class="bg-success p-2 text-white bg-opacity-75">This is 75% opacity success background</div>
<div class="bg-success p-2 text-dark bg-opacity-50">This is 50% opacity success background</div>
<div class="bg-success p-2 text-dark bg-opacity-25">This is 25% opacity success background</div>
<div class="bg-success p-2 text-dark bg-opacity-10">This is 10% opacity success background</div>
<?php if ( is_active_sidebar( 'yourseobook_single_page_right_sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'yourseobook_single_page_right_sidebar' ); ?>
<?php endif; ?>
 </aside>
 </div>
<?php endif; ?>

 </div>
 </div>
 </div>
<?php get_footer();?>
