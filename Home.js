let searchF = document.querySelector('.search-F');

document.querySelector('#search').onclick =() =>{
    searchF.classList.toggle('active');
    
    loginF.classList.remove('active');
    navbar.classList.remove('active');
}

let loginF = document.querySelector('.login-F');

document.querySelector('#login').onclick =() =>{
    loginF.classList.toggle('active');
    searchF.classList.remove('active');
    
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu').onclick =() =>{
    navbar.classList.toggle('active');
    searchF.classList.remove('active');
    loginF.classList.remove('active');
    
}

window.onscroll =() =>{
    searchF.classList.remove('active');
    loginF.classList.remove('active');
    navbar.classList.remove('active');
}


