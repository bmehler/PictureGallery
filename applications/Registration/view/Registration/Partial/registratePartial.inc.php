<div id="login">
	<h1>Ihre Registration</h1>	
	<p id="valid"><?php echo (isset($isValid['message'])) ? $isValid['message'] : ''; ?></p>
    <p id="registered"><?php echo (isset($isInserted['message'])) ? $isInserted['message'] : ''; ?></p>	
	<form action="index.php" method="post">	  	
	  <label>Email:</label>
	  <p><input name="registration_email" type="email" size="20" maxlength="30" placeholder="name@domain.de" required /></p>
	  <label>Passwort:</label>
	  <p><input name="registration_password" type="password" size="20" maxlength="30" placeholder="passwort" required /></p>
	  <label>Passwort wiederholen:</label>
	  <p><input name="registration_confirm" type="password" size="20" maxlength="30" placeholder="passwort wiederholen" required /></p>
	  <p><input name="page" type="hidden" value="registration"></p>
	  <input type="submit" value="Login">  
	</form>
</div>