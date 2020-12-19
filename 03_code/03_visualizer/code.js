import GLTF from './GLTFLoader.js';
import Controls from './OrbitControls.js';

// Variables
const container = document.querySelector(".scene");
const select = document.querySelector("select");
const list = document.querySelector(".remove");
let moveContainer = document.querySelector(".move-wrapper");
let titel = document.querySelector(".move-wrapper .title-wrapper h6");
let right = document.querySelector(".button-wrapper .right");
let front = document.querySelector(".button-wrapper .front");
let turn = document.querySelector(".button-wrapper .rotate");
let left = document.querySelector(".button-wrapper .left");
let back = document.querySelector(".button-wrapper .back");
const scene = new THREE.Scene();
const loader = new THREE.GLTFLoader();
const path = "../03_code/03_visualizer/3dmodels/";
let gaming_stuhl;
let lounge;
let scify;
let bar;
let modelScene;
let itemList = [];


// 3D Model Klasse
class Model{
    constructor(name, x, y, z, posx, posz, roty, modelFolder){
        this.name = name;
        this.x = x;
        this.y = y;
        this.z = z;
        this.posx = posx;
        this.posz = posz;
        this.roty = roty;
        this.modelFolder = modelFolder;
    }

    loadModel(){
        loader.load(`${path}/${this.modelFolder}/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            modelScene = gltf.scene;
            modelScene.castShadow = true;
            modelScene.receiveShadow = true;
            modelScene.scale.x = this.x;
            modelScene.scale.y = this.y;
            modelScene.scale.z = this.z;
            modelScene.position.x = this.posx;
            modelScene.position.z = this.posz;
            modelScene.rotation.y = this.roty;
        })
    }

    removeModel(){
       scene.remove(modelScene);
    }

    toRight(){
        let move = 0.1;
        modelScene.position.x += move;
    }

    toLeft(){
        let move = 0.1;
        modelScene.position.x -= move;
    }

    toBack(){
        let move = 0.1;
        modelScene.position.z -= move;
    }

    toFront(){
        let move = 0.1;
        modelScene.position.z += move;
    }

    rotate(){
        let move = Math.PI/4;
        modelScene.rotation.y += move;
    }
}

// Funktion was alles geladen werden soll
function init(){

    // Raum erstellen

    let ground = getPlane(15, 8, 'rgb(124, 119, 119)');
    ground.rotation.x = Math.PI/2;

    let sideWall = getPlane(8, 2, 'rgb(124, 119, 119)');
    sideWall.position.y = ground.geometry.parameters.height/8;
    sideWall.rotation.y = Math.PI/2;
    sideWall.position.x = -ground.geometry.parameters.width/2;

    let backWall = getPlane(15, 2, 'rgb(124, 119, 119)');
    backWall.position.z = -ground.geometry.parameters.height/2;
    backWall.position.y = ground.geometry.parameters.height/8;

    let pointLight = getPointLight(1);
    pointLight.position.y = 3;
    pointLight.intensity = 1.5;

    scene.add(ground);
    scene.add(sideWall);
    scene.add(backWall);
    scene.add(pointLight);

    // Gaming Stuhl erstellen
    gaming_stuhl = new Model("Gaming Stuhl", 0.15, 0.15, 0.15, -6, 0, -Math.PI/2, "gaming_stuhl");
    // Lounge erstellen
    lounge = new Model("Lounge", 0.1, 0.1, 0.1, 3, 2, -Math.PI/0.5, "lounge");
    // SciFy Möbel erstellen
    scify = new Model("Sci-Fy", 0.008, 0.008, 0.008, -2, 2, -Math.PI/0.5, "sci-fy_einrichtung");
    // Bar erstellen
    bar = new Model("Bar", 0.75, 0.75, 0.75, 5, -2.5, -Math.PI, "bar_einrichtung");



    select.addEventListener("change", () => {
        switch(select.value){
            case "Gaming Stuhl":
                gaming_stuhl.loadModel();
                createListItem("Gaming Stuhl");
                break;
            case "Lounge":
                lounge.loadModel();
                createListItem("Lounge");
                break;
            case "Sci-Fy":
                scify.loadModel();
                createListItem("Sci-Fy");
                break;
            case "Bar":
                bar.loadModel();
                createListItem("Bar");
                break;
        }
    })

    // Kamera
    let camera = new THREE.PerspectiveCamera(
        45,
        container.clientWidth / container.clientHeight,
        1,
        1000
    );
    camera.position.x = 5;
    camera.position.y = 10;
    camera.position.z = 16;

    camera.lookAt(new THREE.Vector3(0, 0, 0));

    const renderer = new THREE.WebGLRenderer({antialias: true, alpha: false});
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    
    update(renderer, scene, camera, controls);

    return scene;
}

init();

// Funktionen

function update(renderer, scene, camera, controls){
    renderer.render(
        scene, 
        camera
    );
    requestAnimationFrame(function(){
        update(renderer, scene, camera, controls);
    });
}

// Funktionen für Wände
function getPlane(w, h, c){
    var geometry = new THREE.PlaneGeometry(w, h);
    var material = new THREE.MeshPhongMaterial({
        color: c,
        side: THREE.DoubleSide
    });
    geometry.receiveShadow = true;
    var mesh = new THREE.Mesh(
        geometry, 
        material
    );
    return mesh;
}

function getPointLight(intensity){
    var light = new THREE.PointLight(0xffffff, intensity);

    return light;
}


function createListItem(item){

    if(!itemList.includes(item)){
        const listItem = document.createElement("li");
        const liBtn = document.createElement("button");
        itemList.push(item);
        liBtn.innerHTML = item;
        list.appendChild(listItem);
        listItem.appendChild(liBtn)

        if(liBtn !== null){
            liBtn.addEventListener("click", (e) => {
                e.preventDefault();
                switch(liBtn.innerHTML){
                    case "Gaming Stuhl":
                        const gaming_controlles = document.querySelector(".gaming");
                        moveModel(gaming_stuhl, gaming_controlles);
                        break;
                    case "Sci-Fy":
                        const sci_fy_controlles = document.querySelector(".sci-fy");
                        moveModel(scify, sci_fy_controlles);
                        break;
                }
            })
        }
    }else{
        return;
    }
    // console.log(itemList);
}

function moveModel(model, controlles){
    controlles.style.display = "block";

    right.addEventListener("click", (e) => {
        e.preventDefault();
        model.toRight();
    })

    front.addEventListener("click", (e) => {
        e.preventDefault();
        model.toFront();
    })

    turn.addEventListener("click", (e) => {
        e.preventDefault();
        model.rotate();
    })

    left.addEventListener("click", (e) => {
        e.preventDefault();
        model.toLeft();
    })

    back.addEventListener("click", (e) => {
        e.preventDefault();
        model.toBack();
    })
}
