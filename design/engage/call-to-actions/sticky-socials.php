<div id="stickysocials" class="icon-bar">

  <a href="#" class="facebook-sticky" role="link" type="link" target="_blank" title="Share <?php echo get_the_title($post->ID);?> on Facebook"><span class="dashicons dashicons-facebook-alt"></span></a>

  <a href="#" class="twitter-sticky" role="link" type="link" target="_blank" title="Share <?php echo get_the_title($post->ID);?> on Twitter"><span class="dashicons dashicons-twitter"></span></a>

  <a href="#" class="linkedin-sticky" role="link" type="link" target="_blank" title="Share <?php echo get_the_title($post->ID);?> on LinkedIn"><span class="dashicons dashicons-linkedin"></span></a>

  <a href="#" class="instagram-sticky" role="link" type="link" target="_blank" title="Share <?php echo get_the_title($post->ID);?> on Instagram"><span class="dashicons dashicons-instagram"></span></a>

  <a href="#" class="pinterest-sticky" role="link" type="link" target="_blank" title="Share <?php echo get_the_title($post->ID);?> on Pinterest"><span class="dashicons dashicons-pinterest"></span></a>

  <a href="#" class="youtube-sticky"><span class="dashicons dashicons-youtube"></span></a>

  <a href="#" class="reddit-sticky"><span class="dashicons dashicons-reddit"></span></a>

  <a href="#" class="twitch-sticky"><span class="dashicons dashicons-twitch"></span></a>

  <a href="#" class="spotify-sticky"><span class="dashicons dashicons-spotify"></span></a>

  <a href="#" class="whatsapp-sticky"><span class="dashicons dashicons-whatsapp"></span></a>

  <a href="#" class="email-sticky"><span class="dashicons dashicons-email"></span></a>

  <a href="#" class="google-sticky"><span class="dashicons dashicons-google"></span></a>

</div>


<style>

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-51%);
  left: 5px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 5px;
  transition: all 1.3s ease;
  color: white;
  font-size: 20px;
  text-decoration: none !important;
  margin: 5px 0px 5px 0px;
  border-radius: 4px;
font-weight: 500;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook-sticky {
  background: #3B5998;
  color: white;
}

.twitter-sticky{
  background: #000;
  color: white;
}

.google-sticky {
  background: #dd4b39;
  color: white;
}

.linkedin-sticky {
  background: #007bb5;
  color: white;
}

.instagram-sticky {
background-color: #c134a8;
background-image: linear-gradient(to bottom right, #dd466b, #4a59c5);
color: white;
}

.pinterest-sticky {
  background: #f00;
  color: white;
}
.youtube-sticky {
  background: #bb0000;
  color: white;
}
.reddit-sticky {
  background: #f00;
  color: white;
}
.twitch-sticky {
  background: purple;
  color: white;
}
.spotify-sticky {
  background: green;
  color: white;
}
.whatsapp-sticky {
  background: green;
  color: white;
}
.email-sticky {
  background: blue;
  color: white;
}
.whatsapp-sticky {
  background: green;
  color: white;
}
.icon-bar span.dashicons {
	font-size: 14px;
	text-decoration: none;
	margin: 0px 0px 0px 0px;
	height: 18px;
	width: 18px;
	padding: 0px;
	line-height: 1rem;
	display: flex;
	flex-direction: column;
	flex-wrap: wrap;
	align-content: center;
	justify-content: center;
	align-items: center;
	text-decoration: none !important;
}
</style>