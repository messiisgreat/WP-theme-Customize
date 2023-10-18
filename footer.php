


 <?php if ( get_theme_mod( 'yourseobook_footer_navigation_menus_display_control' ) ) : ?>
<div id="main-footer">
  <?php include (TEMPLATEPATH . '/design/footer/footer-master.php');?>
</div>

    <?php endif; ?>
</main>
<script>



var navHeight = $('#main-nav').outerHeight();

// Set the top margin of the main content based on the navigation height
$('#main-content').css('margin-top', navHeight + 'px');
$('#mySidenav').css('margin-top', navHeight + 'px');

</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<?php if ( get_theme_mod( 'yourseobook_footer_scroll_to_top_display_control' ) ) : ?>

 <button  onclick="topFunction()" id="myBtn" title="Go to top" class="scroll-top">
<span class="material-symbols-outlined">stat_3</span>
</button>
<script>

// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 220 || document.documentElement.scrollTop > 320) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<style>
@keyframes fadeIn {
0% {
opacity: 0;
transform: translateX(-100px);
}
100% {
opacity: 1;
transform: translateX(0);
}
}
</style>
<?php endif; ?>
  <?php include (TEMPLATEPATH . '/design/landing/progress-scrollbar.php');?>

<?php wp_footer();?>
</body>
</html>