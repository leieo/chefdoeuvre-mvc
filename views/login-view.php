<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mindmap</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Cutive+Mono&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>

	<header class="--right"><!-- alignement css -->
		Register <a href="./register.php">here</a>
	</header>

	<form class="form" method="POST" action="">

		<h2 class="form__title">Log in</h2>

		<label class="form__label" for="loginmail">Mail > </label>
		<div class="form__field">
			<input type="email" id="loginmail" name="loginmail" placeholder="Enter e-mail" value="<?php if (isset($loginmail)) { echo $loginmail; } ?>"/>
		</div>
		<br />
		
		<label class="form__label" for="loginpassword">Password > </label>
		<div class="form__field">
			<input type="password" id="loginpassword" name="loginpassword" placeholder="Enter password"/>
		</div>
		<br />

		<div class="form__label"></div>
		<div class="form__field">
			<input type="submit" name="loginform" value="Login"/>
		</div>
		<br />

		<div class="form__alert">
			<?php
			if (isset($alert)) {
				echo '<strong>'.$alert.'</strong>';
			}
			?>
		</div>

	</form>  
	
</body>
</html>