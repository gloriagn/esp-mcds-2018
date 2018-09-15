<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> CRUD MVC </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
	<style>
		body {
			font-family: 'Muli', sans-serif;
			font-weight: 300;
		}
	</style>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center"><i class="fa fa-users"></i> CRUD MVC</h1>
				<hr>
				<h2><i class="fa fa-plus"></i> Add user</h2>

  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add User</li>
  </ol>
  <form action="" method="post">

  	<div class="form-group">
  	<label for=""><strong>FirstName:</strong></label>
  	<input tipe="text" class="form-control" name="firstName"
  	placeholders="FirstName" required>
  </div>

  <div class="form-group">
  	<label for=""><strong>LastName:</strong></label>
  	<input tipe="text" class="form-control" name="lastName"
  	placeholders="lastName" required>
  </div>

  <div class="form-group">
  	<label for=""><strong>Email:</strong></label>
  	<input tipe="email" class="form-control" name="email"
  	placeholders="Email" required>
  </div>

<div class="form-group">
  	<label for=""><strong>PhoneNumber:</strong></label>
  	<input tipe="number" class="form-control" name="phoneNumber"
  	placeholders="PhoneNumber" required>
  </div>

<div class="form-group">
  	<label for=""><strong>Adress:</strong></label>
  	<input tipe="text" class="form-control" name="address"
  	placeholders="Adress" required>
  </div>
 <div class="form-group">
 	<button class="btn btn-success btn-lg" type="submit">
 		<i class="fa fa-save"></i> Save
 	</button>
 	<button class="btn btn-dark btn-lg" type="reset">
 		<i class="fa fa-broom"></i> Reset
 	</button>

</div>

</form>

		</div>
	</div>	

</div>

</body>
</html>
