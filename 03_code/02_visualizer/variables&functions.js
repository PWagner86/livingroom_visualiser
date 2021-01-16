// Verschiedene Variablen
export const container = document.querySelector(".scene");
export let containerWidth = container.clientWidth;
export const mobileContainer = document.querySelector(".mobile");
export const path = "../03_code/02_visualizer/3dmodels/";

// Gaming Stuhl Container und Buttons
export const gamingBtn = document.querySelector(".gaming-btn");
export const gamingCtr = document.querySelector(".gaming-ctr");
export const gamingControlles = document.querySelector(".gaming");
export const gamingRight = document.querySelector(".gaming .button-wrapper .right");
export const gamingFront = document.querySelector(".gaming .button-wrapper .front");
export const gamingRotate = document.querySelector(".gaming .button-wrapper .rotate");
export const gamingLeft = document.querySelector(".gaming .button-wrapper .left");
export const gamingBack = document.querySelector(".gaming .button-wrapper .back");
export const gamingRemove = document.querySelector(".gaming .button-wrapper .remove-model");

// Sci-Fy Container und Buttons
export const sciFyBtn = document.querySelector(".scify-btn");
export const sciFyCtr = document.querySelector(".scify-ctr");
export const sciFyControlles = document.querySelector(".sci-fy");
export const sciFyRight = document.querySelector(".sci-fy .button-wrapper .right");
export const sciFyFront = document.querySelector(".sci-fy .button-wrapper .front");
export const sciFyRotate = document.querySelector(".sci-fy .button-wrapper .rotate");
export const sciFyLeft = document.querySelector(".sci-fy .button-wrapper .left");
export const sciFyBack = document.querySelector(".sci-fy .button-wrapper .back");
export const sciFyRemove = document.querySelector(".sci-fy .button-wrapper .remove-model");

// Lounge Container und Buttons
export const loungeBtn = document.querySelector(".lounge-btn");
export const loungeCtr = document.querySelector(".lounge-ctr");
export const loungeControlles = document.querySelector(".lounge");
export const loungeRight = document.querySelector(".lounge .button-wrapper .right");
export const loungeFront = document.querySelector(".lounge .button-wrapper .front");
export const loungeRotate = document.querySelector(".lounge .button-wrapper .rotate");
export const loungeLeft = document.querySelector(".lounge .button-wrapper .left");
export const loungeBack = document.querySelector(".lounge .button-wrapper .back");
export const loungeRemove = document.querySelector(".lounge .button-wrapper .remove-model");

// Bar Container und Buttons
export const barBtn = document.querySelector(".bar-btn");
export const barCtr = document.querySelector(".bar-ctr");
export const barControlles = document.querySelector(".bar");
export const barRight = document.querySelector(".bar .button-wrapper .right");
export const barFront = document.querySelector(".bar .button-wrapper .front");
export const barRotate = document.querySelector(".bar .button-wrapper .rotate");
export const barLeft = document.querySelector(".bar .button-wrapper .left");
export const barBack = document.querySelector(".bar .button-wrapper .back");
export const barRemove = document.querySelector(".bar .button-wrapper .remove-model");

// Wohnwand Container und Buttons
export const wohnBtn = document.querySelector(".wohn-btn");
export const wohnCtr = document.querySelector(".wohn-ctr");
export const wohnControlles = document.querySelector(".wohn");
export const wohnRight = document.querySelector(".wohn .button-wrapper .right");
export const wohnFront = document.querySelector(".wohn .button-wrapper .front");
export const wohnRotate = document.querySelector(".wohn .button-wrapper .rotate");
export const wohnLeft = document.querySelector(".wohn .button-wrapper .left");
export const wohnBack = document.querySelector(".wohn .button-wrapper .back");
export const wohnRemove = document.querySelector(".wohn .button-wrapper .remove-model");

// Kaffee-Shop Container und Buttons
export const kaffeeBtn = document.querySelector(".kaffee-btn");
export const kaffeeCtr = document.querySelector(".kaffee-ctr");
export const kaffeeControlles = document.querySelector(".kaffee");
export const kaffeeRight = document.querySelector(".kaffee .button-wrapper .right");
export const kaffeeFront = document.querySelector(".kaffee .button-wrapper .front");
export const kaffeeRotate = document.querySelector(".kaffee .button-wrapper .rotate");
export const kaffeeLeft = document.querySelector(".kaffee .button-wrapper .left");
export const kaffeeBack = document.querySelector(".kaffee .button-wrapper .back");
export const kaffeeRemove = document.querySelector(".kaffee .button-wrapper .remove-model");

// Liege-Sofa Container und Buttons
export const sofaBtn = document.querySelector(".sofa-btn");
export const sofaCtr = document.querySelector(".sofa-ctr");
export const sofaControlles = document.querySelector(".sofa");
export const sofaRight = document.querySelector(".sofa .button-wrapper .right");
export const sofaFront = document.querySelector(".sofa .button-wrapper .front");
export const sofaRotate = document.querySelector(".sofa .button-wrapper .rotate");
export const sofaLeft = document.querySelector(".sofa .button-wrapper .left");
export const sofaBack = document.querySelector(".sofa .button-wrapper .back");
export const sofaRemove = document.querySelector(".sofa .button-wrapper .remove-model");

// Kinder-Fort Container und Buttons
export const fortBtn = document.querySelector(".fort-btn");
export const fortCtr = document.querySelector(".fort-ctr");
export const fortControlles = document.querySelector(".fort");
export const fortRight = document.querySelector(".fort .button-wrapper .right");
export const fortFront = document.querySelector(".fort .button-wrapper .front");
export const fortRotate = document.querySelector(".fort .button-wrapper .rotate");
export const fortLeft = document.querySelector(".fort .button-wrapper .left");
export const fortBack = document.querySelector(".fort .button-wrapper .back");
export const fortRemove = document.querySelector(".fort .button-wrapper .remove-model");


export let controlles = [
    gamingControlles, 
    sciFyControlles,
    loungeControlles,
    barControlles,
    wohnControlles,
    kaffeeControlles,
    sofaControlles,
    fortControlles
];

let ctrs = [
    gamingCtr,
    sciFyCtr,
    loungeCtr,
    barCtr,
    wohnCtr,
    kaffeeCtr,
    sofaCtr,
    fortCtr
];


// Funktionen
export function btnShowHide(hide, show){
    hide.style.display = "none";
    show.style.display = "flex";

}

export function getCtr(ctrWrapper, ctr){
    controlles.forEach(ctr => {
        ctr.style.display = "none";
    })
    ctrWrapper.style.display = "block";
    ctrs.forEach(ct => {
        ct.classList.remove("active");
    })
    ctr.classList.add("active");
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

