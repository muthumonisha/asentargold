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
            <h4 class="text-center pb-3"><b>Portfolio</b></h4>
        </div>
        <!-- sec-1 -->
        <div class="date-range px-lg-5 py-lg-2">
            <div class="date-range-inner border px-lg-5 py-5 px-3">
                <h6><b>Entry Date Range</b></h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group border">
                                    <input type="date" class="form-control date-control" id="from-date">
                                    <span class="input-group-text"><i style="color:#929292" class='fas fa-long-arrow-alt-right'></i></span>
                                    <input type="date" class="form-control date-control" id="to-date">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0"> 
                                    <button class="submit-btn" type="button" id="search-button">Search
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sec-2 -->
        <div class="px-lg-5 py-lg-2 my-5">
            <div class="package-value-bg px-lg-5 py-4 px-3">
                <h5><b>Total Package Value Amount: &nbsp</b>3,000.00</h5>
            </div>
        </div>

        <!-- sec-3 -->
        <div class="px-lg-5" style="overflow-x:auto;">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th>Entry Date</th>
                        <th>Package Name</th>
                        <th>Package Price</th>
                        <th>Package Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td><td></td><td></td><td></td>
                    </tr>
                    <tr style="background-color:white;">
                        <td>23/09/2022</td>
                        <td>Package 1000BV</td>
                        <td>2,000.00</td>
                        <td>672,08</td>
                    </tr>
                    <tr style="background-color:white;">
                        <td>23/09/2022</td>
                        <td>Package 1000BV</td>
                        <td>1,300.00</td>
                        <td>1,000.00</td>
                    </tr>
                    <tr style="background-color:white;">
                        <td>23/09/2022</td>
                        <td>Package 1000BV</td>
                        <td>1,300.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr style="background-color:white;">
                        <td>23/09/2022</td>
                        <td>Package 1000BV</td>
                        <td>0.00</td>
                        <td>1,000.00</td>
                    </tr>
                    <tr style="background-color:white;">
                        <td>23/09/2022</td>
                        <td>Package 1000BV</td>
                        <td>1,300.00</td>
                        <td>888.00</td>
                    </tr>
                    <tr style="background-color:white;">
                        <td>23/09/2022</td>
                        <td>Package 1000BV</td>
                        <td>2,000.00</td>
                        <td>1,000.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'?>

                    