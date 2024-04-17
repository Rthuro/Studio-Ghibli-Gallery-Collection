<?php
    include('header.html');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Ghibli Collection | Borrower Arrietty</title>
    <link rel="icon" sizes="32x32" href="assets/icons/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/nav-footer.css">
    <link rel="stylesheet" href="../css/movie_gallery.css">
</head>
<body>
 

    <header class="flex row">
        <img src="../assets/img/Official_poster/arriety.jpg" alt="" class="poster">
        <section class="work-abt flex col">
            <p class="movie-title">Arriety<span class="light">(2010)</span></p>
            <p class="movie-plot">Arrietty, a tiny teenager, lives with her parents in the recesses of a suburban home, unbeknown to the homeowner and housekeeper. Like others of her kind, Arrietty remains hidden from her human hosts, but occasionally ventures forth from beneath the floorboards to borrow sugar cubes and other supplies. A secret friendship forms when 12-year-old Shawn meets Arrietty, but their relationship could spell danger for Arrietty's family.</p>
        </section>
    </header>
     <p class="text">Gallery Collection:</p>
    <div class="gallery-container">
        <div class="img-container flex">
            <img id="ghibli-img" src="../assets/img/arrietty/karigurashi003.jpg" alt="">
            <div class="ImgHovered flex col">
                <p class="image-name">Borrower Arrietty</p>
                <div class="bttns flex row">
                    <button id="view-bttn" class="view-bttn">
                        View
                    </button>
                    <button id="download-bttn" class="download-bttn">
                        Download
                    </button>
                </div>
            </div>
        </div>

        <div class="img-container flex">
            <img id="ghibli-img" src="../assets/img/how_do_you_live/kimitachi005.jpg" alt="">
            <div class="ImgHovered flex col">
                <p class="image-name">The Boy and the Heron</p>
                <div class="bttns flex row">
                    <button class="view-bttn">
                        View
                    </button>
                    <button id="download-bttn" class="download-bttn">
                        Download
                    </button>
                </div>
            </div>
        </div>

        <div class="view-container flex col">
            <div class="nav">
                <div class="left"></div>
                <p class="set-title"></p>
                <div class="right flex row">
                    <img id="view-download" src="../assets/icons/download.svg" alt="">
                <img  id="view-close" src="../assets/icons/x.svg" alt="">
                </div>
                
            </div>
            <img class="movieImage" src="" alt="">         
        </div>
    </div>

    <footer class="flex col">
        <div class="first-col flex row">
            <div class="links flex col">
                <p>Help</p>
                <ul>
                    <li><a href="">Customer service</a></li>
                    <li><a href="">Track my order</a></li>
                </ul>
            </div>
            <div class="links flex col">
                <p>Resources</p>
                <ul>
                    <li><a href="">Photo Credits</a> </li>
                </ul>
            </div>
            <div class="links flex col">
                <p>Our Networks</p>
                <ul>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                </ul>
            </div>
        </div>
        <img src="../assets/icons/logo2.svg" alt="">
    </footer>

    <script src="../scripts/login.js"></script>
    <script src="../scripts/movie_script.js"></script>
</body>
</html>

<?php
include("footer.html");
?>