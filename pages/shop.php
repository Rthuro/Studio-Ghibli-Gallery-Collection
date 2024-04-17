<?php
    include('header.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../assets/icons/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/store.css">
    <title>Studio Ghibli | Store</title>
</head>

<body>
    <h1>Studio Ghibli Merch Collections</h1>
 <div class="search-fil flex row">
    <div class="search_container flex">
        <input type="text" name="search" id="search" placeholder="Search">
       <img id="search-icon" src="../assets/icons/search.svg" alt="">
    </div>
        <a href="#apparel-a">Apparel</a>
        <a href="#collectibles-a">Collectibles</a>
        <a href="#stationery-a">Stationery</a>
    </div>
    
    <section id="all" class="all">
      <p class="name">All Collections</p>
      <div class="product-container">
            <div class="prod flex col">
                    <img src="../assets/img/merch/0.jpg" alt="" id="merch-item">
                <div class="prod-bttm flex col">
                    <p class="merch-name"><a id="merch-name">My Neighbor Totoro Figurine</a></p>
                <p id="merch-price">&#8369;700</p>
                <button id="add-to-cart-bttn">
                    ADD TO CART
                </button>
                </div>
                
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/1.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name"><a id="merch-name">Spirited Away Kaonashi (No face) figurine</a></p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/12.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name">  <a id="merch-name">The Princess Mononoke Figurine</a> </p>
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/2.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name"><a id="merch-name ">The Boy And The Heron Warawara figurine </a></p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/15.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name"><a id="merch-name ">My Neighbor Totoro Figurine </a></p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
            </div>
    </section>
    <div id="apparel-a" class="a"></div>
    <section id="apparel" class="apparel flex col">
        <p class="name">Apparel</p>
        <div class="product-container">
            <div class="prod flex col">
                <img src="../assets/img/merch/ghibli-elemental-tshirt-b.png" alt="" id="merch-item">
                <div class="prod-bttm flex col">
                    <p class="merch-name"><a id="merch-name">Ghibli Elemental Shirt</a></p>
                    <p id="merch-price">&#8369;1000</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div id="collectibles-a" class="a"></div>
    <section id="collectibles" class="collectibles flex col">
        <p class="name">Collectibles</p>
        <div class="product-container">
            <div class="prod flex col">
                <img src="../assets/img/merch/0.jpg" alt="" id="merch-item">
                <div class="prod-bttm flex col">
                    <p class="merch-name"><a id="merch-name">My Neighbor Totoro Figurine</a></p>
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div id="stationery-a" class="a"></div>
    <section id="stationery" class="stationery flex col">
        <p class="name">Stationery</p>
        <div class="product-container">
            <div class="prod flex col">
                <img src="../assets/img/merch/0.jpg" alt="" id="merch-item">
                <div class="prod-bttm flex col">
                    <p class="merch-name"><a id="merch-name">My Neighbor Totoro Figurine</a></p>
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
include("footer.html");
?>