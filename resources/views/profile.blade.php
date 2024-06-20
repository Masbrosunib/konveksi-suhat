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

    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row" style="background-color: #fff; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 12px;">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
        </div>
        <div class="col-md-8 border-right">
        <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right"><strong>My Profile</strong></h4>
        </div>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            <div class="row mt-2">
                <div class="col-md-6">
                    <label class="labels">Full Name*</label>
                    <input type="text" class="form-control" name="name" placeholder="Full name" value="{{ old('name', Auth::user()->name) }}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <label class="labels">Mobile Number (Whatsapp)*</label>
                    <input type="text" class="form-control" name="phone" placeholder="enter phone number" value="{{ old('phone', Auth::user()->phone) }}">
                </div>
                <div class="col-md-12">
                    <label class="labels">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="enter email address" value="{{ old('email', Auth::user()->email) }}">
                </div>
            </div>
                
        </div>
        {{-- <div class="row mt-3">
            <div class="col-md-6">
                <label class="labels">Kecamatan | Subdistrict</label>
                <input type="text" class="form-control" name="subdistrict" placeholder="enter subdistrict" value="{{ old('subdistrict', Auth::user()->subdistrict) }}">
            </div>
            <div class="col-md-6">
                <label class="labels">Kabupaten/Kota | Regency/City</label>
                <input type="text" class="form-control" name="city" placeholder="enter city" value="{{ old('city', Auth::user()->city) }}">
            </div>
            <div class="col-md-6">
                <label class="labels">Provinsi | Province</label>
                <input type="text" class="form-control" name="province" placeholder="enter province" value="{{ old('province', Auth::user()->province) }}">
            </div>
            <div class="col-md-6">
                <label class="labels">Kode Pos | Postcode</label>
                <input type="text" class="form-control" name="postcode" placeholder="enter postcode" value="{{ old('postcode', Auth::user()->postcode) }}">
            </div>
        </div> --}}
        <div class="m-5 text-center">
            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
        </div>
        </form>
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



{{-- <!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Konveksi Suhat | Profile Page</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='{{ asset('css/style.css') }}' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }
        ::-webkit-scrollbar-thumb {
            background: #888; 
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555; 
        } 

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
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
            border: none;
        }

        .profile-button:hover {
            background: #f16e3a;
        }

        .profile-button:focus {
            background: #f16e3a;
            box-shadow: none;
        }

        .profile-button:active {
            background: #f16e3a;
            box-shadow: none;
        }

        .back:hover {
            color: #f16e3a;
            cursor: pointer;
        }

        .labels {
            font-size: 11px;
        }
    </style>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row" style="background-color: #fff; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 12px;">
            @foreach ($users as $user)
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold">{{ $user->name }}</span>
                        <span class="text-black-50">{{ $user->email }}</span>
                    </div>
                </div>
                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right"><strong>My Profile</strong></h4>
                        </div>
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Full Name*</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full name" value="{{ old('name', $user->name) }}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Mobile Number (Whatsapp)*</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value="{{ old('phone', $user->phone) }}">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email', $user->email) }}">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Home Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter home address" value="{{ old('address', $user->address) }}">
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <script>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>
</body>
</html> --}}
