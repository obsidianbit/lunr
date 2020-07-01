<?php

include('simple_html_dom.php');
include('engines/google.php');
include('engines/bing.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>lunr</title>
	</head>
	<body>
		<div class="container-fluid">
			<h1>lunr</h1>
			<form method="post">
				<input type="text" name="q" placeholder="Search..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
<?php

if (isset($_POST['submit']) && isset($_POST['q'])) {
	echo '<hr>';
	
	Google($_POST['q']);
	Bing($_POST['q']);
}

?>		</div>
	</body>
</html>


