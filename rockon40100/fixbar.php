<html lang="zh-tw">
<!DOCTYPE html>
<meta charset="utf-8" />

<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>

		$(window).resize(function(){
			window.location.reload();
		  });
	</script>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=0" /> 
	<link rel=stylesheet type="text/css" href="../css/fixbar.css" >


</head>

<body style="overflow-x: hidden;background-image:url(../img/bgcolor.png); ">
	<div class="navbar navbar-fixed-top" id='headerlink'>
		<div class="navbar-inner" >
			<div class='fixbarleft' id='fixbarleft'><img src='../img/fixbar_left.png'></div>
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
				<span class="nav uploadbutton" ><a href="../showMode/file_upload.html"><img src="../img/upload.png"></a></span>
			</div>
			<div class='fixbarright' id='fixbarright'><img src='../img/fixbar_right.png'></div>
		</div>
	</div>
	<script type="text/javascript" src="../js/search.js"></script>
	<script type="text/javascript">
		document.getElementById("fixbarleft").style.width = (document.getElementById("frame").clientWidth-940)/2;
		document.getElementById("fixbarright").style.width = (document.getElementById("frame").clientWidth-940)/2;
		document.getElementById("straightlineleft").style.height = document.getElementById("frame").clientHeight;
		document.getElementById("straightlineright").style.height = document.getElementById("frame").clientHeight;
	</script>
		
</body>
</html>