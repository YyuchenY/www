<html lang="en">
<!DOCTYPE html>
<meta charset="utf-8" />

<head>
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=0" />
    <link rel=stylesheet type="text/css" href="../css/fixbar.css" >
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<style media="screen">
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

		.container {
			position:relative;
			top:-5%;
			width:1000px;
			height:1000px; 
			margin-left: auto; 
			margin-right:auto;
			-webkit-perspective: 1200px;  
			-webkit-transition:all 1s;
			-webkit-perspective-origin-y:75%;
			-webkit-transform-origin:center center;
			-webkit-transition:all 1s;
		}
		#carousel {
			width: 100%;
			height: 100%;
			position: absolute;
			left:50%;
			top:50%;
			width:1000px;
			height:1000px;
			margin-top: -570px;  
			margin-left: -500px;  
			-webkit-transform-style: preserve-3d; 
			-webkit-transform-origin:center center;
			-webkit-transition:all 0.5s;
		}
		#carousel figure {
			display: block;
			position: absolute;
			left:50%;
			top:50%;
			margin-top: -55px;  
			margin-left: -55px;  	
			font-size: 80px;
			font-weight: bold;
			color: white;
			text-align: center;
			-webkit-transition:all 1s;
			opacity:0; 
		}
		#carousel figure div{
			margin-top:20px; 
			width:115px; 
			height:115px;	
		}
		#carousel figure div span{
			-webkit-transition:all 0.5s;
			padding-top:2.5px;
			padding-left:2.5px;
			padding-right:2.5px;
			padding-bottom:2.5px;
			position:absolute;
			width:110px;
			height:110px;
			background:black;
			opacity:0;
			color:#ffffff;
			font-size:5px;
			text-align:center;
		} 
		#carousel figure div:hover span{
			opacity:0.7;
		}
		#carousel figure div img{ 
			width:100%; 
			height:100%;
		}
		#previous{
			position:absolute;
			left:50px;
			top:250px;
		}
		#next{
			position:absolute;
			right:50px;
			top:250px;
		}
		.category{
			position:relative;
			top:-20%;
			width:940px;
			margin-left:auto;
			margin-right:auto;
		}
		.category_title{
			background-image:url(../img/frame.png);
			background-size:100% 100%;
			width:920px;
			*height:50px;
			padding-top:10px;
			font-family:Microsoft JhengHei;
			cursor: pointer;
		}
		.category_title>span{
			height:30px;
			width:120px;
			margin-left:auto;
			margin-right:auto;
			font-weight: bold;
			font-size:28px;
			color:#fed116;
			opacity:0.6;
			display:block;
			text-align:center;
		}
		.category_content{
			background-image:url(../img/frame.png);
			background-size:100% 100%;
			width:920px;
			height:220px;
			font-weight: bold;
			font-size:28px;
			color:#FFFFFF;
			font-family:Microsoft JhengHei;
			text-align:center;
			overflow-x:auto;	
			display:block;
			transation:0.3sec;
			-webkit-animation: none 1s;
		}
		
		.category_content>div{
			height:100px;
			width:25px;
			margin:10px 20px 10px 20px;
			border-width : 1px;
			-webkit-border-top-left-radius:5px;
			-webkit-border-top-right-radius:5px;
			-webkit-border-bottom-left-radius:5px;
			-webkit-border-bottom-right-radius:5px;
			cursor: pointer;
			opacity: 0.3;
			float:left;
		}
		.category_content>div:hover{
			color:#fed116;
			opacity:1;
		}
		.content_hidden{
			display:none;
		}
		.categoryhr{
			position:relative;
			background-color:#fed116;
			size:2;
			border:0;
			height:1px;
			*opacity:0.6;
			margin-top:10px;
			margin-bottom:0px;
		}

	
	</style>
	<script language="javascript" type="text/javascript">

		var divID = "category_content";
		function CollapseExpand(obj) {
			var divObject = document.getElementById(divID);
			var currentCssClass = divObject.className;
			if (obj != null)
				$('collapseTitle').innerHTML=obj.innerHTML;
			if (divObject.className == "category_content"){
				//divObject.className = "content_opacity";
				divObject.style.WebkitAnimationName = 'fadin';
				setTimeout(function () {  
					divObject.className = "content_hidden";
				}, 1000);  
			}
			else{
				divObject.style.WebkitAnimationName = 'fadout';
				divObject.className = "category_content";
			}
		}
	</script>
</head>

<body style="overflow-x: hidden;margin:0 0 0 0 ;background-color:#333333;">
		<?php $memberNo=0;?>
		<div class='frame' id='frame'>
			<div class='straightline'id='straightlineleft' style="float:left"></div>
			<div class='straightline'id='straightlineright' style="float:right"></div>
			<div class="navbar navbar-fixed-top" id="headerlink">
				<div class="navbar-inner" id="navbar-inner">
					<div class="navcontainer" >
						<?php include('./zhen/login_success.php')  ?>
						<ul class="nav searchbox">
							<li><input type="text" id='searchbox'  placeholder="搜尋" style="font-color:#a1a1a1" onkeydown="search()"></li>
						</ul> 
						<ul class="nav button">
							<li><a href=".."><img src="../img/forum.png"></a></li>
							<li><a href="../jsstl-master/index.php"><img src="../img/print.png"></a></li>
							<li><a href="../displayPlatform/index.php"><img src="../img/platform.png"></a></li>
							<li><a href="../zhen/forum/forum_index.php"><img src="../img/forum.png"></a></li>	
						</ul>
						<span class="logo"><a href="../index.php"><img src="../img/print_img/choose.png"></a></span>
						<span class="nav uploadbutton" ><a href="/showMode/file_upload.php"><img src="../img/upload.png"></a></span>
					</div>
				</div>
			</div>

			<section class="container" id="container">
				<div id="carousel" class="target-paused">
					<figure id = "figure0"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure1"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure2"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure3"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure4"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure5"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure6"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure7"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure8"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure9"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure10"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure11"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure12"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure13"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure14"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure15"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure16"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure17"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
					<figure id = "figure18"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/1.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/2.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/3.jpg" /></figure>
					<figure id = "figure19"><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/4.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/5.jpg" /></div><div><span><h1>Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></span><img src="img/6.jpg" /></figure>
				</div>
			</section>

			<section id="options">
				<p id="navigation">
				  <button id="previous" data-increment="-1">Previous</button>
				  <button id="next" data-increment="1">Next</button>
				</p>
			</section>
	
			<div id="category" class="category">
				<!--<input id="Button1" type="button" value="Collapse/Expand" onclick="return CollapseExpand()" />-->
				<div class="category_title" id="Button1" type="button"  onclick="return CollapseExpand()">
					<span id="collapseTitle">熱門</span>
					<hr class="categoryhr">
				</div>
				<div id="category_content" class="category_content">
					
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">玩具</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">公仔</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">服飾</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">零件</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">醫療</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">建築</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">藝術設計</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">生活用品</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">客製化</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">特殊</div>
					<div id="Button1" type="button"  onclick="CollapseExpand(this)">熱門</div>
				</div>
			</div>
		</div>
	<script src="js/utils.js"></script>
	<script src="js/createList.js"></script>
	<script src="js/init.js"></script>
    <script type="text/javascript">
		document.getElementById("straightlineleft").style.height = document.getElementById("frame").clientHeight;
		document.getElementById("straightlineright").style.height = document.getElementById("straightlineleft").style.height;
		
		var count=0;
		var list = new List();
		var listCurrent;

		function $(id){
			return document.getElementById(id);
		}

		window.addEventListener( 'DOMContentLoaded', init, false);
    </script>
</body>
</html>


