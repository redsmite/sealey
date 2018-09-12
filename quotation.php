<!DOCTYPE html>
<html>
<title>SEALEY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/style.css">
<body>

<!-- Sidebar/menu -->
<div class="page-grid">
<nav class="nav-left">
    <h3>SEALEY</h3>
    <ul>
	    <li><a>Reports</a></li>
	    <li><a class="child-list" href="#">Make a report</a></li>
	    <li><a class="child-list" href="#">View my reports</a></li>
  	</ul>
</nav>

<!-- !PAGE CONTENT! -->
<div class="content-right">
  
  <!-- Top header -->
  <header>
    <h1>Quotation</h1>
  </header>
    <div class="table-div">
	<table>
	<tr>
	<th>Quotation No.:</th>
	<th>Date:</th>
	</tr>
	<tr>
    <td><input type="text" placeholder=""></td>
	<td><input type="text" placeholder=""></td>
	</tr>
	<tr>
	<th>Company Name:</th>
	</tr>
	<tr>
    <td colspan="2"><input type="text" placeholder=""></td>
	</tr>
	<tr>
	<th>Contact Person:</th>
	<th>Contact Number:</th>
	</tr>
	<tr>
    <td><input type="text" placeholder=""></td>
	<td><input type="text" placeholder=""></td>
	</tr>
	<tr>
	<th>Address:</th>
	</tr>
	<tr>
    <td colspan="2"><input type="text" placeholder=""></td>
	</tr>
	<tr>
    <td colspan="2">Dear Sir, In compliance to your request, we hereby present to you our quotation and its terms and condition for your consideration.</td>
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
    <td colspan="2">*Price above is TAX/VAT INCLUSIVE; FOB Manila</td>
	</tr>
	</table>
	<br>
    <button type="button">SUBMIT</button>
  </div>
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
