// Variables

const header = document.querySelector("header");
const footer = document.querySelector("footer");
const prev = document.querySelector(".preview");
const rightDesktop = document.querySelector(".carousel-right .right");
const rightMobile = document.querySelector("#carousel-controlle-mobile .mobile-right");
const leftDesktop = document.querySelector(".carousel-left .left");
const leftMobile = document.querySelector("#carousel-controlle-mobile .mobile-left");

const right = [rightDesktop, rightMobile];
const left = [leftDesktop, leftMobile];

let count = 1;

// Events

// Paralaxeffekt im header
window.addEventListener("scroll", () => {
    const offsetY = window.pageYOffset;
    header.style.backgroundPositionY = `${offsetY * 0.7}px`;
})

// nach rechts um nächstes Bild bei Impressionen zu sehen
right.forEach(item => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
        count++;
        if(count > 9){
            count = 0;
        }
        prev.setAttribute("src", `./01_pics_&_logo/01_impression/imp${count}.jpg`);
    })
})

// nach links um vorheriges Bild bei impressionen zu sehen
left.forEach(item => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
        count--;
        if(count < 0){
            count = 9;
        }
        prev.setAttribute("src", `./01_pics_&_logo/01_impression/imp${count}.jpg`);
    })
})