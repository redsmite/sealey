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
      Accounts <i class="fa fa-caret-down"></i>
    </a>
	<div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Sales Assoc</a>
      <a href="#" class="w3-bar-item w3-button">Clients</a>
    </div>
    <a href="product.html" class="w3-bar-item w3-button">Products</a>
	<a href="sales.html" class="w3-bar-item w3-button">Sales</a>
    <a href="inventory.html" class="w3-bar-item w3-button">Inventory</a>
	<a href="#" class="w3-bar-item w3-button">Schedule Appointment</a>
	<a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Reports <i class="fa fa-caret-down"></i>
    </a>
	<div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Service Report</a>
      <a href="#" class="w3-bar-item w3-button">Sales Report</a>
	  <a href="#" class="w3-bar-item w3-button">Inventory Report</a>
    </div>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
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
    <p class="w3-left">Electrical Supplies</p>
    <p class="w3-right">
      <a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">Add Product</a>
    </p>
  </header>

  <!-- Product grid 1 -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/1.png" style="width:100%">
        <p>Amorphous alloy transformer</p>
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Details</button>
		  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
	  </div>
    </div>

  </div>
      </div>
      <div class="w3-container">
        <img src="img/2.png" style="width:100%">
        <p>Dry-type transformer</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/3.png" style="width:100%">
        </div>
        <p>Power transformer</p>
      </div>
      <div class="w3-container">
        <img src="img/4.png" style="width:100%">
        <p>Stacked core transformer</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/5.png" style="width:100%">
        <p>Cabinet</p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/6.png" style="width:100%">
        </div>
        <p>MNSJ The second-generation Tank</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/7.png" style="width:100%">
        <p>Distribution Box</p>
      </div>
      <div class="w3-container">
        <img src="img/8.png" style="width:100%">
        <p>MDmax ST Low Pressure Switchgear</p>
      </div>
    </div>
  </div>
  
  <!-- Product grid 2 -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/9.png" style="width:100%">
        <p>AC Low Voltage Distribution</p>
      </div>
      <div class="w3-container">
        <img src="img/10.png" style="width:100%">
        <p>XL Power Supply Cabinet</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/11.png" style="width:100%">
        </div>
        <p>Outdoor power distribution box</p>
      </div>
      <div class="w3-container">
        <img src="img/12.png" style="width:100%">
        <p>Distribution transformer cabinet</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/13.png" style="width:100%">
        <p>Power distribution control</p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/14.png" style="width:100%">
        </div>
        <p>Low voltage withdrawable switchgear</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/15.png" style="width:100%">
        <p>Withdrawable low-voltage switchgear</p>
      </div>
      <div class="w3-container">
        <img src="img/16.png" style="width:100%">
        <p>AC low voltage power distribution</p>
      </div>
    </div>
  </div>
  
   <!-- Product grid 3 -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/17.png" style="width:100%">
        <p>AC metal ring net switch equipment</p>
      </div>
      <div class="w3-container">
        <img src="img/18.png" style="width:100%">
        <p>Fixed metal enclosed switchgear</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/19.png" style="width:100%">
        </div>
        <p>KYN61-40.5 armoured moving type</p>
      </div>
      <div class="w3-container">
        <img src="img/20.png" style="width:100%">
        <p>KYN28A-12 indoor AC metal clad</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/21.png" style="width:100%">
        <p>Metal clad switchgear (UniGear ZS1)</p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/22.png" style="width:100%">
        </div>
        <p>Metal clad switchgear (UniGear ZS3.2)</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/23.png" style="width:100%">
        <p>Metal clad switchgear (UniGear 550)</p>
      </div>
      <div class="w3-container">
        <img src="img/24.png" style="width:100%">
        <p>Metal clad switchgear (UniGear ZS8.X)</p>
      </div>
    </div>
  </div>
  
    <!-- Product grid 4 -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/25.png" style="width:100%">
        <p>Intelligent metal clad switchgear (I-GZS1)</p>
      </div>
      <div class="w3-container">
        <img src="img/26.png" style="width:100%">
        <p>The main components of the I-GZS1</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/27.png" style="width:100%">
        </div>
        <p>All insulation hermetic SF6 filled tank</p>
      </div>
      <div class="w3-container">
        <img src="img/28.png" style="width:100%">
        <p>Solid insulation intelligent ring network</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/29.png" style="width:100%">
        <p>DC Screen</p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/30.png" style="width:100%">
        </div>
        <p>Intelligent demarcation switch</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/31.png" style="width:100%">
        <p>ARC Suppression Cabinet</p>
      </div>
    </div>
  </div>
  
   <!-- Top header Generator -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Generator Set</p>
    <p class="w3-right">
      <a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">Add Product</a>
    </p>
  </header>

  <!-- Product grid Generator -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/32.png" style="width:100%">
        <p>Cummins</p>
				<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Details</button>
		  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
	  </div>
    </div>

  </div>
      </div>
      <div class="w3-container">
        <img src="img/33.png" style="width:100%">
        <p>Perkins</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/34.png" style="width:100%">
        </div>
        <p>Weichai Power</p>
      </div>
      <div class="w3-container">
        <img src="img/35.png" style="width:100%">
        <p>Deutz</p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/36.png" style="width:100%">
        <p>Portable Generator</p>
      </div>
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
