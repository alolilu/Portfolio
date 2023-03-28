import ("../css/styles.css");

const cursor = document.getElementById('cursor');

document.addEventListener('mousemove', (e) => {
    cursor.style.left = String(e.x + "px");
    cursor.style.top = String(e.y + "px");
})

let a = document.querySelectorAll('a') || [];
let inputs = document.querySelectorAll('input') || [];
let bxPagerLink = document.getElementsByClassName('bx-pager-item') || [];
let textarea = document.querySelectorAll('textarea') || [];
let contactButtons = document.getElementsByClassName("contact-button");

const initial_width = window.getComputedStyle(cursor).getPropertyValue("width");
const initial_height = window.getComputedStyle(cursor).getPropertyValue("height");

let cursor_triggers = [a, inputs, textarea, bxPagerLink, contactButtons];
let additionnalClass = []

for (let i = 0; i < cursor_triggers.length; i++) {
    for (let x = 0; x < cursor_triggers[i].length; x++) {
        cursor_triggers[i][x].addEventListener('mouseenter', () => {
            cursor.classList.add('hovering');
        })
        cursor_triggers[i][x].addEventListener('mouseleave', () => {
            cursor.classList.remove('hovering');
        })
    }
}

const MenuMobileUl = document.getElementById('menuMobile');
const menuMobile = document.getElementById('navbarMobile');
let menuOpen = false;

    menuMobile.addEventListener('click', () => {
        if (!menuOpen) {
            menuMobile.classList.add('open');
            MenuMobileUl.style.display = "flex";
            menuOpen = true;
        } else {
            menuMobile.classList.remove('open');
            MenuMobileUl.style.display = "none";
            menuOpen = false;
        }
    });

    
    menuMobile.addEventListener('click', () => {
        if (!menuOpen) {
            document.getElementById('NAVLEFT').style.display = "flex";
        } else {
            document.getElementById('NAVLEFT').style.display = "none";
        }
    });
  
// Image 1

const TitreProjet1 = document.getElementById('TitreHover1');

TitreProjet1.addEventListener("mouseover", () =>{
    document.getElementById('ImageProjet1').style.display = "block";
    document.getElementById('imageAnim1').style.opacity = 1;
    document.getElementById('imageAnim1').style.animation = 'ani 1s steps(22) forwards';
})

TitreProjet1.addEventListener("mouseout", () =>{
    document.getElementById('ImageProjet1').style.display = "none";
    document.getElementById('imageAnim1').style.opacity = 0;
    document.getElementById('imageAnim1').style.animation = "none";
})

// Image 2

const TitreProjet2 = document.getElementById('TitreHover2');

TitreProjet2.addEventListener("mouseover", () =>{
    document.getElementById('ImageProjet2').style.display = "block";
    document.getElementById('imageAnim2').style.opacity = 1;
    document.getElementById('imageAnim2').style.animation = 'ani 1s steps(22) forwards';
})

TitreProjet2.addEventListener("mouseout", () =>{
    document.getElementById('ImageProjet2').style.display = "none";
    document.getElementById('imageAnim2').style.opacity = 0;
    document.getElementById('imageAnim2').style.animation = "none";
})

// Image 3

const TitreProjet3 = document.getElementById('TitreHover3');

TitreProjet3.addEventListener("mouseover", () =>{
    document.getElementById('ImageProjet3').style.display = "block";
    document.getElementById('imageAnim3').style.opacity = 1;
    document.getElementById('imageAnim3').style.animation = 'ani 1s steps(22) forwards';
})

TitreProjet3.addEventListener("mouseout", () =>{
    document.getElementById('ImageProjet3').style.display = "none";
    document.getElementById('imageAnim3').style.opacity = 0;
    document.getElementById('imageAnim3').style.animation = "none";
})

// Image 4

const TitreProjet4 = document.getElementById('TitreHover4');

TitreProjet4.addEventListener("mouseover", () =>{
    document.getElementById('ImageProjet4').style.display = "block";
    document.getElementById('imageAnim4').style.opacity = 1;
    document.getElementById('imageAnim4').style.animation = 'ani 1s steps(22) forwards';
})

TitreProjet4.addEventListener("mouseout", () =>{
    document.getElementById('ImageProjet4').style.display = "none";
    document.getElementById('imageAnim4').style.opacity = 0;
    document.getElementById('imageAnim4').style.animation = "none";
})

// Image 5

const TitreProjet5 = document.getElementById('TitreHover5');

TitreProjet5.addEventListener("mouseover", () =>{
    document.getElementById('ImageProjet5').style.display = "block";
    document.getElementById('imageAnim5').style.opacity = 1;
    document.getElementById('imageAnim5').style.animation = 'ani 1s steps(22) forwards';
})

TitreProjet5.addEventListener("mouseout", () =>{
    document.getElementById('ImageProjet5').style.display = "none";
    document.getElementById('imageAnim5').style.opacity = 0;
    document.getElementById('imageAnim5').style.animation = "none";
})
















