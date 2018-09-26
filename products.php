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
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a class="active" href="products.php">Products</a></li>
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

  <div id="modal-tab1" class="modal-tab" onclick="showForm1()">Tab 1</div>
  <div id="modal-tab2" class="modal-tab" onclick="showForm2()">Tab 2</div><br>
  <div id="body-tab1">
    <h1>Form 1</h1>
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
    <div id="body-tab2">
    <h1>Form 2</h1>
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
    </div>

  </form>
  
</div>
<!-- Modal Tab -->
<script>
  function showForm1(){
    var body1 = document.getElementById('body-tab1');
    var body2 = document.getElementById('body-tab2');

    body1.style.display = "block";
    body2.style.display = "none";
  }
  function showForm2(){
    var body1 = document.getElementById('body-tab1');
    var body2 = document.getElementById('body-tab2');

    body1.style.display = "none";
    body2.style.display = "block";
  }
  showForm1();
</script>
<!-- End of Modal Tab -->
<!-- Main Content -->
<div class="products-header"></div>
<div class="products-page">
    <h1>Electrical Supply</h1>

  <!-- Tab -->
  <div class="products-tab-div">
    <div class="products-tab" id="tab1" onclick="showTab1()">All</div>
    <div class="products-tab" id="tab2" onclick="showTab2()">Transformers</div>
    <div class="products-tab" id="tab3" onclick="showTab3()">Low Voltage</div>
    <div class="products-tab" id="tab4" onclick="showTab4()">Medium Voltage</div>
    <div class="products-tab" id="tab5" onclick="showTab5()">Box Change</div>
    <div class="products-tab" id="tab6" onclick="showTab6()">Intelligent Series</div>
  </div>
  
  <!-- Main Content -->
  <div id="products-page-content">
    <div id="products-content-1" class="products-content">
      <h1>All</h1>
      <div class="products-content-div">
        <img src="img/Amorphous alloy transformer.png">
        <p>Amorphous alloy transformer</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Dry-type transformer.png">
        <p>Dry-type transformer</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Power transformer.png">
        <p>Power transformer</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Stacked core transformer.png">
        <p>Stacked core transformer</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Cabinet.png">
        <p>Cabinet</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/MNSJ The second-generation Tank.png">
        <p>MNSJ The second-generation Tank</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Distribution Box.png">
        <p>Distribution Box</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/MDmax ST Low Pressure Switchgear.png">
        <p>MDmax ST Low Pressure Switchgear</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/AC Low Voltage Distribution.png">
        <p>AC Low Voltage Distribution</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/XL Power Supply Cabinet.png">
        <p>XL Power Supply Cabinet</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Outdoor power distribution box.png">
        <p>Outdoor power distribution box</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Distribution transformer cabinet.png">
        <p>Distribution transformer cabinet</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Power distribution control.png">
        <p>Power distribution control</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Low voltage withdrawable switchgear.png">
        <p>Low voltage withdrawable switchgear</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Withdrawable low-voltage switchgear.png">
        <p>Withdrawable low-voltage switchgear</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/AC low voltage power distribution.png">
        <p>AC low voltage power distribution</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/AC metal ring net switch equipment.png">
        <p>AC metal ring net switch equipment</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Fixed metal enclosed switchgear.png">
        <p>Fixed metal enclosed switchgear</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/KYN61-40.5 armoured moving type.png">
        <p>KYN61-40.5 armoured moving type</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/KYN28A-12 indoor AC metal clad.png">
        <p>KYN28A-12 indoor AC metal clad</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Metal clad switchgear (UniGear ZS1).png">
        <p>Metal clad switchgear (UniGear ZS1)</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Metal clad switchgear (UniGear ZS3.2).png">
        <p>Metal clad switchgear (UniGear ZS3.2)</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Metal clad switchgear (UniGear 550).png">
        <p>Metal clad switchgear (UniGear 550)</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
	  <div class="products-content-div">
        <img src="img/Metal clad switchgear (UniGear ZS8.X).png">
        <p>Metal clad switchgear (UniGear ZS8.X)</p>
        <div class="content-button-red">See Details</div>
        <div class="content-button-green">Inquire Page</div>
      </div>
    </div>
    <div id="products-content-2" class="products-content">
      <h1>Transformers</h1>
    </div>

    <div id="products-content-3" class="products-content">
      <h1>Low Voltage</h1>
    </div>

    <div id="products-content-4" class="products-content">
      <h1>Medium Voltage</h1>
    </div>

    <div id="products-content-5" class="products-content">
      <h1>Box Change</h1>
    </div>

    <div id="products-content-6" class="products-content">
      <h1>Intelligent Series</h1>
    </div>
    
  </div>

</div>

<!-- End of Main Content -->
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

// Tab Display Show
function showTab1(){
  var tab1 = document.getElementById('tab1');
  var tab2 = document.getElementById('tab2');
  var tab3 = document.getElementById('tab3');
  var tab4 = document.getElementById('tab4');
  var tab5 = document.getElementById('tab5');
  var tab6 = document.getElementById('tab6');

  var body1 = document.getElementById('products-content-1');
  var body2 = document.getElementById('products-content-2');
  var body3 = document.getElementById('products-content-3');
  var body4 = document.getElementById('products-content-4');
  var body5 = document.getElementById('products-content-5');
  var body6 = document.getElementById('products-content-6');

  tab1.classList.add('products-tab-highlight');
  tab2.classList.remove('products-tab-highlight');
  tab3.classList.remove('products-tab-highlight');
  tab4.classList.remove('products-tab-highlight');
  tab5.classList.remove('products-tab-highlight');
  tab6.classList.remove('products-tab-highlight');

  body1.style.display = 'block';
  body2.style.display = 'none';
  body3.style.display = 'none';
  body4.style.display = 'none';
  body5.style.display = 'none';
  body6.style.display = 'none';
}

