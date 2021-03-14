
<?PHP include('nawigacja.php')?>

  <!-- Header -->
  
  <header class="bg-radio py-5 mb-5">
    <div class="container">
      <div class="row h-50">
        <div class="col-sm">
			<div class="ramka">
			<iframe class="embed-responsive-item ramka" src="<?PHP echo $url?>/inc/stata.php" scrolling="no" frameborder="no" height="400px"></iframe>
			</div>
		</div>
		<div class="col-sm d-block">
			<div class="radio radio2">
	  <audio id="radio" preload="metadata">
        Your browser does not support the audio element.
    </audio>  
    <h1 class="d-none" id="caption"></h1>
    <div class="play">
        <button id="playButton" onclick="rbplayer.playRock()"><i class="fas fa-play"></i></button> 
        <button id="stopButton" onclick="rbplayer.pauseRock()"><i class="fas fa-stop"></i></button>  
        <button id="volDown" onclick="rbplayer.volDown()"><i class="fas fa-volume-down"></i></button>     
        <button id="volUp" onclick="rbplayer.volUp()"><i class="fas fa-volume-up"></i></button> 
    </div>
    <div id="infoDiv"></div>    
    <div id="statusDiv"></div>  
	</div>
		</div>

        </div>
      </div>


  </header>