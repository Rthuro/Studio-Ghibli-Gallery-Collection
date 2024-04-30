
const hid_login = document.getElementById('hid-login');
const login_bttn = document.getElementById('login');
const login = document.getElementById('login-create-container');

const login_container = document.getElementById('login-container');
const create_container = document.getElementById('create-container');

const login_to_create = document.getElementById('login-create');
const create_to_login = document.getElementById('create-login');


hid_login.addEventListener('click', () => {
  login.style.visibility  = "visible";
  login_container.style.visibility  = "visible";
});

login_bttn.addEventListener('click', () => {
    login.style.visibility  = "visible";
    login_container.style.visibility  = "visible";
});

login.addEventListener('click', (event) => {
    if (event.target === login) { 
      login.style.visibility = "hidden";
      login_container.style.visibility = "hidden";
      create_container.style.visibility = "hidden";
    }
  });

login_to_create.addEventListener('click', () =>{
    login_container.style.zIndex = "1";
    login_container.style.visibility  = "hidden";
    create_container.style.zIndex = "5";
    create_container.style.visibility  = "visible";
});

create_to_login.addEventListener('click', () =>{
    login_container.style.zIndex = "5";
    create_container.style.zIndex = "1";
    login_container.style.visibility  = "visible";
    create_container.style.visibility  = "hidden";
    login.style.visibility  = "visible";
});

// Hidden Menu 

const menu_bttn = document.getElementById('menu-bttn');
const menu_cont = document.getElementById('h-wrapper');
menu_bttn.addEventListener('click', () => {
    menu_cont.style.display = menu_cont.style.display === 'none' ? 'flex' : 'none';
});
menu_cont.addEventListener('click', (event) => {
    if(event.target === menu_cont){
        menu_cont.style.display = 'none';
    }
});

//hidden cart
const cartBttn = document.getElementById('cart');
const cartContainer = document.querySelector('.h-cart');

cartBttn.addEventListener('click', () => {
  cartContainer.style.display = cartContainer.style.display === 'none'? 'flex' : 'none';
});

document.addEventListener('click', (event) => {
  if (!cartContainer.contains(event.target) &&!cartBttn.contains(event.target)) {
    cartContainer.style.display = 'none';
  }
});