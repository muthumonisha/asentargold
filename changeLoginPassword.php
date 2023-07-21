<?php include 'head.php' ?>
<?php include 'header.php'?>
<head>
    <style>
        .profile-bg{
            background:url("images/wavy2.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<div class="profile-bg">
    <div class="profile-inner-content px-lg-5 py-5 px-2">
        <div class="profile-heading">
            <h4 class="text-center pb-3"><b>Change Login Password</b></h4>
        </div>
        <div class="profile-form px-lg-5 py-lg-2">
            <div class="form-card border px-lg-5 py-5 px-3">
            <form>
                <div class="row">
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="password" class="fw-bold pb-2">Password</label><span style="color:red"> * <small id="lpassword-error" class="error-message"></small></span>
                        <input type="text" class="form-control" id="lpassword" required>
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="newpassword" class="fw-bold pb-2">New Password</label><span style="color:red"> * <small id="newlpassword-error" class="error-message"></small></span>
                        <input type="text" class="form-control" id="newlpassword" required>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="retypepassword" class="fw-bold pb-2">Re-Type Password</label><span style="color:red"> * <small id="retypelpwd-error" class="error-message"></small></span>
                        <input type="text" class="form-control" id="retypelpassword" required>
                    </div>
                </div>
                <div class="pt-3 px-lg-3">
                    <button type="submit" id="submit" class="submit-btn">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
        document.getElementById('submit').addEventListener('click', function() {
            // Get form elements
            var lpassword = document.getElementById('lpassword');
            var newlpassword = document.getElementById('newlpassword');
            var retypelpassword = document.getElementById('retypelpassword');

            // Get error message elements
            var lpasswordError = document.getElementById('lpassword-error');
            var newlpasswordError = document.getElementById('newlpassword-error');
            var retypelpwdError = document.getElementById('retypelpwd-error');

            // Clear existing error messages
            lpasswordError.textContent = '';
            newlpasswordError.textContent = '';
            retypelpwdError.textContent = '';

            // Check if the field is empty
            if (lpassword.value.trim() === '') {
                lpasswordError.textContent = 'Required';
            }

            // Check if the field is empty
            if (newlpassword.value.trim() === '') {
                newlpasswordError.textContent = 'Required';
            }

            if (retypelpassword.value.trim() === '') {
                retypelpwdError.textContent = 'Required';
            }

        });
    </script>
</body>
<?php include 'footer.php'?>