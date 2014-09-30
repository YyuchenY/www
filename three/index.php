<html>
	<head>
		<title>3Dink</title>
		<link rel="stylesheet" type="text/css" href="css/three.css" >
		<link rel="stylesheet" type="text/css" href="../css/fixbar.css" >
		<style type="text/css">
			
		</style>
	</head>
	<body style="overflow-x: hidden;margin:0 0 0 0 ;background-color:#333333;">
		<div class="navbar navbar-fixed-top" id='headerlink'>
			<div class="navbar-inner" >
			<div class='fixbarleft' id='fixbarleft'><img src='../img/fixbar_left.png'></div>
				<div class="navcontainer" >
					<?php include('../zhen/login_success.php')?>
					<ul class="nav searchbox">
						<li><input type="text" id='searchbox'  placeholder="搜尋" style="font-color:#a1a1a1" onkeydown="search()"></li>
					</ul> 
					<ul class="nav button">
							<li><a href=".."><img src="../img/forum.png"></a></li>
							<li><a href="../jsstl-master/index.php"><img src="../img/print.png"></a></li>
							<li><a href="../newShowmode/index.php"><img src="../img/platform.png"></a></li>
							<li><a href="../zhen/forum/forum_index.php"><img src="../img/forum.png"></a></li>	
					</ul>
					<span class="logo"><a href="../index.php"><img src="../img/print_img/choose.png"></a></span>
					<span class="nav uploadbutton" ><a href="../showMode/file_upload.php"><img src="../img/upload.png"></a></span>
				</div>
				<div class='fixbarright' id='fixbarright'><img src='../img/fixbar_right.png'></div>
			</div>
		</div>
		<script src="gcode-viewer/web/lib/modernizr.custom.93389.js"></script>
		<script src="js/drag.js"></script>
		<script src="js/THREEx.GeometryUtils.js"></script>
		<script src="js/ThreeText.js"></script>
		<script src="js/three.js"></script>
		<script src="js/csg.js"></script>
		<script src="js/ThreeCSG.js"></script>
		<script src="js/TrackballControls.js"></script>
		<script src="js/drag.js"></script>
		<script src="js/Stats.js"></script>
		<script src="fonts/helvetiker_bold.typeface.js"></script>
		<script src="fonts/helvetiker_regular.typeface.js"></script>
		<script src="fonts/optimer_bold.typeface.js"></script>
		<script src="fonts/optimer_regular.typeface.js"></script>
		<script src="fonts/gentilis_bold.typeface.js"></script>
		<script src="fonts/gentilis_regular.typeface.js"></script>
		<script src="js/FileSaver.js"></script>
		<script src="js/axes.js"></script>
		<script src="js/STLcreator.js"></script>
		<script src="js/customize.js"></script>
		<script src="js/STLLoader.js"></script>
		<script src="js/STLreader.js"></script>
		<script src="js/fundamental.js"></script>
		
		
		<div id="tutorial">
			<div id="tutorialBackground"></div>
			<div id='tutorialContent'>
				<h1>歡迎來到 3D印客 線上3D繪圖模式</h1>
				<h3>使用說明</h3>
				<ul>
					<li>右上角畫面之FPS代表目前瀏覽器處理效能，平均分數為45~60，若低於45，建議重新整理瀏覽器。</li>
					<li>3D繪圖區域僅限於起始畫面所見之透明方格面板，其餘地方無法建模。</li>
					<li>3D模型以及印章可使用滑鼠進行拖曳，並且刪除(針對物件連點兩下)。</li>
					<li>特殊模式(3D手繪模式、MineCraft模式)執行時，若欲切換其他模式，請先關閉目前繪圖模式。</li>
					<li>操作說明</li>
					<ul>
						<li>滑鼠左鍵按住並且移動 → 選轉視角。</li>
						<li>滑鼠右鍵按住並且移動 → 平移視角。</li>
						<li>左鍵點擊3D模型以及印章 → 拖曳物件。</li>
						<li>左鍵快速連點3D模型以及印章 → 刪除物件。</li>
					</ul>
					<li>若完成作品，可開始進行轉檔並列印的步驟。</li>
					<ul>
						<li>按下「STL 轉檔」</li>
						<li>按下「Gcode 轉檔」</li>
						<li>按下「線上列印」，並跳轉至列印設定頁面</li>
					</ul>
					<li>為了您的最佳瀏覽體驗，瀏覽器建議使用Google Chrome 版本 35.0.1916.153 m 或以上版本</li>
			   </ul>
				
			</div>
			<input type='button' id="tutorialButton" class ='threeButton' value='開始繪圖' onclick='stopTutorial();'/>  
		</div>
		
		
		<div id='div1'>
			
			<div id='loading'>
				<img id="img1" src='img/loading.png' />
			</div> 
			
			<div id = "attribute">
				<div id='clickMe'>Attribute</div>
				
				
				
				<div class = 'background'></div>
				<h1> 3D 模型屬性</h1>
				3D 文字(英文)：  <input type='text' id='custom' class ='threeText' onKeyPress="customize('text')" onKeyUp="customize('text')" value='Hello'/><p>
				文字大小： <input type='text' id='textSize' class ='threeText' onKeyPress="customize('size')" onKeyUp="customize('size')" value='50' /><p>
				文字厚度： <input type='text' id='textHeight' class ='threeText' onKeyPress="customize('height')" onKeyUp="customize('height')" value='50'/><p>
				文字字體： <form name='myfont'>
				<input type="radio"  name='font' onclick="customize('font');" value='gentilis' />Gentilis
				<input type="radio"  name='font' onclick="customize('font');" value='helvetiker' checked />Helvetiker
				<input type="radio"  name='font' onclick="customize('font');" value='optimer' />Optimer
				</form><p>
				3D模型產生：
				<input type='button'  class ='threeButton' value='環面結' onclick='torusCreator();'/>
				<input type='button' class ='threeButton' value='圓球' onclick='sphereCreator();'/>
				<p>
				
				印章文字：<input type='text' id='stampText' class ='threeText' size="4"/>
				文字尺寸：<input type='text' id='stampTextSize' class ='threeText'  size="4"/>
				<input type='button' class ='threeButton' value='印章' onclick='stamp();'/>  
				<p>
				特殊模式：
		<!--	<input type='button' class ='threeButton' value='Ring Creator' onclick='ringCreator();'/>
				<input type='button' class ='threeButton' value='Eraser' onclick='lockDown();'/><p>
				<input type='button' class ='threeButton' id='convert' value='JuJu Ring' onclick=" STLreader('1'); "/>
				<input type='button' class ='threeButton' id='convert' value='Empty Ring' onclick=" STLreader('2'); "/>   -->
				<input type='button'  id='3dpaint' class ='threeButton' value='3D手繪模式' onclick=" reStart(); "/>
				<input type='button'  id='minecraft' class ='threeButton' value='MineCraft 模式' onclick=" voxelPainter(); " onmouseover="over();" onmouseout="out();"/><p>
				模型轉檔：<input type='button' class ='threeButton' value='輸出3D圖檔' onclick='save();'/>

			</div>
			<div id ="stlViewer">
				<div id='clickSTL'>STL Viewer</div>
				<div class = 'background'></div>
				<div id="stlTitle"><h1>STL Viewer</h1></div>
				<div id="stlRenderer"></div>
				<input type='button'  id='print' class ='threeButton' value='確認列印' onclick='printButton();' onmouseover="hoverPrint();"  onmouseout='outPrint();'/>
			</div>
		</div>
		
	


		<script>
			init();
			animate();
			//fixbar左右補齊
			document.getElementById("fixbarleft").style.width = (document.getElementById("headerlink").clientWidth-1140)/2 + "px";
			document.getElementById("fixbarright").style.width = (document.getElementById("headerlink").clientWidth-1140)/2 + "px";
			var aaa = document.getElementById("fixbarright").style.width;
			console.log(aaa);
		</script>
	
	</body>
	<script src="gcode-viewer/web/lib/jquery-1.7.1.min.js"></script>
		
		<script src="gcode-viewer/web/lib/bootstrap-modal.js"></script>
		<script src="gcode-viewer/web/lib/sugar-1.2.4.min.js"></script>
	<script src="gcode-viewer/web/gcode-parser.js"></script>
	<script src="gcode-viewer/web/gcode-model.js"></script>
	<script src="js/Ginit.js"></script>
</html>