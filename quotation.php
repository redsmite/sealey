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
    <p class="w3-left">Quotation</p>
  </header>
    <div class="w3-container w3-black w3-padding-32">
	<table>
	<tr>
	<th class="zero">Quotation No.:</th>
	<th class="zero">Date:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Company Name:</th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Contact Person:</th>
	<th class="zero">Contact Number:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Address:</th>
	</tr>
	<tr>
    <td class="zero" colspan="2"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
    <td class="zero" colspan="2">Dear Sir, In compliance to your request, we hereby present to you our quotation and its terms and condition for your consideration.</td>
	</tr>
	</table>
	<br>
	<table>
	<tr>
	<th>Genset Model:</th>
	<th>Prime Power<br>(KW/KVA):</th>
	<th>Standby Power<br>(KW/KVA):</th>
	<th>Engine Model:</th>
	<th>Alternator Model:</th>
	<th>Type:</th>
	<th>Unit Price PHP:</th>
	</tr>
	<tr>
    <td>SLI50GFS</td>
    <td>36/45</td>
    <td>40/50</td>
	<td>4JB1TA</td>
	<td>WHI184H</td>
	<td>Silent</td>
    </tr>
	<tr>
    <td class="zero" colspan="2">*Price above is TAX/VAT INCLUSIVE; FOB Manila</td>
	</tr>
	</table>
	<br>
    <button type="button" class="w3-button w3-red w3-margin-bottom">SUBMIT</button>
  </div>

  <!-- End page content -->
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
