

<div class="form-container">

<h3 class="fdat" id="#domainaudit" style="font-size:18px;border-bottom:1px solid #000;margin:0px 0px 10px 0px;padding:0px 0px 10px 0px;">
<span class="dashicons dashicons-email" style="font-size:30px;padding:0px;margin:5px auto;display: inline;"></span> Book SEO Help Now!</h3>
<div class="fda">


<script>
  function validateForm(form) {
    var domainInput = form.querySelector('#domain');
    var domainValue = domainInput.value.trim();

    // Check if the domain is valid (without http:// or https://)
    var isValidDomain = /^((?!http:\/\/|https:\/\/|https:\/\/www.|http:\/\/www.|www.).)*$/.test(domainValue);

    // Check if the domain is blocked
    var blockList = ['sex', 'porn', 'dating', 'poker', 'slots'];
    var isBlockedDomain = blockList.some(function (blockedWord) {
      return domainValue.includes(blockedWord);
    });

    if (!isValidDomain) {
      showError(domainInput, 'Please enter a valid domain name without "http://" or "https://"');
      return false;
    }

    if (isBlockedDomain) {
      var errorMessage = 'This domain is blocked by security reasons. Please try another one or see whitelisted domain names on <a href="https://yourseobook.com/white-listed-domain-lists/">https://yourseobook.com/white-listed-domain-lists/</a>';
      showError(domainInput, errorMessage, 'blocked-error');
      return false;
    }


/*
  function showError(input, message, className) {
    var errorElement = input.parentElement.querySelector('.error-message');
    errorElement.textContent = message;
    errorElement.className = 'error-message ' + className;
  }
*/
    // Additional validation logic for the email address if needed

    // Perform other form submission tasks if the validation passes
    submitGoogleFormFront(form);
  }
  function showError(input, message, className) {
    var errorElement = input.parentElement.querySelector('.error-message');
    errorElement.innerHTML = '<details class="' + className + '"><summary>This domain is blocked by security reasons</summary>' + message + '</details>';
  }


</script>

<form method="POST" action="" onsubmit="return submitGoogleFormFront(this);">



  <div class="audit-form-fields">
<div class="input-group py-1 mb-2">
<span class="input-group-text" style="white-space: break-spaces;max-width:35%;">Domain name *</span>
 <input class="form-control" name="domainName" id="domain" type="url" placeholder="&#127757; Domain Name" required aria-describedby="domain" aria-label="Domain Name">
</div>
  </div>

  <div class="audit-form-fields">
  <div class="input-group py-1 mb-2">
  <span class="input-group-text" style="white-space: break-spaces;max-width:35%;"> Email address *</span>
    <input class="form-control email-address-audit" name="emailAddress" id="email" type="email" placeholder="&#128233; Email Address" required aria-describedby="email" aria-label="Email Address">
  </div>
  </div>

  <div class="audit-form-fields">
   <button type="submit" role="button" class="w-60 btn btn-primary btn-sm">Analyze Website</button>
 </div>




<div class="audit-form-fields">
<h3 class="successfull-message" style="display: none;">
<div class="loader"></div>
<strong>Requesting New FREE Domain Audit</strong></h3>
</div>
</form>

                    

</div>
</div>


<script>

  function submitGoogleFormFront(form) {
    var emailValue = encodeURIComponent(form.email.value);    // Encode the email value
    var domainValue = encodeURIComponent(form.domain.value);  // Encode the domain value
    var url = 'https://docs.google.com/forms/d/e/1FAIpQLSfJcgVxIz_pNPZU6dMfezuhyN3QFgc5zIxrDv5XGc4wDbAY4A/formResponse';
    url += '?entry.119725478=' + emailValue;   // Replace 'entry.119725478' with the actual field ID
    url += '&entry.1614327637=' + domainValue; // Replace 'entry.1614327637' with the actual field ID
    url += '&submit=Submit';

    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    // Set the appropriate headers
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader('Accept', 'application/xml');

    // Handle the response
xhr.onreadystatechange = function () {
  if (xhr.readyState === 4) {
    if (xhr.status === 200) {
      // Request succeeded
      setTimeout(function () {
        window.location.replace("https://yourseobook.com/");
      }, 138000); // Delay in milliseconds (2000ms = 2 seconds)
    } else {
      // Request failed
      setTimeout(function () {
        window.location.replace("https://yourseobook.com/successful-free-domain-audit-request/?ref=domain-audit-request-home");
      }, 132000); // Delay in milliseconds (2000ms = 2 seconds)
    }
  }
};


    // Send the request
    xhr.send();
  // Display the success message
  var successMessage = form.querySelector('.successfull-message');
  successMessage.style.display = 'inline-block';
    return false; // Prevent the default form submission
  }
</script>


<style>

.loader {
  border: 8px solid #ffe103;
  border-top: 8px solid #0012ff;
  border-radius: 50%;
  width: 43px;
  height: 43px;
  animation: spin 1s linear infinite;
  margin: 30px auto;
}
h3.successfull-message {
  position: fixed;
  top: 300px;
  width: 46%;
  height: auto;
  padding: 50px 30px 50px 30px;
  background: #000000;
  color: #ffe103;
  left: 0;
  right: 0;
  margin: 0px auto;
  border-radius: 8px;
  text-align: center;
  border: 3px solid #0012ff;
}
h3.successfull-message strong{
color: #ffe103;
font-size: 43px;
font-weight: 200;
}
@keyframes spin {
0% { transform: rotate(0deg); } /* Start the rotation at 0 degrees */
100% { transform: rotate(360deg); } /* End the rotation at 360 degrees */
}
small#domain-error.error-message.blocked-error {
  display: flex;
  width: 100%;
  background: #F00;
  color: #fff;
  margin: 5px auto;
  line-height: 1.4rem;
  font-size: 12px;
  padding: 10px 20px;
  border-radius: 8px;
  transition: all 1.3s ease;
}
</style>