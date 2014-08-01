<div id="topbar">
	<?php if ($_SESSION['name']) { ?> 
		<p>Sie sind angemeldet als: <a href="index.php?page=logout"><?php echo $_SESSION['name'] ?></a></p>
        <div id="loggedin">
            <h1>Willkommen in der Picture Gallery!</h1>
            <p>Sie können nun ihre Bilder uploaden oder<p/>
            <p>Bilder anderer User bewerten!</p>
        </div>
    <?php } else{ ?>
        <p>Anmeldung nicht erfolgreich!</p>
    <?php } ?>    
</div>
