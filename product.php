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
    <h3>SEALEY</h3>
  <ul>
    <li><a>Accounts</a></li>
    <li class="child-list"><a href="#">Sales Assoc</a></li>
    <li class="child-list"><a href="#">Clients</a></li>
    <li><a href="product.php">Products</a></li>
	  <li><a href="sales.php">Sales</a></li>
    <li><a href="inventory.html">Inventory</a></li>
	  <li><a href="#">Schedule Appointment</a></li>
	  <li><a>Reports</a></li>
    <li class="child-list"><a href="#">Service Report</a></li>
    <li class="child-list"><a href="#">Sales Report</a></li>
	  <li class="child-list"><a href="#">Inventory Report</a></li>
  </ul>
</nav>

<!-- !PAGE CONTENT! -->
<div class="content-right">  
  <!-- Top header -->
  <header>
    <h1>Electrical Supplies</h1>
    <p>
      <a class="button-black" href="#jeans">Add Product</a>
    </p>
  </header>

  <!-- Product grid 1 -->
  <div class="product-grid">

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/1.png">
      </div>
      <p>Amorphous alloy transformer</p>
  		<button onclick="openDetails(1)">Details</button>
      <div class="modal-details" id="modal1" onclick="closeModal(this)">
        <h1>Amorphous alloy transformer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/2.png">
      </div>
      <p>Dry-type transformer</p>
      <button onclick="openDetails(2)">Details</button>
      <div class="modal-details" id="modal2" onclick="closeModal(this)">
        <h1>Dry-type transformer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/3.png">
      </div>
      <p>Power transformer</p>
      <button onclick="openDetails(3)">Details</button>
      <div class="modal-details" id="modal3" onclick="closeModal(this)">
        <h1>Power transformer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/4.png">
      </div>
      <p>Stacked core transformer</p>
      <button onclick="openDetails(4)">Details</button>
      <div class="modal-details" id="modal4" onclick="closeModal(this)">
        <h1>Stacked core transformer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/5.png">
      </div>
      <p>Cabinet</p>
      <button onclick="openDetails(5)">Details</button>
      <div class="modal-details" id="modal5" onclick="closeModal(this)">
        <h1>Cabinet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/6.png">
      </div>
      <p>MNSJ The second-generation Tank</p>
      <button onclick="openDetails(6)">Details</button>
      <div class="modal-details" id="modal6" onclick="closeModal(this)">
        <h1>MNSJ The second-generation Tank</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>      </div>
    </div>

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/7.png">
      </div>
      <p>Distribution Box</p>
      <button onclick="openDetails(7)">Details</button>
      <div class="modal-details" id="modal7" onclick="closeModal(this)">
        <h1>Distribution Box</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/8.png">
      </div>
      <p>MDmax ST Low Pressure Switchgear</p>
      <button onclick="openDetails(8)">Details</button>
      <div class="modal-details" id="modal8" onclick="closeModal(this)">
        <h1>MDmax ST Low Pressure Switchgear</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

  </div>
  <!-- Product Grid 2 -->
  <div class="product-grid">

     <div class="product-container">
      <div class="img-wrap">
        <img src="img/9.png">
      </div>
      <p>AC Low Voltage Distribution</p>
      <button onclick="openDetails(9)">Details</button>
      <div class="modal-details" id="modal9" onclick="closeModal(this)">
        <h1>AC Low Voltage Distribution</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/10.png">
      </div>
      <p>XL Power Supply Cabinet</p>
      <button onclick="openDetails(10)">Details</button>
      <div class="modal-details" id="modal10" onclick="closeModal(this)">
        <h1>XL Power Supply Cabinet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/11.png">
      </div>
      <p>Outdoor power distribution box</p>
      <button onclick="openDetails(11)">Details</button>
      <div class="modal-details" id="modal11" onclick="closeModal(this)">
        <h1>Outdoor power distribution box</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/12.png">
      </div>
      <p>Distribution transformer cabinet</p>
      <button onclick="openDetails(12)">Details</button>
      <div class="modal-details" id="modal12" onclick="closeModal(this)">
        <h1>Distribution transformer cabinet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/13.png">
      </div>
      <p>Power distribution control</p>
      <button onclick="openDetails(13)">Details</button>
      <div class="modal-details" id="modal13" onclick="closeModal(this)">
        <h1>Power distribution control</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/14.png">
      </div>
      <p>Low voltage withdrawable switchgear</p>
      <button onclick="openDetails(14)">Details</button>
      <div class="modal-details" id="modal14" onclick="closeModal(this)">
        <h1>Low voltage withdrawable switchgear</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/15.png">
      </div>
      <p>Withdrawable low-voltage switchgear</p>
      <button onclick="openDetails(15)">Details</button>
      <div class="modal-details" id="modal15" onclick="closeModal(this)">
        <h1>Withdrawable low-voltage switchgear</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/16.png">
      </div>
      <p>AC low voltage power distribution</p>
      <button onclick="openDetails(16)">Details</button>
      <div class="modal-details" id="modal16" onclick="closeModal(this)">
        <h1>AC low voltage power distribution</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>

  </div>
  <!-- Product Grid 3 -->
  <div class="product-grid">

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/17.png">
      </div>
      <p>AC metal ring net switch equipment</p>
      <button onclick="openDetails(17)">Details</button>
      <div class="modal-details" id="modal17" onclick="closeModal(this)">
        <h1>AC metal ring net switch equipment</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/18.png">
      </div>
      <p>Fixed metal enclosed switchgear</p>
      <button onclick="openDetails(18)">Details</button>
      <div class="modal-details" id="modal18" onclick="closeModal(this)">
        <h1>Fixed metal enclosed switchgear</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/19.png">
      </div>
      <p>KYN61-40.5 armoured moving type</p>
      <button onclick="openDetails(19)">Details</button>
      <div class="modal-details" id="modal19" onclick="closeModal(this)">
        <h1>KYN61-40.5 armoured moving type</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/20.png">
      </div>
      <p>KYN28A-12 indoor AC metal clad</p>
      <button onclick="openDetails(20)">Details</button>
      <div class="modal-details" id="modal20" onclick="closeModal(this)">
        <h1>KYN28A-12 indoor AC metal clad</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/21.png">
      </div>
      <p>Metal clad switchgear (UniGear ZS1)</p>
      <button onclick="openDetails(21)">Details</button>
      <div class="modal-details" id="modal21" onclick="closeModal(this)">
        <h1>Metal clad switchgear (UniGear ZS1)</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/22.png">
      </div>
      <p>Metal clad switchgear (UniGear ZS3.2)</p>
      <button onclick="openDetails(22)">Details</button>
      <div class="modal-details" id="modal22" onclick="closeModal(this)">
        <h1>Metal clad switchgear (UniGear ZS3.2)</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/23.png">
      </div>
      <p>Metal clad switchgear (UniGear 550)</p>
      <button onclick="openDetails(23)">Details</button>
      <div class="modal-details" id="modal23" onclick="closeModal(this)">
        <h1>Metal clad switchgear (UniGear 550)</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/24.png">
      </div>
      <p>Metal clad switchgear (UniGear ZS8.X)</p>
      <button onclick="openDetails(24)">Details</button>
      <div class="modal-details" id="modal24" onclick="closeModal(this)">
        <h1>Metal clad switchgear (UniGear ZS8.X)</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
  </div>
  <!-- Product Grid 4 -->
  <div class="product-grid">

    <div class="product-container">
      <div class="img-wrap">
        <img src="img/25.png">
      </div>
      <p>Intelligent metal clad switchgear (I-GZS1)</p>
      <button onclick="openDetails(25)">Details</button>
      <div class="modal-details" id="modal25" onclick="closeModal(this)">
        <h1>Intelligent metal clad switchgear (I-GZS1)</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/26.png">
      </div>
      <p>The main components of the I-GZS1</p>
      <button onclick="openDetails(26)">Details</button>
      <div class="modal-details" id="modal26" onclick="closeModal(this)">
        <h1>The main components of the I-GZS1</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/27.png">
      </div>
      <p>All insulation hermetic SF6 filled tank</p>
      <button onclick="openDetails(27)">Details</button>
      <div class="modal-details" id="modal27" onclick="closeModal(this)">
        <h1>All insulation hermetic SF6 filled tank</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/28.png">
      </div>
      <p>Solid insulation intelligent ring network</p>
      <button onclick="openDetails(28)">Details</button>
      <div class="modal-details" id="modal28" onclick="closeModal(this)">
        <h1>Solid insulation intelligent ring network</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/29.png">
      </div>
      <p>DC Screen</p>
      <button onclick="openDetails(29)">Details</button>
      <div class="modal-details" id="modal29" onclick="closeModal(this)">
        <h1>DC Screen</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/30.png">
      </div>
      <p>Intelligent demarcation switch</p>
      <button onclick="openDetails(30)">Details</button>
      <div class="modal-details" id="modal30" onclick="closeModal(this)">
        <h1>Intelligent demarcation switch</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/31.png">
      </div>
      <p>ARC Suppression Cabinet</p>
      <button onclick="openDetails(31)">Details</button>
      <div class="modal-details" id="modal31" onclick="closeModal(this)">
        <h1>ARC Suppression Cabinet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
  </div>
  <!-- Generator Set -->
  <div class="product-grid"> 
  <h1>Generator Set</h1>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/32.png">
      </div>
      <p>Cummins</p>
      <button onclick="openDetails(32)">Details</button>
      <div class="modal-details" id="modal32" onclick="closeModal(this)">
        <h1>Cummins</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/33.png">
      </div>
      <p>Perkins</p>
      <button onclick="openDetails(33)">Details</button>
      <div class="modal-details" id="modal33" onclick="closeModal(this)">
        <h1>Perkins</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/34.png">
      </div>
      <p>Weichai Power</p>
      <button onclick="openDetails(34)">Details</button>
      <div class="modal-details" id="modal34" onclick="closeModal(this)">
        <h1>Weichai Power</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/35.png">
      </div>
      <p>Deutz</p>
      <button onclick="openDetails(35)">Details</button>
      <div class="modal-details" id="modal35" onclick="closeModal(this)">
        <h1>Deutz</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
    <div class="product-container">
      <div class="img-wrap">
        <img src="img/36.png">
      </div>
      <p>Portable Generator</p>
      <button onclick="openDetails(36)">Details</button>
      <div class="modal-details" id="modal36" onclick="closeModal(this)">
        <h1>Portable Generator</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero sed explicabo quasi nobis ipsum eveniet odit praesentium deserunt iusto numquam perspiciatis voluptas earum optio, repellendus maiores sunt. Recusandae, expedita.</p>
      </div>
    </div>
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
