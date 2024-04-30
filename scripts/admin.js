
const click_avatar = document.getElementById('avatar');
const edit_bttn = document.querySelectorAll('#edit');
const navItems = document.querySelectorAll('.nav'); 
const contentItems = document.querySelectorAll('.right-wrapper .nav-content .content-item'); 
const addNewProd_bttn = document.getElementById('add-new-prod');
const addNewProd_modal = document.getElementById('addNewProd_modalContainer');
const addNewProd_closeBttn = document.getElementById('addNewProd_closeBttn');
const new_category = document.getElementById('add_category');
const addingNewCategory = document.getElementById('addingNewCategory');
const newProdModal_cancelBttn = document.getElementById('cancelNewProd');
const addNewFilmImg_modal = document.getElementById('addNewFilm_modalContainer');
const addNewFilmImg_bttn = document.getElementById('add-new-film-img');
const addNewFilm_closeBttn =document.getElementById('addNewFilm_closeBttn');
const addNewFilm_cancel = document.querySelector('#addNewFilm_modalContainer .bttns #cancel');




addNewProd_bttn.addEventListener('click', ()=>{
  addNewProd_modal.style.display = 'flex';
  addingNewCategory.style.display = 'none';
});
addNewProd_closeBttn.addEventListener('click',()=>{
  
  addNewProd_modal.style.display = 'none';
});
addNewProd_modal.addEventListener('click', (event) => {
      if(event.target === addNewProd_modal ){
        addNewProd_modal.style.display = 'none';
      }
});

new_category.addEventListener('click', (event) => {
  event.preventDefault();
  addingNewCategory.style.display = addingNewCategory.style.display === 'none'? 'flex' : 'none';
});

newProdModal_cancelBttn.addEventListener('click', (event)=> {
  event.preventDefault();
  addNewProd_modal.style.display = 'none';
});


addNewFilmImg_bttn.addEventListener('click', (event)=> {
  event.preventDefault();
  addNewFilmImg_modal.style.display = 'flex';
});
addNewFilm_closeBttn.addEventListener('click',()=>{
  addNewFilmImg_modal.style.display = 'none';
});
addNewFilmImg_modal.addEventListener('click', (event) => {
  if(event.target === addNewFilmImg_modal ){
    addNewFilmImg_modal.style.display = 'none';
  }
});
addNewFilm_cancel.addEventListener('click', (event)=> {
  event.preventDefault();
  addNewFilmImg_modal.style.display = 'none';
});

/* Dashboard */
const dOrders = document.querySelectorAll('.d-order');
const dProd = document.querySelector('.d-prod');
const dGallery = document.querySelector('.d-gallery');

dOrders.forEach(container => {
  container.addEventListener('click', ()=>{
  const correspondingContent = contentItems[1]; 
  const correspondingNav = navItems[1]; 
  handleNavigationClick(correspondingNav, correspondingContent);
  });
});

dProd.addEventListener('click', ()=>{
  const correspondingContent = contentItems[2]; 
  const correspondingNav = navItems[2]; 
  handleNavigationClick(correspondingNav, correspondingContent);
});
dGallery.addEventListener('click', ()=>{
  const correspondingContent = contentItems[5]; 
  const correspondingNav = navItems[5]; 
  handleNavigationClick(correspondingNav, correspondingContent);
});

const defaultContent = contentItems[0]; 
const defaultNav = navItems[0]; 
handleNavigationClick(defaultNav, defaultContent);

edit_bttn.forEach( button => {
  button.addEventListener('click', ()=>{
  const correspondingContent = contentItems[4]; 
  const correspondingNav = navItems[4]; 
  handleNavigationClick(correspondingNav, correspondingContent);
});
});


click_avatar.addEventListener('click', () => {
  const correspondingContent = contentItems[6]; 
  const correspondingNav = navItems[6]; 
  handleNavigationClick(correspondingNav, correspondingContent);
});

function handleNavigationClick(navItem, contentItem) {
  contentItems.forEach(item => item.style.display = 'none'); 
  navItems.forEach(item => item.style.backgroundColor = 'inherit'); 

  navItem.style.backgroundColor = 'rgba(0, 0, 0, 0.16)'; 
  contentItem.style.display = 'block'; 
}

navItems.forEach(navItem => {
  navItem.addEventListener('click', () => {
    const correspondingContent = contentItems[Array.prototype.indexOf.call(navItems, navItem)]; 
    handleNavigationClick(navItem, correspondingContent);
  });
});



// review orders table status  select element

const selection = document.querySelectorAll('.review-order table tr td select');

selection.forEach(selectElement => {
  selectElement.addEventListener('change', () => {
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    if (selectedOption.value === 'delivered') {
      selectElement.style.backgroundColor = '#dfffe7';
      selectElement.style.color = '#0ea734';
      selectElement.style.border = 'none';
    } else if (selectedOption.value === 'confirmed')  {
        selectElement.style.backgroundColor = '#ffeac7';
      selectElement.style.color = '#dc8b28';
      selectElement.style.border = 'none';
    }
    else if (selectedOption.value === 'pending')  {
        selectElement.style.backgroundColor = '#ffd7d7';
      selectElement.style.color = '#f71e1e';
      selectElement.style.border = 'none';
    }
  });
});

/* Product Grid Number of Product */

const productCard = document.querySelectorAll('.p-g-g-container .card');
const displayProductNum = document.getElementById('p-g-v-prod');

const prodNum = productCard.length
displayProductNum.innerHTML = prodNum;

/* pagination for tables */

function defaultClickedPage(pageBttn){
  if (pageBttn.length > 0) {
    pageBttn[0].classList.add('clicked');
  }
}

function forEachButton(pageBttn){
  pageBttn.forEach(button => {
    button.addEventListener('click', () => {
      pageBttn.forEach(otherButton => otherButton.classList.remove('clicked'));
      button.classList.add('clicked');
  
    });
  });
}

function chevronBttn(pageBttn,chevron){
  let currentPageIndex = 0;

  chevron.addEventListener('click',()=>{
  if (currentPageIndex === pageBttn.length - 1) {
  
    currentPageIndex = 0;
  } else {
    currentPageIndex++;
  }

  pageBttn.forEach(otherButton => otherButton.classList.remove('clicked'));
  pageBttn[currentPageIndex].classList.add('clicked');
  });
  
}

const pagination_m = document.querySelectorAll('.m-orders button');
const chevronBttn_m = document.getElementById('chevron-bttn-m');
const pagination_d = document.querySelectorAll('.d-orders button');
const chevronBttn_d = document.getElementById('chevron-bttn-d');
const pagination_s = document.querySelectorAll('.page-shop button');
const chevronBttn_s = document.getElementById('chevron-bttn-s');
const pagination_g = document.querySelectorAll('.page-gallery button');
const chevronBttn_g = document.getElementById('chevron-bttn-g');

/* Manage Orders Pagination */
defaultClickedPage(pagination_m); 
forEachButton(pagination_m);
chevronBttn(pagination_m,chevronBttn_m);
/* Delivery Orders Pagination */
defaultClickedPage(pagination_d);
forEachButton(pagination_d);
chevronBttn(pagination_d,chevronBttn_d);
/* Shop  Pagination */
defaultClickedPage(pagination_s);
forEachButton(pagination_s);
chevronBttn(pagination_s,chevronBttn_s);
/* Gallery  Pagination */
defaultClickedPage(pagination_g);
forEachButton(pagination_g);
chevronBttn(pagination_g,chevronBttn_g);
