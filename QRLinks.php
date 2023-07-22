<?php include 'head.php' ?>
<?php include 'header.php'?>

<body>
    <div class="qrpopup">
    <button id="openPopupBtn">Open Popup</button>
    <!--popup content-->
    <div id="popupContainer">
        <div class="popupContent col-12 col-md-9 col-lg-7 col-xl-3">
            <div class="qr-popup-head red-gradient py-3" style="border-radius:5px 5px 0px 0px;">
                <div class="popup-title" style="position:relative">
                    <h4 class="text-center text-white"><b>QR Links</b></h4>
                    <div class="close-btn" style="position:absolute;left:95%;top:2px;">
                    <i class="fas fa-close text-white ms-auto my-auto" id="closePopupBtn"></i>
                    </div>
                </div>
            </div>
            
            <div class="qr-popup-body py-3 px-3">
                <ul id="tabContainer" class="d-flex justify-content-center mb-4">
                    <li class="tab active-tab" onclick="showTabContent(0)">Referral QR & Links</li>
                    <li class="tab" onclick="showTabContent(1)">Consumer Landing QR</li>
                </ul>

                <div class="tab-content active">
                    <p class="text-center fw-bold"><small>Use this QR code to register your New Channel Partners</small></p>
                        <div class="mt-3">
                            <div class="copyurl d-flex justify-content-center ">
                                <img src="images/qrcode.png" alt="qrcode">
                            </div>
                            <div class="copyurl d-flex justify-content-center mt-4">
                                <p class="px-4 py-2" style="background-color:#e8e8e8">https://copyme-qrcode-customer.asentargold.com</p>
                            </div>
                            <div class="copyurl d-flex justify-content-center mt-3">
                                <button type="button" class="submit-btn">Copy Link</button>
                            </div>
				        </div>
                </div>
                <div class="tab-content">
                    <p class="text-center fw-bold"><small>Use this QR code to for your retail customers.</small></p>
                        <div class="mt-3">
                            <div class="copyurl d-flex justify-content-center ">
                                <img src="images/qrcode.png" alt="qrcode">
                            </div>
                            <div class="copyurl d-flex justify-content-center mt-4">
                                <p class="px-4 py-2" style="background-color:#e8e8e8">https://copyme-qrcode-customer.asentargold.com</p>
                            </div>
                            <div class="copyurl d-flex justify-content-center mt-3">
                                <button type="button" class="submit-btn">Copy Link</button>
                            </div>
				        </div>
                </div>
                <hr>
                    <div class="social-icons d-flex justify-content-center">
                        <a href="#" style="background-color:#3b5998;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="background-color:#e4405f;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="background-color:#1da1f2;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="background-color:#25d366;"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" style="background-color:#0077b5;"><i class="fab fa-linkedin-in"></i></a>
                    </div>
            </div>
        </div>
    </div>
    <!-- end popup content -->
    </div>

    <script>
        const openPopupBtn = document.getElementById('openPopupBtn');
const closePopupBtn = document.getElementById('closePopupBtn');
const popupContainer = document.getElementById('popupContainer');

openPopupBtn.addEventListener('click', function () {
    popupContainer.style.display = 'block';
});

closePopupBtn.addEventListener('click', function () {
    popupContainer.style.display = 'none';
});

function showTabContent(tabIndex) {
            // Get all tabs and tab content
            const tabs = document.querySelectorAll('.tab');
            const tabContents = document.querySelectorAll('.tab-content');

            // Hide all tab contents and remove active class from tabs
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove('active');
                tabs[i].classList.remove('active-tab');
            }

            // Show the selected tab content and set the active class to the selected tab
            tabContents[tabIndex].classList.add('active');
            tabs[tabIndex].classList.add('active-tab');
        }

        // Show the default first tab content
        showTabContent(0);
    </script>
</body>
<?php include 'footer.php'?>