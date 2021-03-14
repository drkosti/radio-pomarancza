 <?php include('sc-klasa.php');?>
 <?php include('ustawienia.php');?>
<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?PHP echo $url?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?PHP echo $url?>/css/styl.css">
    <link rel="stylesheet" href="<?PHP echo $url?>/css/animate.css">
	 <meta http-equiv="refresh" content="30">

</head>
<style type="text/css">
body {
	background: transparent!important;
}
@supports (-webkit-text-stroke: 1px white) {
  h1,h3 {
    -webkit-text-stroke: 1px white;
    -webkit-text-fill-color: black;
  }
}
h1,h3 {
	font-size: 40pt;
}
</style>
<body>
<h1 class="antena"><div class="animate__animated animate__bounce">Na Antenie: </div><div class="animate__animated animate__flash"><?php echo $stats->get('servergenre');?> </div> </h1>
<h3 class="audycja"><div class="animate__animated animate__bounce">Audycja:</div> <div class="animate__animated animate__flash"><?php echo $stats->get('servertitle'); ?></div>  </h3>
</body>
</html>


 