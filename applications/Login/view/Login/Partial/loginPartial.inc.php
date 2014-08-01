<div id="login">
	<h1>Ihr Benutzerlogin</h1>	
	<p id="valid"><?php echo (isset($isValid['message'])) ? $isValid['message'] : ''; ?></p>
    <p id="registered"><?php echo (isset($isRegistered['message'])) ? $isRegistered['message'] : ''; ?></p>	
	<form action="index.php" method="post">	  	
	  <label>Email:</label>
	  <p><input name="email" type="email" size="20" maxlength="30" placeholder="name@domain.de" required value=<?php echo (isset($_POST['email'])) ? $_POST['email'] : '' ?>></p>
	  <label>Passwort:</label>
	  <p><input name="password" type="password" size="20" maxlength="30" placeholder="passwort" required></p>
	  <p><input name="page" type="hidden" value="login"></p>
	  <input type="submit" value="Login">  
	</form>
</div>