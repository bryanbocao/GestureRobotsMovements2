
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="//samdutton.com">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
<meta name="mobile-web-app-capable" content="yes">
<meta id="theme-color" name="theme-color" content="#fff">

<base target="_blank">

<title>Media Recorder API Demo</title>

<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
<style>
a#downloadLink {
  display: block;
  margin: 0 0 1em 0;
  min-height: 1.2em;
}
p#data {
  min-height: 6em;
}
</style>

</head>

<body>
<center>
<div style = "text-align:center;" id="container">
<div style = "text-align:center;"><h2 class="h2">Gesture Survey Media Recorder Demo </h2><p>Record a 320x240 video</p>
	<div name="forDiv">
		<form>
	
		<div align="center" class="well">
			<video controls autoplay></video><br>
		</div>
		<!-- End -->
	
	
		
		<!-- 
		<div class="">
			<button class="btn btn-primary"id="rec" onclick="onBtnRecordClicked()">Record</button>
		  	<button class="btn" id="pauseRes"   onclick="onPauseResumeClicked()" disabled>Pause</button>
		  	<button class="btn btn-danger" id="stop"  onclick="onBtnStopClicked()" disabled>Stop</button>
		</div>
		-->
		<div class="">
			<button class="btn btn-primary" id="rec" onclick="onBtnRecordClicked()">Record</button>
		  	<button class="btn" id="pauseRes"   onclick="onPauseResumeClicked()" disabled>Pause</button>
		  	<button class="btn btn-danger" id="stop"  onclick="onBtnStopClicked()" disabled>Stop</button>
		</div>
		
		<br/>
			<div class="well">
			<a id="downloadLink" download="mediarecorder.webm" name="mediarecorder.webm" href></a>
			<p id="data"></p>
		</div>
		</form>
	</div>
	<!-- End forDiv -->
	  
	    </div>
</center>
	
<script src="js/videoRecorder.js"></script>
<script src="js/jquery-1.12.4.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>


</div>
</body>
</html>
