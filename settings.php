<?php
define('SONAME', "Scouts Online"); #Website name, shown in the browser title

define('SOPATH', dirname(__FILE__) . '/'); #ScoutsOnline instalation
define('SODATA', SOPATH . 'data/'); #Database related files
define('SOCONTENT', SOPATH . 'content/'); #Content Generator Files
define('SOUI', SOPATH . 'ui/'); #Files that generate what we see on the browser
	
## Database settings
define('SODBTYPE', "mysql"); # Only mysql is supported at the moment
define('SODBSERVER', "localhost");
define('SODBNAME', "ScoutsOnline");
define('SODBUSER', "ScoutsOnline");
define('SODBPASSWORD', "L5LctLECDDQXxmww");


?>