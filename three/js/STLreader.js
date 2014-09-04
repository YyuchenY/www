function STLreader(filename){	
	// ASCII file
	
	var loader = new THREE.STLLoader();
	loader.addEventListener( 'load', function ( event ) {

		var geometry = event.content;
		var material = new THREE.MeshPhongMaterial( { ambient: 0xff5533, color: 0xff5533, specular: 0x111111, shininess: 200 } );
		var mesh = new THREE.Mesh( geometry, material );

		mesh.position.set( 0, 0, 0 );
		mesh.rotation.set( Math.PI*1.5, 0, 0 );
		mesh.scale.set( 10, 10, 10 );

		mesh.castShadow = true;
		mesh.receiveShadow = true;
		scene.add( mesh );
		objects.push(mesh);
		sumCreator(mesh,0);
	} );
	loader.load( 'stl/'+filename+'.STL' );

	

/*

	// Binary files

	var material = new THREE.MeshPhongMaterial( { ambient: 0x555555, color: 0xAAAAAA, specular: 0x111111, shininess: 200 } );

	var loader = new THREE.STLLoader();
	loader.load( 'stl/'+filename+'.STL'  );
	loader.addEventListener( 'load', function ( event ) {

		var geometry = event.content;
		var mesh = new THREE.Mesh( geometry, material );

		mesh.position.set( 0, - 0.37, - 0.6 );
		mesh.rotation.set( - Math.PI / 2, 0, 0 );
		mesh.scale.set( 2, 2, 2 );

		mesh.castShadow = true;
		mesh.receiveShadow = true;
		startExport(mesh);
		scene.add( mesh );
		
	} );
*/

}