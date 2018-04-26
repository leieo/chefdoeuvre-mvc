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
		
		<!-- l'attribut FOR de la balise "label" est lié à l'attribut ID de la balise "input" -->
		<label class="form__label" for="name">Name > </label>
		<div class="form__field">
			<input type="text" id="name" name="name" placeholder="Choose a name" value="<?php echo ($name ?? ''); ?>"/>
		</div>
		<br />

		<!-- l'attribut FOR de la balise "label" est lié à l'attribut ID de la balise "input" -->
		<label class="form__label" for="mail">Mail > </label>
		<div class="form__field">
			<input type="email" id="mail" name="mail" placeholder="Your e-mail" value="<?php echo ($mail ?? ''); ?>"/>
		</div>
		<br />
		
		<!-- l'attribut FOR de la balise "label" est lié à l'attribut ID de la balise "input" -->
		<label class="form__label form--hidden" for="mail2"> > </label>
		<div class="form__field">
			<input type="email" id="mail2" name="mail2" placeholder="Confirm your e-mail" value="<?php echo ($mail2 ?? ''); ?>"/>
		</div>
		<br />
		
		<!-- l'attribut FOR de la balise "label" est lié à l'attribut ID de la balise "input" -->
		<label class="form__label" for="password">Password > </label>
		<div class="form__field">
			<input type="password" id="password" name="password" placeholder="Your password"/>
		</div>
		<br />
		
		<!-- l'attribut FOR de la balise "label" est lié à l'attribut ID de la balise "input" -->
		<label class="form__label form--hidden" for="password2"> > </label>
		<div class="form__field">
			<!-- l'attribut NAME de la balise "input"
				lie la valeur entrée dans le champs de saisie à une CLÉ du même nom 
				dans le tableau associatif $_POST -->
			<input type="password" id="password2" name="password2" placeholder="Confirm your password"/>
		</div>
		<!-- l'attribut FOR de la balise "label" est lié à l'attribut ID de la balise "input" -->
		<br />
		
		<div class="form__label"></div>
		<div class="form__field">
			<!-- l'attribut NAME  -->
			<input type="submit" name="registerform" value="Register"/>
		</div>
		<br />

		<div class="form__alert">
			<?php
			// si la variable $alert est définie
			// afficher le contenu de () 
			// sinon, afficher ce qui se trouve après :
			echo isset($alert) ? ('<strong>'.$alert.'</strong>') : '';
			?>
		</div>

	</form>  

</body>
</html>