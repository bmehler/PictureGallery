<div id="content">
	<?php if ($_SESSION['name']) { ?> 
		<p>Sie sind angemeldet als: <a href="index.php?page=logout"><?php echo $_SESSION['name'] ?></a></p>
        <p><a href="index.php?page=upload">Bilder uploaden</a></p>
        <div id="loggedin">
            <h1>Willkommen in der Picture Gallery!</h1>
            <h3>Sie können nun ihre Bilder uploaden oder Bilder anderer User bewerten!</h3>
        </div>
    <?php } else{ ?>
        <p>Anmeldung nicht erfolgreich!</p>
    <?php } ?>    
</div>