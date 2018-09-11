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
	<a href="#" class="w3-bar-item w3-button">Create Sales Report</a>
	<a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      View my Reports <i class="fa fa-caret-down"></i>
    </a>
	<div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Update</a>
      <a href="#" class="w3-bar-item w3-button">Delete</a>
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
    <p class="w3-left">Sales Report</p>
  </header>
  
  <!-- Sales -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">

      <div class="w3-col s4">
	  <h4>Month of January</h4>
        <table>
  <tr>
    <th>DATE</th>
    <th>COMPANY NAME</th>
    <th>LOCATION</th>
	<th>GENSET/PARTS</th>
	<th>AMOUNT</th>
	<th>SOLD BY</th>
	<th>REMARKS</th>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
</table>
<br>
<h4>Month of February</h4>
        <table>
  <tr>
    <th>DATE</th>
    <th>COMPANY NAME</th>
    <th>LOCATION</th>
	<th>GENSET/PARTS</th>
	<th>AMOUNT</th>
	<th>SOLD BY</th>
	<th>REMARKS</th>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
  <tr>
    <td>January 3,2017</td>
    <td>Royal Machinery</td>
    <td>Parañaque</td>
	<td>50kva</td>
	<td>495535.71</td>
    <td>Cherry</td>
	<td>Full Payment</td>
  </tr>
</table>
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
