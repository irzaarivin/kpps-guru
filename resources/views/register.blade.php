<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>KPPS Administrator | Register</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/smkn65jkt.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Register to 65KPPS</h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" action="#" method="POST">
							@csrf
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Nama</label>
								<input id="signup-name" name="name" type="text" class="form-control signup-name" placeholder="Nama Lengkap" required="required">
								@error('name')
								<p>{{ $message }}</p>
								@enderror
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Email</label>
								<input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Email" required="required">
								@error('email')
								<p>{{ $message }}</p>
								@enderror
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password</label>
								<input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Password" required="required">
								@error('password')
								<p>{{ $message }}</p>
								@enderror
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Konfirmasi Password</label>
								<input id="signup-password" name="password_confirmation" type="password" class="form-control signup-password" placeholder="Konfirmasi Password" required="required">
								@error('password')
								<p>{{ $message }}</p>
								@enderror
							</div>
							{{-- <div class="extra mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="RememberPassword" required>
									<label class="form-check-label" for="RememberPassword">
									I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Policy</a>.
									</label>
								</div>
							</div> --}}<!--//extra-->
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Register</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Sudah memiliki akun? <a class="text-link" href="login" >Login</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

