<!DOCTYPE html>
<html>
    <head>
        <title><?php echo date('d/m/Y h:i:s'); ?></title>
        <meta charset="utf-8" />
    </head>
    <body>

		<form method="post" action="codes.php">
			<label for="pwd">Mot de passe:
				<input type="password" name="pwd" id="pwd">
			</label>
			<input type="submit" value="OK">
		</form>
    </body>
</html>