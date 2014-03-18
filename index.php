<?php
$input = '';
$output = '';

if (isset($_POST['input'])) {
	$input = $_POST['input'];
}
if (isset($_POST['output'])) {
	$output = $_POST['output'];
}



?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Ptitparser</title>
	<!-- <link rel="stylesheet" href="css/site.min.css"> -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<form method="POST" action="">
				<div class="col-xs-6">
					<div class="form-group">
						<label for="input">input</label>
						<textarea class="form-control" rows="20" name="input"></textarea>
					</div>
				</div>
	  			<div class="col-xs-6">
	  				<div class="form-group">
	  					<label for="output">output</label>
						<textarea class="form-control" rows="20" name="output"></textarea>
	  				</div>
	  			</div>	
  			</form>
		</div>
		<div class="row">
			<div class="col-xs-2">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</div>
</body>
</html>