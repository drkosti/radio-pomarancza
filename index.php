<?PHP 
include('inc/header.php')
?>

    <title><?PHP echo "$nazwa | $slogan"?></title>
  </head>
  <body onload="
    rbplayer.setup('<?PHP echo $stream ?>','/stream?type=.mp3');
    rbplayer.setupPlayer();
">
  <?PHP include('inc/top.php')?>

<div class="container-fluid">

  <div class="row">
   <iframe src="https://<?PHP echo $panel?>.panelradiowy.pl/embed.php?script=online" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="no" width="100%" height="20"></iframe>
    <div class="col-sm-8">
	
	<?PHP include('inc/slider.php');?>
	
	<?PHP include('inc/czat.php');?>
	
	
	

	<div class="srodek">
	<?PHP include('inc/akordeon.php');?>
	</div>
	<h1 class="naglowek mt20 lewa">Ustawienia</h1>
	<p class="lead">Do uruchomienia stacji radiowej na tym szablonie wymagana jest <b>podstawowa</b> znajomość HTML/CSS i <u>minimalna</u> znajomość PHP. </br>
	Wszystko sprowadza się do poprawnego uzupełnienia pliku <code>inc/ustaienia.php</code> 	</p>

	
	<img src="grafika/screeny/Screenshot_1.png" class="img-fluid mt20"/>
	
		<p class="lead mt20">Szablon oparty jest na frameworku Bootstrap 4.5, którego dokumentację możecie przeczytać <a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/" target="_blank">tutaj</a>.</p>
	<p class="lead">Panel radiowy mozna założyć bezpłatnie <a href="https://panelradiowy.pl/" target="_blank">tutaj</a>. Aby mieć mozliwość edycji wyglądu okienek (ramówka, pozdrowinia itp) należy wykupić premium, kosztuje jakieś grosze za sms. Można też zostać przy wersji darmowej, bedzie to wtedy wyglądalo tak jak tutaj.</p>
	<p class="lead">Statystyki Shoutcast przygotowane sa pod V2</p>
	<p class="lead">To tylko szablon, nie gotowe radio. Wszystkie elementy można w łatwy sposób edytować zmieniając kolorystykę jak i wielkość poszczególnych elemntów.  </p>
	<p class="lead">Strona jest <strong>responsywna</strong>, co oznacza, że dobrze wygląda zarówno na komputerach, jak i na urządzeniach mobilnych.</p>
	<p class="lead">Przydatne aplikacje podczas edycji:
	<ul>
	<li><a href="https://notepad-plus-plus.org/downloads/" target="_blank">Notepad++</a> Darmowy edytor kodu</li>
	<li><a href="https://www.gimp.org/" target="_blank">Gimp</a> Darmowy edytor graficzny</li>
	<li><a href="https://www.apachefriends.org/pl/index.html" target="_blank">XAMPP</a> Serwer, który można zainstalować na komputerze, ułatwia edycję plikow PHP.</li>
	</ul>
	</p>
	<p class="lead" style="color: red;"><strong>Szablon prawdopodobnie NIE będzie działał prawidłowo na darmowych serwerach takich jak CBA, PRV itp. Brak funkcji fsockopen na darmowych hostingach, przez co statystyki Shoutcast nie wyświetlają się.  </strong></p>
	<p class="lead">Struktura szablonu, czyli gdzie, co i jak? Kliknij obrazek, aby otworzyc go w nowej karcie w pełnym rozmiarze:</p>
	<p><a href="<?php echo $url?>/grafika/screeny/screen.jpg" target="_blank"><img src="<?php echo $url?>/grafika/screeny/screen.jpg" class="img-fluid"></a></p>
	</div>
	 <?PHP include('inc/prawa.php');?> 
  </div>
  <?PHP include('inc/panel-video.php');?>
</div>

<?PHP 
include('inc/footer.php')
?>