export const loader = new THREE.GLTFLoader();
export const path = "../03_code/03_visualizer/3dmodels/";

export class Model{
    constructor(x, y, z, posx, roty, modelFolder, ){
        this.x = x;
        this.y = y;
        this.z = z;
        this.posx = posx;
        this.roty = roty;
        this.modelFolder = modelFolder;
        
    }

    loadModel(){
        loader.load(`${path}/${this.modelFolder}/scene.gltf`, (gltf) => {
            scene.add(gltf.scene);
            gltf.scene.castShadow = true;
            gltf.scene.scale.x = this.x;
            gltf.scene.scale.y = this.y;
            gltf.scene.scale.z = this.z;
            gltf.scene.position.x = this.posx;
            gltf.scene.rotation.y = this.roty;
        })
    }

    removeModel(){
       scene.remove(gltf.scene) ;
    }
}