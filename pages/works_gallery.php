<?php
    include('header.html');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav-footer.css">
    <link rel="stylesheet" href="../css/works_gallery.css">
    <link rel="icon" sizes="32x32" href="../assets/icons/logo.svg" type="image/x-icon">
    <title>Studio Ghibli | Works and Gallery</title>
</head>

<body>

    <section class="works flex col">
        <p>Studio Ghibli Works</p>
        <div class="works-list-container">
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/arrietty-poster.jpg" alt="">
                <p class="film-title">Arrietty</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/aya1.jpg" alt="">
                <p class="film-title">Earwig and the Witch</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/castle.jpg" alt="">
                <p class="film-title">Castle in the Sky</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/cat.jpg" alt="">
                <p class="film-title">The Cat Returns</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/howls-poster.jpg" alt="">
                <p class="film-title">Howl's Moving Castle</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/kiki.jpg" alt="">
                <p class="film-title">Kiki's Delivery Service </p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/marnie.jpg" alt="">
                <p class="film-title">When Marnie Was There</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/mononoke.jpg" alt="">
                <p class="film-title">Princess Mononoke</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/nausicaa.jpg" alt="">
                <p class="film-title">Nausicaä of the Valley of the Wind</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/ocean-waves-poster.jpg" alt="">
                <p class="film-title">Ocean Waves</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/only-yesterday.jpg" alt="">
                <p class="film-title">Only Yesterday</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/pompoko.jpg" alt="">
                <p class="film-title">Pom Poko</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/ponyo-poster.jpg" alt="">
                <p class="film-title">Ponyo</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/poppy-hill-poster.jpg" alt="">
                <p class="film-title">From Up on Poppy Hill</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/porco.jpg" alt="">
                <p class="film-title">Porco Rosso</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/princess-kaguya.jpg" alt="">
                <p class="film-title">The Tale of the Princess Kaguya</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/red-turtle.jpg" alt="">
                <p class="film-title">The Red Turtle</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/spirited-away-poster.jpg" alt="">
                <p class="film-title">Spirited Away</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/tales.jpg" alt="">
                <p class="film-title">Tales from Earthsea</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/tbath.jpg" alt="">
                <p class="film-title">The Boy and the Heron </p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/totoro.jpg" alt="">
                <p class="film-title">My Neighbor Totoro</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/whisper.jpg" alt="">
                <p class="film-title">Whisper of the Heart</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/wind-rises-poster.jpg" alt="">
                <p class="film-title">The Wind Rises</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/Official_poster/yamadas.jpg" alt="">
                <p class="film-title">My Neighbors the Yamadas</p>
            </div>
            <div class="film flex col">
                <img class="film-poster" src="../assets/img/grave_of_the_firelies/grave-of-the-fireflies-poster.jpg"
                    alt="">
                <p class="film-title">Grave of the Fireflies</p>
            </div>
        </div>
        <button id="g-show-more-bttn" class="flex row">
            Show more
            <img src="../assets/icons/chevron-down.svg" alt="">
        </button>
        <button id="g-show-less-bttn" class="flex row">
            Show less
        </button>

    </section>


    <section class="search-filter flex ">
        <div class="search_container flex ">
            <input type="text" name="search" id="search" placeholder="Search">
            <img id="search-icon" src="../assets/icons/search.svg" alt="">
        </div>
        <select>
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

    </section>

    <div class="g-cont-wrapper">
        <div class="gallery-container">
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/arrietty/karigurashi003.jpg" alt="">
                <div class="ImgHovered flex col">
                    <p class="image-name">Arrietty</p>
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
                <img id="ghibli-img" src="../assets/img/from_poppy_hill/kokurikozaka002.jpg" alt="">
                <div class="ImgHovered flex col">
                    <p class="image-name">From Poppy Hill</p>
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/howls_moving_castle/howl003.jpg" alt="">
                <div class="ImgHovered flex col">
                    <p class="image-name">Howl's Moving Castle</p>
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/kikis_delivery/majo004.jpg" alt="">
                <div class="ImgHovered flex col">
                    <p class="image-name">Kiki's Delivery Service</p>
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/spirited_away/chihiro002.jpg" alt="">
                <div class="ImgHovered flex col">
                    <p class="image-name">Spirited Away</p>
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/wind_rises/kazetachinu003.jpg" alt="">
                <div class="ImgHovered flex col">
                    <p class="image-name">The Wind Rises</p>
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/how_do_you_live/kimitachi003.jpg" alt="">
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/how_do_you_live/kimitachi004.jpg" alt="">
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/spirited_away/chihiro005.jpg" alt="">
                <div class="ImgHovered flex col">
                    <p class="image-name">Spirited Away</p>
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/wind_rises/kazetachinu002.jpg" alt="">
                <div class="ImgHovered flex col">
                    <p class="image-name">The Wind Rises</p>
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
            <div class="img-container flex">
                <img id="ghibli-img" src="../assets/img/i_can_hear_the_sea/umi001.jpg" alt="">
                <div class="ImgHovered flex col ">
                    <p class="image-name">Ocean Waves</p>
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
                        <img id="view-close" src="../assets/icons/x.svg" alt="">
                    </div>

                </div>
                <img class="movieImage" src="" alt="">
            </div>
        </div>                                

    </div>
  
    

    <div class="pagination flex row">
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
    </div>


    <script src="../scripts/movie_script.js"></script>                                    
    <script type="text/javascript" src="../scripts/works_gallery.js"></script>
</body>

</html>

<?php
include("footer.html");
?>