function showTab2(){
  var tab1 = document.getElementById('tab1');
  var tab2 = document.getElementById('tab2');
  var tab3 = document.getElementById('tab3');
  var tab4 = document.getElementById('tab4');
  var tab5 = document.getElementById('tab5');
  var tab6 = document.getElementById('tab6');

  var body1 = document.getElementById('products-content-1');
  var body2 = document.getElementById('products-content-2');
  var body3 = document.getElementById('products-content-3');
  var body4 = document.getElementById('products-content-4');
  var body5 = document.getElementById('products-content-5');
  var body6 = document.getElementById('products-content-6');

  tab1.classList.remove('products-tab-highlight');
  tab2.classList.add('products-tab-highlight');
  tab3.classList.remove('products-tab-highlight');
  tab4.classList.remove('products-tab-highlight');
  tab5.classList.remove('products-tab-highlight');
  tab6.classList.remove('products-tab-highlight');

  body1.style.display = 'none';
  body2.style.display = 'block';
  body3.style.display = 'none';
  body4.style.display = 'none';
  body5.style.display = 'none';
  body6.style.display = 'none';
}

function showTab3(){
  var tab1 = document.getElementById('tab1');
  var tab2 = document.getElementById('tab2');
  var tab3 = document.getElementById('tab3');
  var tab4 = document.getElementById('tab4');
  var tab5 = document.getElementById('tab5');
  var tab6 = document.getElementById('tab6');

  var body1 = document.getElementById('products-content-1');
  var body2 = document.getElementById('products-content-2');
  var body3 = document.getElementById('products-content-3');
  var body4 = document.getElementById('products-content-4');
  var body5 = document.getElementById('products-content-5');
  var body6 = document.getElementById('products-content-6');

  tab1.classList.remove('products-tab-highlight');
  tab2.classList.remove('products-tab-highlight');
  tab3.classList.add('products-tab-highlight');
  tab4.classList.remove('products-tab-highlight');
  tab5.classList.remove('products-tab-highlight');
  tab6.classList.remove('products-tab-highlight');

  body1.style.display = 'none';
  body2.style.display = 'none';
  body3.style.display = 'block';
  body4.style.display = 'none';
  body5.style.display = 'none';
  body6.style.display = 'none';
}

function showTab4(){
  var tab1 = document.getElementById('tab1');
  var tab2 = document.getElementById('tab2');
  var tab3 = document.getElementById('tab3');
  var tab4 = document.getElementById('tab4');
  var tab5 = document.getElementById('tab5');
  var tab6 = document.getElementById('tab6');

  var body1 = document.getElementById('products-content-1');
  var body2 = document.getElementById('products-content-2');
  var body3 = document.getElementById('products-content-3');
  var body4 = document.getElementById('products-content-4');
  var body5 = document.getElementById('products-content-5');
  var body6 = document.getElementById('products-content-6');

  tab1.classList.remove('products-tab-highlight');
  tab2.classList.remove('products-tab-highlight');
  tab3.classList.remove('products-tab-highlight');
  tab4.classList.add('products-tab-highlight');
  tab5.classList.remove('products-tab-highlight');
  tab6.classList.remove('products-tab-highlight');

  body1.style.display = 'none';
  body2.style.display = 'none';
  body3.style.display = 'none';
  body4.style.display = 'block';
  body5.style.display = 'none';
  body6.style.display = 'none';
}

function showTab5(){
  var tab1 = document.getElementById('tab1');
  var tab2 = document.getElementById('tab2');
  var tab3 = document.getElementById('tab3');
  var tab4 = document.getElementById('tab4');
  var tab5 = document.getElementById('tab5');
  var tab6 = document.getElementById('tab6');

  var body1 = document.getElementById('products-content-1');
  var body2 = document.getElementById('products-content-2');
  var body3 = document.getElementById('products-content-3');
  var body4 = document.getElementById('products-content-4');
  var body5 = document.getElementById('products-content-5');
  var body6 = document.getElementById('products-content-6');

  tab1.classList.remove('products-tab-highlight');
  tab2.classList.remove('products-tab-highlight');
  tab3.classList.remove('products-tab-highlight');
  tab4.classList.remove('products-tab-highlight');
  tab5.classList.add('products-tab-highlight');
  tab6.classList.remove('products-tab-highlight');

  body1.style.display = 'none';
  body2.style.display = 'none';
  body3.style.display = 'none';
  body4.style.display = 'none';
  body5.style.display = 'block';
  body6.style.display = 'none';
}

function showTab6(){
  var tab1 = document.getElementById('tab1');
  var tab2 = document.getElementById('tab2');
  var tab3 = document.getElementById('tab3');
  var tab4 = document.getElementById('tab4');
  var tab5 = document.getElementById('tab5');
  var tab6 = document.getElementById('tab6');

  var body1 = document.getElementById('products-content-1');
  var body2 = document.getElementById('products-content-2');
  var body3 = document.getElementById('products-content-3');
  var body4 = document.getElementById('products-content-4');
  var body5 = document.getElementById('products-content-5');
  var body6 = document.getElementById('products-content-6');

  tab1.classList.remove('products-tab-highlight');
  tab2.classList.remove('products-tab-highlight');
  tab3.classList.remove('products-tab-highlight');
  tab4.classList.remove('products-tab-highlight');
  tab5.classList.remove('products-tab-highlight');
  tab6.classList.add('products-tab-highlight');

  body1.style.display = 'none';
  body2.style.display = 'none';
  body3.style.display = 'none';
  body4.style.display = 'none';
  body5.style.display = 'none';
  body6.style.display = 'block';
}

showTab1();
</script>


</body>
</html>
