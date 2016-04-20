<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
<h1>Add Student</h1>
<form class="form" role="form" action="add.php" method="post">
	
	<div class="form-group">
			<label>Name</label>
			<input name="name" />
	</div>
	<div class="form-group">
		<label>Bio</label>
		<textarea name="bio" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="password" />
	</div>
	<div class="form-group">
		<button>Save</button>
	</div>
		
	

</form>
</div>
</div>

</body>
</html>