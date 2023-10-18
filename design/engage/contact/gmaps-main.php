

<h3 class="service-title"><span class="dashicons dashicons-email"></span> Find our Main Services Office Locations</h3>
<div class="tab">
  <h3 class="tablinks active" onclick="openLocation(event, 'l-one')" id="defaultOpen"><span class="dashicons dashicons-location" style="font-size:18px;"></span> Office Location One</h3>
  <h3 class="tablinks" onclick="openLocation(event, 'l-two')"><span class="dashicons dashicons-location" style="font-size:18px;"></span> Office Location Two</h3>
  <h3 class="tablinks" onclick="openLocation(event, 'l-tree')"><span class="dashicons dashicons-location" style="font-size:18px;"></span> Office Location Three</h3>
</div>

<div class="gmap-tree-pack">

 <?php include (TEMPLATEPATH . '/design/engage/contact/gmap-tab-one.php');?>
 <?php include (TEMPLATEPATH . '/design/engage/contact/gmap-tab-two.php');?>
 <?php include (TEMPLATEPATH . '/design/engage/contact/gmap-tab-three.php');?>


</div>

<script>
function openLocation(evt, locationName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(locationName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<style>

.gmap-tree-pack {
  max-width: 100%;
  display: inline-block;
  padding: 10px;
  margin: 0px 0px 2px 0px;
  border-radius: 0px 20px 20px 20px;
  box-shadow: 0px 40px 40px -40px #000;
  border-left: 5px solid #0252ac;
  border-right: 5px solid #0252ac;
  border-bottom: 5px solid #0252ac;
  border-top: 5px solid #0252ac;
}
.list-group-item {
  display: block;
  padding: 5px 0px 5px 0px;
  color: #0252ac;
  border-bottom: 1px solid #0252ac !important;
  border-radius: 0px !important;
  box-shadow: 0px 0px 0px 0px #000;
  text-transform: capitalize;
  font-size: 12px;
  background: none;
  border: none;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
  line-height: 1rem;
  display: inline;
  vertical-align: middle;
}
span.review-stars .material-icons {
  color: #fbbc04;
  font-size: 19px !important;
  vertical-align: top;
  line-height: 23px;
  letter-spacing: 1px;
}
h3.tablinks {
  display: inline-block;
  font-size: 14px;
  padding: 10px 20px;
  border: none !important;
}
.gmap-tree-pack iframe {
  width: 100%;
  max-height: 82%;
  border: 1px solid #0252ac !important;
  height: 300px;
  margin: 0px 10px 0px 10px;
}
.tab {
  position: relative;
  top: 8px;
  padding: 0px;
  z-index: 1034;
}
h3#defaultOpen.tablinks.active {
  background: #0252ac;
  color: #fff;
}
h3#defaultOpen {
  background: #1a73e80f;
  border-left: 5px solid #1a73e80f;
  border-top: 5px solid #1a73e80f;
  border-right: 5px solid #1a73e80f;
}

</style>