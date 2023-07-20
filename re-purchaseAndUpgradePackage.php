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
            <h4 class="text-center pb-3"><b>Re-purchase and Upgrade Package</b></h4>
        </div>
        <div class="profile-form px-lg-5 py-lg-2">
            <div class="form-card border px-lg-5 py-5 px-3">
            <form>
                <div class="row pb-3 border-bottom">
                    <div class="col-lg-6 pb-4 px-lg-4 d-flex"><!-- check-box start-->
                        <div class="form-check pe-5">
                            <input class="form-check-input" type="radio" name="radioBox" id="radio1" checked>
                            <label class="form-check-label fw-bold" for="radio1">By Package</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioBox" id="radio2">
                            <label class="form-check-label fw-bold" for="radio2">By Pin</label>
                        </div>
                    </div><!-- check-box end -->
            
                    <div class="mt-3" id="content1"><!-- show/hide content1 -->
                        <div class="row"> <!--dropdown row-->
                            <div class="col-lg-6 pb-4 px-lg-4">
                                <label for="crypto" class="fw-bold pb-2">Select Package</label>
                                    <select class="form-select" id="crypto" name="crypto">
                                        <option>Package 001</option>
                                        <option>Package 001</option>
                                        <option>Package 001</option>
                                        <option>Package 001</option>
                                    </select>
                            </div>
                        </div>

                        <div class="inner-content-1 mx-lg-3 border"><!-- box content-->
                            <div class="pt-3 px-4">
                                <h5 class="fw-bold">Summary</h5>
                            </div>
                            <hr>
                            <div class="row d-flex px-4"> 
                                <div class="col">
                                    <h6 class="fw-bold">Product Name</h6>
                                    <p>Product 0001</p>
                                </div>
                                <div class="col text-end">
                                    <h6 class="fw-bold">Product Price</h6>
                                    <p>13,0000.00</p>
                                </div>
                            </div>
                        </div> <!-- end box content-->

                    </div><!-- end show/hide content1 -->

                    <div class="mt-3" id="content2" style="display: none;"><!-- show/hide content2 -->
                        <div class="row"> <!--dropdown row-->
                            <div class="col-lg-6 pb-4 px-lg-4">
                                <label for="crypto" class="fw-bold pb-2">Select Pin</label>
                                    <select class="form-select" id="crypto" name="crypto">
                                        <option>Pin 001</option>
                                        <option>Pin 001</option>
                                        <option>Pin 001</option>
                                        <option>Pin 001</option>
                                    </select>
                            </div>
                        </div>

                        <div class="inner-content-1 mx-lg-3 border"><!-- box content-->
                            <div class="pt-3 px-4">
                                <h5 class="fw-bold">Summary</h5>
                            </div>
                            <hr>
                            <div class="row d-flex px-4"> 
                                <div class="col">
                                    <h6 class="fw-bold">Product Name</h6>
                                    <p>Product 0001</p>
                                </div>
                                <div class="col text-end">
                                    <h6 class="fw-bold">Product Price</h6>
                                    <p>13,0000.00</p>
                                </div>
                            </div>
                        </div> <!-- end box content-->
                    </div><!-- end show/hide content2 -->

                    <div class="row pt-4"> <!--Accumulated bonus-->
                            <div class="col-lg-6 pb-4 px-lg-4">
                                <label for="crypto" class="fw-bold pb-2">Accumulated Placement Bonus</label>
                                <input type="text" class="form-control form-filled" id="crypto" value="201,600.00">
                            </div>
                    </div>
                </div>

                <div class="form-check mt-3 px-lg-5"><!--checkbox-->
                    <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                    <label class="form-check-label" for="check2">I hereby agree to the terms and conditions set herein by Asentar pte Ltd stated
                        <a href="#">here</a> & <a href="#">here</a> & <a href="#">here</a>. Term of services: <a href="#">Product Refund and Exchange</a></label>
                </div><!--end checkbox-->

                <div class="pt-3 px-lg-3">
                    <button type="submit" class="black-btn me-3">Back</button>
                    <button type="submit" class="submit-btn">Next</button>
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