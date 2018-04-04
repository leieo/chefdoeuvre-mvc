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
		<main>
			<h2>Hello <?php echo $_SESSION['name']; ?> !</h2>
			<section class="display">
				<p>Create a new project</p>
			</section>
			<section>
				<div align="center">
					<form method="POST" action="">
						<table>
							<tr>
								<td align="right">
									<label for="title">Title > </label>
								</td>
								<td>
									<input type="text" id="title" name="title" placeholder="Name your new project" value=""/>
								</td>
							</tr>
						<!-- DESCRIPTION
							<tr>
								<td align="right">
									<label for="description">Description > </label>
								</td>
								<td>
									<br />
									<textarea id="description" name="description" rows="8" cols="35" placeholder="Briefly describe your project..."></textarea>
								</td>
							</tr>
						-->
							<tr>
								<td>
								</td>
								<td>
									<br/>
									<input type="submit" id="newproject" name="newproject" value=" Create "/>
								</td>
							</tr>
						</table>
					</form>  
				</div>
			</section>
		</main>
	</body>
</html>