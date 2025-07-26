<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sample Container</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../../assets/styles/sample.css" />
</head>

<body>
	<div class="page-container">
		<div class="side_bar">
			<div class="flex-container">
				<div class="logo-container">
					<div>
						<img src="../../assets/images/tpologo.jpeg" width="80" height="80"
							style="border-radius: 50%;" />
					</div>
				</div>
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<div>
						<a href="company_list.php" class="nav-link">Companies List</a><br>
					</div>
					<div>
						<a href="vacancy_reg_form.php" class="nav-link">Vacancy Registration Form</a><br>
					</div>
				</div>
			</div>
		</div>
		<div class="top_menu">
			<div class="d-flex flex-row bd-highlight mb-3">
				<div class="p-2 bd-highlight">
					<p>TRAINING AND PLACEMENT CELL SYSTEM</p>
				</div>
			</div>
		</div>
		<div class="main_content container">
			<div class="card m-3">
				<div class="card-header">
					<div class='d-flex justify-content-between'>
						<h5 class="card-title">List of Companies</h5>
						<a href="company_reg_form.php"><button class="btn btn-primary">Add Company</button></a>
					</div>
				</div>
				<div class="card-body">
					
				</div>
			</div>
		</div>
		<div class="footer">
			<footer>&copy; TPO</footer>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>