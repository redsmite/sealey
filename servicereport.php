<!DOCTYPE html>
<html>
<title>SEALEY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/style.css">
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>SEALEY</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Reports <i class="fa fa-caret-down"></i>
    </a>
	<div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Make a report</a>
      <a href="#" class="w3-bar-item w3-button">View my reports</a>
    </div>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">SEALEY</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Service Report</p>
  </header>
    <div class="w3-container w3-black w3-padding-32">
	<table>
	<tr>
	<th class="zero">Clients Name:</th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Clients Address:</th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Requested By:</th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Genset Id:</th>
	<th class="zero">Engine Serial No.:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Engine Model:</th>
	<th class="zero">Running Hours:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Date in Service:</th>
	<th class="zero">Job Order #<br>In charge Technician Name:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero" colspan="2"><center>I. COMPLAINT REPORTED BY THE CLIENT/S (according to clients):</center></th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero" colspan="2"><center>Recevied</center></th>
	</tr>
	<tr>
	<th class="zero">Date:</th>
	<th class="zero">Time:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero" colspan="2"><center>II. CAUSE AND CORRECTION (include troubleshooting steps):</center></th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero" colspan="2"><center>III. RECOMMENDATION/S OF THE TECHNICIAN-IN-CHARGE</center></th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero" colspan="2">Genset Current Status</th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero" colspan="2"><center>IMPORTANT NOTE</center></th>
	</tr>
	<tr>
    <td class="zero" colspan="2">Any complaint/s with regards to the job should be raised one (1) week after the job completion. Otherwise job is considered done correctly and satisfactory in nature.</td>
	</tr>
	<tr>
    <td class="zero" colspan="2">In regards to workmanship of the technician, client/s must complain and raise the issue one (1) week after the completion of the job: job complains must be raised to the office and not to the technician so to proper rectification.</td>
	</tr>
    
	</table>
	<br>
    <button type="button" class="w3-button w3-red w3-margin-bottom">SUBMIT</button>
  </div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}



// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
