


const ImgHoverContainer = document.querySelectorAll('.img-container');

ImgHoverContainer.forEach(container => {
    container.addEventListener('click', () => { 
      const ImgHovered = container.querySelector('.ImgHovered');
      ImgHovered.classList.toggle('active');
    });
  });



/* TO view image from the home page */
const viewBttn = document.querySelectorAll('.view-bttn');
const closeBttn = document.querySelector(' .view-container .close');
const view =  document.querySelector('.view-container');
const view_download = document.getElementById('view-download');
const view_close = document.getElementById('view-close');

viewBttn.forEach(button => {
  button.addEventListener('click', () => { 
    view.classList.add('active');

    const movieTitle = button.closest('.ImgHovered').querySelector(' .image-name').textContent;

    const closestImgContainer = button.closest('.img-container');
    const movieSrc = closestImgContainer.querySelector('img').src;

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


/* TO download image from the home page */
const downloadButtons = document.querySelectorAll('#download-bttn');

  downloadButtons.forEach(button => {
    button.addEventListener('click', () => {
      const closestImg = button.closest('.img-container').querySelector('img');
      const imageSrc = closestImg.src;
      const link = document.createElement('a');
      link.href = imageSrc;
      link.download = link.href.split('/').pop();  
      link.click();
    });
  });

