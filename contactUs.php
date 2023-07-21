<?php include 'head.php' ?>
<?php include 'header.php'?>
<head>
    <style>
        .contact-bg{
            background:url("images/contactimg.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height:400px;
        }
    </style>
</head>
<body>
    <div class="contact-bg">
    </div>
    <div class="container contact-box mb-5">
        <div class="row justify-content-center">
            <div class="col-11 col-md-9 col-lg-6 col-xl-9 bg-white border p-lg-5 px-3 py-4">
                <div class="sec-heading">
                    <h4 class="text-center"><b>Contact Us</b></h4>
                </div>
                <hr class="mx-auto" style="width:120px;">
                <div class="form-part">
                    <div class="mb-5">
                        <label for="sub" class="fw-bold mb-2">Subject</label>
                        <input type="text" class="form-control" id="sub">
                    </div>
                    <div class="mb-5"><label for="image" class="fw-bold mb-2">Image</label><br>
                        <label for="file-upload" class="custom-file-upload">
                        + Choose File
                        </label>
                        <input id="file-upload" type="file" />
                    </div>
                    <div class="mb-5">
                        <label for="message" class="fw-bold mb-2">Message</label>
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                    <div class="mt-4">
				 	    <button type="button" name="button" class="btn login-button">Submit</button>
				    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'?>