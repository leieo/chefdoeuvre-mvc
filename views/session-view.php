<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>mindmap</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Cutive+Mono&amp;subset=latin-ext" rel="stylesheet">
	</head>
	<body>
		<header align="right">
			<a href="">My account</a>  |  <a href="./logout.php">Log out</a>
		</header>
		<div align="center">
			<table>
				<tr>
					<td></td>
					<td align="left">
						<h2>Welcome <?php echo $userinfo['name']; ?> ! </h2>
					</td>
				</tr>
				<tr>
					<td align="right">
						Pseudo > 
					</td>
					<td>
						<?php echo $userinfo['name']; ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						Mail > 
					</td>
					<td>
						<?php echo $userinfo['email']; ?>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>