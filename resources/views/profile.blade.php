<!doctype html>
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
</html>
