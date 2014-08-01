<div id="topbar">
	<?php echo ($_SESSION['name']) ? 
		'<p>Sie sind angemeldet als: <a href="index.php?page=logout">' . $_SESSION['name'] .'</a></p>' : 
		'<p>Sie sind nicht eingeloggt!</p>' 
	?>	
</div>
<div id="loggedin">
	<h1>Willkommen in der Picture Gallery!</h1>
	<p>Sie können nun ihre Bilder uploaden oder<p/>
	<p>Bilder anderer User bewerten!</p>
</div>