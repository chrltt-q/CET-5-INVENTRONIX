/* Navbar */
const menu = document.querySelector('.menu');
const menuBtn = document.querySelector('.menu-btn');

/* Toggle open/close menu */
menuBtn.addEventListener('click', () => {
    menu.classList.toggle('menu-open');
});

/* Slider */
const page = document.querySelectorAll('.page');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const img = document.querySelector('.slider-img');
const overlay = document.querySelector('.overlay');
const anim = document.querySelectorAll('.anim');

/* Get CSS variables from root */
const r = document.querySelector(':root');
const rs = getComputedStyle(r);

let id = 0;

/* Image Paths */
const images = [
    './img/imgslide1.jpg',
    './img/imgslide2.jpg',
    './img/imgslide3.jpg',
    './img/imgslide4.jpg',
    './img/imgslide5.jpg',
] ;

/* Theme Colors */
const colors = [
    '#f9c254',
    '#ffa901',
    '#b5162e',
    'rgb(212, 5, 5)',
    'rgb(69, 1, 11)',
];

function retrigAnim() {
    //Retrigger animations
    for(let i = 0; i < anim.length; i++) {
        anim[i].style.animation = 'none';
        anim[i].offsetHeight;
        anim[i].style.animation = null;
    }
}

function slider(i) {
    //Retrigger animations
    retrigAnim();
    //Reset image source
    img.src = images[i];
    //Rechange accent color
    r.style.setProperty('--accent', colors[i]);
    //Toggle active class to pagination
    //Remove active classes from all
    for(let i = 0; i< page.length; i++) {
        page[i].classList.remove('active');
    }
    //Reset active class to clicked paginition
    page[i].classList.add('active');
}

//Pagination
for(let i = 0; i < page.length; i++) {
    //Add click event for all pagination
    page[i].addEventListener('click', () => {
        //Run slider function
        slider(i);
        //Set id to clicked pagination index
        id = 1
        //Stop auto slide
        stopAutoSlide()
    });
}

//Previous Slide
prev.addEventListener('click', () => {
    //Decrement img id
    id--;
    //Check if id is smaller than the number of available slides
    if(id < 0) {
        id = page.length - 1;
    }
    slider(id);
    stopAutoSlide();
});

//Next Slide
next.addEventListener('click', () => {
    nextSlide();
    stopAutoSlide();
});

function nextSlide() {
    //Increment img id
    id++;
    if(id > page.length - 1) {
        id = 0;
    }
    slider(id);
}

//Automatic Slider
let autoSlide = setInterval(nextSlide, 10000);

//Stop Automatic Slider
function stopAutoSlide() {
    clearInterval(autoSlide);

    //Restart Auto Slider
    autoSlide = setInterval(nextSlide, 10000);
}
