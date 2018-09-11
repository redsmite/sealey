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
	<a href="clientpage.php" class="w3-bar-item w3-button">My profile</a>
    <a href="transaction.php" class="w3-bar-item w3-button">View previous transactions</a>
	<a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('quotation').style.display='block'">Create new quotation</a>
  </div>
</nav>

<!-- Modal -->
<div id="quotation" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('quotation').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">QUOTATION</h2>
      <table>
	<tr>
	<th class="zero">KVA Rating:</th>
	<th class="zero">  
	<div class="w3-dropdown-hover">
    <button class="w3-button w3-black">BRAND</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Cummins</a>
      <a href="#" class="w3-bar-item w3-button">Deutz</a>
      <a href="#" class="w3-bar-item w3-button">Perkins</a>
	  <a href="#" class="w3-bar-item w3-button">Weichai</a>
	  <a href="#" class="w3-bar-item w3-button">Isuzu</a>
	  <a href="#" class="w3-bar-item w3-button">FAW</a>
    </div>
	</div>
	</th>
	<th class="zero">  
	<div class="w3-dropdown-hover">
    <button class="w3-button w3-black">PHASE</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Single</a>
      <a href="#" class="w3-bar-item w3-button">Three</a>
    </div>
	</div>
	</th>
	<th class="zero">  
	<div class="w3-dropdown-hover">
    <button class="w3-button w3-black">VOLTS</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">220v</a>
      <a href="#" class="w3-bar-item w3-button">440v</a>
    </div>
	</div>
	</th>
	<th class="zero">  
	<div class="w3-dropdown-hover">
    <button class="w3-button w3-black">ALTERNATOR</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Marathon</a>
      <a href="#" class="w3-bar-item w3-button">Watex</a>
	  <a href="#" class="w3-bar-item w3-button">Stamford</a>
    </div>
	</div>
	</th>
	</tr>
	<tr>
	<td><input class="w3-input w3-border" type="text" placeholder="" style="width:100%"></td>
	</tr>
	  </table>
      <br>
	<button type="button" class="w3-button w3-padding-large w3-black w3-margin-bottom" onclick="document.getElementById('quotation').style.display='none'">Submit</button>
    </div>
  </div>
</div>

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
    <p class="w3-left">Client Page</p>
  </header>
  
  <!-- Sales -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">

      <div class="w3-col s4">
	  <h3>ACCOUNT INFORMATION</h3>
        <table>
  <tr>
    <th>NAME : </th>
  </tr>
  <tr>
	<th>ADDRESS : </th>
  </tr>
  <tr>
	<th>E-MAIL :</th>
  </tr>
  <tr>
    <th>CONTACT NO. :</th>
  </tr>
  <tr>
    <th>COMPANY NAME :</th>
  </tr>
  <tr>
    <th>TRANSACTIONS :</th>
  </tr>
  
</table>
<br>

      </div>
    </div>
  </footer>
  <br>
  
  <div class="center">
  <div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
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