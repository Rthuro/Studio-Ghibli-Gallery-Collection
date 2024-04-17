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
        <section class="nav-container flex col">
            <div class="logo flex row">
                <img src="../assets/icons/logo.svg" alt="">
                <p>Studio Ghibli</p>
            </div>
            <section class="m-dashbooard flex col">

                <div id="n-dashboard" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/layout-dashboard.svg" alt="">
                        <p class="name">Dashboard</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">
                </div>

                <div id="n-customer" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/database.svg" alt="">
                        <p class="name">Customer</p>
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
                <div id="n-gallery" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/images (1).svg" alt="">
                        <p class="name">Gallery</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">

                </div>
            </section>
            <section class="dashboard flex col">
                <div id="n-settings" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/settings.svg" alt="">
                        <p class="name">Settings</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">
                </div>
                <div id="n-account" class="nav flex row">
                    <div class="n-i-name flex row">
                        <img src="../assets/icons/circle-user-round.svg" alt="">
                        <p class="name">Account</p>
                    </div>
                    <img src="../assets/icons/chevron-right-w.svg" alt="">

                </div>
            </section>
        </section>

        <section class="nav-content">
            <section id="dashboard" class="dashboard">
                <h1>Dashboard</h1>
            </section>
            <section id="customer" class="customer">
                <h1>Customer</h1>
            </section>
            <section id="shop" class="shop">
                <h1>Shop</h1>
                <div class="new-prod">
                    <p class="func">Add New Product</p>
                    <form class="flex col" action="product-data.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="product_image">Product Image:</label>
                            <input type="file" id="product_image" name="product_image">
                        </div>

                        <div>
                            <label for="product_name">Product name:</label>
                            <input type="text" name="product_name" id="product_name">
                        </div>
                        <div>
                            <label for="product_name">Product price:</label>
                            <input type="text" name="product_price" id="product_price">
                        </div>
                        <p>Product Category:</p>
                        <div>
                            <label for="apparel">Apparel</label>
                            <input type="checkbox" name="apparel" id="apparel">
                        </div>
                        <div>
                            <label for="collectibles">Collectibles</label>
                            <input type="checkbox" name="collectibles" id="collectibles">
                        </div>
                        <div>
                            <label for="stationery">Stationery</label>
                            <input type="checkbox" name="stationery" id="stationery">
                        </div>
                    </form>
                </div>
                <div class="bttns">
                    <button class="add" id="add">
                        Add product
                    </button>
                    <button class="cancel" id="cancel">
                        Cancel
                    </button>
                </div>
                <p class="func">Current Products</p>
            </section>
            
            <section id="gallery" class="gallery">
                <h1>Gallery</h1>
                <div class="new-film">
                    <p class="func">Add New Studio Ghibli Image</p>
                    <form class="flex col" action="add_films.php" method="post" enctype="multipart/form-data">
                    <div>
                            <label for="poster_image">Poster Image file:</label>
                            <input type="file" id="poster_image" name="poster_image" >
                        </div>
                        <div>
                            <label for="film_image">Image file:</label>
                            <input type="file" id="film_image" name="film_image[]" multiple>
                        </div>
                        <div>
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
                        <div class="plot">
                            <label for="plot">Plot:</label>
                            <textarea name="plot" id="plot" cols="50" rows="5"></textarea>
                        </div>
                        <div>
                            <label for="new_film">Add new ghibli film:</label>
                            <input type="text" name="new_film" id="new_film">
                        </div>


                    </form>
                </div>
                <div class="bttns">
                    <button class="add" id="add">
                        Add image
                    </button>
                    <button class="cancel" id="cancel">
                        Cancel
                    </button>
                </div>
            </section>

            <section id="settings" class="settings">
                <h1>Settings</h1>
            </section>
            <section id="account" class="account">
                <h1>Account</h1>
            </section>
        </section>
    </main>

    <script src="../scripts/admin.js"></script>

</body>

</html>