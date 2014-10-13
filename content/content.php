<?php 
define('SOPAGENAME', SONAME);

# Check if the user is logged in:
require_once(SODATA . 'users.php');
$user = getSessionUser($_COOKIE["logged"]);
$so_page_type = 'LOGIN'; #Page types possible: LOGIN, PROFILE
$so_has_menu = TRUE;
$so_menu = array("Logout");

switch ($so_page_type) {
	case 'LOGIN':
		$so_has_menu = FALSE;
		$so_menu = NULL;
		break;
}

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
echo $login;
}

function getContent() {
	global $so_page_type;
	switch ($so_page_type) {
		case 'LOGIN':
			echo getLogin();
	}
}

function hasContent() {
	return hasMenu();
}

function getMenu() {
	global $so_menu;
	return $so_menu;
}

function hasMenu() {
	global $so_menu;
	if($so_menu == NULL)
		return false;
	else return true;
}

function getPageTitle() {
	echo SONAME;
}

function getSiteUrl() {
	echo SOURL;
}

function getSignUpParams() {
	return array(
		"username" => "Nome de Utilizador",
		"name" => "Nome",
		"citizenship" => "Nacionalidade",
		"birthdate" => "Data de Nascimento",
		"baptism" => "Data de Baptismo",
		"address" => "Morada",
		"zipcode" => "Codigo Postal",
		"taxid" => "Nº Contribuinte",
		"socialsecurity" => "Nº Segurança Social",
		"idcard" => "Nº Cartão Cidadão",
		"phone" => "Nº Telefone",
		"email" => "e-mail",
		"password" => "Password",
		"password_confirm" => "Repetir Password",
	);
}

function getSignUpType($param) {
	switch($param) {
		case 'birthdate':
			echo '"date"';
			break;
		case 'baptism':
			echo '"date"';
			break;
		case 'taxid':
			echo '"number"';
			break;
		case 'socialsecurity':
			echo '"number"';
			break;
		case 'idcard':
			echo '"number"';
			break;
		case 'phone':
			echo '"number"';
			break;
		default:
			echo '"text"';
	}
}
?>
