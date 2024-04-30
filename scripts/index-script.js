


 /* Buttons Navigate to next page */
 const banner_bttn = document.getElementById("banner-bttn");
 const browse_bttn = document.getElementById("browse-gallery");
 const shop_bttn = document.getElementById("shop-bttn");

 banner_bttn.addEventListener('click', () => {
  window.location.href = "shop.php";
});
 browse_bttn.addEventListener('click', () => {
   window.location.href = "works_gallery.php";
 });

shop_bttn.addEventListener('click', () => {
   window.location.href = "shop.php";
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

    const worksListContainer = document.querySelectorAll('.works .works-list-container .film');
   

worksListContainer.forEach(container => {
  container.addEventListener( 'click', () =>{
    let title = container.querySelector('.film-title').textContent;
    
      localStorage.setItem("movietitle", title);
      window.location.href = "works_site.php";

}); 
});
 







 