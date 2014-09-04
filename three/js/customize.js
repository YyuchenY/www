var check = 0 ;
var pioneerCube;
var voxelNumber = 0 , voxelCoordinate = [] , voxel = [];
var voxelX , voxelY , voxelZ;
function customize(category) {
	
	var textGeom, textGeom2, textGeom3, material;
	
	if (category == "text"){
		
		custom[0] = $('custom1').value;
		custom[1] = $('custom2').value;
		custom[2] = $('custom3').value;
		//var custom =  e.keyCode;
		

	}else if (category == 'color'){
		
		var radios = document.mycolor.color;

		for (var i =0;i<radios.length ; i++){
			if (radios[i].checked){
				textColor=radios[i].value;
				console.log(textColor);
				break;
			}
		}
	}else if (category == 'font'){
		
		var radios = document.myfont.font;

		for (var i =0;i<radios.length ; i++){
			if (radios[i].checked){
				textFont=radios[i].value;
				console.log(textFont);
				break;
			}
		}
	}else if (category == 'size'){
		textSize = $('textSize').value;
	}else if (category == 'height'){	
		textHeight = $('textHeight').value;
	}
	
	
	for (var i=0; i<3 ; i++){
		scene.remove (textMesh[i]);
	
		material = new THREE.MeshPhongMaterial({
				color: textColor
		});
		textGeom = new THREE.TextGeometry( custom[i], {
				font: textFont,
				size: textSize,
				height: textHeight
		});
		
		var j=objects.indexOf(textMesh[i]);
		
		textMesh[i] = new THREE.Mesh( textGeom, material );
		textGeom.computeBoundingBox();
		var textWidth = textGeom.boundingBox.max.x - textGeom.boundingBox.min.x;	
		textMesh[i].position.set( 0, 0, -500+i*500);  
		scene.add( textMesh[i] );
		
		
		if (j!=-1)
			objects[j]=textMesh[i];
		
	}
	
}

function cylinder(){
	var material = new THREE.MeshPhongMaterial( {ambient: 0xffff00, color: 0xffffff, specular: 0x555555, shininess: 30} );

	var cube = new THREE.CubeGeometry(400, 400, 400);
	var cube_mesh = new THREE.Mesh(cube,material);
	cube_mesh.position.x = 100;
	var cube_bsp = new ThreeBSP( cube_mesh );

	var sphere = new THREE.SphereGeometry(300, 16, 16);
	var sphere_mesh = new THREE.Mesh(sphere,material);
	var sphere_bsp = new ThreeBSP( sphere_mesh );

	
	console.time('operation');
	var union = cube_bsp.union( sphere_bsp );
	console.timeEnd('operation');
	console.time('mesh');
	var mesh = new THREE.Mesh( union.toGeometry(), material );
	sumCreator(mesh,400/2);
}

function cubeCreator(){
//	var objectLength = 300;
//	var geometry = new THREE.BoxGeometry( objectLength, objectLength, objectLength );
//	var material = new THREE.MeshPhongMaterial( {ambient: 0xffff00, color: 0xffffff, specular: 0x555555, shininess: 30} );
//	var cube = new THREE.Mesh( geometry, material );
	
//	sumCreator(cube,objectLength/2);
//	currentOffset = objectLength/2;         //for cube to lie on the ground rightly	

	var loader = new THREE.STLLoader();
	loader.addEventListener( 'load', function ( event ) {

	var geometry = event.content;
	var material = new THREE.MeshPhongMaterial( { ambient: 0xff5533, color: 0xff5533, specular: 0x111111, shininess: 200 } );
	var mesh = new THREE.Mesh( geometry, material );

	mesh.position.set( 0, 0, 0 );
	mesh.rotation.set( 0, - Math.PI / 2, 0 );
	mesh.scale.set( 0.5, 0.5, 0.5 );

	mesh.castShadow = true;
	mesh.receiveShadow = true;

	sumCreator(mesh,0);

	} );
	
	loader.load( 'stl/20mm.stl' );



	
}

function sphereCreator(){
	var material = new THREE.MeshPhongMaterial({ambient: 0xffff00, color: 0xffffff, specular: 0x555555, shininess: 30});

	var objectRadius = 200;
	var segments = 32;

	var sphereGeometry = new THREE.SphereGeometry( objectRadius, 32, 32 );		
	var sphere = new THREE.Mesh( sphereGeometry, material );
	
	sumCreator(sphere,objectRadius);
//	currentOffset = objectRadius;
}

