<?php include 'head.php' ?>
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
				                <div class="brand_logo_container mb-3 red-gradient">
					                <img src="images/user.svg" class="brand_logo" alt="Logo">
				                </div>
			                </div>
			                <div class="p-4">
			                    <form class="form-container" method="">
                                <div class="alert alert-success" id="success-message" style="display: none;text-align: center;"></div>
                                <div class="login-field mb-3"><!-- username -->
                                    <div class="input-group">            
                                        <span class="input-group-text"><i class="fas fa-user p-2"></i></span>
                                        <input type="text" id="username" class="form-control input-style" value="" placeholder="Username" required="">
                                    </div>      
                                    <small id="username-error" class="error-message"></small> 
                                </div>

                                <div class="login-field mb-3"><!-- password -->
                                    <div class="input-group">             
                                        <span class="input-group-text"><i class="fas fa-lock p-2"></i></span>
                                        <input type="text" id="password" class="form-control input-style" value="" placeholder="Password" required="">
                                    </div>
                                    <small id="password-error" class="error-message"></small>
                                </div>

                                <div class="login-field mb-3"><!-- security code -->
                                    <div class="input-group">              
                                        <span class="input-group-text"><i class="fas fa-lock p-2"></i></span>
                                        <input type="text" class="form-control input-style" id="securityCode" placeholder="Security code" required="">
                                        <span class="input-group-addon" style="background-color:#ededed;padding-top:12px;"><img id="captchaImage" src="captcha.php?"><i class="fa fa-refresh" style="cursor:pointer;margin-left:5px"></i></span>
                                    </div>
                                    <small id="security-error" class="security-message"></small>
                                </div>

				                    <div class="d-flex justify-content-center mt-3">
				 	                    <button type="button" id="submit" class="submit-btn">Login</button>
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

<script>
        document.getElementById('submit').addEventListener('click', function() {
            // Get form elements
            var username = document.getElementById('username');
            var password = document.getElementById('password');
            var securityCode = document.getElementById('securityCode');

            // Get error message elements
            var usernameError = document.getElementById('username-error');
            var passwordError = document.getElementById('password-error');
            var securityError = document.getElementById('security-error');

            // Clear existing error messages
            usernameError.textContent = '';
            passwordError.textContent = '';
            securityError.textContent = '';

            // Check if the username field is empty
            if (username.value.trim() === '') {
                usernameError.textContent = 'Username is required';
            }

            // Check if the password field is empty
            if (password.value.trim() === '') {
                passwordError.textContent = 'Password is required';
            }

            if (securityCode.value.trim() === '') {
                securityError.textContent = 'Please fill the security code in the above to validate your access';
            }

            // Add more validation checks as needed, such as validating the security code

            // If no errors, submit the form
            if (usernameError.textContent === '' && passwordError.textContent === '' && securityError.textContent === '') {
                // Replace this line with the actual code to submit the form
                document.getElementById("success-message").innerHTML = "Form submitted successfully!";
                document.getElementById('success-message').style.display = 'block';
            }
        });
    </script>
</body>



