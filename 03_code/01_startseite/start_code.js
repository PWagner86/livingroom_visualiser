// Variables
const preview = document.querySelector(".preview");
const left = document.querySelector(".left");
const right = document.querySelector(".right");

let counter = 0;


// Events

right.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("click");
    counter++;
    console.log(counter);

})




// Funktionen
