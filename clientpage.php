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
<div class="page-grid">
<nav class="nav-left">
    <h3><center>SEALEY</center></h3>
	<br>
  <ul>
	<li><a href="index.php">Home</a></li>
  	<li><a href="#">My profile</a></li>
  	<li><a href="transaction.php">View previous transactions</a></li>
	<li><a href="clientquotation.php">Create new quotation</a></li>
	<li><a href="#">Log-out</a></li>
  </ul>
</nav>

<!-- !PAGE CONTENT! -->
<div class="content-right">
  
  <!-- Top header -->
  <header>
    <h1>Client Page</h1>
  </header>
  <br>
  <!-- Account Information -->
<div class="sales-table">
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
  <!-- End page content -->
</div>

<script>


    function closeModal(clicked){
      clicked.style.display = 'none';
    }

    function openDetails(clicked){
      let modalid = 'modal'+clicked;
      let modal = document.getElementById(modalid);
      modal.style.display = 'block';
    }
	
</script>

</body>
</html>
