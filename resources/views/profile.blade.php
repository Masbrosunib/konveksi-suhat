<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Konveksi Suhat | Profile Page</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } 

body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
    font-family: 'Poppins' sans-serif;
    background-color: #fff;
    padding-top: 50px;
}

.form-control:focus {
    box-shadow: none;
    border-color: #cb1e1e;
}

.profile-button {
    background: #cb1e1e;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #f16e3a
}

.profile-button:focus {
    background: #f16e3a;
    box-shadow: none
}

.profile-button:active {
    background: #f16e3a;
    box-shadow: none
}

.back:hover {
    color: #f16e3a;
    cursor: pointer
}

.labels {
    font-size: 11px
}

</style>

</head>
<body className='snippet-body'>
    
  <!-- Navigation Bar starts -->
  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="home" class="logo">
        <img src="images/logo.png" width="270" height="50" alt="Konveksi Suhat logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="home" class="logo" style="background-color: white;">
          <img src="images/favicon.png" width="70" height="50" alt="Konveksi Suhat logo">
        </a>

        <ul class="navbar-list">
          
            <li class="navbar-item">
                <a href="home" class="navbar-link">Home</a>
              </li>
    
              <li class="navbar-item">
                <a href="product" class="navbar-link">Products</a>
              </li>
    
              <li class="navbar-item">
                <a href="orders" class="navbar-link">My Orders</a>
              </li>
    
              <li class="navbar-item">
                <a href="contact" class="navbar-link">Contact</a>
              </li>

        </ul>

        <ul class="nav-action-list">

          <li>
            <button class="nav-action-btn">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Search</span>
            </button>
          </li>

          <li>
            <a href="login" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">My Account</span>
            </a>
          </li>

          <li>
            <a href="cart">
              <button class="nav-action-btn">
                <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
  
                <data class="nav-action-text">Cart</data>
  
                <data class="nav-action-badge" value="2" aria-hidden="true">2</data>
              </button>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>
  <!-- Navigation bar ends -->

    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row" style="background-color: #fff; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 12px;">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Mustofa Arhan</span><span class="text-black-50">mustofarhan@gmail.com</span><span> </span></div>
        </div>
        <div class="col-md-8 border-right">
        <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right"><strong>My Profile</strong></h4>
        </div>
        <div class="row mt-2">
            <div class="col-md-6"><label class="labels">Full Name*</label><input type="text" class="form-control" placeholder="full name" value=""></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12"><label class="labels">Mobile Number (Whatsapp)*</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
            <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" placeholder="enter email address" value=""></div>
            <div class="col-md-12"><label class="labels">Alamat Rumah | Home Address</label><input type="text" class="form-control" placeholder="enter home address" value=""></div>
            
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><label class="labels">Kecamatan | Subdistrict</label><input type="text" class="form-control" placeholder="enter subdistrict" value=""></div>
            <div class="col-md-6"><label class="labels">Kabupaten/Kota | Regency/City</label><input type="text" class="form-control" placeholder="enter city" value=""></div>
            <div class="col-md-6"><label class="labels">Provinsi | Province</label><input type="text" class="form-control" placeholder="enter province" value=""></div>
            <div class="col-md-6"><label class="labels">Kode Pos | Postcode</label><input type="text" class="form-control" placeholder="enter postcode" value=""></div>
        </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
        </div>
    </div>
    </div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                                
  <script src="index.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


                            
</body>
</html>
