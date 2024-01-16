<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/preview.css">
    <title>Preview</title>
</head>
<body>
    <header>
        <nav>
            <div id="inner-nav" class="container">
                <div id="logo" class="nav-item">
                    <a href="/">
                        <img src="assets/images/wegu.png" alt="" width="100">
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="flex-item">
                <img src="assets/images/hotel-1.jpg" class="slide">
            </div>
        </div>
        
        <div class="flexbox-container">
            <img src="assets/images/hotel-1.jpg" onclick="img('assets/images/hotel-1.jpg')">
            <img src="assets/images/hotel-2.jpg" onclick="img('assets/images/hotel-2.jpg')">
            <img src="assets/images/hotel-3.jpg" onclick="img('assets/images/hotel-3.jpg')">
            <img src="assets/images/hotel-4.jpg" onclick="img('assets/images/hotel-4.jpg')">
            <img src="assets/images/hotel-5.jpg" onclick="img('assets/images/hotel-5.jpg')">
            <img src="assets/images/hotel-6.jpg" onclick="img('assets/images/hotel-6.jpg')">
        </div>
    </section>
<!-- description -->
    <section class="bx">
        <div class="left">
            <h1>Name of the rental place</h1>
            <div class="align-content">
                <h4>Location</h4>
            </div>
            <div class="rent">
              <h3>Price</h3> 
              <h6 class="discount">% Discount</h6>
            </div>

            <h5>Details</h5>
            <div class="grid-container">
                <div class="item"><img src="assets/images/bed-regular-24.png">Beds</div>
                <div class="item"><img src="assets/images/area-regular-24.png" alt="">Floor Area (m²)</div>
                <div class="item"><img src="assets/images/bath-regular-24.png">Baths</div>
            </div>

            <h5>Nearest Landmark</h5>
            <div class="grid-container-2">
                <div class="item-2"><img src="assets/images/shopping-bag-regular-24.png">SM Megamall</div>
                <div class="item-2"><img src="assets/images/shopping-bag-regular-24.png">Shangri-La</div>
                <div class="item-2"><img src="assets/images/shopping-bag-regular-24.png">Robinsons Galleria</div>
                <div class="item-2"><img src="assets/images/plus-medical-regular-24.png" alt="">St. Jude Hospital</div>
            </div>
        </div>
<!-- owner contact -->
        <div class="right">
            <img src="assets/images/cat.png">
            <div class="icon">
                <img src="assets/images/badge-check-solid-24.png">
                <h2>Name of owner</h2>
            </div>
            <div class="button-container">
                <a href="#"><button id="call">Call or Text</button></a>
                <a href="#"><button id="email">Email</button></a>
                <a href="#"><button id="messenger">Messenger</button></a>
            </div>
        </div>
    </section>

    <!-- javascript -->
    <script src="assets/js/image.js"></script>
</body>
</html>
