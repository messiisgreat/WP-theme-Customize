<?php




// Adding the Open Graph in the Language Attributes

function yourseobook_add_opengraph_doctype( $output ) {
		return $output . ' xmlns:og="https://opengraphprotocol.org/schema/" xmlns:fb="https://www.facebook.com/2008/fbml"';
	}
add_filter('language_attributes', 'yourseobook_add_opengraph_doctype');

// Lets add Open Graph Meta Info

function yourseobook_insert_fb_in_head() {
	global $post;
	if ( !is_singular()) // if it is not a post or a page
		return;
		// echo '<meta property="fb:app_id" content="' . $options['facebooksdk'] . '"/>';
                                        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
                                        echo '<meta property="og:description" content="' . get_bloginfo( 'name' ) . '"/>';
                                        echo '<meta property="og:type" content="blog"/>';
                                        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
                                        echo '<meta property="og:site_name" content="' . get_the_title() . '"/>';
	if(!has_post_thumbnail( $post->ID )) { //t he post does not have featured image, use a default image
		$default_image=""; // replace this with a default image on your server or an image in your media library
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
		echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	}
	echo "
";
}
add_action( 'wp_head', 'yourseobook_insert_fb_in_head', 10, 2 );