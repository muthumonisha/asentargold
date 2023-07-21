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
                        <label for="sub" class="fw-bold mb-2">Subject</label><span style="color:red"> * <small id="subject-error" class="error-message"></small></span>
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="mb-5"><label for="image" class="fw-bold mb-2">Image</label><span style="color:red"> * <small id="image-error" class="error-message"></small></span><br>
                        <label for="file-upload" class="custom-file-upload">
                        + Choose File
                        </label>
                        <input id="file-upload" type="file" />
                    </div>
                    <div class="mb-5">
                        <label for="message" class="fw-bold mb-2">Message</label><span style="color:red"> * <small id="message-error" class="error-message"></small></span>
                        <textarea class="form-control" rows="5" id="message" name="text"></textarea>
                    </div>
                    <div class="mt-4">
				 	    <button type="button" id="submit" class="submit-btn">Submit</button>
				    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('submit').addEventListener('click', function() {
            // Get form elements
            var subject = document.getElementById('subject');
            var fileUpload = document.getElementById('file-upload');
            var message = document.getElementById('message');

            // Get error message elements
            var subjectError = document.getElementById('subject-error');
            var imageError = document.getElementById('image-error');
            var messageError = document.getElementById('message-error');

            // Clear existing error messages
            subjectError.textContent = '';
            imageError.textContent = '';
            messageError.textContent = '';

            // Check if the field is empty
            if (subject.value.trim() === '') {
                subjectError.textContent = 'Required';
            }

            // Check if the field is empty
            if (fileUpload.value.trim() === '') {
                imageError.textContent = 'Required';
            }

            if (message.value.trim() === '') {
                messageError.textContent = 'Required';
            }

        });
    </script>
</body>
<?php include 'footer.php'?>