<?php

include('simple_html_dom.php');
include('engines/google.php');
include('engines/bing.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="lunr -- an anonymous, private, and secure meta search engine">
		<meta name="keywords" content="search, search engine, lunr, lunr search">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>lunr</title>
	</head>
	<body>
		<div class="container-fluid">
<?php

if (!isset($_POST['submit']) && !isset($_POST['q'])) {
	echo '
<h1 class="display-1 text-center">lunr</h1>
<form method="post">
	<div class="row d-flex justify-content-center">
		<div class="col-md-6">
			<div class="input-group">
				<input class="form-control py-2 border-right-0 border" type="search" placeholder="Search..." name="q" required autofocus>
 				<span class="input-group-append">
                			<button class="btn btn-outline-secondary border-left-0 border" type="submit" name=submit>
        					<i class="fa fa-search"></i>
        				</button>
				</span>
			</div>
		</div>
    	</div>
</form>';
}

if (isset($_POST['submit']) && isset($_POST['q'])) {
	echo '
<div class="container mt-3">
	<form method="post">
		<div class="row">
			<h1>lunr</h1>
       			<div class="input-group col-md-4">
          			<input class="form-control py-2 border-right-0 border" type="search" placeholder="Search..." name="q" required>
            			<span class="input-group-append">
                			<button class="btn btn-outline-secondary border-left-0 border" type="submit" name=submit>
                    				<i class="fa fa-search"></i>
                			</button>
              			</span>
			</div>
    		</div>
	</form>
</div>
<hr>';
	
	Google($_POST['q']);
	Bing($_POST['q']);
}

?>
			<div class="footer text-center py-3">
				<p class="text-muted">Powered by <a href="https://github.com/obsidianbit/lunr">lunr</a> made by <a href="https://obsidianbit.com">obsidianbit</a></p>
			</div>
		</div>
	</body>
</html>
