<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" type="text/css" href="../css/fixbar.css" >
<link rel="stylesheet" type="text/css" href="../css/print_inquiry.css" >
<?php
	session_start();
	if( !isset($_SESSION['No']))
	{
		echo "<script language='javascript'>";
		echo "alert('尚未登入，請重新登入');";	
		echo "window.location.assign('../index.php');";
		echo "</script>";
		exit;
		//header('../index.php');
		//exit;
	}
	require_once("../db/dblogin.php");
	require_once("../db/dbconnect.php");
	$db=new DB();
	$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
	$orderNo=$_POST['order'];
	$sql="SELECT * FROM order_info where orderNo='$orderNo' ";
	$result= $db->query($link,$sql);
	if($result)
	{
		$row= mysqli_fetch_assoc($result);
		$orderStatus=$row['orderStatus'];
		$productNo=$row['productNo'];
	}
	$sql2="SELECT *FROM product WHERE productNo='$productNo' ";
	$result2= $db->query($link,$sql2);
	if ($result2)
	{
		$row2= mysqli_fetch_row($result2);
		$productName=$row2[1];
		$videoLink=$row2[2];
	}
?>
</head>
<body style="overflow-x: hidden;margin:0 0 0 0 ;background-color:#333333;">
	<div class='frame' id='frame'>
		<div class='straightline'id='straightlineleft' style="float:left"></div>
		<div class='straightline'id='straightlineright' style="float:right"></div>
		<div class="navbar navbar-fixed-top" id='headerlink'>
			<div class="navbar-inner" >
				<div class="navcontainer" >
					<?php include('../zhen/login_success.php')?>
					<ul class="nav searchbox">
						<li><input type="text" id='searchbox'  placeholder="搜尋" style="font-color:#a1a1a1" onkeydown="search()"></li>
					</ul> 
					<ul class="nav button">
						<li><a href="../jsstl-master/index.php"><img src="../img/print.png"></a></li>
						<li><a href="../displayPlatform/index.html"><img src="../img/platform.png"></a></li>
						<li><a href="../zhen/forum/forum_index.php"><img src="../img/forum.png"></a></li>
					</ul>
					<span class="logo"><a href="../index.php"><img src="../img/print_img/choose.png"></a></span>
					<span class="nav uploadbutton" ><a href="../showMode/file_upload.php"><img src="../img/upload.png"></a></span>
				</div>
			</div>
		</div>

		<div class="middle">
			<div class="product_name">
				<?php echo $productName?>
			</div>
			<div class="video_Link">
				<div  class="order_status">
					進度：<?php echo $orderStatus?>
				</div>
			<img src="http://140.127.220.81:9000/?action=stream" id="embed"/>
			</div>
		</div>
		<div class="previous_page">
			<a href="manage.php"  class="button2">上一頁</a>
		</div>
	</div>
</body>
</html>