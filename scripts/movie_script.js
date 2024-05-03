

const ImgHoverContainer = document.querySelectorAll('.img-container');

ImgHoverContainer.forEach(container => {
    container.addEventListener('click', () => { 
      const ImgHovered = container.querySelector('.ImgHovered');
      ImgHovered.classList.toggle('active');
    });
  });



/* TO view image from the home page */
const click_img = document.querySelectorAll('.img-container');
const view =  document.querySelector('.view-container');
const view_download = document.getElementById('view-download');
const view_close = document.getElementById('view-close');

click_img.forEach(container => {
  container.addEventListener('click', () => { 
    view.classList.add('active');

    const movieTitle = container.querySelector('.image-name').textContent;

    const movieSrc = container.querySelector('img').src;

           const setTitle =  document.querySelector(' .view-container .set-title'); 
           const changeMovieSrc = document.querySelector(' .view-container .movieImage'); 

              setTitle.innerHTML = movieTitle;
              changeMovieSrc.src = movieSrc;
  });
});

view_download.addEventListener('click', () => {; 

  const movieImage = view_download.closest('.view-container').querySelector('.movieImage');
  const movieSrc = movieImage.src;
      
  const link = document.createElement('a');
  link.href = movieSrc;
  link.download = link.href.split('/').pop();  
  link.click();
});


view_close.addEventListener('click',() => {
  view.classList.remove('active');
});

  let storedTitle = localStorage.getItem("movietitle");
  let storedPosterImage = localStorage.getItem('filmPosterImg'); 

  const setTitle = document.getElementById('movie-title');

  document.getElementById('poster').src = storedPosterImage;

  setTitle.innerHTML = storedTitle;
