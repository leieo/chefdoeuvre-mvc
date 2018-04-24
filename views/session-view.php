<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>mindmap</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Cutive+Mono&amp;subset=latin-ext" rel="stylesheet">
	</head>
	<body>
		<header class="--right">
			<a href="">My account</a>  |  <a href="./logout.php">Log out</a>
		</header>
		<main>
			<h2>Hello <?php echo $userinfo['name']; ?> !</h2>
			<section class="display">
				<p>Bienvenue</p>
			</section>
			<section class="features">
				<h3><span class="feature">
					<a href="newproject.php">
						+
					</a>
				</span>
				<div class="feature">Create a new project</div></h3>
			</section>
		</main>
	</body>
</html>