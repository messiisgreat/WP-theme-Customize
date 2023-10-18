<div id="footerpopup">
<button class="open-button" onclick="openForm()">PreOrder Now & Sale</button>
<button class="open-audit-button" onclick="openAuditForm()">FREE Domain Audit</button>

<div id="formOverlay" class="popup-overlay">

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h3>PreOrder Now & Sale</h3>

    <label for="email"><b>Your Email Address</b></label>
    <input type="text" placeholder="Enter Your Email Address" name="email" required>

    <label for="yourwebsite"><b>Your Website</b></label>
    <input type="url" value="https://" placeholder="Enter Your Website" name="yourwebsite" required>

    <button type="submit" class="btn">PreOrder Now & Sale</button>
   
  </form>
 <button type="button" class="btn cancel" onclick="closeForm()">x</button>
</div>
</div>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("formOverlay").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("formOverlay").style.display = "none";
}
</script>


<style>

#formOverlay {
display: none;
        position: fixed;
        z-index: 1035;
        background: #000;
        top: 0;
        left: 0;
        right: 0;
        min-width: 100%;
        height: 100%;
        opacity: 1;
}
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
	background-color: #f3d858;
	color: #000;
	padding: 8px 16px;
	border: 2px solid #000;
	cursor: pointer;
	opacity: 0.9;
	position: fixed;
	bottom: 43px;
	left: 43px;
	width: auto;
	border-radius: 8px;
	font-size: 14px;
	font-weight: 600;
	box-shadow: 0px 8px 32px -4px #000;
}

/* The popup form - hidden by default */
.form-popup {
	display: none;
	position: fixed;
	border: 3px solid #f1f1f1;
	z-index: 9999999;
	top: 20%;
	left: 35%;
	margin: 0px auto;
                    max-width: 30%;
}

/* Add styles to the form container */
.form-container {
  width: 100%;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=url] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=url]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>