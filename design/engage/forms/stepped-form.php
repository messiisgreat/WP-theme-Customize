<?php if ( get_theme_mod( 'yourseobook_landing_services_prebuild_stepped_form_display_control' ) ) : ?>

<div class="container-fluid">
<div  id="lssfsl" class="container">
<div class="row">
<h2 style="font-size:28px;margin:40px 0px 40px 0px;display:block;width:100%;padding:20px 0px 20px 0px;border-bottom:1px dotted #000;"><span class="dashicons dashicons-list-view"></span> Contact us for more information and Services we Offer</h2>

<div class="col-sm-8">

 <?php include (TEMPLATEPATH . '/design/engage/contact/gmaps-main.php');?>


</div>



<div class="col-sm-4">
<h3 class="service-title"><span class="dashicons dashicons-buddicons-pm"></span>Contact Us Now</h3>
<div class="accordion" id="accordionExampleGmap">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCityNameOne" aria-expanded="true" aria-controls="collapseCityNameOne">
      Have questions or need further information
      </button>
    </h2>
    <div id="collapseCityNameOne" class="accordion-collapse collapse fade" data-bs-parent="#accordionExampleGmap">
      <div class="accordion-body">
<p class="service-content" style="font-size:12px;">
Have questions or need further information? Feel free to reach out to us using the contact form below. Our friendly team is ready to assist you and provide the answers you need.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCityNameTwo" aria-expanded="false" aria-controls="collapseCityNameTwo">
        Explore our comprehensive range of services
      </button>
    </h2>
    <div id="collapseCityNameTwo" class="accordion-collapse collapse fade" data-bs-parent="#accordionExampleGmap">
      <div class="accordion-body">
   <p class="service-content" style="font-size:12px;">Explore our comprehensive range of services tailored to meet your specific needs. From website development and design to SEO optimization and digital marketing strategies, we have the expertise to help your business thrive online. Discover how our services can benefit you and propel your online presence to new heights.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCityNameThree" aria-expanded="false" aria-controls="collapseCityNameThree">
      We look forward to hearing from you
      </button>
    </h2>
    <div id="collapseCityNameThree" class="accordion-collapse collapse fade" data-bs-parent="#accordionExampleGmap">
      <div class="accordion-body">
   <p class="service-content" style="font-size:12px;">Our convenient stepped form in the right column allows you to easily provide us with the necessary details for a personalized and efficient response. Simply follow the steps and submit your information to get started on your journey towards success. We look forward to hearing from you! </p>
      </div>
    </div>
  </div>
</div>
<hr>
<form id="regForm" action="/action_page.php">

  <!-- One "tab" for each step in the form: -->
  <div class="tab">
<label for="fname" style="font-size:14px;">First Name</label>
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
<label for="lname" style="font-size:14px;">Last Name</label>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab">Contact Info:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:left;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:0px;float: right;display: block;position: relative;top: -34px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

</div>




<script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>
<style>
#regForm {
  background-color: #fff;
  margin: 0px auto;
  padding: 20px 15px 20px 15px;
  width: 100%;
  height: 245px;
  border: 1px dotted #000;
  background: #ffeb3b;
  border-radius: 8px;
  min-height: 245px;
  max-height: 100%;
}


input {
  padding: 5px 20px;
  width: 100%;
  font-size: 12px;
  font-family: Raleway;
  border: 1px solid #000;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #f00;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.step.active {
  opacity: 1;
}
/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}




</style>
</div>
</div>
</div>
<?php endif; ?>