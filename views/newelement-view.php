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
			<h3>ProjectName<span><h2>( by <?php echo $_SESSION['name']; ?> )</h2></span></h3>
			<section class="display">
				<p>Add elements to your project</p>
			</section>
			<section>
				<div align="center">
					<form method="POST" action="">
						<table>
							<tr>
								<td align="right">
									<label for="name">Name > </label>
								</td>
								<td>
									<input type="text" id="name" name="name" placeholder="Name your new element" value=""/>
								</td>
							</tr>
							<tr>
								<td align="right">
									<label for="content">Content > </label>
								</td>
								<td>
									<br />
									<textarea id="content" name="content" rows="8" cols="35" placeholder="Put here the content you want to add ..."></textarea>
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td>
									<br/>
									<input type="submit" id="newelement" name="newelement" value=" Add "/>
								</td>
							</tr>
						</table>
					</form>  
				</div>
			</section>
		</main>
	</body>
</html>