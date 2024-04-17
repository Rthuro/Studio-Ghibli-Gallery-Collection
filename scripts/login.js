const login_bttn = document.getElementById('login');
const login = document.getElementById('login-create-container');

const login_container = document.getElementById('login-container');
const create_container = document.getElementById('create-container');

const login_to_create = document.getElementById('login-create');
const create_to_login = document.getElementById('create-login');

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
