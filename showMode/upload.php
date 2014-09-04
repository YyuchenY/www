<?php
session_start();
$uploaddir="upload";  
require_once("../db/dblogin.php");
require_once("../db/dbconnect.php");
$memberNo=$_SESSION["No"];
if (isset($_POST["name"]) && isset($_POST["introduction"] )){
	$arr=array();
	$file=array();
	$flag=array(0,0,0);
	$arr[0] = $_POST["name"];
	$arr[1] = $_POST["category"];
	$arr[2] = $_POST["folder"];
	$arr[3] = $_POST["introduction"];
	//圖片授權
	$arr[4]=$_POST["authorization"];
	$arr[5]=$_POST["auzPrice"];
	//創建資料夾
	//$arr[6]=$_POST["create"]; 
	$arr[6]=$_POST["folderName"];
	
	
	for ($key=0 ; $key<2 ; $key++){   // change to 3 when physical is added
	
	if (!empty($_FILES["normData"]["name"][$key])){
		$file[$key] = $uploaddir."/".$_FILES["normData"]["name"][$key];
		$flag[$key]=1;
	}else{
		$file[$key] = $uploaddir."/".$_POST['dragData'][$key];
		
	}
	
	if ($flag[$key]){
			$tmp_name = $_FILES["normData"]["tmp_name"][$key];
			move_uploaded_file($tmp_name, $file[$key]);
	}
}

	
	$db=new DB();
	$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
	
	$imageSize=$_POST["dragSize"];
	$imageSize=(int)$imageSize;

	if($_POST["create"]==1){	//是否創資料夾
		$addsql="INSERT INTO personal_folder(folderName) VALUE ('$arr[6]')";
		$result = $db->query($link,$addsql);	
		$search= "SELECT folderNo FROM personal_folder WHERE folderName='$arr[6]' ORDER BY folderName DESC LIMIT 1";
		$result2 = $db->query($link,$search);	
		$row= mysqli_fetch_row($result2);
		//作者是否授權
		if($arr[4]==1){
			$sql= "INSERT INTO platform(  `pictureNo` , `pictureName` ,  `3dimageLink` , `3dimageSize(kb)`,`2dimageLink`  ,  `productInfo` ,  `Score` ,  ` Hitrate`  , `authorizePrice` ,`memberNo` , `categoryNo`, `personalFolderNo`)  VALUES ('','$arr[0]',  '$file[0]', '$imageSize', '$file[1]',  '$arr[3]',  '0',  '0' ,'$arr[5]', '$memberNo' , '$arr[1]','$row[0]')";// modify when physical is added  //
			$result = $db->query($link,$sql);
		}
		else if($arr[4]==0){
			$sql= "INSERT INTO platform(  `pictureNo` , `pictureName` ,  `3dimageLink` , `3dimageSize(kb)`,`2dimageLink`  ,  `productInfo` ,  `Score` ,  ` Hitrate`  ,`memberNo` , `categoryNo`, `personalFolderNo`)  VALUES ('','$arr[0]',  '$file[0]', '$imageSize', '$file[1]',  '$arr[3]',  '0',  '0' , '$memberNo' , '$arr[1]','$row[0]'')";// modify when physical is added
			$result = $db->query($link,$sql);
		}		
	}
	else if($_POST["create"]==0){
		//作者是否授權
		if($arr[4]==1){
			$sql= "INSERT INTO platform(  `pictureNo` , `pictureName` ,  `3dimageLink` , `3dimageSize(kb)`,`2dimageLink`  ,  `productInfo` ,  `Score` ,  ` Hitrate`  , `authorizePrice` ,`memberNo` , `categoryNo`, `personalFolderNo`)  VALUES ('','$arr[0]',  '$file[0]', '$imageSize', '$file[1]',  '$arr[3]',  '0',  '0' ,'$arr[5]', '6' , '$arr[1]','$arr[2]')";// modify when physical is added  //
			$result = $db->query($link,$sql);
		}
		else if($arr[4]==0){
			$sql= "INSERT INTO platform(  `pictureNo` , `pictureName` ,  `3dimageLink` , `3dimageSize(kb)`,`2dimageLink`  ,  `productInfo` ,  `Score` ,  ` Hitrate`  ,`memberNo` , `categoryNo`, `personalFolderNo`)  VALUES ('','$arr[0]',  '$file[0]', '$imageSize', '$file[1]',  '$arr[3]',  '0',  '0' , '6' , '$arr[1]','$arr[2]')";// modify when physical is added
			$result = $db->query($link,$sql);
		}		
	}
	
	

}
else{
	foreach ($_FILES["ff"]["error"] as $key => $error) {
		if ($error == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES["ff"]["tmp_name"][$key];
			$name = $_FILES["ff"]["name"][$key];
			@move_uploaded_file($tmp_name, "$uploaddir/$name");
		}
	}
}

header("Location:index.php");

?>

