<html lang="zh-tw">
<!DOCTYPE html>
<meta charset="utf-8" />

<head>
	<title></title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=0" /> 
	<link rel=stylesheet type="text/css" href="../css/fixbar.css" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
		@-webkit-keyframes fadin {
			0% { opacity: 1; }
			20% { opacity: 0.9; }
			40% { opacity: 0.7; }
			60% { opacity: 0.5; }
			80% { opacity: 0.3; }
			100% { opacity: 0; }
		}
		@-webkit-keyframes fadout {
			0% { opacity: 0; }
			20% { opacity: 0.3; }
			40% { opacity: 0.5; }
			60% { opacity: 0.7; }
			80% { opacity: 0.9; }
			100% { opacity: 1; }
		}
		.folder_frame{
			position:relative;
			background-image:url(../img/frame.png);
			background-size:940px 650px;
			height:650px;
			width:940px;
			margin:150px auto 0 auto;
		}
		.folder_name{
			position:relative;
			background-image:url(../img/frame.png);
			background-size:100% 100%;
			float:left;
			height:650px;
			width:170px;
			font-weight: bold;
			font-size:24px;
			color:#999999;
			font-family:Microsoft JhengHei;
			overflow-x:auto;
			padding-bottom:5px;
		}
		.folder_namediv>a:hover{
			color:#fed116;
			opacity:1;
		}
		.folder_name>div{
			margin:10px 10px 10px 20px;
			overflow:hidden;
			text-overflow:ellipsis;
			white-space: nowrap;
		}
		.folder_namediv>a{
			text-decoration:none;
			color:#ffffff;
			border-width : 1px;
			-webkit-border-top-left-radius:5px;
			-webkit-border-top-right-radius:5px;
			-webkit-border-bottom-left-radius:5px;
			-webkit-border-bottom-right-radius:5px;
			cursor: pointer;
			*-webkit-transition: all .1s;
			opacity: 0.3;
		}
		.folder_title{
			position:relative;top:0;right:0;left:0;
			margin-left:auto;
			margin-right:auto;
			margin-top:10px;
			width:600px;
			text-align:center;
			font-family:Microsoft JhengHei;
			color:#fed116;
			font-size:38px;
			display:block;
		}
		.folder_content{
			float:left;
			width:750px;
			height:600px;
			*margin-top:20px;
			margin-left:20px;
			overflow-x:auto;
		}
		.folder_content>div{
			float:left;
			text-align:center;
		}
		.folder_content>div>img:hover{
			*opacity:1;
		}
		.folder_content>div>img{
			width:150px;
			height:150px;
			margin:10px 10px 10px 10px;
			background-color:#999999;
			border-width : 1px;
			-webkit-border-top-left-radius:5px;
			-webkit-border-top-right-radius:5px;
			-webkit-border-bottom-left-radius:5px;
			-webkit-border-bottom-right-radius:5px;
			cursor: pointer;
			*-webkit-transition: all .5s;
			*opacity: 0.3;
		}
		.pictureName:hover{
			color:#fed116;
			opacity:1;
		}
		.pictureName{
			font-size:16px;
			color:#FFFFFF;
			font-family:Microsoft JhengHei;
			cursor: pointer;
			opacity: 0.3;
		}
		.picinfo{
			position:absolute
			width:200px;
			height:150px;
			background-color:white;
			left:50px;
			-webkit-animation: none 1s;
		}
		.picinfo_hidden{
			display:none;
		}
	</style>
	


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
						<li><a href=".."><img src="img/forum.png"></a></li>
						<li><a href="../jsstl-master/index.php"><img src="../img/print.png"></a></li>
						<li><a href="../displayPlatform/index.php"><img src="../img/platform.png"></a></li>
						<li><a href="../zhen/forum/forum_index.php"><img src="../img/forum.png"></a></li>	
					</ul>
					<span class="logo"><a href="../index.php"><img src="../img/print_img/choose.png"></a></span>
					<span class="nav uploadbutton" ><a href="../showMode/file_upload.php"><img src="../img/upload.png"></a></span>
				</div>
			</div>
		</div>
		
		<div class='folder_frame'>
			<div class='folder_name'>
				<?php include('folder_name.php'); ?>
			</div>
			<div class='folder_content'>
				<?php include('folder_content.php'); ?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../js/search.js"></script>
	<script type="text/javascript">
		document.getElementById("straightlineleft").style.height = document.getElementById("frame").clientHeight;
		document.getElementById("straightlineright").style.height = document.getElementById("frame").clientHeight;
		
		
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
		
		
		
		var arr = document.getElementsByClassName("folder_namediv");

		function $(id){
			return document.getElementById(id);
		}
		
		(function rockon(item){
		//	alert(item);
			//alert(location.search);
			var value = "<?php echo $_GET["folderNo"];?>";
		//	var light=document.getElementById(value);
			//	alert(value);
				document.getElementById(value).style.color = "#fed116";
			//	alert(value);
				document.getElementById(value).style.opacity = 1;
				//console.log(color.style.opacity);
				
		})();
	</script>

</body>
</html>

