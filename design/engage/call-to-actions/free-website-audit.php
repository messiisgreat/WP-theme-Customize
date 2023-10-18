<div id="footerpopupaudit">
<button class="open-audit-button" onclick="openAuditForm()">FREE Domain Audit</button>

<div id="formAuditOverlay" class="popup-audit-overlay">

<div class="form-audit-popup" id="myAuditForm">
  <form action="/action_page.php" class="form-auditcontainer">
    <h3>Get Free Website and Domain Audit*</h3>

    <label for="domain-audit-email"><b>Your Email Address</b></label>
    <input type="text" placeholder="Enter Your Email Address" name="domain-audit-email" required>

    <label for="your-domain-name"><b>Your Domain Name*</b></label>
    <input type="url" value="domain.com" placeholder="Enter Domain Name" name="your-domain-name" required>

    <button type="submit" class="btn">Request Free Domain Audit</button>
   
  </form>
 <button type="button" class="btn audit-cancel" onclick="closeAuditForm()">x</button>
</div>
</div>
</div>
<script>
function openAuditForm() {
  document.getElementById("myAuditForm").style.display = "block";
  document.getElementById("formAuditOverlay").style.display = "block";
}

function closeAuditForm() {
  document.getElementById("myAuditForm").style.display = "none";
  document.getElementById("formAuditOverlay").style.display = "none";
}
</script>


<style>

#formAuditOverlay {
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
.open-audit-button {
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
.form-audit-popup {
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
.form-audit-container {
  width: 100%;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-audit-container input[type=text], .form-audit-container input[type=url] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-audit-container input[type=text]:focus, .form-audit-container input[type=url]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-audit-container .btn {
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
.form-audit-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-audit-container .btn:hover, .open-audit-button:hover {
  opacity: 1;
}
</style>