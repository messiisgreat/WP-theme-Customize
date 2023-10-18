<div class="container-fluid webpb">

  <div class="container">
  <div class="progress-container">
    <div class="progress-bar" id="myProgressBar"></div>
  </div>
  </div>
  </div>
<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myBarFunction()};

function myBarFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myProgressBar").style.width = scrolled + "%";
}
</script>


<style>
.progress-container {
	width: 100%;
	height: 8px;
	background: #ffc008;
	position: fixed;
	bottom: 0;
	left: 0;
	z-index: 99999999999999;
}
.progress-bar {
	height: 8px;
	background: #000000;
	width: 0%;
	position: fixed;
	bottom: 0;
	left: 0;
	z-index: 999999999999;
}
</style>