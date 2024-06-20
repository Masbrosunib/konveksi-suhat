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
                <a href="checkout" class="navbar-link">Checkout</a>
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
          @if(auth()->check())
          <li>
            <a href="profile" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">My Account</span>
            </a>
          </li>
          @else
          <li>
            <a href="login" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">My Account</span>
            </a>
          </li>
          @endif
          <li>
            <a href="cart">
              <button class="nav-action-btn">
                <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
  
                <data class="nav-action-text">Cart</data>
  
                <data class="nav-action-badge" value="2" aria-hidden="true">2</data>
              </button>
            </a>
          </li>
          @if(auth()->check())
          <li v-if="Auth.check()">
            <form action="@route('logout')" method="POST">
              @csrf  
              <input type="hidden" name="logout" value="POST" > 
              <a href="">
                <button class="nav-action-btn">
                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  <span class="nav-action-text">logout</span>
                </button>
              </a>
            </form>
          </li>
          @endif

        </ul>

      </nav>

    </div>
  </header>
  <!-- Navigation bar ends -->

  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="row">
        @foreach ($products as $product)
            @if(isset($product->product_name) && isset($product->product_price))
                <div class="product-container">
                  <div class="box">
                    <a onclick="togglePopup()">
                      <div class="img-box">
                        <img src="images/varsity.png" alt="">
                      </div>
                      <div class="detail-box">
                        <h6>{{ $product->product_name }}</h6>
                        <h6><span>Rp. {{ $product->product_price }}</span></h6>
                      </div>
                    </a>
                  </div>
                </div>
            @else
                <div>
                    Error: Product data is missing required fields.
                </div>
            @endif
        @endforeach

        {{-- <div class="product-container">
          <div class="box">
            <a onclick="togglePopup()">
              <div class="img-box">
                <img src="images/varsity.png" alt="">
              </div>
              <div class="detail-box">
                <h6>Varsity</h6>
                <h6><span>Rp39k</span></h6>
              </div>
            </a>
          </div>
        </div>
        <div class="product-container">
          <div class="box">
            <a onclick="togglePopup()">
              <div class="img-box">
                <img src="images/varsity.png" alt="">
              </div>
              <div class="detail-box">
                <h6>Varsity</h6>
                <h6><span>Rp39k</span></h6>
              </div>
            </a>
          </div>
        </div>
        <div class="product-container">
          <div class="box">
            <a onclick="togglePopup()">
              <div class="img-box">
                <img src="images/varsity.png" alt="">
              </div>
              <div class="detail-box">
                <h6>Varsity</h6>
                <h6><span>Rp39k</span></h6>
              </div>
            </a>
          </div>
        </div> --}}
        
      </div>
    </div>
  </section>

  <!-- end shop section -->

   <!-- pop up -->
  <!-- pop up 1 -->
  @foreach ($products as $product)
  <div class="popup" id="popup-1">
    <div class="popup-overlay"></div>
    <div class="content">
      <div class="close-btn" onclick="togglePopup()">&times;</div>
      <div class="popup-img">
        <img src="images/varsity.png" alt="" class="card-img-top">
      </div>
          
      <div class="title-section">
        <h5 class="card-title"> {{ $product->product_name }}</h5>
      </div>
      <div class="card-body">
        <div class="text-section">
          <p>
            {{ $product->product_description }}
          </p>
          <div>
            <strong>Rp{{ number_format($product->product_price, 2, ",", ".") }} <br>
              min. {{ $product->quantity }} pcs <br>
            </strong>
          </div>          
        </div>
      </div>
      <button class="btn btn-sm">Add To Cart</button>
      <button class="btn btn-sm btn-danger">Buy Now</button>
    </div>
  </div>
  @endforeach
  <!-- pop up 2 -->
  {{-- <div class="popup" id="popup-1">
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
            <strong>Rp260.000 <br>
            min. 12 pcs <br>
          </strong>
          </div>         
        </div>
      </div>
      <button class="btn btn-sm">Add To Cart</button>
      <button class="btn btn-sm btn-danger">Buy Now</button>
    </div>
  </div> --}}
  
  
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
                  Jl. Candi Sari IV No.3 Malang
                </span>
              </address>
            </li>

            <li>
              <a href="tel:+557343673257" class="footer-link">
                <ion-icon name="call"></ion-icon>

                <span class="footer-link-text">+6282234051680</span>
              </a>
            </li>

            <li>
              <a href="mailto:konveksisuhat@gmail.com" class="footer-link">
                <ion-icon name="mail"></ion-icon>

                <span class="footer-link-text">konveksisuhat@gmail.com</span>
              </a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">My Account</p>
            </li>

            <li>
              <a href="/" class="footer-link">
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
