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
  	<li><a href="clientpage.php">My profile</a></li>
  	<li><a href="transaction.php">View previous transactions</a></li>
	<li><a href="#">Create new quotation</a></li>
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
<h3>TRANSACTIONS</h3>
     <table>
  <tr>
    <th>KVA RATIING :</th>
    <th>BRAND :</th>
	<th>PHASE :</th>
	<th>VOLTS :</th>
	<th>ALTERNATOR</th>
  </tr>
  <tr>
    <td><input type="text" placeholder=""></td>
    <td>
    <select>        
            <option value="Cummins">Cummins</option>
            <option value="Deutz">Deutz</option>
            <option value="Perkins">Perkins</option>
            <option value="Weichai">Weichai</option>
			<option value="Isuzu">Isuzu</option>
			<option value="FAW">FAW</option>
    </select>
    </td>   
    <td>
    <select>        
            <option value="Single">Single</option>
            <option value="Three">Three</option>
    </select>
    </td>  
	<td>
    <select>        
            <option value="220v">220v</option>
            <option value="440v">440v</option>
    </select>
    </td>  
    <td>
    <select>        
            <option value="Marathon">Marathon</option>
            <option value="Watex">Watex</option>
            <option value="Stamford">Stamford</option>
    </select>
    </td>  
  </tr>
		</table>
  <br>
      <button type="button">SUBMIT</button>
	<br>
</div>
</div>
  <!-- End page content -->
</div>

<script></script>

</body>
</html>
