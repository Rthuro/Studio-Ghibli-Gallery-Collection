



const ImgHoverContainer = document.querySelectorAll('.img-container');

ImgHoverContainer.forEach(container => {
    container.addEventListener('click', () => { // Use click event listener
      const ImgHovered = container.querySelector('.ImgHovered'); // Select directly
      ImgHovered.classList.toggle('active');
      console.log("clicked");
    });
  });

/* TO download image from the landing page */
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

 