
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
    <title>Studio Ghibli</title>
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
               <p class="film-title">Kiki's Delivery Service	</p>
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
               <p class="film-title">The Boy and the Heron	</p>
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
               <img class="film-poster" src="../assets/img/grave_of_the_firelies/grave-of-the-fireflies-poster.jpg" alt="">
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

   <section class="search-filter flex row">
    <div class="search_container flex ">
         <input type="text" name="search" id="search" placeholder="Search">
    <img id="search-icon" src="../assets/icons/search.svg" alt="">
    </div>
    <div id="ghib-filter" class="filter flex row"> 
            <a id="ghibli-fil">Ghibli Works</a>
            <img src="../assets/icons/chevron-down.svg" alt="">
            <ul id="drop-down" class="drop-down flex col">
                <a href="">Borrower Arrietty</a>
                <a href="">From Poppy Hill</a>
                <a href="">Howl's Moving Castle</a>
                <a href="">Kiki's Delivery Service</a>
                <a href="">Spirited Away</a>
                <a href="">The Wind Rises</a>
                <a href="">The Boy and the Heron</a>
                <a href="">Earwig and the Witch</a>
                <a href="">Castle in the Sky</a>
                <a href="">The Cat Returns</a>
                <a href="">When Marnie Was There</a>
                <a href="">Princess Mononoke</a>
                <a href="">Nausicaä of the Valley of the Wind</a>
                <a href="">Only Yesterday</a>
                <a href="">Pom Poko</a>
                <a href="">Ponyo</a>
                <a href="">Porco Rosso</a>
                <a href="">The Tale of the Princess Kaguya</a>
                <a href="">Tales from Earthsea</a>
                <a href="">The Red Turtle</a>
                <a href="">Whisper of the Heart</a>
                <a href="">My Neighbor Totoro</a>
                <a href="">My Neighbors the Yamadas</a>
                <a href="">Grave of the Fireflies</a>
            </ul>
        </div>
   </section>

   <section class="gallery-container">

   </section>

   <section class="pagination">
    
   </section>

  
    <script src="../scripts/works_gallery.js"></script>
    <script src="../scripts/login.js"></script>
</body>
</html>

<?php
include("footer.html");
?>