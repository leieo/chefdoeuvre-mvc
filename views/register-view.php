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
		Log in <a href="./login.php">here</a>
	</header>

	<form class="form" method="POST" action="">
		
		<h2 class="form__title">Register</h2>
		
		<label class="form__label" for="name">Name > </label>
		<div class="form__field">
			<input type="text" id="name" name="name" placeholder="Choose a name" value="<?php echo ($name ?? ''); ?>"/>
		</div>
		<br />

		<label class="form__label" for="mail">Mail > </label>
		<div class="form__field">
			<input type="email" id="mail" name="mail" placeholder="Your e-mail" value="<?php echo ($mail ?? ''); ?>"/>
		</div>
		<br />
		
		<label class="form__label form--hidden" for="mail2"> > </label>
		<div class="form__field">
			<input type="email" id="mail2" name="mail2" placeholder="Confirm your e-mail" value="<?php echo ($mail2 ?? ''); ?>"/>
		</div>
		<br />
		
		<label class="form__label" for="password">Password > </label>
		<div class="form__field">
			<input type="password" id="password" name="password" placeholder="Your password"/>
		</div>
		<br />
		
		<label class="form__label form--hidden" for="password2"> > </label>
		<div class="form__field">
			<input type="password" id="password2" name="password2" placeholder="Confirm your password"/>
		</div>
		<br />
		
		<div class="form__label"></div>
		<div class="form__field">
			<input type="submit" name="registerform" value="Register"/>
		</div>
		<br />

		<div class="form__alert">
			<?php
			echo isset($alert) ? ('<strong>'.$alert.'</strong>') : '';
			?>
		</div>

	</form>  

</body>
</html>