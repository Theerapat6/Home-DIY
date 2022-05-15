
window.onscroll =() =>{
    searchF.classList.remove('active');
    loginF.classList.remove('active');
    
}

var swiper = new Swiper(".products-sli", {
    loop:true,
    spaceBetween: 20,
    autoplay:{
        delay:7500,
        disableOnInteraction: false,
    },
    centeredSlides:true,
    breakpoints: {
      0: {
        slidesPerView: 1,
       
      },
      768: {
        slidesPerView: 2,
        
      },
      1020: {
        slidesPerView: 3,
      
      },
    },
  });

