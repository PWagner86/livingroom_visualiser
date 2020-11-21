// Variables

const header = document.querySelector("header");
const prev = document.querySelector(".preview");
const right = document.querySelector(".right");
const left = document.querySelector(".left");

let count = 1;

// Events

// Paralaxeffekt im header
window.addEventListener("scroll", () => {
    let offset = window.pageYOffset;
    header.style.backgroundPositionY = `${offset * 0.7}px`;
})

// nach rechts um nächstes Bild bei Impressionen zu sehen
right.addEventListener("click", (e) => {
   e.preventDefault();
   count++;
   if(count > 9){
       count = 0;
   }
   prev.setAttribute("src", `./01_pics_&_logo/01_impressionen/imp${count}.jpg`);
})

// nach links um vorheriges Bild bei impressionen zu sehen
left.addEventListener("click", (e) => {
    e.preventDefault();
    count--;
    if(count < 0){
        count = 9;
    }
    prev.setAttribute("src", `./01_pics_&_logo/01_impressionen/imp${count}.jpg`);
 })
 
// Funktionen