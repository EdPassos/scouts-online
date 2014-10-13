<?php
if ( !defined('SOPATH') )
	define('SOPATH', dirname(__FILE__) . '/');
	
require_once(SOPATH . 'settings.php');
require_once(SODATA . 'database.php');
require_once(SODATA . 'users.php');

$process = "p";
$users = "Users";
$all = "All";

echo "Tem a certeza que deseja proceder com a instalação?<br>";
echo "Dados podem ser perdidos ao realizar alguma das seguintes operações<br>";
	
switch ($_POST[$process]) {
	case $all:
		users_setup();
		echo "All Done";
		break;
	case $users:
		users_setup();
		echo "Users setup complete";
		break;
}

echo 
'
<form action="setup.php" method="post">
<input type="submit" name="' .$process . '" value="'. $users .'">
<input type="submit" name="' .$process . '" value="'. $all .'">
</form>
';
?>