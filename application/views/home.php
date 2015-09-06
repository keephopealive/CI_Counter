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
				<form method="post" action="/formPost">
					<div class="form-group">
						<label>Your Name:</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label>Dojo Location:</label>
						<select class="form-control" name="location">
							<option value="Mountain View">Mountain View</option>
							<option value="Seattle">Seattle</option>
						</select>
					</div>
					<div class="form-group">
						<label>Favorite Langauge:</label>
						<select class="form-control" name="language">
							<option value="JavaScript">JavaScript</option>
							<option value="Node">Node</option>
							<option value="Ruby">Ruby</option>
						</select>
					</div>
					<div class="form-group">
						<label>Comments:</label>
						<input type="text" class="form-control comments-group" name="comments">
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
</body>
</html>