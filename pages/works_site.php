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
    <link rel="stylesheet" href="../css/works_gallery.css">
</head>
<body>
 
    <header class="flex ">
        <img id="poster" src="../assets/img/Official_poster/arriety.jpg" alt="" class="poster">
        <div class="work-abt flex col">
            <p  name="movie-title" id="movie-title" class="movie-title"><span class="light">(2010)</span></p>
            <p class="movie-plot">Arrietty, a tiny teenager, lives with her parents in the recesses of a suburban home, unbeknown to the homeowner and housekeeper. Like others of her kind, Arrietty remains hidden from her human hosts, but occasionally ventures forth from beneath the floorboards to borrow sugar cubes and other supplies. A secret friendship forms when 12-year-old Shawn meets Arrietty, but their relationship could spell danger for Arrietty's family.</p>
</div>

    </header>
     <p class="text">Gallery Collection:</p>

     <div class="g-cont-wrapper">
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

       <?php
       
            $folder = '../assets/img/arrietty/'; // Assuming this folder exists and has write permissions

           
            if (is_dir($folder)) {
                $images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    
                if ($images) { 
                    
                foreach ($images as $image) {
                    echo "<div class='img-container flex' >";
                    
                    echo "<img id='ghibli-img' src=\"$image\" alt=\"Image description\">"; // Add alt attribute
                    echo" <div class='ImgHovered flex col'>
                    <p class='image-name'>Borrower Arrietty</p>
                    <div class='bttns flex row'>
                        <button id='view-bttn' class='view-bttn'>
                            View
                        </button>
                        <button id='download-bttn' class='download-bttn'>
                            Download
                        </button>
                    </div>
                </div> ";
                    echo "</div>";
                }
              

                
                } else {
                echo 'No images found in the "arrietty" folder.';
                }
            } else {
                echo 'Error: Folder "arrietty" does not exist.';
            }
            
            ?> 

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
     </div>
   
    <script src="../scripts/movie_script.js"></script>
  

</body>
</html>

<?php
include("footer.html");
?>