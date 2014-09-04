<html lang="zh-tw">
<!DOCTYPE html>
<meta charset="utf-8" />
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=0" /> 
		<link rel="stylesheet" type="text/css" href="css/fixbar.css" >
		<style type="text/css">
			.index_frame{
				position:relative;top:0;right:0;left:0;
				margin-left:auto;
				margin-right:auto;
				width:1140px;
				height:3000px;
				background-image:url('img/bg.png');
				background-size:1140px 100%;
				background-repeat:no-repeat;
				background-position:center;
			}
			
			.backtothetop{
					position:absolute;
					top:2300px;
					left:900px;
					color:white;
			}
			#side-nav {
				position: fixed;
				z-index: 1000;
				top: 50%;
				right: 100px;
				width: 20px;
				margin-top: -77px;
				padding: 0;
			}
			#side-nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}
			#side-nav ul li {
				margin: 12px 0;
			}
			#side-nav ul li a {
				display: block;
				width: 12px;
				text-indent: 100%;
				white-space: nowrap;
				overflow: hidden;
				opacity: 0.5;
				-webkit-transition: all linear 0.25s;
				transition: all linear 0.25s;
			}
			#side-nav ul li a:hover, #side-nav ul li a:focus, #side-nav ul li a.curr {
				opacity: 1;
			}
			#side-nav ul li a.pointnav {
				height: 12px;
				padding: 0;
				background: #fff;
				-webkit-border-radius: 7px;
				border-radius: 7px;	
			}

		
		</style>
	</head>
	
	<body style="overflow-x: hidden;margin:0 0 0 0 ;background-color:#333333;">
		<?php $memberNo=0;?>
		<div class='index_frame' id='frame'>
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
							<li><a href=".."><img src="img/forum.png"></a></li>
							<li><a href="../jsstl-master/index.php"><img src="img/print.png"></a></li>
							<li><a href="../displayPlatform/index.php"><img src="img/platform.png"></a></li>
							<li><a href="../zhen/forum/forum_index.php"><img src="img/forum.png"></a></li>	
						</ul>
						<span class="logo"><a href="../index.php"><img src="img/print_img/choose.png"></a></span>
						<span class="nav uploadbutton" ><a href="/showMode/file_upload.php"><img src="img/upload.png"></a></span>
					</div>
				</div>
			</div>
			
			
			<p style='position:relative;color:red;opacity:0.8;font-size:40px;font-family:Microsoft JhengHei;font-weight: bold;top:140px;left:120px;'>標題測試文字</p>
				<div class='folder_frame'>
					
				</div>
			
		<nav id="side-nav" role="navigation">
			<ul>
				<li><a class="pointnav href0" href="#headerlink" >head</a>
				</li>
				<li><a class="pointnav href1" href="#platformlink" >mid1</a>
				</li>
				<li><a class="pointnav href2" href="#printlink" >mid2</a>
				</li>
				<li><a class="pointnav href3" href="#forumlink" >mid3</a>
				</li>
				<li><a class="pointnav href4" href="#4" >bottom</a>
				</li>
			</ul>
		</nav>
			
		</div>	
	<script type="text/javascript" src="js/search.js"></script>
	<script type="text/javascript" src="http://demonstration.abgne.tw/jquery/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">

		document.getElementById("straightlineleft").style.height = document.getElementById("frame").clientHeight;
		document.getElementById("straightlineright").style.height = document.getElementById("frame").clientHeight;
		
		$(function(){
				$('a.href0').click(function(){
					var $wholepage = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
					
					$wholepage.animate({
						scrollTop: $('#headerlink').offset().top //可+-運算，不可用50%等
						//scrollTop:500
					},1000);
			
					return false;
				});
		});
		$(function(){
				$('a.href1').click(function(){
					var $wholepage = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
					
					$wholepage.animate({
						scrollTop: $('#platformlink').offset().top -300//可+-運算，不可用50%等
						//scrollTop:500
					},1000);
			
					return false;
				});
		});
		$(function(){
				$('a.href2').click(function(){
					var $wholepage = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
					
					$wholepage.animate({
						scrollTop: $('#printlink').offset().top -250//可+-運算，不可用50%等
						//scrollTop:500
					},1000);
			
					return false;
				});
		});
		$(function(){
				$('a.href3').click(function(){
					var $wholepage = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
					
					$wholepage.animate({
						scrollTop: $('#forumlink').offset().top -480//可+-運算，不可用50%等
						//scrollTop:500
					},1000);
			
					return false;
				});
		});
		$(function(){
				$('a.href4').click(function(){
					var $wholepage = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
					
					$wholepage.animate({
						scrollTop: $('#4').offset().top//可+-運算，不可用50%等
						//scrollTop:500
					},1000);
			
					return false;
				});
			});
	</script>
			<!--<img src="img/bg.png" width=100% style="float:left;">-->
	</body>
</html>