<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add todo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body style="margin-top : 60px;">
	<div class="container">
		<form action="/todos/store" method="POST" class="" role="form">
			@csrf
				<div class="form-group">
					<legend>Add todo</legend>
				</div>
				<div class="form-group">
					<label class="control-label" for="todo">Todo:</label>
					<input name="todo" type="text" class="form-control" id="todo" placeholder="Enter todo">
				</div>
				
		
				<div class="form-group">
					<div class="">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
		</form>
	</div>
</body>
	<!-- Latest compiled and minified CSS & JS -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>