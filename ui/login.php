<?php require_once(SOCONTENT . 'content.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title><?php getPageTitle(); ?> Login Page</title>
</head>

<body>

<div id="login">
	<?php getLogin() ?>
</div>

<?php if(hasContent()) { ?>
<div id="content">
	<?php getContent(); ?>
	
</div>
<?php }?>
</body>

</html>