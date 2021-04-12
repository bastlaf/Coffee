let h1 = document.querySelector('h1');
let search = document.querySelector('.navigation');
document.addEventListener('scroll', ()=> {
    
    
    let positionh1 = h1.getBoundingClientRect().top;
    let scroll = window.pageYOffset; // position du scroll
    
    // console.log(positionh1);
    //console.log(scroll);
    
    if (positionh1 <= -400) {
        search.classList.add("navFixed");
    } else {
        search.classList.remove("navFixed");
    }
});

let btnMenuResp = document.querySelector('#btnMenuResp');
let menu = document.querySelector('#menu');
menu.style.right = '-25rem';

btnMenuResp.addEventListener('click', () => {
    if (menu.style.right === "-25rem") {
        menu.style.right = "0rem";
        btnMenuResp.classList.add('btnMenuResp--active');

    } else {
        menu.style.right = "-25rem";
        btnMenuResp.classList.remove('btnMenuResp--active');
    }
});

AOS.init();

let carte = document.querySelector('.cardMap');
let carte1 = document.querySelector('.cardMap:nth-child(1)');
let carte2 = document.querySelector('.cardMap:nth-child(2)');
let fond1 = document.querySelector('.fond1');
let fond2 = document.querySelector('.fond2');

carte1.addEventListener('mouseover', () => {
    console.log('background');
    fond1.style.opacity = "1";
});
carte1.addEventListener('mouseout', () => {
    console.log('background');
    fond1.style.opacity = "0";
});

carte2.addEventListener('mouseover', () => {
    console.log('background');
    fond2.style.opacity = "1";
});
carte2.addEventListener('mouseout', () => {
    console.log('background');
    fond2.style.opacity = "0";
});