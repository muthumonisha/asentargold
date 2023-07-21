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
            <h4 class="text-center pb-3"><b>Change Transaction Password</b></h4>
        </div>
        <div class="profile-form px-lg-5 py-lg-2">
            <div class="form-card border px-lg-5 py-5 px-3">
            <form>
                <div class="row">
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="old-tpwd" class="fw-bold pb-2">Old Transaction Password</label><span style="color:red"> * <small id="oldtpwd-error" class="error-message"></small></span>
                        <input type="text" class="form-control" id="old-tpwd" required>
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="new-tpwd" class="fw-bold pb-2">New Transaction Password</label><span style="color:red"> * <small id="newtpwd-error" class="error-message"></small></span>
                        <input type="text" class="form-control" id="new-tpwd" required>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="retype-tpwd" class="fw-bold pb-2">Re-Type New Transaction Password</label><span style="color:red"> * <small id="retypepwd-error" class="error-message"></small></span>
                        <input type="text" class="form-control" id="retype-tpwd" required>
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
            var old_tpwd = document.getElementById('old-tpwd');
            var new_tpwd = document.getElementById('new-tpwd');
            var retype_tpwd = document.getElementById('retype-tpwd');

            // Get error message elements
            var oldtpwdError = document.getElementById('oldtpwd-error');
            var newtpwdError = document.getElementById('newtpwd-error');
            var retypepwdError = document.getElementById('retypepwd-error');

            // Clear existing error messages
            oldtpwdError.textContent = '';
            newtpwdError.textContent = '';
            retypepwdError.textContent = '';

            // Check if the field is empty
            if (old_tpwd.value.trim() === '') {
                oldtpwdError.textContent = 'Required';
            }

            // Check if the field is empty
            if (new_tpwd.value.trim() === '') {
                newtpwdError.textContent = 'Required';
            }

            if (retype_tpwd.value.trim() === '') {
                retypepwdError.textContent = 'Required';
            }

        });
    </script>
</body>
<?php include 'footer.php'?>