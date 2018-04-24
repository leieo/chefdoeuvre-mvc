<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mindmap</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Cutive+Mono&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	<header class="right"><!-- alignement css -->
		Register <a href="./register.php">here</a>
	</header>
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
		if (isset($alert)) {
			echo '<strong class="alert">'.$alert.'</strong>';
		}
		?> 
	</div>
</body>
</html>