<?php
//$Account=$_SESSION['Account'];
//$data = array(); 

require_once("/var/www/db/dblogin.php");
require_once("/var/www/db/dbconnect.php");
$db=new DB();
$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
$sql="SELECT pictureNo, pictureName, 3dimageLink,2dimageLink, productInfo,authorizePrice FROM platform WHERE memberNo=6";
//$sql="SELECT pictureNo, pictureName, 3dimageLink,2dimageLink, productInfo,Score,rateNumber,memberNo FROM platform WHERE updateTime IN (SELECT MAX(updateTime) FROM platform GROUP BY categoryNo)";
$result = $db->query($link,$sql);

while ($row = mysqli_fetch_row($result)){
	
	//$sql2="SELECT Nickname FROM member WHERE memberNo = ".$row[7]." ";
	//$result2= $db->query($link,$sql2);//Nickname
	//while ($row2 = mysqli_fetch_row($result2)){
		echo $row[0].'+'.$row[1].'+'.$row[2].'+'.$row[3].'+'.$row[4].'+'.$row[5].'+';
	//}
	
}


//$image3D = $row[$i]['3dimageLink'];
//$image2D = $row[$i]['2dimageLink'];
//$imagePhysical = $row[$i]['physicalImage'];

/*echo "<figure id=\"figure0\" >
		<img src=\"".$image2D."\"  width=\"180\" height=\"240\" alt=\"\">
		<span id=\"imageInfo0\" ></span>
	</figure>";*/


?>