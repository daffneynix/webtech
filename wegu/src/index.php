<?php 
    include "session.php"; 

    if(isset($_SESSION['id'])) {
        header("Location: feed.php"); //feed
    }
?>

<?php include 'layouts/_header.php';?>
<?php include "banner.php"; ?>
<?php include "search.php"; ?>

<main>
<section id="account" class="container">
<div id="account-list">
    <div id="page-container">
        <div class="page-item card">
                <div class="page-item-preview">
                <img src="assets/images/house1.jpg" alt="" class="featured-image">
            </div>
            <div class="page-item-description">
                <div class="page-item-heading">
                    <h4>
                        <a href="/">Golden Haven Boarding House</a>
                    </h4>
                </div>
                <div class="page-item-info">
                    <p class="author">Angel Cruz</p>
                    <p class="price">₱9000</p>
                </div>
                <div class="page-item-content">
                    <p data-location="San Fernando City City">San Fernando City</p>
                </div>
            </div>
        </div>

        <div class="page-item card">
                <div class="page-item-preview">
                <img src="assets/images/house2.jpg" alt="" class="featured-image">
            </div>
            <div class="page-item-description">
                <div class="page-item-heading">
                    <h4>
                        <a href="/">Sunshine Dormitory</a>
                    </h4>
                </div>
                <div class="page-item-info">
                    <p class="author">Jesse Reyes</p>
                    <p class="price">₱9000</p>
                </div>
                <div class="page-item-content">
                    <p data-location="Bauang">Bauang</p>
                </div>
            </div>
        </div>

        <div class="page-item card">
                <div class="page-item-preview">
                <img src="assets/images/house3.jpg" alt="" class="featured-image">
            </div>
            <div class="page-item-description">
                <div class="page-item-heading">
                    <h4>
                        <a href="/">Harmony Residences</a>
                    </h4>
                </div>
                <div class="page-item-info">
                    <p class="author">Sam Santos</p>
                    <p class="price">₱9000</p>
                </div>
                <div class="page-item-content">
                    <p data-location="Agoo">Agoo</p>
                </div>
            </div>
        </div>

        <div class="page-item card">
                <div class="page-item-preview">
                <img src="assets/images/house4.jpg" alt="" class="featured-image">
            </div>
            <div class="page-item-description">
                <div class="page-item-heading">
                    <h4>
                        <a href="/">Tranquil Trails Dorm</a>
                    </h4>
                </div>
                <div class="page-item-info">
                    <p class="author">Alex dela Cruz</p>
                    <p class="price">₱9000</p>
                </div>
                <div class="page-item-content">
                    <p data-location="San Juan">San Juan</p>
                </div>
            </div>
        </div>

        <div class="page-item card">
                <div class="page-item-preview">
                <img src="assets/images/house5.jpg" alt="" class="featured-image">
            </div>
            <div class="page-item-description">
                <div class="page-item-heading">
                    <h4>
                        <a href="/">Serenity Heights</a>
                    </h4>
                </div>
                <div class="page-item-info">
                    <p class="author">Jamie Rivera</p>
                    <p class="price">₱10000</p>
                </div>
                <div class="page-item-content">
                    <p data-location="Bacnotan">Bacnotan</p>
                </div>
            </div>
        </div>

        <div class="page-item card">
                <div class="page-item-preview">
                <img src="assets/images/house6.jpg" alt="" class="featured-image">
            </div>
            <div class="page-item-description">
                <div class="page-item-heading">
                    <h4>
                        <a href="/">Pacific Breeze Boarding House</a>
                    </h4>
                </div>
                <div class="page-item-info">
                    <p class="author">Chris Garcia</p>
                    <p class="price">₱9000</p>
                </div>
                <div class="page-item-content">
                    <p data-location="Tubao">Tubao</p>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php include "layouts/_footer.php"; ?>