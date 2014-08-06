<div id="content">
	<?php if ($_SESSION['name']) { ?> 
		<p>Sie sind angemeldet als: <a href="index.php?page=logout"><?php echo $_SESSION['name'] ?></a></p>        
        <div id="upload">            
            <h3>Wählen sie Ihr Bild aus und stellen Sie es zur Abstimmung!</h3>
            <form role="form" class="form_upload" action="index.php" method="post" enctype="multipart/form-data">		 
                <div class="form_field">
                    <label for="file">Dateiname:</label>
                    <input type="file" name="file" id="input_field">
                    <p class="help">Laden Sie Ihr Bild hoch!</p>
                    <p id="uploaded"><?php echo (isset($isUploaded['message'])) ? $isUploaded['message'] : ''; ?></p>
                </div>			
                <button type="submit" name="submit" class="btn-default">Hochladen</button>
            </form>
        </div>
    <?php } else{ ?>
        <p>Anmeldung nicht erfolgreich!</p>
    <?php } ?>    
</div>