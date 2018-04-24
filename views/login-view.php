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

		<label class="form_label" for="loginmail">Mail > </label>
		<div class="form__field">
			<input type="email" id="loginmail" name="loginmail" placeholder="Enter e-mail" value="<?php if (isset($loginmail)) { echo $loginmail; } ?>"/>
		</div>
		<br />
		
		<label class="form_label" for="loginpassword">Password > </label>
		<div class="form__field">
			<input type="password" id="loginpassword" name="loginpassword" placeholder="Enter password"/>
		</div>
		<br />

		<div class="form_label"></div>
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
		
<!--
	<div align="center">
		<form method="POST" action="">
			<table>
				<tr>
					<td></td>
					<td align="center">
						<h2>Log in</h2>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="loginmail">Mail > </label>
					</td>
					<td>
						<input type="email" id="loginmail" name="loginmail" placeholder="Enter e-mail" value="<?php if (isset($loginmail)) { echo $loginmail; } ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="loginpassword">Password > </label>
					</td>
					<td>
						<input type="password" id="loginpassword" name="loginpassword" placeholder="Enter password"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="center">
						<br/>
						<input type="submit" name="loginform" value="Login"/>
					</td>
				</tr>
			</table>
		</form>  
		<br/>    
		<?php
		// if (isset(blablabla)) etc.
		?>
	</div>
-->
		<br/>    
		
</body>
</html>