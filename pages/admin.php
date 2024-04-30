<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" sizes="32x32" href="../assets/icons/logo.svg" type="image/x-icon">
    <title>Admin</title>

</head>

<body>

    <main class="flex row">
        <div id="addNewProd_modalContainer" class="new-prod">
            <div id="addNewProd_modal">
                <div class="flex row" style="justify-content: space-between; align-items:center;">
                    <p style="font-size: 1.6rem; font-weight:500;">Add New Product</p>
                    <button id="addNewProd_closeBttn" class="flex col" style=" padding:8px; border-radius: 0.5rem; border:none; "><img src="../assets/icons/x.svg" alt=""></button>
                </div>


                <form class="flex row" action="admin.php" method="post" enctype="multipart/form-data">
                    <div class="add-img-wrapper flex col">
                        <div class="flex col">
                            <p>Product Image</p>
                            <label for="product_image" class="flex col">
                                <img src="../assets/icons/icons8-image-48.png" alt="">
                                <p>Browse Image</p>
                            </label>
                            <input type="file" id="product_image" name="product_image" multiple>

                            <label id="shop-d" for="description">Description:</label>
                            <textarea name="description" id="description" cols="50" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="r-layout ">
                        <div class="flex col">
                            <label for="product_name">Product name</label>
                            <input style="width: 400px;" type="text" name="product_name" id="product_name">
                        </div>
                        <div class="price_container flex row">
                            <div class="flex col">
                            <label for="product_price">Product price</label>
                            <input type="number" name="product_price" id="product_price">
                        </div>
                        <div class="flex col">
                            <label for="sale_price">Sale price</label>
                            <input type="number" name="sale_price" id="sale_price">
                        </div>
                        </div>
                        
                        <div class="stock_container flex row">
                            <div class="flex col">
                            <label for="stock_status">Stock Status</label>
                           <select name="stock_status" id="stock_status">
                                <option value="">In Stock</option>
                                <option value="">Low Inventory</option>
                                <option value="">Out of Stock</option>
                                <option value="">On Demand</option>
                                <option value="">Temporarily Unavailable </option>
                           </select>
                            </div>
                            <div class="flex col">
                            <label for="product_stocks">Quantity</label>
                            <input type="number" name="product_stocks" id="product_stocks">
                        </div>
                        <div class="flex col">
                        <label for="product_quantity">Unit</label>
                           <select name="product_quantity" id="product_quantity">
                                <option value="">Pieces</option>
                                <option value="">Boxes</option>
                           </select>
                        </div>
                     </div>
                        
                        <div class="flex col">
                            <label for="category">Product Category</label>
                            <div class="flex row">
                                 <select style="width:fit-content;" name="category" id="category">
                                <?php 
                                             $conn = mysqli_connect("localhost", "root", "", "studio_ghibli");
            
                                             if (!$conn) {
                                                         die("Connection failed: " . mysqli_connect_error());
                                                         }
                                                     
                                      $sql = "SELECT category FROM product_category";
                                      $result = mysqli_query($conn, $sql);

                                         if (mysqli_num_rows($result) > 0) { 
                                          while ($row = mysqli_fetch_assoc($result)) {
                                                 $prod_category = $row['category'];
                                             echo "<option value='$prod_category'>$prod_category</option>";
                                                         }
                                          } else {
                                          echo "No category found";
                                          }
                 
                                          mysqli_close($conn);

                                        ?>
                            </select>

                            <button  id="add_category">
                                Add New Category
                            </button>
                        </div>
                        <div id="addingNewCategory" class="flex col" style="display: none;">
                             <label for="new_category">New Product Category</label>
                           <input type="text" name="new_category" id="new_category">
                        </div>
                        </div>
                        <div class="flex col">
                            <p>Payment Method</p>
                             <div class="flex row" style="align-items: center; gap:12px;">
                                    <div class="flex row" style="align-items: center;" >
                                        <input type="checkbox" name="cod" id="cod">
                                        <label for="cod"style="margin:0;" > COD
                                        </label>
                                    </div>
                                    <div class="flex row" style="align-items: center;">
                                        <input type="checkbox" name="gcash" id="gcash">
                                        <label for="gcash"style="margin:0;" > Gcash
                                        </label>
                                    </div>
                                    <div class="flex row" style="align-items: center;">
                                        <input type="checkbox" name="unionbank" id="unionbank">
                                        <label for="unionbank"style="margin:0;"> Unionbank
                                        </label>
                                    </div>
                                    <div class="flex row" style="align-items: center;">
                                        <input type="checkbox" name="paymaya" id="paymaya">
                                        <label for="paymaya"style="margin:0;">PayMaya
                                        </label>
                                    </div>
                        </div>
                        <div id="a-n-prod-bttns" class="bttns">
                            <button class="add" id="add">
                                Add product
                            </button>
                            <button class="cancel" id="cancelNewProd">
                                Cancel
                            </button>
                        </div>
                      
                        </div>
                       
                    </div>

                </form>
            </div>
        </div>
        <div id="addNewFilm_modalContainer">
        <div class="new-film">
        <div class="flex row" style="justify-content: space-between; align-items:center;">
                    <p style="font-size: 1.6rem; font-weight:500;">Add New Film Image/s</p>
                    <button id="addNewFilm_closeBttn" class="flex col" style=" padding:8px; border-radius: 0.5rem; border:none; "><img src="../assets/icons/x.svg" alt=""></button>
                </div>
                       
                        <form class="flex row" action="add_films.php" method="post" enctype="multipart/form-data">
                            <div class="add-img-wrapper flex col">

                                <div class=" flex col">
                                    <p>Poster Image file</p>
                                    <label for="poster_image" class="flex col"> <img
                                            src="../assets/icons/icons8-image-48.png" alt="">
                                        <p>Browse Image</p>
                                    </label>
                                    <input type="file" id="poster_image" name="poster_image">

                                </div>
                                <div class=" flex col">
                                    <p>Image file</p>
                                    <label for="film_image" class="flex col"> <img
                                            src="../assets/icons/icons8-image-48.png" alt="">
                                        <p>Browse Image</p>
                                    </label>
                                    <input type="file" id="film_image" name="film_image[]" multiple>
                                </div>
                            </div>

                            <div class="r-layout ">
                                <div class="flex col">
                                    <?php
                                                        $conn = mysqli_connect("localhost", "root", "", "studio_ghibli");

                                                        if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                        }
                                                        
                                                        echo " <label>Studio Ghibli Works:</label> ";

                                                        $sql = "SELECT title FROM films";
                                                        $result = mysqli_query($conn, $sql);
                                                        
                                                        echo "<select> ";
                                                        if (mysqli_num_rows($result) > 0) { 
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $film_name = $row['title'];
                                                            echo "<option value='$film_name'>$film_name</option>";
                                                        }
                                                        } else {
                                                        echo "No films found";
                                                        }
                                                        echo "</select> ";

                                                        mysqli_close($conn);
                                                ?>
                                </div>
                                <div class="plot flex col">
                                    <label for="plot">Plot:</label>
                                    <textarea name="plot" id="plot" cols="60" rows="10"></textarea>
                                </div>
                                <div class="plot flex col">
                                    <label for="new_film">Add new ghibli film:</label>
                                    <input type="text" name="new_film" id="new_film">
                                </div>
                                <div class="bttns flex row" style="gap:8px;">
                        <button class="add" id="add">
                            Add image
                        </button>
                        <button class="cancel" id="cancel">
                            Cancel
                        </button>
                    </div>
                            </div>
                            
                        </form>
                        
                    </div>
        </div>

        <section class="nav-container flex col">
            <div class="logo flex row">
                <img src="../assets/icons/logo.svg" alt="">
                <p>Studio Ghibli</p>
            </div>
            <section class="m-dashboard flex col">
                <div id="n-dashboard" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/layout-dashboard.svg" alt="">
                        <p class="name">Dashboard</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">
                </div>

                <div id="n-orders" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/database.svg" alt="">
                        <p class="name">Orders</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">
                </div>
                <div id="n-shop" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/store.svg" alt="">
                        <p class="name">Shop</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">
                </div>
                <div class="s-shop-wrapper flex col">
                    <div class="s-o s-prod flex nav row">
                        <div class="n-i-name flex row">
                            <img src="../assets/icons/dot.svg" alt="">
                            <p class="name">Product Grid</p>
                        </div>
                        <img src="../assets/icons/chevron-right-w.svg" alt="">
                    </div>
                    <div class="s-t s-prod flex nav row">
                        <div class="n-i-name flex row">
                            <img src="../assets/icons/dot.svg" alt="">
                            <p class="name">Product Editor</p>
                        </div>
                        <img src="../assets/icons/chevron-right-w.svg" alt="">
                    </div>
                </div>
                <div id="n-gallery" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/images (1).svg" alt="">
                        <p class="name">Gallery</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">
                </div>
            </section>
            <section class="settings-acc flex col">
                <p class="name">Settings</p>
                <div id="n-account" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/circle-user-round.svg" alt="">
                        <p class="name">Account</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">
                </div>
            </section>
        </section>

        <div class="right-wrapper flex col">
            <div class="head-nav flex row">
                <div class="l-head-nav flex row">
                    <p>Date refresh</p>
                    <img src="../assets/icons/refresh-ccw.svg" alt="">
                    <input type="datetime-local" name="dt" id="dt" value="2024-04-25T19:30">
                </div>

                <div class="search-wrapper flex row">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <img src="../assets/icons/search.svg" alt="">
                </div>
                <div class="r-head-nav flex row">
                    <img id="notif" src="../assets/icons/bell.svg" alt="">
                    <img id="msg" src="../assets/icons/message-circle-more.svg" alt="">
                    <img id="avatar" src="../assets/img/download (2).jpg" alt="">
                </div>

            </div>
            <section class="nav-content">
                <section id="cont-dashboard" class="dashboard content-item">
                    <h1>Dashboard</h1>
                    <div class="b-wrapper  ">
                     <div class="box d-order flex col">
                            <img src="../assets/icons/layout-list.svg" alt="">
                            <p class="big">Orders to Review</p>
                            <div class="flex row">
                                <p>18</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                        <div class="box d-order flex col">
                            <img src="../assets/icons/package-check.svg" alt="">
                            <p class="big">Orders Completed</p>
                            <div class="flex row">
                                <p>354</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                        <div class="box d-order flex col">
                            <img src="../assets/icons/list-checks.svg" alt="">
                            <p class="big">Orders Confirmed</p>
                            <div class="flex row">
                                <p>230</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                        <div class="box d-order flex col">
                            <img src="../assets/icons/circle-x.svg" alt="">
                            <p class="big">Orders Cancelled</p>
                            <div class="flex row">
                                <p>10</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                    
                        <div class="box d-prod flex col">
                            <img src="../assets/icons/store.svg" alt="">
                            <p class="big">Total Products </p>
                            <div class="flex row">
                                <p>340</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>

                    <div class="box d-gallery flex col">
                            <img src="../assets/icons/image.svg" alt="">
                            <p class="big">Total Gallery Image</p>
                            <div class="flex row">
                                <p>500</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                </section>
                <section id="cont-orders" class="orders content-item">
                    <h1>Orders</h1>
                    <div class="b-wrapper flex row">
                    <div class="box flex col">
                            <img src="../assets/icons/layout-list.svg" alt="">
                            <p class="big">Orders to Review</p>
                            <div class="flex row">
                                <p>18</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                        <div class="box flex col">
                            <img src="../assets/icons/package-check.svg" alt="">
                            <p class="big">Orders Completed</p>
                            <div class="flex row">
                                <p>354</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                        <div class="box flex col">
                            <img src="../assets/icons/list-checks.svg" alt="">
                            <p class="big">Orders Confirmed</p>
                            <div class="flex row">
                                <p>230</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                        <div class="box flex col">
                            <img src="../assets/icons/circle-x.svg" alt="">
                            <p class="big">Orders Cancelled</p>
                            <div class="flex row">
                                <p>10</p>
                                <img src="../assets/icons/ellipsis-vertical.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="orders-list flex col">
                        <div class="review-order">
                            <p>Manage Orders</p>
                            <table  border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th>ORDER ID</th>
                                        <th>CUSTOMER</th>
                                        <th>QTY</th>
                                        <th>TOTAL</th>
                                        <th>DATE | TIME</th>
                                        <th>STATUS</th>
                                        <th>ACTION</th>
                                        <th>INVOICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#13243</td>
                                        <td>Ruth Oribello</td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>7:30 AM</p>
                                            <p>21 April, 2024</p>
                                        </td>
                                        <td><select name="" id="">
                                                <option value="pending" selected>Pending</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="confirmed">Confirmed</option>

                                            </select> </td>
                                        <td>
                                            <button>Save</button>
                                            <button>Edit</button>
                                        </td>
                                        <td><img src="../assets/icons/printer.svg" alt=""><img
                                                src="../assets/icons/eye.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#13243</td>
                                        <td>Ruth Oribello</td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>7:30 AM</p>
                                            <p>21 April, 2024</p>
                                        </td>
                                        <td><select name="" id="">
                                                <option value="pending" selected>Pending</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="confirmed">Confirmed</option>

                                        </td>
                                        <td>
                                            <button>Save</button>
                                            <button>Edit</button>
                                        </td>
                                        <td><img src="../assets/icons/printer.svg" alt=""><img
                                                src="../assets/icons/eye.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#13243</td>
                                        <td>Ruth Oribello</td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>7:30 AM</p>
                                            <p>21 April, 2024</p>
                                        </td>
                                        <td><select name="" id="">
                                                <option value="pending" selected>Pending</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="confirmed">Confirmed</option>

                                        </td>
                                        <td>
                                            <button>Save</button>
                                            <button>Edit</button>
                                        </td>
                                        <td><img src="../assets/icons/printer.svg" alt=""><img
                                                src="../assets/icons/eye.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#13243</td>
                                        <td>Ruth Oribello</td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>7:30 AM</p>
                                            <p>21 April, 2024</p>
                                        </td>
                                        <td><select name="" id="">
                                                <option value="pending" selected>Pending</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="confirmed">Confirmed</option>

                                        </td>
                                        <td>
                                            <button>Save</button>
                                            <button>Edit</button>
                                        </td>
                                        <td><img src="../assets/icons/printer.svg" alt=""><img
                                                src="../assets/icons/eye.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#13243</td>
                                        <td>Ruth Oribello</td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>7:30 AM</p>
                                            <p>21 April, 2024</p>
                                        </td>
                                        <td><select name="" id="">
                                                <option value="pending" selected>Pending</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="confirmed">Confirmed</option>

                                        </td>
                                        <td>
                                            <button>Save</button>
                                            <button>Edit</button>
                                        </td>
                                        <td><img src="../assets/icons/printer.svg" alt=""><img
                                                src="../assets/icons/eye.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#13243</td>
                                        <td>Ruth Oribello</td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>7:30 AM</p>
                                            <p>21 April, 2024</p>
                                        </td>
                                        <td><select name="" id="">
                                                <option value="pending" selected>Pending</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="confirmed">Confirmed</option>
                                        </td>
                                        <td>
                                            <button>Save</button>
                                            <button>Edit</button>
                                        </td>
                                        <td><img src="../assets/icons/printer.svg" alt=""><img
                                                src="../assets/icons/eye.svg" alt=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination" class="m-orders flex row">
                            <button>1</button>
                            <button>2</button>
                            <button>3</button>
                            <img id="chevron-bttn-m" style="cursor:pointer;" src="../assets/icons/chevrons-right.svg" alt="">
                        </div>
                        <p>Delivered Orders </p>
                        <div class="top flex">

                            <div class="filter-cont flex">
                                <select name="filter" id="filter">
                                    <option value="">Completed</option>
                                    <option value="">Confirmed</option>
                                    <option value="">Cancelled</option>
                                </select>
                                <select name="filter" id="filter">
                                    <option value="">Previous Orders</option>
                                    <option value="">A-Z</option>
                                    <option value="">Z-A</option>
                                </select>
                                <select name="filter" id="filter">
                                    <option value="">All</option>
                                    <option value="">Apparel</option>
                                    <option value="">Collectibles</option>
                                    <option value="">Stationery</option>
                                </select>
                                <button class="apply-fil">Apply</button>
                                <button class="clear-fil">Clear</button>
                            </div>
                        </div>
                        <div class="down">

                            <table border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th>ORDER ID</th>
                                        <th>IMAGE</th>
                                        <th>PRODUCT NAME</th>
                                        <th>CATEGORY</th>
                                        <th>QTY</th>
                                        <th>PAYMENT</th>
                                        <th>PAYMENT METHOD</th>
                                        <th>ORDER STATUS</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#13243</td>
                                        <td><img src="../assets/img/merch/1.jpg" alt=""></td>
                                        <td>Spirited Away Kaonashi (No face) figurine</td>
                                        <td>
                                            <p>Collectibles</p>
                                        </td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Unionbank</p>
                                            <p>Paid</p>
                                        </td>
                                        <td class="completed">
                                            <p>Completed</p>
                                        </td>
                                        <td><img src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#17643</td>
                                        <td><img src="../assets/img/merch/0.jpg" alt=""></td>
                                        <td>My Neighbor Totoro Figurine</td>
                                        <td>
                                            <p>Collectibles</p>
                                        </td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Gcash</p>
                                            <p>Paid</p>
                                        </td>
                                        <td class="completed">
                                            <p>Completed</p>
                                        </td>
                                        <td><img src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#13988</td>
                                        <td><img src="../assets/img/merch/12.jpg" alt=""></td>
                                        <td>The Princess Mononoke Figurine</td>
                                        <td>
                                            <p>Collectibles</p>
                                        </td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>COD</p>
                                            <p>Paid</p>
                                        </td>
                                        <td class="completed">
                                            <p>Completed</p>
                                        </td>
                                        <td><img src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#23243</td>
                                        <td><img src="../assets/img/merch/1.jpg" alt=""></td>
                                        <td>Spirited Away Kaonashi (No face) figurine</td>
                                        <td>
                                            <p>Collectibles</p>
                                        </td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>COD</p>
                                            <p>Unpaid</p>
                                        </td>
                                        <td class="cancelled">
                                            <p>Cancelled</p>
                                        </td>
                                        <td><img src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#23243</td>
                                        <td><img src="../assets/img/merch/0.jpg" alt=""></td>
                                        <td>My Neighbor Totoro Figurine</td>
                                        <td>
                                            <p>Collectibles</p>
                                        </td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Gcash</p>
                                            <p>Paid</p>
                                        </td>
                                        <td class="confirmed">
                                            <p>Confirmed</p>
                                        </td>
                                        <td><img src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>#23293</td>
                                        <td><img src="../assets/img/merch/12.jpg" alt=""></td>
                                        <td>The Princess Mononoke Figurine</td>
                                        <td>
                                            <p>Collectibles</p>
                                        </td>
                                        <td>1</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>COD</p>
                                            <p>Unpaid</p>
                                        </td>
                                        <td class="confirmed">
                                            <p>Confirmed</p>
                                        </td>
                                        <td><img src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                </tbody>
                            </table>
                          
                        </div>
                    </div>
                    <div id="pagination" class="d-orders flex row">
                            <button>1</button>
                            <button>2</button>
                            <button>3</button>
                            <img id="chevron-bttn-d" style="cursor:pointer;" src="../assets/icons/chevrons-right.svg" alt="">
                        </div>
                </section>

                <section id="cont-shop" class="shop content-item ">
                    <h1>Shop</h1>
                    <div class="product-list flex col">
                        <button id="add-new-prod" class="flex row" style="align-items: center;">Add New Product <img
                                src="../assets/icons/circle-plus.svg" alt=""></button>
                        <p class="func">Product Management</p>
                        <div class="top flex row">

                            <div>
                                <input type="text" name="search" id="search" placeholder="Search products">
                                <img src="../assets/icons/search.svg" alt="">
                            </div>
                            <div class="filter-cont flex">

                                <select name="filter" id="filter">
                                    <option value="">All</option>
                                    <option value="">Draft</option>
                                    <option value="">Trash</option>
                                </select>
                                <select name="filter" id="filter">
                                    <option value="">In Stock</option>
                                    <option value="">Low Inventory</option>
                                    <option value="">Out of Stock</option>
                                    <option value="">Temporarily Unavailable</option>
                                    <option value="">On Demand</option>
                                </select>
                                <select name="filter" id="filter">
                                    <option value="">Most Sold</option>
                                    <option value="">A-Z</option>
                                    <option value="">Z-A</option>
                                    <option value="">Least Sold</option>
                                </select>
                                <select name="filter" id="filter">
                                    <option value="">Product Category</option>
                                    <option value="">All</option>
                                    <option value="">Apparel</option>
                                    <option value="">Collectibles</option>
                                    <option value="">Stationery</option>
                                </select>
                                <button class="apply-fil">Apply</button>
                                <button class="clear-fil">Clear</button>
                            </div>
                        </div>
                        <p class="v-prod">View Products: <span class="v-prod-num">6/6</span> </p>

                        <div class="down">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Stocks</th>
                                        <th>Sold</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="../assets/img/merch/1.jpg" alt=""></td>
                                        <td>Spirited Away Kaonashi (No face) figurine</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Available</p>
                                        </td>
                                        <td>400</td>
                                        <td>10</td>
                                        <td><img id="edit" src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="../assets/img/merch/0.jpg" alt=""></td>
                                        <td>My Neighbor Totoro Figurine</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Available </p>
                                        </td>
                                        <td>322</td>
                                        <td>10</td>
                                        <td><img id="edit" src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="../assets/img/merch/12.jpg" alt=""></td>
                                        <td>The Princess Mononoke Figurine</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Available</p>
                                        </td>
                                        <td>234</td>
                                        <td>10</td>
                                        <td><img id="edit" src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="../assets/img/merch/1.jpg" alt=""></td>
                                        <td>Spirited Away Kaonashi (No face) figurine</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Available </p>
                                        </td>
                                        <td>400</td>
                                        <td>10</td>
                                        <td><img id="edit" src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="../assets/img/merch/0.jpg" alt=""></td>
                                        <td>My Neighbor Totoro Figurine</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Available </p>
                                        </td>
                                        <td>322</td>
                                        <td>10</td>
                                        <td><img id="edit" src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><img src="../assets/img/merch/12.jpg" alt=""></td>
                                        <td>The Princess Mononoke Figurine</td>
                                        <td>&#8369;700.00</td>
                                        <td>
                                            <p>Available </p>
                                        </td>
                                        <td>234</td>
                                        <td>10</td>
                                        <td><img id="edit" src="../assets/icons/file-pen-line.svg" alt=""><img
                                                src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination" class="page-shop flex row">
                            <button>1</button>
                            <button>2</button>
                            <button>3</button>
                            <img id="chevron-bttn-s" style="cursor:pointer;" src="../assets/icons/chevrons-right.svg" alt="">
                        </div>
                    </div>
                </section>


                <section id="cont-prod-g" class="prod-g content-item flex col ">
                    <h1>Product Grid</h1>
                    <div class="prod-g-fil flex row">
                        <p>View products: <span id="p-g-v-prod"></span></p>
                        <div class="p-g-select">
                            <select name="category" id="category">
                                <option value="">Product Category</option>
                                <option value="">All</option>
                                <option value="">Apparel</option>
                                <option value="">Collectibles</option>
                                <option value="">Stationery</option>
                            </select>
                            <select name="sorting" id="sorting">
                                <option value="">Default Sorting</option>
                                <option value="">Price (Low to High)</option>
                                <option value="">Price (High to Low)</option>
                                <option value="">Popularity</option>
                                <option value="">New Arrivals</option>
                                <option value="">Average Rating</option>
                            </select>
                        </div>
                    </div>
                    <div class="p-g-g-container">
                        <div class="card flex col">
                            <img src="../assets/img/merch/0.jpg" alt="">
                            <p id="prod-name">My Neighbor Totoro Figurine</p>
                            <p>Available: <span id="stocks"></span></p>
                            <p>Already sold: <span id="sold"></span></p>
                            <p>Regular price: <span id="r-price"></span></p>
                            <p>Sale price: <span id="s-price"></span></p>
                            <div class="c-bttn flex row">
                                <button id="edit">Edit</button>
                                <button id="p-g-del">Delete</button>
                            </div>
                        </div>
                        <div class="card flex col">
                            <img src="../assets/img/merch/1.jpg" alt="">
                            <p id="prod-name">Spirited Away Kaonashi (No face) figurine</p>
                            <p>Available: <span id="stocks"></span></p>
                            <p>Already sold: <span id="sold"></span></p>
                            <p>Regular price: <span id="r-price"></span></p>
                            <p>Sale price: <span id="s-price"></span></p>
                            <div class="c-bttn flex row">
                                <button id="edit">Edit</button>
                                <button id="p-g-del">Delete</button>
                            </div>
                        </div>
                        <div class="card flex col">
                            <img src="../assets/img/merch/2.jpg" alt="">
                            <p id="prod-name">The Boy And The Heron Warawara figurine</p>
                            <p>Available: <span id="stocks"></span></p>
                            <p>Already sold: <span id="sold"></span></p>
                            <p>Regular price: <span id="r-price"></span></p>
                            <p>Sale price: <span id="s-price"></span></p>
                            <div class="c-bttn flex row">
                                <button id="edit">Edit</button>
                                <button id="p-g-del">Delete</button>
                            </div>
                        </div>
                        <div class="card flex col">
                            <img src="../assets/img/merch/3.jpg" alt="">
                            <p id="prod-name">My Neighbor Totoro Figurine</p>
                            <p>Available: <span id="stocks"></span></p>
                            <p>Already sold: <span id="sold"></span></p>
                            <p>Regular price: <span id="r-price"></span></p>
                            <p>Sale price: <span id="s-price"></span></p>
                            <div class="c-bttn flex row">
                                <button id="edit">Edit</button>
                                <button id="p-g-del">Delete</button>
                            </div>
                        </div>
                        <div class="card flex col">
                            <img src="../assets/img/merch/4.jpg" alt="">
                            <p id="prod-name">My Neighbor Totoro Figurine</p>
                            <p>Available: <span id="stocks"></span></p>
                            <p>Already sold: <span id="sold"></span></p>
                            <p>Regular price: <span id="r-price"></span></p>
                            <p>Sale price: <span id="s-price"></span></p>
                            <div class="c-bttn flex row">
                                <button id="edit">Edit</button>
                                <button id="p-g-del">Delete</button>
                            </div>
                        </div>
                        <div class="card flex col">
                            <img src="../assets/img/merch/5.jpg" alt="">
                            <p id="prod-name">My Neighbor Totoro Figurine</p>
                            <p>Available: <span id="stocks"></span></p>
                            <p>Already sold: <span id="sold"></span></p>
                            <p>Regular price: <span id="r-price"></span></p>
                            <p>Sale price: <span id="s-price"></span></p>
                            <div class="c-bttn flex row">
                                <button id="edit">Edit</button>
                                <button id="p-g-del">Delete</button>
                            </div>
                        </div>
                        <div class="card flex col">
                            <img src="../assets/img/merch/2.jpg" alt="">
                            <p id="prod-name">The Boy And The Heron Warawara figurine</p>
                            <p>Available: <span id="stocks"></span></p>
                            <p>Already sold: <span id="sold"></span></p>
                            <p>Regular price: <span id="r-price"></span></p>
                            <p>Sale price: <span id="s-price"></span></p>
                            <div class="c-bttn flex row">
                                <button id="edit">Edit</button>
                                <button id="p-g-del">Delete</button>
                            </div>
                        </div>
                        <div class="card flex col">
                            <img src="../assets/img/merch/3.jpg" alt="">
                            <p id="prod-name">My Neighbor Totoro Figurine</p>
                            <p>Available: <span id="stocks"></span></p>
                            <p>Already sold: <span id="sold"></span></p>
                            <p>Regular price: <span id="r-price"></span></p>
                            <p>Sale price: <span id="s-price"></span></p>
                            <div class="c-bttn flex row">
                                <button id="edit">Edit</button>
                                <button id="p-g-del">Delete</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section id="cont-prod-e" class="prod-e content-item ">
                    <h1>Product Editor</h1>

                    <form class="flex row" action="admin.php" method="post" enctype="multipart/form-data">
                        <div class="add-img-wrapper flex col">
                            <div class="flex col">
                                <p>Product Image</p>
                                <label for="product_image" class="flex col">
                                    <img src="../assets/icons/icons8-image-48.png" alt="">
                                    <p>Browse Image</p>
                                </label>
                                <input type="file" id="product_image" name="product_image" multiple>
                            </div>
                            <div class="flex col">
                                <label for="product_image" class="flex col">
                                    <img src="../assets/icons/icons8-image-48.png" alt="">
                                    <p>Browse Image</p>
                                </label>
                                <input type="file" id="product_image" name="product_image" multiple>
                            </div>

                        </div>

                        <div class="r-layout ">
                            <div id="p-e-row">
                                <div>
                                    <label for="product_name">Product name</label>
                                    <input type="text" name="product_name" id="product_name">
                                </div>
                                <div>
                                    <label for="category">Product Category</label>
                                    <select name="category" id="category">
                                        <?php 
                                             $conn = mysqli_connect("localhost", "root", "", "studio_ghibli");
            
                                             if (!$conn) {
                                                         die("Connection failed: " . mysqli_connect_error());
                                                         }
                                                     
                                      $sql = "SELECT category FROM product_category";
                                      $result = mysqli_query($conn, $sql);

                                         if (mysqli_num_rows($result) > 0) { 
                                          while ($row = mysqli_fetch_assoc($result)) {
                                                 $prod_category = $row['category'];
                                             echo "<option value='$prod_category'>$prod_category</option>";
                                                         }
                                          } else {
                                          echo "No films found";
                                          }
                 
                                          mysqli_close($conn);

                                        ?>
                                    </select>
                                </div>

                            </div>
                            <div id="p-e-row">
                                <div>
                                    <label for="s-price">Product Price</label>
                                    <input type="number" name="r_price" id="r_price">
                                </div>
                                <div>
                                    <label for="s-price">Sale Price</label>
                                    <input type="number" name="s_price" id="s_price">
                                </div>
                            </div>
                            <div id="p-e-row">
                                <div>
                                    <label for="sched">Schedule</label>
                                    <input type="datetime-local" name="dt" id="dt" value="2024-04-25T19:30">
                                </div>
                                <div>
                                    <label for="filter">Stock Status</label>
                                    <select name="filter" id="filter">
                                        <option value="">In Stock</option>
                                        <option value="">Low Inventory</option>
                                        <option value="">Out of Stock</option>
                                        <option value="">Temporarily Unavailable</option>
                                        <option value="">On Demand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="payment-m flex col">

                                <p for="payment">Payment Method
                                </p>
                                <div id="p-e-row">
                                    <div id="p-e-row">
                                        <input type="checkbox" name="cod" id="cod">
                                        <label for="cod" class="flex row"> COD
                                        </label>

                                    </div>
                                    <div id="p-e-row">
                                        <input type="checkbox" name="gcash" id="gcash">
                                        <label for="gcash"> Gcash
                                        </label>
                                    </div>
                                    <div id="p-e-row">
                                        <input type="checkbox" name="unionbank" id="unionbank">
                                        <label for="unionbank"> Unionbank
                                        </label>
                                    </div>
                                    <div id="p-e-row">
                                        <input type="checkbox" name="paymaya" id="paymaya">
                                        <label for="paymaya">PayMaya
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div id="p-e-row">
                                <div>
                                    <label for="quantity">Quantity in Stock</label>
                                    <input type="number" name="quantity" id="quantity">
                                </div>
                                <div>
                                    <label for="filter">Unit</label>
                                    <select name="filter" id="filter">
                                        <option value="">Pieces</option>
                                        <option value="">Boxes</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" cols="100" rows="10"></textarea>
                            </div>
                            <div id="p-e-row" class="bttns">
                                <button id="save">Save to Drafts</button>
                                <button id="publish">Publish Product</button>
                            </div>
                        </div>

                    </form>
                </section>
                <section id="cont-gallery" class="gallery content-item">
                    <h1>Gallery</h1>
                    <button id="add-new-film-img" class="flex row" style="align-items: center;">Add New Film Image <img
                                src="../assets/icons/circle-plus.svg" alt=""></button>
                    <p class="big">Gallery Management</p>
                    <div class="g top flex row">
                        <div>
                            <input type="text" name="search" id="search" placeholder="Search image">
                            <img src="../assets/icons/search.svg" alt="">
                        </div>

                        <div class="filter-cont flex">
                            <select name="filter" id="filter">
                                <option value="">All</option>
                                <option value="">Draft</option>
                                <option value="">Trash</option>
                            </select>
                            <select name="filter" id="filter">
                                <?php
                    $conn = mysqli_connect("localhost", "root", "", "studio_ghibli");
            
                            if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                        }
                                    

                                        $sql = "SELECT title FROM films";
                                        $result = mysqli_query($conn, $sql);
                                        
                                        echo "<option disabled selected>Studio Ghibli Works</option>";
                                        if (mysqli_num_rows($result) > 0) { 
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $film_name = $row['title'];
                                            echo "<option value='$film_name'>$film_name</option>";
                                        }
                                        } else {
                                        echo "No films found";
                                        }

                                        mysqli_close($conn);
                                 ?>
                            </select>
                            <select name="filter" id="filter">
                                <option value="">Recently Added</option>
                                <option value="">A-Z</option>
                                <option value="">Z-A</option>
                            </select>

                            <button class="apply-fil">Apply</button>
                            <button class="clear-fil">Clear</button>
                        </div>
                    </div>
                    <div class="down">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Image Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="../assets/img/arrietty/karigurashi005.jpg" alt=""></td>
                                    <td>Arrietty</td>
                                    <td><img src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="../assets/img/aya_the_witch/aya003.jpg" alt=""></td>
                                    <td>Aya the Witch</td>
                                    <td><img src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="../assets/img/castle_in_the_sky/laputa004.jpg" alt=""></td>
                                    <td>Castle in the Sky</td>
                                    <td><img src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="../assets/img/cats_return/baron003.jpg" alt=""></td>
                                    <td>Cats Return</td>
                                    <td><img src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="../assets/img/from_poppy_hill/kokurikozaka010.jpg" alt=""></td>
                                    <td>From Poopy Hill</td>
                                    <td><img src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><img src="../assets/img/how_do_you_live/kimitachi009.jpg" alt=""></td>
                                    <td>How Do You Live</td>
                                    <td><img src="../assets/icons/ellipsis-vertical.svg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="pagination" class="page-gallery flex row">
                            <button>1</button>
                            <button>2</button>
                            <button>3</button>
                            <img id="chevron-bttn-g" style="cursor:pointer;" src="../assets/icons/chevrons-right.svg" alt="">
                        </div>
                    </div>
                </section>
                <section id="cont-account" class="account content-item flex col">
                    <h1>Account</h1>
                    <section class="acc-i flex row">
                        <div class="left-i flex col">
                            <div class="profile flex col">
                                <p>Admin</p>
                                <img src="../assets/img/download (2).jpg" alt="">
                                <p id="admin-name">Marc Sandro</p>

                                <button id="pfp-edit">
                                    Change picture
                                </button>
                                <button id="log-out">Log Out</button>
                            </div>
                            <div class="short-i flex col">
                                <div><img src="../assets/icons/mail.svg" alt="">
                                    <p>marcsandro@gmail.com</p>
                                </div>
                                <div><img src="../assets/icons/map-pin.svg" alt="">
                                    <p>Baliwasan, Zamboanga City</p>
                                </div>
                                <div><img src="../assets/icons/smartphone.svg" alt="">
                                    <p>+63923749924</p>
                                </div>
                                <div><img src="../assets/icons/file-down.svg" alt=""><a href="">Profile Information
                                        File</a> </div>
                            </div>
                        </div>
                        <div class="right-i flex col">
                            <h2>My Profile Details</h2>
                            <div class="details-wrapper flex row">
                                <div class="l details flex col">
                                    <form action="admin.php" method="post">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" id="fname" value="Marc">

                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" id="lname" value="Sandro">

                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" value="marcsandro@gmail.com">

                                        <label for="tel">Phone Number</label>
                                        <input type="tel" name="tel" id="tel" value="+63923749924">

                                        <label for="pass">Password</label>
                                        <div class="p-container flex row">
                                            <input type="password" name="pass" id="pass" value="password">
                                            <img src="../assets/icons/eye.svg" alt="">
                                        </div>
                                        <a href="">Change password</a>
                                        <button id="u-info">Update Information</button>
                                    </form>
                                </div>
                                <div class="r details flex col">
                                    <form action="admin.php" method="post">
                                        <label for="country">Country</label>
                                        <select name="country" id="country">
                                            <option value="phil" selected>Philippines</option>
                                        </select>
                                        <label for="city">City</label>
                                        <select name="city" id="city">
                                            <option value="zamboanga" selected>Zamboanga City</option>
                                        </select>
                                        <label for="city">Zip Code</label>
                                        <input type="number" name="zipcode" id="zipcode" value="7000">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address"
                                            value="Baliwasan, Zamboanga City">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </section>
                </section>

            </section>
        </div>

    </main>

    <script src="../scripts/admin.js">
    </script>

</body>

</html>