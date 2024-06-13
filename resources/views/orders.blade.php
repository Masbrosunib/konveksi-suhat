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
  <header class="header" data-header>
    <div class="container">

      <div class="popup-overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="images/logo.png" width="270" height="50" alt="Konveksi Suhat logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="home" class="logo">
          <img src="./assets/images/favicon.png" width="70" height="50" alt="Konveksi Suhat logo">
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
            <a href="#" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">My Account</span>
            </a>
          </li>

          <li>
            <button class="nav-action-btn">
              <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

              <data class="nav-action-text">Cart</data>

              <data class="nav-action-badge" value="4" aria-hidden="true">2</data>
            </button>
          </li>

        </ul>

      </nav>

    </div>
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
  <!-- pop up 1 -->
  <div class="popup" id="popup-1">
    <div class="popup-overlay"></div>
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
            x12 <br>
            Rp260.000 <br>
            <b>Rp2.260.000</b>
          </div>         
        </div>
      </div>
      <button class="btn btn-sm btn-danger">Cancel Order</button>
    </div>
  </div>
  <!-- pop up 2 -->
  <div class="popup" id="popup-2">
    <div class="popup-overlay"></div>
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
  
    
  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">          </a>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-whatsapp"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="mail-outline"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Contact Us</p>
            </li>

            <li>
              <address class="footer-link">
                <ion-icon name="location"></ion-icon>

                <span class="footer-link-text">
                  2751 S Parker Rd, Aurora, CO 80014, United States
                </span>
              </address>
            </li>

            <li>
              <a href="tel:+557343673257" class="footer-link">
                <ion-icon name="call"></ion-icon>

                <span class="footer-link-text">+557343673257</span>
              </a>
            </li>

            <li>
              <a href="mailto:Konveksi Suhat@help.com" class="footer-link">
                <ion-icon name="mail"></ion-icon>

                <span class="footer-link-text">Konveksi Suhat@help.com</span>
              </a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">My Account</p>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">My Account</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">View Cart</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">Wishlist</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">Compare</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">New Products</span>
              </a>
            </li>

          </ul>

          <div class="footer-list">

            <p class="footer-list-title">Opening Time</p>

            <table class="footer-table">
              <tbody>

                <tr class="table-row">
                  <th class="table-head" scope="row">Mon - Tue:</th>

                  <td class="table-data">8AM - 10PM</td>
                </tr>

                <tr class="table-row">
                  <th class="table-head" scope="row">Wed:</th>

                  <td class="table-data">8AM - 7PM</td>
                </tr>

                <tr class="table-row">
                  <th class="table-head" scope="row">Fri:</th>

                  <td class="table-data">7AM - 12PM</td>
                </tr>

                <tr class="table-row">
                  <th class="table-head" scope="row">Sat:</th>

                  <td class="table-data">9AM - 8PM</td>
                </tr>

                <tr class="table-row">
                  <th class="table-head" scope="row">Sun:</th>

                  <td class="table-data">Closed</td>
                </tr>

              </tbody>
            </table>

          </div>

          <div class="footer-list">

            <p class="footer-list-title">Newsletter</p>

            <p class="newsletter-text">
              Authoritatively morph 24/7 potentialities with error-free partnerships.
            </p>

            <form action="" class="newsletter-form">
              <input type="email" name="email" required placeholder="Email Address" class="newsletter-input">

              <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>

          </div>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 | All Rights Reserved
        </p>

      </div>
    </div>

  </footer>

  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top-btn" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>

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
