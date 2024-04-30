
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
    let posterImage = container.querySelector(' .film-poster').src; 

    localStorage.setItem("filmPosterImg", posterImage);
      localStorage.setItem("movietitle", title);

      window.location.href = "works_site.html";

}); 
});

