<?php
    include('header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landing_page.css">
    <link rel="stylesheet" href="../css/nav-footer.css">
    <link rel="icon" sizes="32x32" href="../assets/icons/logo.svg" type="image/x-icon">
    <title>Studio Ghibli Collection</title>
</head>
<body>

        <header class="bg flex col">
            <div class="bg-content flex col">
                <div class="context flex col">
                    <h1 class="headline">Welcome to the world of <span>Studio Ghibli!</span></h1>
                    <p class="headline-2">Explore Our Gallery Collection & Shop and Immerse Yourself in Ghibli. </p>
                </div>
                <button id="main-bttn" class="flex row">
                    Explore Studio Ghibli Collection
                    <img src="../assets/icons/arrow-up-right-w.svg" alt="">
                </button>
            </div>
        </header>

        <section class="gallery flex col">
            <p class="head"><strong>Explore Our Gallery Collection</strong></p>
            <p> Dive into the enchanting universe of Studio Ghibli, where every frame tells a story and every character captures the imagination. Our Gallery Collection invites you to journey through the masterpieces crafted by the legendary Hayao Miyazaki and his talented team.</p>
            <img src="../assets/img/intro-g-bg0.png" alt="">
            <button id="gallery-bttn" class="flex row">
                Explore Gallery
                <img src="../assets/icons/arrow-right-w.svg" alt="">
            </button>
        </section>


        <section class="merchandise flex col">
            <p class="head"><strong>Shop Ghibli Merchandise</strong></p>
            <p>Elevate your Ghibli experience with our exclusive merchandise collection, inspired by the iconic characters and enchanting worlds brought to life on the silver screen.</p>
            <div class="sub">
                <div class="container">
                    <img src="../assets/img/ghibli_gif2.gif" style="width:56px;height:56px;">
                    <p class="text1">Indulge in Ghibli Goodies</p>
                    <p class="text2">Indulge in the whimsy of "Kiki's Delivery Service" with our charming Jiji plushies, or add a touch of magic to your wardrobe with Totoro-themed accessories.</p>
                </div>
                <div class="container">
                    <img src="../assets/img/ghibli_gif.gif" style="width:56px;height:56px;">
                    <p class="text1">Experience the Magic</p>
                    <p class="text2">Every item in our collection is carefully selected to capture the essence of Studio Ghibli's enchanting storytelling and artistic brilliance.</p>
                </div>
                <div class="container">
                    <img src="../assets/img/ghibli_gif3.gif" style="width:56px;height:56px;">
                    <p class="text1">Immerse Yourself</p>
                    <p class="text2">Immerse yourself in the magic of Studio Ghibli today – explore our gallery collection, shop for unique merchandise, and let the spirit of Ghibli inspire your journey.</p>
                </div>
            </div>
            <button id="shop-bttn" class="flex row">
                Explore Shop
                <img src="../assets/icons/arrow-right-w.svg" alt="">
            </button>
        </section>

        <section class="msg flex">
            <img src="../assets/img/totoro-gif.gif" alt="">
            <div class="msg-container">
                <p>Embrace the Magic of Ghibli with Us!</p>
                <p>Indulge in our exclusive merchandise collection, featuring beloved characters and iconic scenes from your favorite films.</p>
                <p>Join us on this whimsical journey through the wonders of Studio Ghibli, and let the spirit of Miyazaki inspire your imagination.
                </p>
            </div>
        </section>

    <script>
        const main_bttn = document.getElementById("main-bttn");
        const gallery_bttn = document.getElementById("gallery-bttn");
        const shop_bttn = document.getElementById("shop-bttn");
        
        main_bttn.addEventListener('click', () => {
            window.location.href = "index.php";
        });
        gallery_bttn.addEventListener('click', () => {
            window.location.href = "works_gallery.php";
        });
        shop_bttn.addEventListener('click', () => {
            window.location.href = "shop.php";
        });
    </script>
</body>
</html>

<?php
include("footer.html");
?>