const slider = document.getElementById('price-slider');
const minPriceDisplay = document.getElementById('min-price');
const maxPriceDisplay = document.getElementById('max-price');

const updatePriceDisplay = (values) => {
  const  maxPrice = values.split(',');
  maxPriceDisplay.textContent = "₱" + maxPrice;
};

slider.addEventListener('input', (event) => {
  const values = event.target.value;
  updatePriceDisplay(values);
});

updatePriceDisplay(slider.value); 

const sidebar_bttn = document.querySelector('header .s-sdbr');
const sidebar_cont = document.getElementById('h-sidebar');

sidebar_bttn.addEventListener('click', () => {
  sidebar_cont.style.display = 'flex';
});

sidebar_cont.addEventListener('click', (event) => {
    if(event.target === sidebar_cont){
      // sidebar_cont.style.display = 'none';
      sidebar_cont.style.display = menu_cont.style.display === 'none' ? 'flex' : 'none';
    }
});

const products = document.querySelectorAll('.prod-container .prod');


products.forEach(container => {
  container.addEventListener('click', () => {
    const productImage = container.querySelector('.prod #merch-item').src; 
    const productName = container.querySelector('.prod-bttm .merch-name').textContent; 
    const productPrice = container.querySelector('.prod-bttm  #merch-price').textContent;


    localStorage.setItem("productImage", productImage);
     localStorage.setItem("productName", productName);
     localStorage.setItem("productPrice", productPrice);

   window.location.href = "product_page.html";
  });
});

