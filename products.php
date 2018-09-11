<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sealey Enterprise Corporation</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a class="active" href="products.html">Products</a></li>
  <li><a href="services.html">Services</a></li>
  <li><a href="contact.html">Contact</a></li>
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


  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Sealey Enterprise Corporation
      </span>
    </div>
	<center><img src="img/SealeyBig.png" alt="sealey" width="500" height="300"></center>
  </div>

  <section class="section section-light">
    <h2>With Sealey you will never run out of Power</h2>
    <p>
      Our company assures that each client will be accommodated immediately by the company so to address the needs of each client right away.
    </p>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
		<i class="fa fa-cube" style="font-size:80px;color:white"></i>
		<i class="fa fa-flash" style="font-size:80px;color:white"></i>
		<i class="fa fa-lightbulb-o" style="font-size:80px;color:white"></i>
		<i class="fa fa-gear" style="font-size:80px;color:white"></i>
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Why choose us?</h2>
    <p>
      The affiliations of Sealey Enterprises Corporation are those based abroad so to ensure that the quality is tantamount to the international standards. The brands that Sealey carries are ISO certified as per the record of International Organization for Standardization and other international standards that are deemed necessary for the excellent quality of generators and heavy equipments.
    </p>
	<br>
					
						<div class="cta-text">
							<h2><span>S</span>ecured Brands</h2>
							<h2><span>E</span>xclusive Distributor</h2>
							<h2><span>A</span>ssurance</h2>
							<h2><span>L</span>evering After-Sales Services</h2>
							<h2><span>E</span>stablished Reputation</h2>
							<h2><span>Y</span>ield More.</h2>
						</div>
						
						<div class="teamimage">
							<img src="img/teamwork.jpg" alt="sealey" width="500" height="300">
						</div>
						
						
						
					
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        MGA LOGO NG CLIENTS NILA, SLIDER LANG GAGAWIN KO DITO! KASO WALA PA EH! JAYMAAAAAAAAAN!
      </span>
    </div>
  </div>

  <section class="section section-dark">
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

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        © Sealey Enterprise Corporation - All Right Reserved
      </span>
    </div>
  </div>
  

  <script>


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
