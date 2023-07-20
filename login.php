<?php include 'head.php'; ?>
<head>
    <style>
        .login-bg{
            background:url("images/hero-image.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .cmp-logo{
            position: relative;
            top: -80px;
        }
    </style>
</head>
<body>
<section class="login-bg vh-100">
    <div class="container vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="cmp-logo">
                    <img src="images/lightlogo.png">
                </div>
                <div class="form d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-4 login-box border">
                        <div class="user_card">
			                <div class="d-flex justify-content-center">
				                <div class="brand_logo_container red-gradient mb-3">
					                <img src="images/userimg.png" class="brand_logo" alt="Logo">
				                </div>
			                </div>
			                <div class="p-4">
			                    <form class="form-container">
                                    <div class="input-group mb-4">
                                        <span class="input-group-text"><i class="fas fa-user p-2"></i></span>
                                        <input type="text" name="" class="form-control input-style" value="" placeholder="Username">
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text"><i class="fas fa-lock p-2"></i></span>
                                        <input type="text" name="" class="form-control input-style" value="" placeholder="Password">
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text"><i class="fas fa-lock p-2"></i></span>
                                        <input type="text" name="" class="form-control input-style" value="" placeholder="Security Code">
                                    </div>
				                    <div class="d-flex justify-content-center mt-3">
				 	                    <button type="button" name="button" class="btn login-button">Login</button>
				                    </div>
			                    </form>
                                <div class="d-flex justify-content-center links mt-3">
				                    <a href="#" class="login-link">Forgot password?</a>
                                </div>
			                </div>
		                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>