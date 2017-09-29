<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
</head> 

<body align="center"> 
<h1>Track1</h1>
<audio controls>
	<source src="track.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
</audio>

<p>
	<form align="center" action="12447414.php" method="post" enctype="multipart/form-data"> 
		<table align="center"> 
			<tr> 
				<td><div align="right">Password</div></td> 
				<td><input name="pass" type="text" maxlength="50"></td> 
			</tr> 
			<tr>  
			<td>
				<input align="right" name="Enviar" type="submit" id="Enviar" value="Enviar">
			</td> 
			</tr> 
		</table> 
	</form>
</p>
<?php
	$clave = $_POST["pass"];
	if ($clave == "counting") { ?>
	<script language="JavaScript">
		window.document.title = "<?php echo "FLAG_SASO:mp3Metal"; ?>"
	</script> 
	<?php
	}else{
	echo "PASS ERROR";
}?>
</body> 
</html>
