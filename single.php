<?php get_header();?>


<div class="container-fluid single-page-template" style="margin:0px auto;padding: 0px;">

<div class="container" style="padding: 90px 0px 90px 0px;">
  <div class="row" style="margin:0px auto;padding: 0px 15px 0px 15px;display: flex;flex-wrap: wrap;flex-direction: row;justify-content: space-between;align-content: stretch;">


<div id="single-page-section" class="col-sm-8 col-md-8" style="margin:0px 0px 30px 0px;border-bottom: 1px dotted #000;padding: 0px 0px 40px 0px;">

  <?php include (TEMPLATEPATH . '/design/content/meta/breadcrumbs/spb.php');?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>

<?php // if ( is_user_logged_in() ) {;?>
<!--<div style="position:fixed;max-width:100px;max-height:100px;background:#F00;top:50%;right:0;s">
<button class="btn btn-dark customize-unpreviewable" href="<?php // echo home_url(); ?>/wp-admin/post.php?post=<?php // the_ID(); ?>&action=edit" title="" role="contentinfo" type="button" title="<?php // the_title(); ?> - Edit This Page "><span class="dashicons dashicons-edit-page"></span></button>
<a class="btn btn-dark" href="<?php // echo home_url(); ?>/wp-admin/customize.php?url=<?php // echo get_the_permalink(); ?>" title="" role="contentinfo" type="button">Live Customize Edit</a>
</div>-->
<?php // } else{ };?>

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


            <?php get_the_content(); ?>

<?php yourseobook_set_post_views(get_the_ID());?>

 </div>

 <footer>
<hr>
<?php include (TEMPLATEPATH . '/design/content/meta/sp/single-page-bottom-meta.php');?>
<?php include (TEMPLATEPATH . '/design/content/meta/sp/single-page-bottom-share-buttons.php');?>
<?php include (TEMPLATEPATH . '/design/content/meta/sp/single-page-bottom-author.php');?>
  <?php include (TEMPLATEPATH . '/design/content/meta/sp/single-post-bottom-related-posts.php');?>

 </footer>
</article>

<?php endwhile; else : ?>

<?php endif; ?>
</div>

 <?php if ( get_theme_mod( 'yourseobook_single_page_sidebar_display_control' ) ) : ?>
<div id="spsdc" class="col-sm-3 col-md-3">
<aside>
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