function ringCreator(){
	var stl_bsp, text_bsp , STLGeometry;
	var loader = new THREE.STLLoader();
	var text = document.getElementById("ringText").value.split("");
	var textSize = 10 , radius=10 ,textMesh ;
//	var totalGeometry = new THREE.TorusGeometry( radius, 1,25,25);
//	var text = ['E','W','.','I','l','y','j','o','h','n'];
	text = text.reverse();
	var xPos,yPos,count = Math.floor(4*radius/text.length ), currentX=radius ,  currentY= 0 , averageDegree = (180/text.length)*(Math.PI/180) ,averageCharNumber = Math.ceil(text.length/4) , section=1 , charCount=0;
	var coordinateX = [],coordinateY = [];
	
	var material = new THREE.MeshPhongMaterial({
		color: 0xffffff,
		shininess: 30,
		specular: 0x555555
	});
	
	loader.addEventListener( 'load', function ( event ) {

		STLGeometry = event.content;	
	//	STLGeometry.computeBoundingBox();
		var mesh = new THREE.Mesh( STLGeometry, material ); 
		mesh.position.set( 0, 0, 0 );
		var csgMesh = THREE.CSG.toCSG(mesh);
		var boundingBox = mesh.geometry.boundingBox.clone();
			alert('bounding box coordinates: ' + 
			'(' + boundingBox.min.x + ', ' + boundingBox.min.y + ', ' + boundingBox.min.z + '), ' + 
			'(' + boundingBox.max.x + ', ' + boundingBox.max.y + ', ' + boundingBox.max.z + ')' );
		
		radius = Math.floor(mesh.geometry.boundingBox.max.x-mesh.geometry.boundingBox.min.x);
		stl_bsp = new ThreeBSP( mesh);
	
		
		
		for (var i=0 ; i < text.length ; i++){

		
		//	alert(text[i]);
			var textGeom = new THREE.TextGeometry( text[i], {
			font: 'optimer',
			size: textSize,
			height: 10
			
			});
			xPos = radius*Math.cos(averageDegree*i);
			yPos = radius*Math.sin(averageDegree*i);
			var tan = Math.atan2(xPos,yPos);
		//	alert(tan)
			textMesh  = new THREE.Mesh( textGeom, material );
			textMesh.position.set(xPos, yPos, 0); 
			textMesh.rotation.x = Math.PI/2
			textMesh.rotation.y = -tan;    		// modify character angle slightly
			
			var csgText = THREE.CSG.toCSG(textMesh);
			
			text_bsp = new ThreeBSP( textMesh);
		//	textMesh.rotation.x=Math.PI*1.5;
		//	THREE.GeometryUtils.merge(totalGeometry,textMesh);
			
			csgMesh = csgMesh.union( csgText);
			
			
		}
		
		var geometry = THREE.CSG.fromCSG(csgMesh);
		
		var mesh_union = new THREE.Mesh( stl_bsp.toGeometry() , material );
		
		
	
		
		
		mesh_union.rotation.x=Math.PI*0.5;
		mesh_union.position.set( 0, 0, 0 );
		mesh_union.rotation.set( Math.PI*1.5, 0, 0 );
		mesh_union.scale.set( 1, 1, 1 );

		mesh_union.castShadow = true;
		mesh_union.receiveShadow = true;
		
		
		
		sumCreator(mesh_union,0);

		
	} );
	
	
	
	
	
//	mesh.rotation.x=Math.PI*0.5;
//	mesh.rotation.z=Math.PI/2;


	

//	currentOffset = ;  
loader.load( 'stl/2.STL' );
}


function reStart(){
	var container = document.getElementById("div1");
	if (controls.enabled){
		controls.enabled = false;
		container.addEventListener( 'mousemove', move, false );
		container.addEventListener( 'mousedown', down, false );
		container.addEventListener( 'mouseup', up, false );
	}
	else if (!controls.enabled){
		controls.enabled = true;
		check = 0;
		container.removeEventListener( 'mousemove', move, false );
		container.removeEventListener( 'mousedown', down, false );
		container.removeEventListener( 'mouseup', up, false );
	}
}

