<?php
//$Account=$_SESSION['Account'];
//$data = array(); 


require_once("/var/www/db/dblogin.php");
require_once("/var/www/db/dbconnect.php");
$db=new DB();
$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
$sql="SELECT pictureNo, pictureName, 3dimageLink,2dimageLink, productInfo,Score,rateNumber,memberNo,authorizePrice FROM platform ORDER BY pictureNo DESC LIMIT 10";	
$keys = array();
$result = $db->query($link,$sql);
while ($row = mysqli_fetch_row($result) )
{
	
	$result= $db->query($link,$sql);//Nickname
	while ($row = mysqli_fetch_row($result)){
		$keys[]=$row;
		
	}	
	
	
}	

for($i=0;$i<10;$i++){
	echo $keys[$i][0].'+'.$keys[$i][1].'+'.$keys[$i][2].'+'.$keys[$i][3].'+'.$keys[$i][4].'+'.$keys[$i][5].'+'.$keys[$i][6].'+'.$keys[$i][7].'+'.$keys2[$i][0].'+'.$keys[$i][8]."+";
}




//$image3D = $row[$i]['3dimageLink'];
//$image2D = $row[$i]['2dimageLink'];
//$imagePhysical = $row[$i]['physicalImage'];

/*echo "<figure id=\"figure0\" >
		<img src=\"".$image2D."\"  width=\"180\" height=\"240\" alt=\"\">
		<span id=\"imageInfo0\" ></span>
	</figure>";*/


?>