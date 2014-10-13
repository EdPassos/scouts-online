<?php 
define('SOPAGENAME', SONAME);

# Check if the user is logged in:
require_once(SODATA . 'users.php');
$user = getSessionUser($_COOKIE["logged"]);


/**
 * returns the Login form
 */
function getLogin() {
global $user;
if($user == NULL)
    $login = '<form action="index.php" method="POST">
    <input type="text" name="u" placeholder="Utilizador"><br>
    <input type="password" name="p" placeholder="Password"><br>
    <input type="submit" value="Login">
</form>
';
else $login = '<form action"index.php" method="POST">
    <input type="submit" name="logout" value="Logout">
	</form>
';
return $login;
}

?>