function down(event){
	event.preventDefault();
	controls.enabled = false;
	check = 1;
}
function move(event){
	event.preventDefault();
	var length = 100;
	
	if (check){
		var container = document.getElementById("div1");
		containerWidth = container.clientWidth;
		containerHeight = container.clientHeight;
		var projector = new THREE.Projector() , mouse = new THREE.Vector3();
		mouse.x = 2 * (event.clientX / containerWidth) - 1;
		mouse.y = 1 - 2 * ( event.clientY / containerHeight );
		var raycaster = projector.pickingRay( mouse.clone(), camera );
		var intersects = raycaster.intersectObject( plane );
		var geometry = new THREE.BoxGeometry( length, length, length );
		var material = new THREE.MeshBasicMaterial( {color: 0xffffff , wireframe:true} );
		var cube = new THREE.Mesh( geometry, material );
		cube.position.copy( intersects[0].point );
		cube.position.y = length/2;
		scene.add( cube);
	}

}
function up(event){
	event.preventDefault();
	check = 0;
	controls.enabled = false;
}



function voxelPainter(){
	var container = document.getElementById("div1");
	if (controls.enabled){
		controls.enabled = false;
		container.addEventListener( 'mousemove', voxelMove, false );
		container.addEventListener( 'mousedown', voxelDown, false );
		//container.addEventListener( 'mouseuo', up, false );
	}else{
		controls.enabled = true;
		container.removeEventListener( 'mousemove', voxelMove, false );
		container.removeEventListener( 'mousedown', voxelDown, false );
		//container.addEventListener( 'mouseuo', up, false );
		scene.remove(pioneerCube);
	}
}

function voxelMove(event){
	event.preventDefault();
	controls.enabled = false;
	
	scene.remove (pioneerCube);
	var length = 100;
	
	var intersects = intersectDetector(plane);
	var voxelIntersects;

	var geometry = new THREE.BoxGeometry( length, length, length );
	var material = new THREE.MeshBasicMaterial( {color: 0xff0000 , transparent : true , opacity:0.5} );
	pioneerCube = new THREE.Mesh( geometry, material );
	if (voxel.length>0){
		voxelIntersects = intersectsDetector(voxel);
		if (voxelIntersects.length > 0){
			var index = voxelIntersects[0].object.name.split('.')[1];
			if (voxelIntersects[0].point.x == (voxelCoordinate[index].x + length/2 )){
				voxelPlacement(length , 0 , 0 , index);
			}else if (voxelIntersects[0].point.x == (voxelCoordinate[index].x - length/2)){
				voxelPlacement(-length , 0 , 0 , index);
			}
			if (voxelIntersects[0].point.y == (voxelCoordinate[index].y + length/2 )){
				voxelPlacement(0 , length , 0 , index);
			}else if (voxelIntersects[0].point.y == (voxelCoordinate[index].y - length/2)){
				voxelPlacement(0 , -length , 0 , index);
			}
			if (voxelIntersects[0].point.z == (voxelCoordinate[index].z + length/2 )){
				voxelPlacement(0 , 0 , length , index);
			}else if (voxelIntersects[0].point.z == (voxelCoordinate[index].z - length/2)){
				voxelPlacement(0 , 0 , -length , index);
			}
		}else if (intersects.length > 0){
		
			voxelX = Math.ceil(intersects[0].point.x/length)*length;
			voxelY = length/2;
			voxelZ = Math.ceil(intersects[0].point.z/length)*length;
		}
	}else{
		voxelX = Math.ceil(intersects[0].point.x/length)*length;
		voxelY = length/2;
		voxelZ = Math.ceil(intersects[0].point.z/length)*length;
	}

	pioneerCube.position.set( voxelX, voxelY , voxelZ );
	scene.add ( pioneerCube );
}

function voxelPlacement(x , y ,z ,index){
	
	
	voxelX = voxelCoordinate[index].x + x;
	voxelY = voxelCoordinate[index].y + y;
	voxelZ = voxelCoordinate[index].z + z;


}



