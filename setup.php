<?php
if ( !defined('SOPATH') )
	define('SOPATH', dirname(__FILE__) . '/');
	
require_once(SOPATH . 'settings.php');
require_once(SODATA . 'database.php');
require_once(SODATA . 'users.php');

$process = "p";
$users = "u";

echo "Tem a certeza que deseja proceder com a instala��o?<br>";
echo "Dados podem ser perdidos ao realizar alguma das seguintes opera��es<br>";
	
switch ($_POST[$process]) {
	case $users:
		users_setup();
		echo "Users setup complete";
		break;
}

echo '
<form action="setup.php" method="post">
	<input type="hidden" name="'. $process .'" value="'. $users .'"><br>
<input type="submit">
</form>
';
?>