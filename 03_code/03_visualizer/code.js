// Variables
let container = document.querySelector(".scene")

// Funktion was alles geladen werden soll
function init(){
    
    let scene = new THREE.Scene();
    let loader = new THREE.GLTFLoader();

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

    let renderer = new THREE.WebGLRenderer({antialias: true, alpha: false});
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    let controls = new THREE.OrbitControls(camera, renderer.domElement);
    
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