function voxelDown(event){
	event.preventDefault();
	controls.enabled = false;
	var length = 100;
	
	var materialArray = [];
	materialArray.push(new THREE.MeshBasicMaterial( { map: THREE.ImageUtils.loadTexture( 'img/grass.jpg' ) }));
	materialArray.push(new THREE.MeshBasicMaterial( { map: THREE.ImageUtils.loadTexture( 'img/grass.jpg' ) }));
	materialArray.push(new THREE.MeshBasicMaterial( { map: THREE.ImageUtils.loadTexture( 'img/grasstop.jpg' ) }));
	materialArray.push(new THREE.MeshBasicMaterial( { map: THREE.ImageUtils.loadTexture( 'img/dirt.jpg' ) }));
	materialArray.push(new THREE.MeshBasicMaterial( { map: THREE.ImageUtils.loadTexture( 'img/grass.jpg' ) }));
	materialArray.push(new THREE.MeshBasicMaterial( { map: THREE.ImageUtils.loadTexture( 'img/grass.jpg' ) }));
		
	var intersects = intersectDetector(plane);
	var geometry = new THREE.BoxGeometry( length, length, length );
	var material = new THREE.MeshFaceMaterial(materialArray);
	var cube = new THREE.Mesh( geometry, material );
	//for (var i in voxelCoordinate){
	//	if (voxelX == voxelCoordinate[i].x && voxelZ == voxelCoordinate[i].z && voxelY == voxelCoordinate[i].y)
	//		voxelY +=voxelY;
		
	//}
	
	cube.position.set( voxelX, voxelY , voxelZ );
	cube.name = "voxel."+voxelNumber;
	voxelNumber++;
	voxelCoordinate.push(cube.position);
	voxel.push(cube);
	scene.add ( cube );
	
	
}


function intersectDetector(object){
	var container = document.getElementById("div1");
	var containerWidth = container.clientWidth;
	var containerHeight = container.clientHeight;
	
	var projector = new THREE.Projector(), mouse = new THREE.Vector3();
	mouse.x = 2 * (event.clientX / containerWidth) - 1;
	mouse.y = 1 - 2 * ( event.clientY / containerHeight );
	var raycaster = projector.pickingRay( mouse.clone(), camera );
	var intersects = raycaster.intersectObject( object );
	return intersects;
}
function intersectsDetector(objects){
	var container = document.getElementById("div1");
	var containerWidth = container.clientWidth;
	var containerHeight = container.clientHeight;
	
	var projector = new THREE.Projector(), mouse = new THREE.Vector3();
	mouse.x = 2 * (event.clientX / containerWidth) - 1;
	mouse.y = 1 - 2 * ( event.clientY / containerHeight );
	var raycaster = projector.pickingRay( mouse.clone(), camera );
	var intersects = raycaster.intersectObjects( objects );
	return intersects;
}


function sumCreator(object,offset){

	object.name = "obj."+objectCount++;         //dot for string exploit
	objectOffset.push(offset);
	createdObject.push(object);
	object.position.set( 0,900,0 );
	object.geometry.computeFaceNormals();
	scene.add( object );
	objects.push(object);
	currentCreation = object;
	onCreateRenderer();
}

function onCreateRenderer(){

	for (var i = 0; i<createdObject.length ; i++){
		var index = createdObject[i].name.split('.')[1];
		if (createdObject[i].position.y <= objectOffset[index]){
			createdObject.splice(i,1);
			continue;
		}
		window.requestAnimationFrame(onCreateRenderer);
		createdObject[i].position.y-=30;
		
	}
}


function ha(){
	var loader = new THREE.STLLoader();
	loader.addEventListener( 'load', function ( event ) {

		var geometry = event.content;
		var material = new THREE.MeshPhongMaterial( { ambient: 0xff5533, color: 0xff5533, specular: 0x111111, shininess: 200 } );
		var mesh = new THREE.Mesh( geometry, material );
		mesh.position.set( 0, 0, 0 );
		mesh.rotation.set( Math.PI*1.5, 0, 0 );
		mesh.scale.set( 10, 10, 100 );
		mesh.castShadow = true;
		mesh.receiveShadow = true;
		var mesh_bsp = new ThreeBSP (mesh);
		

		
		scene.add( mesh );
		objects.push(mesh);
		
		var cube = new THREE.CubeGeometry(10, 10, 10);
		var cube_mesh = new THREE.Mesh(cube,material);
		cube_mesh.position.x = 100;
		var cube_bsp = new ThreeBSP( cube_mesh );
		
		var union = cube_bsp.union(mesh_bsp);
		var mesh = new THREE.Mesh( union.toGeometry(), material );
		sumCreator(mesh,0);
	} );
	loader.load( 'stl/2.STL' );
	
	
}