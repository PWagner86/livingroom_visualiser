// Variables
const carusell = document.querySelector(".carusell");
const carusellWidth = carusell.clientWidth;

const left = document.querySelector(".left");
const right = document.querySelector(".right");

let picContainer;



// Events
for(let i = 0; i < 10; i++){
    picContainer = document.createElement("div");
    picContainer.classList.add("pic-container");
    picContainer.style.width = `${carusellWidth / 10}px`;
    picContainer.style.height = '100%';
    carusell.appendChild(picContainer);

    let pic = document.createElement("img");
    pic.classList.add("imp-pic");
    pic.setAttribute("src", `./01_pics_&_logo/01_impressionen/imp${i}.jpg`);
    picContainer.appendChild(pic);
}

right.addEventListener("click", (e) => {
    e.preventDefault();
    const picWidth = carusellWidth / 10;

    gsap.to(carusell, {
        x: -picWidth,
        duration: 1,
        ease: "power2"
    })
})



// Funktionen
