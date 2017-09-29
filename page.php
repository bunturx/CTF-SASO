<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL Agent was not found on this server.</p>
<hr>
<address>Apache/2.4.10 (Debian) Server at localhost Port 80 Opera/12.14</address>
</body></html>

<?php
	function agente(){
		return(eregi("opera", $_SERVER['HTTP_USER_AGENT']));
	}

	if(agente()){
  		echo 'FLAG_SASO:"292_Perfecto_89"';
	}	
?>