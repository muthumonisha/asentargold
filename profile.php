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
            <h4 class="text-center pb-3"><b>My Profile</b></h4>
        </div>
        <div class="profile-form px-lg-5 py-lg-2">
            <div class="form-card border px-lg-5 py-5 px-3">
            <form>
                <div class="row">
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="memid" class="fw-bold pb-2">Member ID</label>
                        <input type="text" class="form-control" id="memid">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="username" class="fw-bold pb-2">Username</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="country" class="fw-bold pb-2">Country</label>
                        <input type="text" class="form-control" id="country">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="mobile" class="fw-bold pb-2">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="name" class="fw-bold pb-2">Full Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="email" class="fw-bold pb-2">Email Address</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="sponser" class="fw-bold pb-2">Sponser Bonus</label>
                        <input type="text" class="form-control" id="sponser">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="pairing" class="fw-bold pb-2">Pairing Bonus</label>
                        <input type="text" class="form-control" id="pairing">
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="sponser" class="fw-bold pb-2">MDI Bonus</label>
                        <input type="text" class="form-control" id="sponser">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="pairing" class="fw-bold pb-2">Leadership Bonus</label>
                        <input type="text" class="form-control" id="pairing">
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="address" class="fw-bold pb-2">Billing Address</label>
                        <input type="text" class="form-control" id="address">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="postcode" class="fw-bold pb-2">Billing Postcode</label>
                        <input type="text" class="form-control" id="postcode">
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="b-country" class="fw-bold pb-2">Billing Country</label>
                        <input type="text" class="form-control" id="b-country">
                    </div>
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="b-state" class="fw-bold pb-2">Billing State</label>
                        <input type="text" class="form-control" id="b-state">
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4">
                        <label for="t-pwd" class="fw-bold pb-2">Transaction Password</label>
                        <input type="text" class="form-control" id="t-pwd">
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-6 pb-4 px-lg-4 d-flex">
                        <div class="form-check pe-5">
                            <input class="form-check-input" type="radio" name="radioBox" id="radio1" checked>
                            <label class="form-check-label fw-bold" for="radio1">Add Wallet Address</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioBox" id="radio2">
                            <label class="form-check-label fw-bold" for="radio2">Add Bank Account</label>
                        </div>
                    </div>
                    <!-- show/hide content -->
                    <div class="mt-3" id="content1">
                        <div class="inner-content-1 border p-lg-3">
                            <div class="px-lg-2 pb-2">
                                <h5 class="fw-bold">Add Wallet Address</h5>
                            </div>
                            <div class="row"> 
                                <div class="col-lg-6 pb-4 px-lg-4">
                                    <label for="crypto" class="fw-bold pb-2">Crypto Type</label>
                                    <select class="form-select" id="crypto" name="crypto">
                                        <option>ERC20-USDT</option>
                                        <option>ERC20-USDT</option>
                                        <option>ERC20-USDT</option>
                                        <option>ERC20-USDT</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 pb-4 px-lg-4">
                                    <label for="w-address" class="fw-bold pb-2">Wallet Address</label>
                                    <input type="text" class="form-control" id="w-address">
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-lg-6 pb-4 px-lg-4">
                                    <label for="retype-w-address" class="fw-bold pb-2">Retype Wallet Address</label>
                                    <input type="text" class="form-control" id="retype-w-address">
                                </div>
                                <div class="col-lg-6 pb-4 px-lg-4">
                                    <label for="t-pwd" class="fw-bold pb-2">Transaction password</label>
                                    <input type="text" class="form-control" id="t-pwd">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3" id="content2" style="display: none;">
                        <div class="inner-content-1 border p-lg-3">
                            <div class="px-lg-2 pb-2">
                                <h5 class="fw-bold">Add Bank Account</h5>
                            </div>
                            <div class="row"> 
                                <div class="col-lg-6 pb-4 px-lg-4">
                                    <label for="crypto" class="fw-bold pb-2">Account Name</label>
                                    <input type="text" class="form-control" id="crypto">
                                </div>
                                <div class="col-lg-6 pb-4 px-lg-4">
                                    <label for="w-address" class="fw-bold pb-2">Bank Name</label>
                                    <input type="text" class="form-control" id="w-address">
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-lg-6 pb-4 px-lg-4">
                                    <label for="retype-w-address" class="fw-bold pb-2">Account Number</label>
                                    <input type="text" class="form-control" id="retype-w-address">
                                </div>
                                <div class="col-lg-6 pb-4 px-lg-4">
                                    <label for="t-pwd" class="fw-bold pb-2">Transaction password</label>
                                    <input type="text" class="form-control" id="t-pwd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5">
                    <button type="submit" class="submit-btn">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script>
    const radio1 = document.getElementById('radio1');
    const radio2 = document.getElementById('radio2');
    const content1 = document.getElementById('content1');
    const content2 = document.getElementById('content2');

    radio1.addEventListener('change', () => {
      content1.style.display = 'block';
      content2.style.display = 'none';
    });

    radio2.addEventListener('change', () => {
      content1.style.display = 'none';
      content2.style.display = 'block';
    });
  </script>
</body>
<?php include 'footer.php'?>