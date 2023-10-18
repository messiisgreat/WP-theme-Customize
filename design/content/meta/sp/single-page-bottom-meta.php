 <?php if ( get_theme_mod( 'yourseobook_single_page_bottom_meta_display_control' ) ) : ?>

<div class="container">


<div class="row">


<div class="meta-date">
<small>
Date Originally Published <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><span class="dashicons dashicons-calendar-alt"></span> <?php $post_date = get_the_date( 'l F j, Y' ); echo $post_date;?></time> by <span role="contentinfo" rel="author" class="top-meta-author" aria-label="Author Name" title="<?php echo get_the_author_meta( 'display_name' ); ?> | <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    <img src="https://yourseobook.com/wp-content/uploads/2023/07/mandalorian-e1688424450569.jpg" alt="Member  <?php echo get_the_author_meta( 'display_name' );?>" title="<?php echo get_the_author_meta( 'display_name' );?> - <?php // echo esc_html_e( get_theme_mod( 'blankseo_general_brand_name_text_control' ) ); ?>" width="30" height="30" class="bd-placeholder-img rounded-circle" loading="lazy"/>
 <?php echo get_the_author_meta( 'display_name' ); ?>
</span> | Last  Modified on <time datetime="<?php echo get_the_modified_date( 'l F j, Y' ); ?>" itemprop="dateModified">
<?php echo get_the_modified_date( 'l F j, Y' ); ?></time> | <span class="dashicons dashicons-clock"></span> <?php echo calculate_reading_time(); ?>
</small>

</div>






<div class="col col-sm-2 col-md-2"><span class="dashicons dashicons-admin-comments"></span> <a href="#comment-section" title="10 Comments" role="contentinfo" rel="me">10</a></div>



<div class="col col-sm-2 col-md-2"><?php echo yourseobook_get_post_views(get_the_ID());?></div>







</div>

</div>
<style>
.meta-date {
	display: flex;
	line-height: 1.75rem;
	width: 100%;
	background: #000;
	color: #fff;
	font-size: 14px;
	padding: 10px 10px 10px 10px;
	margin: 0px 0px 20px 0px;
}

.meta-date span.dashicons.dashicons-calendar-alt {
	font-size: 16px;
	line-height: 1.55rem;
	padding: 0px;
}
div#sp-bottom-metas {
	font-size: 14px;
	display: inline-block;
	width: 100%;
	margin: 0px auto;
	padding: 0px !important;
	text-align: center;
	color: #012359;
}
div#sp-bottom-metas .col.col-sm-2.col-md-2 {
	float: left;
	text-align: right;
	display: flex;
	padding: 0px 0px;
	width: auto;
	flex-direction: row;
	font-size: 16px;
	font-weight: 500;
	color: #012359;
	flex-wrap: nowrap;
	justify-content: flex-start;
}

div#sp-bottom-metas .col.col-sm-2.col-md-2 span.dashicons {
	display: flex;
	float: left;
	font-size: 21px;
	text-align: left;
	margin: 0px 15px;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;
	color: #012359;
	line-height: 1.65rem;
}

</style>
<div id="sp-bottom-metas"></div>
<?php endif; ?>

