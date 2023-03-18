<!doctype html>
<html lang="en">
  <head>
  	<title>AplPeMas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(/images/windu.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				<img src="../images/logo.png"width="150px" height="150px"/></a>
					<h2 class="heading-section">Aplikasi Pengaduan Masyarakat Kelurahan Winduherang</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form class="form-signin" method="POST" action="/login">
				  <?php if(session()->getFlashdata('msg')):?>
				  <div class="alert alert-success" ><?= session()->getFlashdata('msg') ?></div>
				  <?php endif;?> 
		      		<div class="form-group">
		      			<input name="txtUsername" type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input name="txtPassword" id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Login !</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">
									  <span class="checkmark"></span>
									</label>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Belum Punya Akun? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="/register" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Register</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
