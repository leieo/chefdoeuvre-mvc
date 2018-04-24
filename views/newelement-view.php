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

		<h3>ProjectName<span><h2>( by <?php echo $_SESSION['name']; ?> )</h2></span></h3>

		<section class="display">
			<p>Add elements to your project</p>
		</section>

		<form class="form" method="POST" action="">
			
			<label class="form__label for="name">Name > </label>
			<div class="form__field">
				<input type="text" id="name" name="name" placeholder="Name your new element" size="35"/>
			</div>
			<br />
			
			<label class="form__label for="content">Content > </label>
			<div class="form__field">
				<textarea id="content" name="content" rows="8" cols="35" placeholder="Put here the content you want to add ..."></textarea>
			</div>
			<br />
			
			<div class="form__label"></div>
			<div class="form__field">
				<input type="submit" id="newelement" name="newelement" value=" Add "/>
			</div>


		</form>  

	</main>
	
</body>
</html>