import GLTF from './GLTFLoader.js';
import Controls from './OrbitControls.js';
import {
    container,
    containerWidth,
    mobileContainer,
    path,
    gamingBtn,
    gamingCtr,
    gamingControlles,
    gamingRight,
    gamingFront,
    gamingRotate,
    gamingLeft,
    gamingBack,
    gamingRemove,
    sciFyBtn,
    sciFyCtr,
    sciFyControlles,
    sciFyRight,
    sciFyFront,
    sciFyRotate,
    sciFyLeft,
    sciFyBack,
    sciFyRemove,
    loungeBtn,
    loungeCtr,
    loungeControlles,
    loungeRight,
    loungeFront,
    loungeRotate,
    loungeLeft,
    loungeBack,
    loungeRemove,
    barBtn,
    barCtr,
    barControlles,
    barRight,
    barFront,
    barRotate,
    barLeft,
    barBack,
    barRemove,
    wohnBtn,
    wohnCtr,
    wohnControlles,
    wohnRight,
    wohnFront,
    wohnRotate,
    wohnLeft,
    wohnBack,
    wohnRemove,
    kaffeeBtn,
    kaffeeCtr,
    kaffeeControlles,
    kaffeeRight,
    kaffeeFront,
    kaffeeRotate,
    kaffeeLeft,
    kaffeeBack,
    kaffeeRemove,
    sofaBtn,
    sofaCtr,
    sofaControlles,
    sofaRight,
    sofaFront,
    sofaRotate,
    sofaLeft,
    sofaBack,
    sofaRemove,
    btnShowHide,
    getCtr,
    toRight,
    toFront,
    rotate,
    toLeft,
    toBack,
    controlles

} from './variables&functions.js';

