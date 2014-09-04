<?php 
	ini_set('display_errors', 'On');
	@$Account=$_SESSION['Account'];
	@$facebookID=$_SESSION['id'];
	$folderNo=$_GET['folderNo'];
	$memberNo=$_GET['memberNo'];//作者編號
	$folderName=$_GET['folderName'];
	require_once("/var/www/db/dblogin.php");
	require_once("/var/www/db/dbconnect.php");
	$db=new DB();
	$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
	$sql2="SELECT 2dimageLink FROM platform WHERE personalfolderNo = ".$folderNo." and memberNo = ".$memberNo."";
	$result2 = $db->query($link,$sql2);//圖片連結
	echo "<span class='folder_title'>".$folderName."</span>";
	while($row2 = mysqli_fetch_row($result2)){
		$sql3="SELECT pictureName FROM platform WHERE 2dimageLink = '".$row2['0']."'";
		$result3 = $db->query($link,$sql3);//圖片名稱
		$row3 = mysqli_fetch_row($result3);
		echo "<div onclick='CollapseExpand(this)'>";
		echo "<img src='../showMode/".$row2[0]."' >";
		echo "<div class='pictureName'>".$row3[0]."</div>";
		echo "<div class='picinfo_hidden'></div>";
		echo "</div>";
	}
?>

<script type='text/javascript'>
	var divID = "picinfo";
		function CollapseExpand(obj) {
			var divObject = document.getElementById(divID);
			//var currentCssClass = divObject.className;
			if (divObject.className == "picinfo"){
				//divObject.className = "content_opacity";
				divObject.style.WebkitAnimationName = 'fadin';
				setTimeout(function () {  
					divObject.className = "picinfo_hidden";
				}, 1000);  
			}
			else{
				divObject.style.WebkitAnimationName = 'fadout';
				divObject.className = "picinfo";
			}
		}
</script>