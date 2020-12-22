// Verschiedene Variablen
export const container = document.querySelector(".scene");
export const path = "../03_code/03_visualizer/3dmodels/";

// Gaming Stuhl Container und Buttons
export const gamingBtn = document.querySelector(".gaming-btn");
export const gamingCtr = document.querySelector(".gaming-ctr");
export const gamingControlles = document.querySelector(".gaming");
export const gamingRight = document.querySelector(".gaming .button-wrapper .right");
export const gamingFront = document.querySelector(".gaming .button-wrapper .front");
export const gamingRotate = document.querySelector(".gaming .button-wrapper .rotate");
export const gamingLeft = document.querySelector(".gaming .button-wrapper .left");
export const gamingBack = document.querySelector(".gaming .button-wrapper .back");

// Sci-Fy Container und Buttons
export const sciFyBtn = document.querySelector(".scify-btn");
export const sciFyCtr = document.querySelector(".scify-ctr");
export const sciFyControlles = document.querySelector(".sci-fy");
export const sciFyRight = document.querySelector(".sci-fy .button-wrapper .right");
export const sciFyFront = document.querySelector(".sci-fy .button-wrapper .front");
export const sciFyRotate = document.querySelector(".sci-fy .button-wrapper .rotate");
export const sciFyLeft = document.querySelector(".sci-fy .button-wrapper .left");
export const sciFyBack = document.querySelector(".sci-fy .button-wrapper .back");

// Lounge Container und Buttons
export const loungeBtn = document.querySelector(".lounge-btn");
export const loungeCtr = document.querySelector(".lounge-ctr");
export const loungeControlles = document.querySelector(".lounge");
export const loungeRight = document.querySelector(".lounge .button-wrapper .right");
export const loungeFront = document.querySelector(".lounge .button-wrapper .front");
export const loungeRotate = document.querySelector(".lounge .button-wrapper .rotate");
export const loungeLeft = document.querySelector(".lounge .button-wrapper .left");
export const loungeBack = document.querySelector(".lounge .button-wrapper .back");

// Bar Container und Buttons
export const barBtn = document.querySelector(".bar-btn");
export const barCtr = document.querySelector(".bar-ctr");
export const barControlles = document.querySelector(".bar");
export const barRight = document.querySelector(".bar .button-wrapper .right");
export const barFront = document.querySelector(".bar .button-wrapper .front");
export const barRotate = document.querySelector(".bar .button-wrapper .rotate");
export const barLeft = document.querySelector(".bar .button-wrapper .left");
export const barBack = document.querySelector(".bar .button-wrapper .back");


let controlles = [
    gamingControlles, 
    sciFyControlles,
    loungeControlles,
    barControlles
];


// Funktionen
export function btnShowHide(hide, show){
    hide.style.display = "none";
    show.style.display = "flex";

}

export function getCtr(ctrWrapper){
    controlles.forEach(ctr => {
        ctr.style.display = "none";
    })
    ctrWrapper.style.display = "block";
}

export function toRight(model){
    let move = 0.1;
    model.position.x += move;
}

export function toFront(model){
    let move = 0.1;
    model.position.z += move;
}

export function rotate(model){
    let move = Math.PI/4;
    model.rotation.y += move;
}

export function toLeft(model){
    let move = 0.1;
    model.position.x -= move;
}

export function toBack(model){
    let move = 0.1;
    model.position.z -= move;
}

