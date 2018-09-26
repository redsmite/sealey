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
    <li><a href="inventoryadmin.php">Inventory</a></li>
    <li><a href="salesadmin.php">Sales</a></li>
    <li><a href="scheduleadmin.php">Schedule</a></li>
	<li><a href="activitylogadmin.php">Activity Log</a></li>
	<li><a href="accountsadmin.php">Accounts</a></li>
	<li><a href="index.php">Logout</a></li>
  </ul>
</nav>

<!-- !PAGE CONTENT! -->
<div class="content-right">
  <h1>Activity Log</h1>
	<br>
  DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! DIV MO TO! 
  
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
