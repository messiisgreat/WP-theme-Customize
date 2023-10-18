<?php get_header();?>

<div class="container-fluid single-page-template" style="margin:0px 0px 0px 0px;padding: 90px 0px 90px 0px;">

<div class="container">
  <div class="row land-about">


      <div id="single-page-section" class="col-sm-8 col-md-8">

  <?php include (TEMPLATEPATH . '/design/content/meta/breadcrumbs/spb.php');?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( is_user_logged_in() ) {;?>
<div style="position:fixed;max-width:100px;max-height:100px;background:#F00;top:50%;right:0;s">
<button class="btn btn-dark customize-unpreviewable" href="<?php echo home_url(); ?>/wp-admin/post.php?post=<?php the_ID(); ?>&action=edit" title="" role="contentinfo" type="button" title="<?php the_title(); ?> - Edit This Page "><span class="dashicons dashicons-edit-page"></span></button>
<a class="btn btn-dark" href="<?php echo home_url(); ?>/wp-admin/customize.php?url=<?php echo get_the_permalink(); ?>" title="" role="contentinfo" type="button">Live Customize Edit</a>
</div>
<?php } else{ };?>

 <header id="headertitle">

    <h1 class="single-page-header-title">
<?php echo apply_filters( 'the_content', get_theme_mod('single_page_heading_title_custom_text'));?>
</h1>

 </header>



 <div class="entry-content">
    <?php the_content(); ?>
 </div>

 <footer>

 </footer>
</article>

<?php endwhile; endif; ?>
</div>

 <?php if ( get_theme_mod( 'yourseobook_single_page_sidebar_display_control' ) ) : ?>

<?php if ( is_active_sidebar( 'yourseobook_single_page_right_sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'yourseobook_single_page_right_sidebar' ); ?>
<?php endif; ?>

<?php endif; ?>

 </div>
 </div>
 </div>
<?php get_footer();?>
