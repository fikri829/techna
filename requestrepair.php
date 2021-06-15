<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: darkslategrey;
}

#regForm {
  background-color: gray;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #3737b2;
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
<body>

<form id="regForm" action="./display.php" method="POST">
  <h1>Request Repair:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Enter your address:
    <p><input placeholder="Your Address" name="address"></p>
     And
      <p><button type="button" onclick="getLocations()" style="font-size: 15px;" required>Show My Current Location</button><div id="demo"></div></p>
    </div>
  <div class="tab">Choose service that would you like to request
<input type="checkbox" name="issues[]" value="Hardware Maintainance">
<label for="hm" > Hardware Maintainance</label>
<input type="checkbox" name="issues[]" value="Software Maintainance">
<label for="sm"> Software Maintainance</label>
<input type="checkbox" name="issues[]" value="Cleaning Service">
<label for="cs"> Cleaning Service</label>
      <input type="checkbox" name="issues[]" value="Upgrade Service">
<label for="us" > Upgrade Service</label>
<input type="checkbox" name="issues[]" value="Format Service">
<label for="fs"> Format Service</label>
<input type="checkbox"  name="issues[]" value="Other Complicated Issues">
<label for="oci"> Other Complicated Issues</label><br><br>
  </div>
  <div class="tab">Choose your day of appointment:
    <p><input id="datepicker" name="date" onchange="checkDate()" required class="datepicker-input" type="date" data-date-format="yyyy-mm-dd" ></p>
    <p><label for="appt">Choose a time for that date:</label>
      <p><input type="time"  name="time" min="09:00:00" max="18:00:00" required></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
  </form>
<script>
 var x = document.getElementById("demo");
function getLocations() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.innerHTML = "<input type='hidden' name='lat' value='" + position.coords.latitude +
  "' required><input type='hidden' name='long' value='" + position.coords.longitude + "' required>";
}
        </script>  
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
<script type="text/javascript">
   function checkDate() {
       var selectedDate = document.getElementById('datepicker').value;
       var now = new Date();
       var dt1 = Date.parse(now),
       dt2 = Date.parse(selectedDate);
       if (dt2 < dt1) {
            alert("Date must be in the future");
       }
 }
</script>
</body>
</html>
