<?php
    include('header.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" href="../assets/icons/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/nav-footer.css">
    <link rel="stylesheet" href="../css/store.css">
    <title>Studio Ghibli | Store</title>
</head>

<body >
    <h1>Studio Ghibli Merch Collections</h1>
 
     <header class="flex">
        <div class="s-sdbr row">
                <img src="../assets/icons/menu.svg" alt="">
                Show Sidebar
           </div>
             <div class="search-container flex row">
            <input type="text" name="search" id="search" placeholder="Search">
            <img src="../assets/icons/search.svg" alt="">
        </div>
       
        <div class="sort-container flex row">
            <label for="sorting">Sort by: </label>
            <select name="sorting" id="sorting">
                <option value="">Default Sorting</option>
                <option value="">Price (Low to High)</option>
                <option value="">Price (High to Low)</option>
                <option value="">Popularity</option>
                <option value="">New Arrivals</option>
                <option value="">Average Rating</option>
            </select>
        </div>
         
     </header>    
     
     <section class="shop-bttm flex row">
        <div class="filter-container col">
            <div class="fil-price flex col">
                <label for="f-price">Filter By Price</label>
                <input type="range" id="price-slider" min="0" max="5000" value="0,5000">
               <div class="p-val flex row">
                <span id="min-price">0</span>  <span id="max-price">5000</span>
               </div>
               <div class="f-bttn flex row">
                    <button id="f-bttn">Filter</button>
                    <button id="f-clear">Clear</button>
               </div>
               
            </div>
            <div class="categories flex col">
                <p>Catergories</p>
                <a href="">Apparel</a>
                <a href="">Collectibles</a>
                <a href="">Stationery</a>
            </div>
        </div>
        <div class="prod-container ">
                 <div class="prod flex col">
                    <img  src="../assets/img/merch/0.jpg" alt="" id="merch-item">
                <div class="prod-bttm flex col">
                    <p id="product-name" class="merch-name"><a id="merch-name">My Neighbor Totoro Figurine</a></p>
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
                <div class="prod flex col">
                    <img src="../assets/img/merch/9.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name">Spirited Away Kaonashi (No face) figurine </p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/2.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name">The Boy And The Heron Warawara figurine </p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/15.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name">My Neighbor Totoro Figurine </p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/15.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name">My Neighbor Totoro Figurine </p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/9.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name">Spirited Away Kaonashi (No face) figurine</p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/2.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name">The Boy And The Heron Warawara figurine </p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
                <div class="prod flex col">
                    <img src="../assets/img/merch/15.jpg" alt="" id="merch-item">
                    <div class="prod-bttm flex col">
                        <p class="merch-name">My Neighbor Totoro Figurine</p> 
                    <p id="merch-price">&#8369;700</p>
                    <button id="add-to-cart-bttn">
                        ADD TO CART
                    </button>
                    </div>
                </div>
          </div>
     </section>
     <div class="pagination flex row">
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
    </div>

    <div id="h-sidebar" class="  col">
        <div class="filter-container flex col">
            <div class="fil-price flex col">
                    <label for="f-price">Filter By Price</label>
                    <input type="range" id="price-slider" min="0" max="5000" value="0,5000">
                <div class="p-val flex row">
                    <span id="min-price">0</span>  <span id="max-price">5000</span>
                </div>
                <div class="f-bttn flex row">
                        <button id="f-bttn">Filter</button>
                        <button id="f-clear">Clear</button>
                </div>
                
                </div>
                <div class="categories flex col">
                    <p>Catergories</p>
                    <a href="">Apparel</a>
                    <a href="">Collectibles</a>
                    <a href="">Stationery</a>
                </div>
        </div>
    </div>

   

     <script src="../scripts/shop.js"></script>
</body>
</html>

<?php
include("footer.html");
?>