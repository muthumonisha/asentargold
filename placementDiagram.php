<?php include 'head.php' ?>
<?php include 'header.php'?>
<head>
    <style>
        .wavy-bg{
            background:url("images/wavy2.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .package-value-bg{
            background:linear-gradient(to right, rgba(255,255,255,1), rgba(255,255,255,0.1)),url("images/packagevalue.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<div class="wavy-bg">
    <div class="portfolio px-lg-5 py-5 px-2">
        <div class="portfolio-heading">
            <h4 class="text-center pb-3"><b>Placement Diagram</b></h4>
        </div>
        <!-- sec-1 -->
        <div class="date-range px-lg-5 py-lg-2 mb-4">
            <div class="bg-white border px-lg-5 py-5 px-3">
                <div class="row">
                    <div class="col-lg-4 pb-4 px-lg-4">
                    <label for="new-tpwd" class="fw-bold pb-2">Entry Date Range</label>
                        <div class="input-group border">
                            <input type="date" class="form-control date-control" id="from-date">
                            <span class="input-group-text"><i style="color:#929292" class='fas fa-long-arrow-alt-right'></i></span>
                            <input type="date" class="form-control date-control" id="to-date">
                        </div>
                    </div>
                    <div class="col-lg-4 pb-4 px-lg-4">
                        <label for="new-tpwd" class="fw-bold pb-2">User Name</label>
                        <input type="text" class="form-control" id="new-tpwd">
                    </div>
                    <div class="col-lg-4 pb-4 px-lg-4">
                        <label for="crypto" class="fw-bold pb-2">Select Package</label>
                            <select class="form-select" id="crypto" name="crypto">
                                <option>Horizontal View</option>
                                <option>Vertical View</option>
                            </select>
                    </div>
                </div>
                <div class="pt-3 px-lg-3">
                    <button type="submit" class="submit-btn">Search</button>
                </div>
            </div>
        </div>

        <!-- sec-2 -->
        <div class="px-lg-5 py-lg-2">
            <div class="border px-lg-5 py-5 px-3 bg-white">
                <span class="red-gradient zoom-icon me-2"><i class="fas fa-plus"></i></span>
                <span class="black-gradient zoom-icon"><i class="fas fa-minus"></i></span>
            </div>
        </div>
       
    </div>
</div>
<?php include 'footer.php'?>

                    