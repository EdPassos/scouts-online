<?php require_once(SOCONTENT . 'content.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title><?php getPageTitle(); ?> Signup Page</title>
</head>

<body>

<div id="signup">
	<form name="signupform" id="signupform" action="signup.php" method="post">
	<?php foreach(getSignUpParams() as $field=>$text) {?> 
		<p>
		<label for=<?php echo "\"$field\"";?>>
			<?php echo $text ?><br>
			<input type=<?php getSignUpType($field);?> id=<?php echo "\"$field\"";?>>
		</label>
		</p>
	<?php }?> 
	<p class="submit">
		<input type="submit" name="submit" id="submit" value="Registar">
		<input type="hidden" name="redirect_to" value="index.php">
		<input type="hidden" name="testcookie" value="1">
	</p>
	</form>
</div>

</body>

</html>