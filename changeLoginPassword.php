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
                        <label for="password" class="fw-bold pb-2">Password</label>
                        <input type="text" class="form-control" id="password">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="newpassword" class="fw-bold pb-2">New Password</label>
                        <input type="text" class="form-control" id="newpassword">
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="retypepassword" class="fw-bold pb-2">Re-Type Password</label>
                        <input type="text" class="form-control" id="retypepassword">
                    </div>
                </div>
                <div class="pt-3 px-lg-3">
                    <button type="submit" class="submit-btn">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

</body>
<?php include 'footer.php'?>