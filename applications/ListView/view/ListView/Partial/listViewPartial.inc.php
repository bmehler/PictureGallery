<div id="picturelist">
    <div id="login"><a href="index.php?page=login">Zum Login</a></div>
    <h1>Willkommen in der Picture Gallery!</h1>
    <h3>Als angemeldeter Benutzer können Sie Bilder anderer User bewerten!</h3>
    <?php $res = findAllPictures(); ?>
        <?php if($res) { ?>
        <ul id="pictures">        
        <?php foreach($res as $key) { ?>	
            <li class="threerows">                     
                <div class="votes">73 Votes</div>
                <div class="email"><?php echo $key['email']; ?></div>
                <div class="image"><img src="<? echo "uploads/" . $key['name']; ?>" alt="" width="200" height="200" /></div>            
            </li>
        <?php } ?>
        </ul>
        <?php }else{ ?>
        <p>Derzeit stehen keine Bilder zur Bewertung!</p>
        <? } ?>
</div>