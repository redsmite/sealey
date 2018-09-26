<!DOCTYPE html>
<html>
<title>SEALEY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/style.css">
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<div class="page-grid">
<nav class="nav-left">
    <h3><center>SEALEY</center></h3>
	<br>
  <ul>
    <li><a href="inventoryboss.php">Inventory</a></li>
    <li><a href="salesboss.php">Sales</a></li>
    <li><a href="scheduleboss.php">Schedule</a></li>
	<li><a href="activitylogboss.php">Activity Log</a></li>
	<li><a href="accountsboss.php">Accounts</a></li>
	<li><a href="index.php">Logout</a></li>
  </ul>
</nav>

<!-- !PAGE CONTENT! -->
<div class="content-right">
  <h1>Accounts</h1>
	<br>
	<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Employee')">Employee</button>
  <button class="tablinks" onclick="openCity(event, 'Client')">Client</button>
	</div>

<div id="Employee" class="tabcontent">
  <h3>Employee</h3>
  <br>
  <select>
  <option value="Gelo">Gelo</option>
  <option value="Torres">Torres</option>
  <option value="Pogi">Pogi</option>
  <option value="Huwaw">Huwaw</option>
</select>
</div>

<div id="Client" class="tabcontent">
  <h3>Client</h3>
  <br>
  <p>Automatic na daw sabe mo</p> 
</div>
</div>
  <!-- End page content -->
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>
