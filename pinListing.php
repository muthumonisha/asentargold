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
    </style>
</head>
<div class="wavy-bg">
    <div class="portfolio px-lg-5 py-5 px-2">
        <div class="portfolio-heading">
            <h4 class="text-center pb-3"><b>Pin Listing</b></h4>
        </div>
        <!-- sec-1 -->
        <div class="date-range px-lg-5 py-lg-2 mb-4">
            <div class="bg-white border px-lg-5 py-5 px-3">
                <div class="row">
                    <div class="col-lg-4 pb-4 px-lg-4">
                        <label for="new-tpwd" class="fw-bold pb-2">Pin Code</label>
                        <input type="text" class="form-control" id="new-tpwd">
                    </div>

                    <div class="col-lg-4 pb-4 px-lg-4">
                    <label for="new-tpwd" class="fw-bold pb-2">Purchase Date</label>
                        <div class="input-group border">
                            <input type="date" class="form-control date-control" id="from-date">
                            <span class="input-group-text"><i style="color:#929292" class='fas fa-long-arrow-alt-right'></i></span>
                            <input type="date" class="form-control date-control" id="to-date">
                        </div>
                    </div>

                    <div class="col-lg-4 pb-4 px-lg-4">
                        <label for="crypto" class="fw-bold pb-2">Package</label>
                            <select class="form-select" id="crypto" name="crypto">
                                <option>All</option>
                                <option>Package1</option>
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 pb-4 px-lg-4">
                        <label for="crypto" class="fw-bold pb-2">Status</label>
                            <select class="form-select" id="crypto" name="crypto">
                                <option>All</option>
                                <option>Package1</option>
                            </select>
                    </div>
                    <div class="col-lg-4 pb-4 px-lg-4 my-auto pt-4">
                        <button type="submit" class="submit-btn">Search</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- sec-2 -->
        <div class="px-lg-5" style="overflow-x:auto;">
    <table style="width:100%">
    <thead>
        <tr>
            <th>Transaction Date</th>
            <th>Invoice Number</th>
            <th>Payment Amount</th>
            <th>Delivery Option</th>
            <th>View Invoice</th>
            <th>View Delivery Order</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td><td></td><td></td><td></td>
        </tr>
        <tr style="background-color:white;">
            <td>23/09/2022</td>
            <td>76898975330</td>
            <td>2,000.00</td>
            <td>Pickup</td>
            <td><a href="#">View</a></td>
            <td><a href="#">View</a></td>
        </tr>
        <tr style="background-color:white;">
            <td>23/09/2022</td>
            <td>76898975330</td>
            <td>1,300.00</td>
            <td>Pickup</td>
            <td><a href="#">View</a></td>
            <td><a href="#">View</a></td>
        </tr>
        <tr style="background-color:white;">
            <td>23/09/2022</td>
            <td>76898975330</td>
            <td>1,300.00</td>
            <td>Pickup</td>
            <td><a href="#">View</a></td>
            <td><a href="#">View</a></td>
        </tr>
        <tr style="background-color:white;">
            <td>23/09/2022</td>
            <td>76898975330</td>
            <td>0.00</td>
            <td>Delivery</td>
            <td><a href="#">View</a></td>
            <td><a href="#">View</a></td>
        </tr>
        <tr style="background-color:white;">
            <td>23/09/2022</td>
            <td>76898975330</td>
            <td>1,300.00</td>
            <td>Delivery</td>
            <td><a href="#">View</a></td>
            <td><a href="#">View</a></td>
        </tr>
        <tr style="background-color:white;">
            <td>23/09/2022</td>
            <td>76898975330</td>
            <td>2,000.00</td>
            <td>Delivery</td>
            <td><a href="#">View</a></td>
            <td><a href="#">View</a></td>
        </tr>
    </tbody>
    </table>
    </div>
       
    </div>
</div>
<?php include 'footer.php'?>

                    