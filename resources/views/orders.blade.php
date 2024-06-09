<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Konveksi Suhat | Products
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <!-- Navigation Bar starts -->
  <header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <div class="container px-4">
          <a class="navbar-brand" href="index.html">
            <img id="logo-konveksi" src="images/favicon.png" alt="Konveksi Suhat Logo">
            <span> Konveksi Suhat</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
          </button>

          <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                  <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="shop">Products</a></li>
                  <li class="nav-item"><a class="nav-link" href="orders">My Orders</a></li>
                  <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
              </ul>
          </div>
      </div>
    </nav>
  </header>

  <div class="heading_container heading_center" style="padding: 20px;">
    <h2>
      My Orders
    </h2>
  </div>

  <!-- table starts -->
  <div class="card"  style="border-bottom: none; border-left: none; border-right: none;">
    <img src="images/varsity.png" class="card-img-top">
    <div class="card-body">
      <div class="text-section">
        <h5 class="card-title">Varsity</h5>
        <p class="card-text">Sleeve: Kulit <br>
          Patch: Embroidery <br>
          Color: Red <br>
          Interior: Cotton Fleece</p>
      </div>
      <div class="cta-section">
        <div style="text-align: right;">
          x12 <br>
          Rp260.000 <br>
          <b>Rp2.260.000</b>
        </div>
        <button class="btn btn-sm btn-warning" onclick="togglePopup()">Details</button>
        <button class="btn btn-sm btn-danger">Cancel</button></td>
                
      </div>
    </div>
  </div>
  
  <div class="card" style="border-bottom: none; border-left: none; border-right: none;">
    <img src="images/varsity.png" class="card-img-top">
    <div class="card-body">
      <div class="text-section">
        <h5 class="card-title">Varsity</h5>
        <p class="card-text">Sleeve: Kulit <br>
          Patch: Embroidery <br>
          Color: Red <br>
          Interior: Cotton Fleece</p>
      </div>
      <div class="cta-section">
        <div style="text-align: right;">
          x24 <br>
          Rp260.000 <br>
          <b>Rp4.520.000</b>
        </div>
        <button class="btn btn-sm btn-warning" onclick="togglePopup()">Details</button>
        <button class="btn btn-sm btn-danger">Cancel</button></td>
                
      </div>
    </div>
  </div>

  <!-- pop up -->
  <div class="popup" id="popup-1">
    <div class="overlay"></div>
    <div class="content">
      <div class="close-btn" onclick="togglePopup()">&times;</div>
      <div class="popup-img">
        <img src="images/varsity.png" class="card-img-top">
      </div>
      <div class="title-section">
        <h5 class="card-title">Varsity</h5>
      </div>
      <div class="card-body">
        <div class="text-section">
          <p>Sleeve: Kulit <br>
            Patch: Embroidery <br>
            Color: Red <br>
            Interior: Cotton Fleece
          </p>
          <div>
            x24 <br>
            Rp260.000 <br>
            <b>Rp4.520.000</b>
          </div>         
        </div>
      </div>
      <button class="btn btn-sm btn-danger">Cancel Order</button>
    </div>
  </div>
  
    

  <script src="index.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>
