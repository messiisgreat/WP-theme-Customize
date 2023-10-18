  <?php if ( get_theme_mod( 'yourseobook_single_page_bottom_meta_share_buttons_display_control' ) ) : ?>

<style>

div#spsharebtns {
	display: flex;
	width: 100%;
	margin: 0px;
	padding: 0px;
	font-size: 14px !important;
	flex-direction: row;
	justify-content: flex-start;
	align-items: center;
	flex-wrap: wrap;
}

div#spsharebtns ul {
	padding: 0px;
	margin: 0px;
	list-style: none;
	display: flex;
	text-align: left;
	justify-content: flex-start;
	flex-wrap: wrap;
	align-items: center;
	flex-direction: row;
}

div#spsharebtns ul li {
	float: left;
	margin: 0px 10px;
}

div#spsharebtns ul li a img {
	height: 20px;
	width: 20px;
}
.navigation {
	display: flex;
	text-align: center;
	font-size: 14px;
	font-weight: 500;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	padding: 5px 20px;
	border: 1px solid #000;
	margin: 20px 0px 20px 0px;
	background: #000;
	color: #fff;
}

.navigation a {
	color: #fff;
	text-decoration: none;
	font-size: 14px;
	font-weight: 300;
}
</style>
<div id="spsharebtns" class="share">

  <h4 class="sharetitle"><span class="dashicons dashicons-share"></span></h4>
	<ul style="padding:10px 0px 10px 0px;list-style:none;font-weight: 300;font-size: 16px;">

	<li class="sne">

	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&src=seobookpro" title="<?php the_title(); ?>" target="_blank">
<img class="social-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/api/assets/img/socials/facebook.png" height="48px" width="48px" loading="lazy" alt="Facebook">
  </a>
	</li>

	<li class="sne">
	<a href="https://twitter.com/home?status=<?php the_permalink();?>" title="<?php the_title(); ?>" target="_blank"><img class="social-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/api/assets/img/socials/twitter.png" height="48px" width="48px" loading="lazy" alt="Twitter"></a>
	</li>

	<li class="sne">
	<a href="<?php the_permalink();?>" title="<?php the_title(); ?>" target="_blank"><img class="social-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/api/assets/img/socials/instagram.png" height="48px" width="48px" loading="lazy" alt="Instagram"></a>
	</li>

  <li class="sne">
<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&description=<?php the_title(); ?>">
<img class="social-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/api/assets/img/socials/pinterest.png" height="48px" width="48px" loading="lazy" alt="Pinterest">
</a>


	</li>

  <li class="sne">
<a href="https://www.reddit.com/submit?url=<?php the_permalink();?>&title=<?php the_title(); ?>">
<img class="social-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/api/assets/img/socials/reddit.png" height="48px" width="48px" loading="lazy" alt="Reddit">
</a>


	</li>

	<li class="sne">
<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title(); ?>&source=seobookpro.com"><img class="social-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/api/assets/img/socials/linkedin.png" height="48px" width="48px" loading="lazy" alt="LinkedIn">
</a>

	</li>

</ul>

</div>
<?php endif; ?>