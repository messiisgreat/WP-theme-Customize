<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_breaking_news_display_control' ) ) : ?>
<!-- Start Breaking News Top Slider Section Code Elements -->



<div class="row" style="min-height:50px;padding:0px;margin:0px;">
      <div class="col-sm-2 breaking-news"><h2><?php esc_html_e('Breaking News', 'yourseobook'); ?></h2>
</div>
      <div class="col-sm-10"  style="padding:0px;margin:0px;">

<?php
if (get_theme_mod('yourseobook_header_main_navigation_breaking_news_posts_control', true)) {
    $category_id = get_theme_mod('yourseobook_header_main_navigation_breaking_news_category', 0);
    $posts       = get_posts(
        array(
            'posts_per_page' => 5,
            'category'       => $category_id,
        )
    );
    if ($posts) {
        ?>
<div class="slideshow-container">
                <?php
                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
<div class="mySlides">

                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" role="article" type="link" rel="bookmark" aria-label="Latest News">
                            <?php the_title(); ?>
                        </a>
         </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

        <?php
    }
}

        ?>









<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
  
  // Auto slide after 6 seconds
  setTimeout(function() {
    plusSlides(1);
  }, 6000);
}

</script>


</div>
    </div>
<?php // echo esc_html_e( get_theme_mod( 'yourseobook_header_main_navigation_breaking_news_posts_control' ) ); ?>


<style>


.col-sm-2.breaking-news {
                    display: flex;
                    background: #000;
                    color: #fff;
                    margin: 0px 0px 0px 0px;
                    flex-direction: column;
                    align-content: center;
                    justify-content: center;
                    line-height: 0;
                    border-left: 10px solid #1c0fbb;
                    flex-wrap: wrap;
                    padding: 0px 0px 0px 0px;
}

/* Slideshow container */
.slideshow-container {
                      position: relative;
                      background: #f00;
}

/* Slides */
.mySlides {
  display: none;
  padding: 13px;
  text-align: center;
}
.mySlides a{
color: #fff;
font-size: 18px;
text-decoration: none;
font-weight: 300;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

</style>
<!-- End  Breaking News Top Slider Section Code Elements -->
 <?php endif; ?>