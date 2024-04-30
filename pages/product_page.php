<?php
    include('header.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Ghibli</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            --fnt-clr-blue: #0a7cff;
            --fnt-clr-black: #222222;
            --light-blk: rgba(0, 0, 0, 0.16);
            --bx-shdw: 0px 1px 4px rgba(0, 0, 0, 0.16);
            --basic-bg-c: #e7e7e7;
            --basic-brdr: 1px solid #d4d4d4;
            --b-brdr-clr: #d4d4d4;
        }

        html {
            scroll-behavior: smooth;
        }

        * {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: inherit;
            cursor: pointer;
        }

        button {
            cursor: pointer;
        }

        .flex {
            display: flex;
        }

        .col {
            flex-direction: column;
        }

        .product_container {
            justify-content: center;
            align-items: center;
            margin-top: 82px;
        }

        .product_container div:first-child,
        .bottom {
            width: 80%;
            align-items: center;
            justify-content: start;
        }

        .product_container div:first-child img {
            width: 50%;
        }

        .product_container .product_right {
            padding: 16px;
            align-items: start;
            gap: 8px;
            width: 50%;
        }



        .product_container .quantity_wrapper input {
            padding: 8px 4px;
            font-size: 1rem;
            font-weight: 500;
            border: none;
            text-align: center;
            border: var(--basic-brdr);
            width: 50px;
        }

        .product_container .quantity_wrapper button {
            padding: 8px 16px;
            font-size: 1rem;
            font-weight: 500;
            border: none;
            background-color: #fff;
            border: var(--basic-brdr);
        }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #addToCart {
            padding: 12px 0;
            width: 80%;
            font-size: 1rem;
            font-weight: 500;
            margin: 16px 0;
            border: none;
            background-color: var(--fnt-clr-blue);
            color: #fff;
        }

        #addToCart:hover {
            background-color: #0a6fe1;
        }

        .category {
            font-size: 0.9rem;
            font-weight: 600;
            margin: 8px 0;
        }

        .reviews-wrapper {
            width: 80%;
            height: 400px;
            align-items: start;
        }

        #reviews {
            font-weight: 500;
            margin: 8px 0 16px 0;
        }

        .description-wrapper {
            padding: 16px 0;
            border-top: 1px solid var(--fnt-clr-black);
            border-bottom: 1px solid var(--fnt-clr-black);
        }

        .description {
            font-size: 1.2rem;
            font-weight: 500;
            color: #0a6fe1;
        }

        @media screen and (min-width:0px) and (max-width:700px) {
            .product_container div:first-child:not(.navigation) {
                flex-direction: column;
                align-items: start;
            }

            .product_container div:first-child {
                width: 90%;
            }

            .product_container .product_right {
                padding: 16px 0;
            }


            .product_container div:first-child img {
                width: 100%;
                border-bottom: var(--basic-brdr);
            }

            .product_container .product_right,
            .bottom {
                width: 100%;
            }

            #addToCart {
                width: 100%;
            }

            .reviews-wrapper {
                width: 90%;
            }

        }
    </style>
</head>

<body>
    <div class="product_container flex col">
        <div class="flex ">
            <img id="product-image" src="../assets/img/merch/0.jpg" alt="">
            <div class="product_right flex col">
                <div class="navigation flex row">
                </div>
                <p id="product-name" style="
                 font-size: 1.8rem;
            font-weight: 500;
                " ></p>
                <p id="product-price" style="
                 font-size: 1.4rem;
            font-weight: 500;
            color: #ff4e4e;
                "></p>
                <div class="quantity_wrapper">
                    <button id="minus_bttn">-</button>
                    <input style="margin-left: -5px ;" type="number" name="" id="quantity" value="1" disabled>
                    <button id="plus_bttn" style="margin-left: -5px ;">+</button>
                </div>
                <p class="category">Category: <span id="prodCategory"></span> </p>
                <button id="addToCart">ADD TO CART</button>

            </div>
        </div>
        <div class="bottom flex col">
            <div class="description-wrapper">
                <p class="description">Description:</p>
                <p style="font-size:1rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quaerat
                    atque omnis iusto ad odit adipisci nobis nulla laudantium delectus</p>
            </div>
            <div class="reviews-wrapper">
                <p id="reviews">REVIEWS</p>
                <p>No reviews yet.</p>
            </div>

        </div>
    </div>
    <script>
        
const storedImage = localStorage.getItem("productImage");
const storedName = localStorage.getItem("productName");
const storedPrice = localStorage.getItem("productPrice");

document.getElementById("product-image").src = storedImage;
document.getElementById("product-name").textContent = storedName;
document.getElementById("product-price").textContent = storedPrice;
 
const minusBttn = document.getElementById("minus_bttn");
const plusBttn = document.getElementById("plus_bttn");
const quantity = document.getElementById("quantity");

minusBttn.addEventListener('click', () => {
  if (quantity.value > 0) {
    quantity.value--; 
  } else {
    minusBttn.disabled = true; 
  }

  plusBttn.addEventListener('click', () => {
    if (minusBttn.disabled) {
      minusBttn.disabled = false; 
    }
  });
});

plusBttn.addEventListener('click', ()=>{
            quantity.value++;
});

    </script>
</body>

</html>
<?php
include("footer.html");
?>