// Variables
const scene = new THREE.Scene();
const loader = new THREE.GLTFLoader();
let gamingStuhl;
let scify;
let lounge;
let bar;
let wohn;
let kaffee;
let sofa;




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

    // Gaming Stuhl ----------------------------------------------------------------->
    gamingBtn.addEventListener("click", () => {
        loader.load(`${path}/gaming_stuhl/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            gamingStuhl = gltf.scene;
            gamingStuhl.castShadow = true;
            gamingStuhl.receiveShadow = true;
            gamingStuhl.scale.x = 0.15;
            gamingStuhl.scale.y = 0.15;
            gamingStuhl.scale.z = 0.15;
            gamingStuhl.position.x = -6.5;
            gamingStuhl.position.z = -3;
            gamingStuhl.rotation.y = -Math.PI/1.5;
        })

        btnShowHide(gamingBtn, gamingCtr);
    });

    gamingCtr.addEventListener("click", () => getCtr(gamingControlles, gamingCtr));
    gamingRight.addEventListener("click", () => toRight(gamingStuhl));
    gamingFront.addEventListener("click", () => toFront(gamingStuhl));
    gamingRotate.addEventListener("click", () => rotate(gamingStuhl));
    gamingLeft.addEventListener("click", () => toLeft(gamingStuhl));
    gamingBack.addEventListener("click", () => toBack(gamingStuhl));
    gamingRemove.addEventListener("click", () => removeModel(gamingStuhl, gamingBtn, gamingCtr));


    // Sci-Fy -------------------------------------------------------------------------->
    sciFyBtn.addEventListener("click", () => {
        loader.load(`${path}/sci-fy_einrichtung/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            scify = gltf.scene;
            scify.castShadow = true;
            scify.receiveShadow = true;
            scify.scale.x = 0.008;
            scify.scale.y = 0.008;
            scify.scale.z = 0.008;
            scify.position.x = -2;
            scify.position.z = 0;
            scify.rotation.y = -Math.PI/0.5;
        })

        btnShowHide(sciFyBtn, sciFyCtr);
    });

    sciFyCtr.addEventListener("click", () => getCtr(sciFyControlles, sciFyCtr));
    sciFyRight.addEventListener("click", () => toRight(scify));
    sciFyFront.addEventListener("click", () => toFront(scify));
    sciFyRotate.addEventListener("click", () => rotate(scify));
    sciFyLeft.addEventListener("click", () => toLeft(scify));
    sciFyBack.addEventListener("click", () => toBack(scify));
    sciFyRemove.addEventListener("click", () => removeModel(scify, sciFyBtn, sciFyCtr));

    // Lounge -------------------------------------------------------------------------->
    loungeBtn.addEventListener("click", () => {
        loader.load(`${path}/lounge/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            lounge = gltf.scene;
            lounge.castShadow = true;
            lounge.receiveShadow = true;
            lounge.scale.x = 0.1;
            lounge.scale.y = 0.1;
            lounge.scale.z = 0.1;
            lounge.position.x = 3;
            lounge.position.z = 2;
            lounge.rotation.y = -Math.PI/0.5;
        })

        btnShowHide(loungeBtn, loungeCtr);
    });

    loungeCtr.addEventListener("click", () => getCtr(loungeControlles, loungeCtr));
    loungeRight.addEventListener("click", () => toRight(lounge));
    loungeFront.addEventListener("click", () => toFront(lounge));
    loungeRotate.addEventListener("click", () => rotate(lounge));
    loungeLeft.addEventListener("click", () => toLeft(lounge));
    loungeBack.addEventListener("click", () => toBack(lounge));
    loungeRemove.addEventListener("click", () => removeModel(lounge, loungeBtn, loungeCtr));


    // Bar -------------------------------------------------------------------------->
    barBtn.addEventListener("click", () => {
        loader.load(`${path}/bar_einrichtung/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            bar = gltf.scene;
            bar.castShadow = true;
            bar.receiveShadow = true;
            bar.scale.x = 0.75;
            bar.scale.y = 0.75;
            bar.scale.z = 0.75;
            bar.position.x = 5;
            bar.position.z = -2.5;
            bar.rotation.y = -Math.PI;
        })

        btnShowHide(barBtn, barCtr);
    });

    barCtr.addEventListener("click", () => getCtr(barControlles, barCtr));
    barRight.addEventListener("click", () => toRight(bar));
    barFront.addEventListener("click", () => toFront(bar));
    barRotate.addEventListener("click", () => rotate(bar));
    barLeft.addEventListener("click", () => toLeft(bar));
    barBack.addEventListener("click", () => toBack(bar));
    barRemove.addEventListener("click", () => removeModel(bar, barBtn, barCtr));

    // Wohnwand -------------------------------------------------------------------------->
    wohnBtn.addEventListener("click", () => {
        loader.load(`${path}/wohnwand/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            wohn = gltf.scene;
            wohn.castShadow = true;
            wohn.receiveShadow = true;
            wohn.scale.x = 1;
            wohn.scale.y = 1;
            wohn.scale.z = 1;
            wohn.position.x = -2;
            wohn.position.z = -4;
            wohn.rotation.y = -Math.PI/0.5;
        })

        btnShowHide(wohnBtn, wohnCtr);
    });

    wohnCtr.addEventListener("click", () => getCtr(wohnControlles, wohnCtr));
    wohnRight.addEventListener("click", () => toRight(wohn));
    wohnFront.addEventListener("click", () => toFront(wohn));
    wohnRotate.addEventListener("click", () => rotate(wohn));
    wohnLeft.addEventListener("click", () => toLeft(wohn));
    wohnBack.addEventListener("click", () => toBack(wohn));
    wohnRemove.addEventListener("click", () => removeModel(wohn, wohnBtn, wohnCtr));
    
    // Kaffee-Shop ------------------------------------------------------------------------>
    kaffeeBtn.addEventListener("click", () => {
        loader.load(`${path}/coffee_shop/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            kaffee = gltf.scene;
            kaffee.castShadow = true;
            kaffee.receiveShadow = true;
            kaffee.scale.x = 0.01;
            kaffee.scale.y = 0.01;
            kaffee.scale.z = 0.01;
            kaffee.position.x = -5;
            kaffee.position.z = 0;
            kaffee.rotation.y = -Math.PI;
        })

        btnShowHide(kaffeeBtn, kaffeeCtr);
    });

    kaffeeCtr.addEventListener("click", () => getCtr(kaffeeControlles, kaffeeCtr));
    kaffeeRight.addEventListener("click", () => toRight(kaffee));
    kaffeeFront.addEventListener("click", () => toFront(kaffee));
    kaffeeRotate.addEventListener("click", () => rotate(kaffee));
    kaffeeLeft.addEventListener("click", () => toLeft(kaffee));
    kaffeeBack.addEventListener("click", () => toBack(kaffee));
    kaffeeRemove.addEventListener("click", () => removeModel(kaffee, kaffeeBtn, kaffeeCtr));

    // Liege-Sofa ------------------------------------------------------------------------>
    sofaBtn.addEventListener("click", () => {
        loader.load(`${path}/liege_sofa/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            sofa = gltf.scene;
            sofa.castShadow = true;
            sofa.receiveShadow = true;
            sofa.scale.x = 0.01;
            sofa.scale.y = 0.01;
            sofa.scale.z = 0.01;
            sofa.position.x = -5;
            sofa.position.z = 2.5;
            sofa.rotation.y = -Math.PI/0.5;
        })

        btnShowHide(sofaBtn, sofaCtr);
    });

    sofaCtr.addEventListener("click", () => getCtr(sofaControlles, sofaCtr));
    sofaRight.addEventListener("click", () => toRight(sofa));
    sofaFront.addEventListener("click", () => toFront(sofa));
    sofaRotate.addEventListener("click", () => rotate(sofa));
    sofaLeft.addEventListener("click", () => toLeft(sofa));
    sofaBack.addEventListener("click", () => toBack(sofa));
    sofaRemove.addEventListener("click", () => removeModel(sofa, sofaBtn, sofaCtr));

    // Kamera
    let camera = new THREE.PerspectiveCamera(
        45,
        container.clientWidth / container.clientHeight,
        1,
        1000
    );
    camera.position.x = 5;
    camera.position.y = 8;
    camera.position.z = 12;

    camera.lookAt(new THREE.Vector3(0, 0, 0));

    const renderer = new THREE.WebGLRenderer({antialias: true, alpha: false});
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    
    update(renderer, scene, camera, controls);

    return scene;
}

if(containerWidth < 500){
    mobileContainer.style.display = "block";
}else{
    mobileContainer.style.display = "none";
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

function removeModel(model, show, hide){
    scene.remove(model);
    controlles.forEach(ctr => {
        ctr.style.display = "none";
    })
    show.style.display = "flex";
    hide.style.display = "none";
    
}

