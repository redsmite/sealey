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
  <a href="newproduct.php" class="w3-bar-item w3-button">Add new product</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Reports <i class="fa fa-caret-down"></i>
    </a>
	<div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Make a report</a>
      <a href="#" class="w3-bar-item w3-button">View my reports</a>
    </div>
  </div>
</nav>

<!-- Modal -->
<div id="product" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('product').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
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
	<button type="button" class="w3-button w3-padding-large w3-black w3-margin-bottom" onclick="document.getElementById('product').style.display='none'">Submit</button>
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
    <p class="w3-left">Inventory</p>
  </header>
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Product Name" name="Product Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Product Id" name="Product Id" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Search</button>
        </form>
      </div>

      <div class="w3-col s4">
        <table>
  <tr>
    <th>KVA</th>
    <th>Brand</th>
    <th>Phase Wire</th>
	<th>Size(mm)/Weight(kg)</th>
	<th>Date of sold</th>
	<th>Genset ID #</th>
	<th>Company Name</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
	<td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
	<td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
	<td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
	<td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
	<td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
	<td>Maria Anders</td>
    <td>Germany</td>
	<td>Active</td>
  </tr>
</table>
      </div>
    </div>
  </footer>

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
