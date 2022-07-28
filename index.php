<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Export Database</title>

    	<!-- Google Poppins font -->
    	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100&display=swap" rel="stylesheet">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	</head>
	<body>

		<div class="container p-3">

			<div class="alert alert-light alert-container mb-3" role="alert">
				Transform database table to excel <b>(xls)</b> format.
			</div>

			<div class="form-container">
				<form action="script.php" method="POST">
					<div class="row">
						<div class="col-md-4">
							<div class="mb-3">
								<label for="host" class="form-label">Host <small>(Server Name)</small></label>
								<input type="text" class="form-control" id="host" name="host" value="127.0.0.1">
							</div>
							<div class="mb-3">
								<label class="form-label">Driver</label>
								<select class="form-select" name="driver">
									<option value="mysql" selected>MySQL</option>
									<option value="pgsql">PostgreSQL</option>
									<option value="sqlsrv">MS SQL Server</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="port" class="form-label">Port</label>
								<input type="text" class="form-control" id="port" name="port" placeholder="mysql'3306' sqlsrv1433 pgsql'5432'" value="3306">
							</div>
							<div class="mb-3">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control" id="username" name="username" value="root">
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
						</div>
						<div class="col-md-8">
							<div class="mb-3">
								<label for="databasename" class="form-label">Database Name</label>
								<input type="text" class="form-control" id="databasename" name="databasename">
							</div>
							<div class="mb-3">
								<label for="table" class="form-label">Table</label>
								<input type="text" class="form-control" id="table" name="table">
							</div>
							<div class="mb-3">
								<label for="columns" class="form-label">Columns</label>
								<input type="text" class="form-control" id="columns" name="columns" data-role="tagsinput">
								<div id="emailHelp" class="form-text"><small>Write columns like this example: (column1, column2, column3).</small><br/><small>If you leave it empty the database will select all columns.</small></div>
							</div>
							<button type="submit" name="transform" class="btn btn-primary">Transform</button>
						</div>
					</div>
				</form>				
			</div>

		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js" integrity="sha512-SXJkO2QQrKk2amHckjns/RYjUIBCI34edl9yh0dzgw3scKu0q4Bo/dUr+sGHMUha0j9Q1Y7fJXJMaBi4xtyfDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>