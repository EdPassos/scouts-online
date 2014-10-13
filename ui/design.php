<?php require_once(SOCONTENT . 'content.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title><?php getPageTitle(); ?></title>
</head>

<body>

<div id="menu">
	<form action="index.php" method="post">
	<?php foreach(getMenu() as $item) { ?>
		<input type="submit" name=<?php echo "'$item'";?> value=<?php echo "'$item'";?>>
	</form>
	<?php }?>
	
</div>

<?php if(hasContent()) { ?>
<div id="content">
	<?php getContent(); ?>
	
</div>
<?php }?>
</body>

</html>