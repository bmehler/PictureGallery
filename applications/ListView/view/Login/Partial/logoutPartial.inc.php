<?php session_start(); ?>
<? $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    ); 
?>
<?php session_destroy(); ?>
<div id="topbar"><b>Auf Wiedersehen!</div>
<div id="logout">
	<p>Besuchen Sie uns bald wieder!<p>
	<p><a href="index.php">Zurück zum Login</a></p>
</div>