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

		<h2>Hello <?php echo $_SESSION['name']; ?> !</h2>

		<section class="display">
			<p>Create a new project</p>
		</section>

		<form class="form" method="POST" action="">
			
			<label class="form__label" for="title">Title > </label>
			<div class="form__field">
				<input type="text" id="title" name="title" placeholder="Name your new project" size="35"/>
			</div>
			<br />

			<div class="form__label"></div>
			<div class="form__field">
				<input type="submit" id="newproject" name="newproject" value=" Create "/>
			<div>

		</form>

	</main>
</body>
</html>