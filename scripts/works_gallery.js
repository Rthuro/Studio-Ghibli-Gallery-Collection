
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

const ghib_fil = document.getElementById('ghib-filter');
const ghib_fil_dropdown = document.getElementById('drop-down');


let isOpen = false; 

ghib_fil.addEventListener('click', () => {
  isOpen = !isOpen;
  ghib_fil_dropdown.classList.toggle('active');
});

