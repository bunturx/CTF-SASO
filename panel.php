<?php require "login/loginheader.php"; ?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SASO Conf | Conferencia de Inform&aacute;tica en Curuz&uacute; Cuati&aacute; (Ctes.)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="main.css" rel="stylesheet" />
</style>
</head>
<body>
   <?php 
    if (!isset($_SESSION['username'])) {
      header("location:login/signup.php");
    }
    else{ ?>
      <div id="banner">Usuario: <?php echo $_SESSION['username'] ?> | <a href="login/logout.php">Salir</a></div>  
    <?php } ?>
  <section id="header">
	<header><img alt="SASO Conf | Conferencia Informática" height="250" src="images/logo2.png" width="250" />
		<h1>CTF - SASO Conf</h1>
	<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;width: 70%; margin: 0px auto 20px auto;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-yw4l">BASICO</th>
    <th class="tg-yw4l">INTERMEDIO</th>
    <th class="tg-yw4l">AVANZADO</th>
  </tr>
  <tr>
    <td class="tg-yw4l">index.php</td>
    <td class="tg-yw4l"><a href="./fuck.png">Brain</a></td>
    <td class="tg-yw4l"><a href="./password.zip">script</a></td>
  </tr>
  <tr>
    <td class="tg-yw4l"><a href="./images/imagen.jpeg">Imagen</a></td>
    <td class="tg-yw4l"><a href="./page.php">page</a></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"><a href="./11010100101">地理座標</a></td>
    <td class="tg-yw4l"><a href="#">logo2.png</a></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"><a href="./images/20.png">QR CODE</a></td>
    <td class="tg-yw4l"><a href="https://ghostbin.com/paste/q9ebd">link</a></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"><a href="./track.wav">track.wav</a></td>
    <td class="tg-yw4l"><a href="web.html">blow</a></td>
    <td class="tg-yw4l"></td>
  </tr>
</table>
	<a href="index.php" class="button style2 scrolly-middle">INICIO</a>
  <a href="score.html" class="button style2 scrolly-middle">RANKING</a>
  <br>
  <p>CTF FINALIZADO</p>
  <p>De todas maneras podes seguir buscando las flags</p>
	<p><a href="./score.html">Ganador 2017</a> </p>
  </header>
</section>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/jquery.scrolly.min.js"></script>
  <script src="./js/jquery.poptrox.min.js"></script>
  <script src="./js/skel.min.js"></script>
  <script src="./js/util.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>