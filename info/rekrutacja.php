<?PHP 
include('../inc/header.php')
?>

    <title><?PHP echo "$nazwa | $slogan"?></title>
  </head>
  <body onload="
    rbplayer.setup('<?PHP echo $stream ?>','/stream?type=.mp3');
    rbplayer.setupPlayer();
">
  <?PHP include('../inc/top.php')?>

<div class="container-fluid">

  <div class="row">
   <iframe src="https://<?PHP echo $panel?>.panelradiowy.pl/embed.php?script=online" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="no" width="100%" height="20"></iframe>
    <div class="col-sm-8">
	
	
	
	<h1>Rekrutacja</h1>
	<p>Jeżeli interesuje Cie przygoda z radiem internetowym to dobrze trafiłeś!</p>
	<p><strong>Wystarczy, że masz:</strong></p>
	<ul>
		<li>Czas... 4 godziny w tygodniu</li>
		<li>Dobry mikrofon (wbudowany w laptopie odpada).</li>
		<li>Odwagę mówic publicznie do słuchaczy.</li>
		<li>W miarę aktualną bibliotekę muzyczną.</li>
		<li>Kulturę osobistą.</li>
	</ul>
	Jeśli wszystko się zgadza podeślij swoją aplikację koniecznie z próbką głosu na rekrutacja@<?PHP echo $url?>
	<img src="../grafika/siema.jpg" class="img-fluid mt20"/>
	
	

	<div class="srodek">
	
	
	<?PHP include('../inc/akordeon.php');?>
	
	
	</div>
	</div>
	 <?PHP include('../inc/prawa.php');?> 
  </div>
  <?PHP include('../inc/panel-video.php');?>
</div>

<?PHP 
include('../inc/footer.php')
?>