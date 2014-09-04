
	// standard global variables

var container, scene,sceneCube, camera, plane, renderer, controls , textMesh= [] , textColor=0xdddddd,custom=["Hello","3Dink!","johnhckuo"], textSize=50,textHeight=30 ,textFont='helvetiker';
//mouse move detect event
var projector = new THREE.Projector();
var mouseVector = new THREE.Vector3();
var objects = [],objectCount=0;;
var createdObject = [] , objectOffset = [];
var mouse = new THREE.Vector2(),offset = new THREE.Vector3(),INTERSECTED, SELECTED;
var geometryMerge = new THREE.Geometry();
var convertFlag=0;
var exportTarget;

function $(id){
	return document.getElementById(id);
}


function init() {

    // SCENE
    scene = new THREE.Scene();

    // CAMERA

    var VIEW_ANGLE = 45, ASPECT = window.innerWidth/window.innerHeight, NEAR = 0.1, FAR = 20000;
    camera = new THREE.PerspectiveCamera( VIEW_ANGLE, ASPECT, NEAR, FAR);
    scene.add(camera);
    camera.position.set(0,500,window.innerWidth);
	
	//  camera.lookAt(scene.position);
    renderer = new THREE.WebGLRenderer( {antialias:true, alpha: true } );
    renderer.setSize(window.innerWidth, window.innerHeight);
	renderer.setClearColor( 0x000000, 1 );
    container = document.getElementById( 'div1' );
    container.appendChild( renderer.domElement );
	
	
	
	// CONTROLS
	controls = new THREE.TrackballControls( camera, renderer.domElement );
	controls.rotateSpeed = 1.0;
	controls.zoomSpeed = 1.2;
	controls.panSpeed = 0.2;
	 
	controls.noZoom = false;
	controls.noPan = false;
	 
	controls.staticMoving = false;
	controls.dynamicDampingFactor = 0.3;
	 
	controls.minDistance = 0.1;
	controls.maxDistance = 20000;
	 
	controls.keys = [ 16, 17, 18 ]; // [ rotateKey, zoomKey, panKey ]
	


	//stat
    stats = new Stats();
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.right = '0px';
    stats.domElement.style.top = '0px';
    container.appendChild(stats.domElement);

    // LIGHT
    var light = new THREE.PointLight(0xffffff,2);
	light.position.set(0,1000,100);

    scene.add(light);

	
	
    // add 3D text default

	
	for (var i = 0 ;i<3; i++){
		var material = new THREE.MeshPhongMaterial({
			color: textColor,
			shininess: 30,
			specular: 0x555555
		});
		var textGeom = new THREE.TextGeometry( custom[i], {
			font: textFont,
			size: textSize,
			height: textHeight,
			curveSegments: 10,
			bend:true
		});
	
		textMesh[i] = new THREE.Mesh( textGeom, material );
		textMesh[i].name = "obj."+objectCount++;;
		textGeom.computeBoundingBox();
		var textWidth = textGeom.boundingBox.max.x - textGeom.boundingBox.min.x;
		//textMesh[i].rotation.x=Math.PI*1.5;
		textMesh[i].position.set( 0, 0, -500+i*500 );  
		scene.add( textMesh[i] );
		objects.push(textMesh[i]);                 //for checking mouseover usage
		objectOffset.push(0);
		
	}
//	THREE.GeometryUtils.merge(geometryMerge, textMesh[0]);                     // --------------------STL converter modified
	//plane create
	var geometry = new THREE.PlaneGeometry( window.innerWidth, window.innerWidth );
	var texture = THREE.ImageUtils.loadTexture( 'img/plane.png' );
	var material = new THREE.MeshBasicMaterial( { side: THREE.DoubleSide,map: texture } );
	plane = new THREE.Mesh( geometry, material );
	plane.name = "plane";
	scene.add( plane );
	plane.position.set(0,0,-10);
	plane.rotation.x=Math.PI*1.5;
	
	
	//fog 
	scene.fog = new THREE.Fog(0xffffff,100,20000);
	
	
	//skybox
	var imagePrefix = "img/";
	var imageSuffix = ".jpg";
	var skyGeometry = new THREE.BoxGeometry( 5000, 5000, 5000 );	
	
	var materialArray = [];
	for (var i = 0; i < 6; i++)
		materialArray.push( new THREE.MeshBasicMaterial({
			map: THREE.ImageUtils.loadTexture( imagePrefix + 'back' + imageSuffix ),
			side: THREE.BackSide
		}));
	var skyMaterial = new THREE.MeshFaceMaterial( materialArray );
	var skyBox = new THREE.Mesh( skyGeometry, skyMaterial );
	scene.add( skyBox );
	
	//axes
	axes = buildAxes( 2500 );
	scene.add(axes);

	
	
	
	// EventListener
	renderer.domElement.addEventListener( 'mousemove', onDocumentMouseMove, false );
	renderer.domElement.addEventListener( 'mousedown', onDocumentMouseDown, false );
	renderer.domElement.addEventListener( 'mouseup', onDocumentMouseUp, false );
	
	renderer.domElement.addEventListener('dblclick', lockDown , false);
	
	window.addEventListener( 'resize', onWindowResize, false );
	
}

function loading(flag){
//	background.style.opacity = 0;
	var div = document.getElementById("loading");
	if (flag == 1){
		div.style.display='inline';
	}else if (flag == 0 ){
		div.style.display='none';
	}
	
}

function onWindowResize() {

	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( window.innerWidth, window.innerHeight );

}

function save() {
	loading(1);

		var stl = startExport();
		var blob = new Blob([stl], {type: 'text/plain'});
		saveAs(blob, 'test.stl');
		
}

function startExport(){
    exportGeo = removeDuplicateFaces( geometryMerge );
    //THREE.GeometryUtils.triangulateQuads( geometryMerge );
	
    var stl = generateSTL();
	if (convertFlag)
		loading(0);
    return stl;
}

	
function animate() {
	window.requestAnimationFrame( animate );
	stats.update();
	controls.update(); //for cameras
	renderer.render( scene, camera );
}