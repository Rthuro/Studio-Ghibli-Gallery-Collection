
 /* Buttons Navigate to next page */

 const gallery_bttn = document.getElementById("gallery-bttn");
 const shop_bttn = document.getElementById("shop-bttn");

 gallery_bttn.addEventListener('click', () => {
   window.location.href = "../pages/works_gallery.html";
 });

shop_bttn.addEventListener('click', () => {
   window.location.href = "../pages/shop.html";
 });

 const showMoreBttn = document.getElementById('g-show-more-bttn');
 const showLessBttn = document.getElementById('g-show-less-bttn');
 const worksContainer = document.querySelector('.works-list-container');

 showMoreBttn.addEventListener('click', () => {

   worksContainer.classList.toggle('showmore');
   showLessBttn.classList.toggle('showmore');
   showMoreBttn.classList.toggle('showmore');

 });


  showLessBttn.addEventListener('click', () => {
    worksContainer.classList.remove('showmore');  
    showLessBttn.classList.remove('showmore');
    showMoreBttn.classList.remove('showmore');

    showMoreBttn.classList.toggle('showless');

    });
 




const ImgHoverContainer = document.querySelectorAll('.img-container');

ImgHoverContainer.forEach(container => {
    container.addEventListener('click', () => { 
      const ImgHovered = container.querySelector('.ImgHovered');
      ImgHovered.classList.toggle('active');
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


 