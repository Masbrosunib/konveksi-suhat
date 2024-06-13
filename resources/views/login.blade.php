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
  <link rel="stylesheet" type="text/css" href="css/login-style.css">
  <link rel="bootstrap" type="text/css" href="css/bootstrap.css">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <title>Konveksi Suhat | Login or Register</title>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
		<div class="signup">
				@if($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $item)
								<li>{{$item}}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form action ="" method="POST">
					@csrf
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" value="{{old('email')}}" name="email" placeholder="Email" class="form-control" >
					<input type="password" name="password" placeholder="Password" class="form-control" >
					<button name="submit" type="submit">Login</button>
				</form>
			</div>

			<div class="login">
				<form action="" method="POST">
					@csrf
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="Username" >
					<input type="email" name="email" placeholder="Email" >
			        <input type="number" name="phone" placeholder="No. Tel" >
					<input type="password" name="password" placeholder="Password" >
					<button name="submit" type="submit">Sign up</button>
				</form>
			</div>
		</input>
	</div>
</body>
</html>
