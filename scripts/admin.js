
// navigation area
const nav_dashboard = document.getElementById('n-dashboard');
const nav_customer = document.getElementById('n-customer');
const nav_shop = document.getElementById('n-shop');
const nav_gallery = document.getElementById('n-gallery');
const nav_settings = document.getElementById('n-settings');
const nav_acc = document.getElementById('n-account');

//navigation content
const cont_dash = document.getElementById('dashboard');
const cont_cust = document.getElementById('customer');
const cont_shop = document.getElementById('shop');
const cont_gallery = document.getElementById('gallery');
const cont_sett = document.getElementById('settings');
const cont_acc = document.getElementById('account');

nav_dashboard.addEventListener('click', () => { 
    cont_dash.style.zIndex = "5";
    cont_cust.style.zIndex = "1";
    cont_shop.style.zIndex = "1";
    cont_gallery.style.zIndex = "1";
    cont_sett.style.zIndex = "1";
    cont_acc.style.zIndex = "1";
    
    nav_dashboard.style.backgroundColor = "rgba(0, 0, 0, 0.16)";
    nav_customer.style.backgroundColor = "inherit";
    nav_shop.style.backgroundColor = "inherit";
    nav_gallery.style.backgroundColor = "inherit";
    nav_settings.style.backgroundColor = "inherit";
    nav_acc.style.backgroundColor = "inherit";
    
});

nav_customer.addEventListener('click', () => { 
    cont_dash.style.zIndex = "1";
    cont_cust.style.zIndex = "5";
    cont_shop.style.zIndex = "1";
    cont_gallery.style.zIndex = "1";
    cont_sett.style.zIndex = "1";
    cont_acc.style.zIndex = "1";
    
    nav_dashboard.style.backgroundColor = "inherit";
    nav_customer.style.backgroundColor = "rgba(0, 0, 0, 0.16)";
    nav_shop.style.backgroundColor = "inherit";
    nav_gallery.style.backgroundColor = "inherit";
    nav_settings.style.backgroundColor = "inherit";
    nav_acc.style.backgroundColor = "inherit";
    
});

nav_shop.addEventListener('click', () => { 
    cont_dash.style.zIndex = "1";
    cont_cust.style.zIndex = "1";
    cont_shop.style.zIndex = "5";
    cont_gallery.style.zIndex = "1";
    cont_sett.style.zIndex = "1";
    cont_acc.style.zIndex = "1";
    
    nav_dashboard.style.backgroundColor = "inherit";
    nav_customer.style.backgroundColor = "inherit";
    nav_shop.style.backgroundColor = "rgba(0, 0, 0, 0.16)";
    nav_gallery.style.backgroundColor = "inherit";
    nav_settings.style.backgroundColor = "inherit";
    nav_acc.style.backgroundColor = "inherit";
});

nav_gallery.addEventListener('click', () => { 
    cont_dash.style.zIndex = "1";
    cont_cust.style.zIndex = "1";
    cont_shop.style.zIndex = "1";
    cont_gallery.style.zIndex = "5";
    cont_sett.style.zIndex = "1";
    cont_acc.style.zIndex = "1";
    
    nav_dashboard.style.backgroundColor = "inherit";
    nav_customer.style.backgroundColor = "inherit";
    nav_shop.style.backgroundColor = "inherit";
    nav_gallery.style.backgroundColor = "rgba(0, 0, 0, 0.16)";
    nav_settings.style.backgroundColor = "inherit";
    nav_acc.style.backgroundColor = "inherit";
    
});

nav_settings.addEventListener('click', () => { 
    cont_dash.style.zIndex = "1";
    cont_cust.style.zIndex = "1";
    cont_shop.style.zIndex = "1";
    cont_gallery.style.zIndex = "1";
    cont_sett.style.zIndex = "5";
    cont_acc.style.zIndex = "1";
    
    nav_dashboard.style.backgroundColor = "inherit";
    nav_customer.style.backgroundColor = "inherit";
    nav_shop.style.backgroundColor = "inherit";
    nav_gallery.style.backgroundColor = "inherit";
    nav_settings.style.backgroundColor = "rgba(0, 0, 0, 0.16)";
    nav_acc.style.backgroundColor = "inherit";
    
});

nav_acc.addEventListener('click', () => { 
    cont_dash.style.zIndex = "1";
    cont_cust.style.zIndex = "1";
    cont_shop.style.zIndex = "1";
    cont_gallery.style.zIndex = "1";
    cont_sett.style.zIndex = "1";
    cont_acc.style.zIndex = "5";
    
    nav_dashboard.style.backgroundColor = "inherit";
    nav_customer.style.backgroundColor = "inherit";
    nav_shop.style.backgroundColor = "inherit";
    nav_gallery.style.backgroundColor = "inherit";
    nav_settings.style.backgroundColor = "inherit";
    nav_acc.style.backgroundColor = "rgba(0, 0, 0, 0.16)";
    
});