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
	<div align="center">
		<form method="POST" action="">
			<table>
				<tr>
					<td></td>
					<td align="center">
						<h2>Register</h2>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="name">Name > </label>
					</td>
					<td>
						<input type="text" id="name" name="name" placeholder="Choose a name" value="<?php echo ($name ?? ''); ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail">Mail > </label>
					</td>
					<td>
						<input type="email" id="mail" name="mail" placeholder="Your e-mail" value="<?php echo ($mail ?? ''); ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail2"> > </label>
					</td>
					<td>
						<input type="email" id="mail2" name="mail2" placeholder="Confirm your e-mail" value="<?php echo ($mail2 ?? ''); ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="password">Password > </label>
					</td>
					<td>
						<input type="password" id="password" name="password" placeholder="Your password"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="password2"> > </label>
					</td>
					<td>
						<input type="password" id="password2" name="password2" placeholder="Confirm your password"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="center">
						<br/>
						<input type="submit" name="registerform" value="Register"/>
					</td>
				</tr>
			</table>
		</form>  
		<br/>    
		<?php
		echo isset($alert) ? ('<strong class="alert">'.$alert.'</strong>') : '';
		?>
	</div>
</body>
</html>