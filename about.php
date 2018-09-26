<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sealey Enterprise Corporation</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a class="active">About</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href="services.php">Services</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Request a quote</button></li>
  <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
</ul>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/icon.png" alt="icon" class="icon" width="50" height="50">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="kva"><b>KVA RATING :</b></label>
      <input type="text" placeholder="Enter KVA Rating" name="kva" required><br><br>
      
	  <label for="brand"><b>BRAND :</b></label>
		<select>        
            <option value="Cummins">Cummins</option>
            <option value="Deutz">Deutz</option>
            <option value="Perkins">Perkins</option>
            <option value="Weichai">Weichai</option>
			<option value="Isuzu">Isuzu</option>
			<option value="FAW">FAW</option>
		</select><br><br>
		
	  <label for="phase"><b>PHASE :</b></label>
		<select>        
            <option value="Single">Single</option>
            <option value="Three">Three</option>
		</select><br><br>
		
	  <label for="volts"><b>VOLTS :</b></label>
		<select>        
            <option value="220v">220v</option>
            <option value="440v">440v</option>
		</select><br><br>
		
	  <label for="alternator"><b>ALTERNATOR :</b></label>
		<select>        
            <option value="Marathon">Marathon</option>
            <option value="Watex">Watex</option>
            <option value="Stamford">Stamford</option>
		</select><br><br>
	  
	  
      <button type="submit">Submit</button>
    </div>

  </form>
</div>


  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Sealey Enterprise Corporation
      </span>
    </div>
	<center><img src="img/SealeyBig.png" alt="sealey" width="500" height="300"></center>
  </div>

  <section class="section section-light">
    <h2>Sealey Enterprise Corporation - The Humble Beginning</h2>
    <p>
      Sealey Enterprises Corporation came about from the perseverance and hard work of its pioneer, Mr. Chongliang Zhu, current President of Sealey Enterprise, who creates the company out of passion, industry experience and expertise.

In 2012, Mr. Chongliang Zhu, who is one of the stockholders of another leading manufacturer of generator sets, VOVAC Weifang Electromechanical Power Ltd. located at Shandong, Weifang, China; start up a firm together with his Filipino colleagues, that will provide generator set, engine and spare parts to businesses that aims to empower business communities in reaching success by providing quality and affordable power-generating equipments.

For about four (4) years in the industry, Sealey is committed in satisfying its valued clients by providing excellent quality and affordable products, and profound after-sale-service; and creating reliable partners for the betterment of each party. Sealey is still looking forward for years to come to continue its business commitments.
    </p>
  </section>

  <section class="section section-dark">
    <h2>Mission</h2>
    <p>
      To cater customers who seek utmost performance of power generator and heavy equipment; and to give profound after-sales-service to all clients.
    </p>
	<br>
					
	<h2>Vision</h2>
    <p>
      The leading distributor of power generator and heavy equipment that provides excellent quality of products and reliable partner for the prosperity of every business.
    </p>
						
						
						
					
  </section>

  <section class="section section-light">
    <h1>Address</h1>
    <p>
       +632 961 8800 | +63916 551 4580 
		info.sealey@gmail.com

		
		<br>
		<h3>Main Office</h3>
		Unit 610 Pacific Century Tower, Quezon Ave., Brgy.South Triangle, Quezon City
		<h3>Branch Office</h3>
		4th Flr. Shania Tower, San Fernando, La Union
		<h3>Showroom</h3>
		Mayor Jaldon St. Canelar, Zamboanga City
		<h3>North Site Warehouse</h3>
		#680 Villa Carmen Llano Road, Sunrise Village, Caloocan City
		<h3>South Site Warehouse</h3>
		Binhepco Compound, Tirona Hi-way Habaywan, Bacoor, Cavite
    </p>
  </section>

  <footer>
    <a href="https://www.facebook.com/sealeyenterprises/"><i class="fab fa-facebook"></i></a>
    <a href="https://twitter.com/Sealeytools?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
    <p>© Sealey Enterprise Corporation - All Right Reserved</p>
  </footer>
  

  <script>


// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>


</body>
</html>
