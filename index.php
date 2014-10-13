<?php
/**
 * Front to the Scouts Online application. 
 * I feel that this file should have the least amount of code possible
 * 
 */
 
 /*Load settings*/
require_once('settings.php');
require_once(SODATA . 'users.php');

/* If the user is logged in load website */
if(isLogged())
	require_once(SOUI . 'design.php');
else /* Else make him login first */
	require_once('login.php');
?>