<!DOCTYPE html>
<html lang="en">
<head>
	<title>Survey Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style type="text/css">
		.container{
			width: 800px;
			height: 600px;
			border: 1px solid gray;
			margin: 15px;
			padding: 5px;
		}
		.form-group{
			width: 200px;
		}
		.comments-group{
			min-height: 150px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>You have visted this website: <?= $counter ?> times.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Name:</label>
					<h5><?= $user['name'] ?></h5>
				</div>
				<div class="form-group">
					<label>Dojo Location:</label>
					<h5><?= $user['location'] ?></h5>
				</div>
				<div class="form-group">
					<label>Favorite Langauge:</label>
					<h5><?= $user['language'] ?></h5>
				</div>
				<div class="form-group">
					<label>Comments:</label>
					<h5><?= $user['comments'] ?></h5>
				</div>
				<a href="/">Back</a>
			</div>
		</div>
	</div>
</body>
</html>
<?php
var_dump($this->session('allData'));
die('here'); 
?>