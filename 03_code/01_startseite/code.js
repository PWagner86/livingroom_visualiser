// Variables

const prev = document.querySelector(".preview");
const right = document.querySelector(".right");
const left = document.querySelector(".left");

let count = 1;

// Events

right.addEventListener("click", (e) => {
   e.preventDefault();
   count++;
   if(count > 9){
       count = 0;
   }
   prev.setAttribute("src", `./01_pics_&_logo/01_impressionen/imp${count}.jpg`);
})

left.addEventListener("click", (e) => {
    e.preventDefault();
    count--;
    if(count < 0){
        count = 9;
    }
    prev.setAttribute("src", `./01_pics_&_logo/01_impressionen/imp${count}.jpg`);
 })
 
// Funktionen