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
                        <label for="old-tpwd" class="fw-bold pb-2">Old Transaction Password</label>
                        <input type="text" class="form-control" id="old-tpwd">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="new-tpwd" class="fw-bold pb-2">New Transaction Password</label>
                        <input type="text" class="form-control" id="new-tpwd">
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="retype-tpwd" class="fw-bold pb-2">Re-Type New Transaction Password</label>
                        <input type="text" class="form-control" id="retype-tpwd">
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