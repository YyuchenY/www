<!DOCTYPE html>
<html lang="en">
  <!--
    GCode Viewer
    https://github.com/joewalnes/gcode-viewer
    -Joe Walnes
  -->
  <head>
    <meta charset="utf-8">
    <title>GCode Viewer</title>
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <style>
      #renderArea {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        top: 40px;
        background-color: #000000;
      }
    </style>
    <!-- 3rd party libs -->
    <script src="lib/modernizr.custom.93389.js"></script>
    <script src="lib/jquery-1.7.1.min.js"></script>
    <script src="lib/bootstrap-modal.js"></script>
    <script src="lib/sugar-1.2.4.min.js"></script>
    <script src="lib/Three.js"></script>
    <!-- Custom code -->
    <script src="gcode-parser.js"></script>
    <script src="gcode-model.js"></script>
    <script src="renderer.js"></script>
    <script src="ui.js"></script>

    <!-- Google Analytics code for http://gcode.joewalnes.com/ -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-30512323-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

  </head>
  <body>

    <!-- Top bar -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <span class="brand" href="#">GCode Viewer</span>
          <ul class="nav">
            <li><a href="javascript:openDialog()">Load Model</a></li>
            <li><a href="javascript:about()">About</a></li>
          </ul>
          <ul class="nav pull-right">
            <li><a href="https://github.com/joewalnes/gcode-viewer" target="_blank">Code on GitHub</a></li>
            <li><a href="http://twitter.com/joewalnes" target="_blank">@joewalnes</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- WebGL rendering area -->
    <div id="renderArea"></div>

    <div class="modal" id="openModal" style="display: none">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>Open GCode</h3>
      </div>
      <div class="modal-body">
        <h4>Examples</h4>
        <ul>
          <li><a href="javascript:openGCodeFromPath(<?php echo "'../../uploads/".$_GET['file']."'"; ?>)"><?php echo $_GET['file']; ?></a></li>
          <li><a href="javascript:openGCodeFromPath('examples/octocat.gcode')">octocat.gcode</a></li>
          <li><a href="javascript:openGCodeFromPath('examples/part.gcode')">part.gcode</a></li>
        </ul>
        <p>To view your own model, drag a gcode file from your desktop and drop it in this window.</p>
      </div>
      <div class="modal-footer">
        <a class="btn" data-dismiss="modal">Cancel</a>
      </div>
    </div>

    <!-- 'About' dialog'-->
    <div class="modal fade" id="aboutModal" style="display: none">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>About GCode Viewer</h3>
      </div>
      <div class="modal-body">
        <p>This is a viewer for <a href="http://en.wikipedia.org/wiki/G-code" target="_new">GCode</a>
        files, which contain commands sent to a CNC machine such as a
        <a href="http://reprap.org/" target="_blank">RepRap</a> or
        <a href="http://www.makerbot.com/" target="_blank">MakerBot</a> 3D printer.</p>

        <p>This viewer shows the operations the machine will take.</p>

        <p>Drag the mouse to rotate the model. Hold down 'S' to zoom.</p>

        <p>To view your own model, drag a gcode file from your desktop and drop it in this window.</p>

        <p>To learn more, read the <a href="http://joewalnes.com/2012/04/01/a-3d-webgl-gcode-viewer-for-understanding-3d-printers/" target="_new">blog post</a>.</p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" data-dismiss="modal">OK</a>
      </div>
    </div>

    <!-- GoSquared analytics code. Only useful on http://gcode.joewalnes.com/ -->
    <script type="text/javascript">
      var GoSquared={};
      GoSquared.acct = "GSN-821250-X";
      (function(w){
        function gs(){
          w._gstc_lt=+(new Date); var d=document;
          var g = d.createElement("script"); g.type = "text/javascript"; g.async = true; g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
          var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(g, s);
        }
        w.addEventListener?w.addEventListener("load",gs,false):w.attachEvent("onload",gs);
      })(window);
    </script>

    <!-- UserVoice.com feedback -->
    <script type="text/javascript">
      var uvOptions = {};
      (function() {
        var uv = document.createElement('script'); uv.type = 'text/javascript'; uv.async = true;
        uv.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'widget.uservoice.com/k6eac2Y9YnNZSMwdGGmS1g.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(uv, s);
      })();
    </script>
    <script>
	openGCodeFromPath(<?php echo "'../../uploads/".$_GET['file']."'";?>);
    </script>
  </body>
</html>
