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
    <p class="w3-left">New Product</p>
  </header>
    <div class="w3-container w3-black w3-padding-32">
	<h3 class="w3-left">Specification of Genset</h3>
	<br>
	<table>
	<tr>
	<th class="zero">Genset Model:</th>
	<th class="zero">Prime Power(kW):</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Standby Power(kW):</th>
	<th class="zero">Rated Voltage(V):</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Rated Frequency(Hz):</th>
	<th class="zero">Rated Speed(RPM):</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Power Factor:</th>
	<th class="zero">Dimension(mm)(LxWxH):</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Genset Weight(kg):</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	</table>
	<br>
	<h3 class="w3-left">Specification of Engine</h3>
	<br>
	<table>
	<tr>
	<th class="zero">Model:</th>
	<th class="zero">Brand:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Number of Cylinders:</th>
	<th class="zero">Aspiration:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Bore x Stroke(mm):</th>
	<th class="zero">Displacement(L):</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Starting Method:</th>
	<th class="zero">Speed Governor:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Cooling Way:</th>
	<th class="zero">Fuel Consumption @100% Prime load:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Compression Rate:</th>
	<th class="zero">Lube Oil Capacity(L):</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	</table>
	<br>
	<h3 class="w3-left">Specification of Alternator</h3>
	<br>
	<table>
	<tr>
	<th class="zero">Model:</th>
	<th class="zero">Brand:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Cooling Way:</th>
	<th class="zero">Excitation Way:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Connecting Type:</th>
	<th class="zero">Insulator:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Enclosure Class:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	</table>
	<br>
	<h3 class="w3-left">Control System</h3>
	<br>
	<table>
	<tr>
	<th class="zero">Controller Brand:</th>
	<th class="zero">Control Module Model:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	<td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	<tr>
	<th class="zero">Digital Starting Way:</th>
	</tr>
	<tr>
    <td class="zero"><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	</table>
	<br>
    <button type="button" class="w3-button w3-red w3-margin-bottom">ADD PRODUCT</button>
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
