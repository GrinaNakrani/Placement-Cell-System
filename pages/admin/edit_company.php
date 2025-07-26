<?php
include '../../php/connection.php';

$sql = "SELECT * FROM `company` where=";
$company_res = mysqli_query($conn, $sql);

?>

<html>

<head>
	<title> Admin Dashboard </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="../../assets/styles/homepage.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="top">
		<div class="d-flex flex-row bd-highlight mb-3">
			<div class="p-2 bd-highlight"><img src="../../assets/images/tpologo.jpeg" width="80" height="80"
					style="float:left; border-radius: 50%; margin: 5px;" border="1"></div>
			<div class="p-2 bd-highlight">
				<p>TRAINING AND PLACEMENT CELL SYSTEM</p>
			</div>
		</div>
		<br>
	</div>
	<div class="left">
		<br>
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<div>
				<a href="company_reg_form.php" class="nav-link">Company Registration Form</a><br>
			</div>
			<div>
				<a href="vacancy_reg_form.php" class="nav-link">Vacancy Registration Form</a><br>
			</div>
			<div>
				<a href="company_list.php" class="nav-link active">Companies list</a><br>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="card m-3">
			<div class="card-header">
				<div class='d-flex justify-content-between'>
					<h5 class="card-title">List of Companies</h5>
					<a href="company_reg_form.php"><button class="btn btn-primary">Add Company</button></a>
				</div>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Company Name</th>
							<th scope="col">Contact Person</th>
							<th scope="col">Email</th>
							<th scope="col">Website</th>
							<th scope="col">Address</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
                        while ($company = mysqli_fetch_assoc($company_res)) {
	                        $company_id = $company['company_id'];
                        ?>
						<tr>
							<th scope="row"><?php echo $company['company_id'] ?></th>
							<td><?php echo $company['company_name'] ?></td>
							<td><?php echo $company['contact_person_name'] ?></td>
							<td><?php echo $company['e_mail'] ?></td>
							<td><?php echo $company['url'] ?></td>
							<td><?php echo $company['address'] ?></td>
							<td>
								<a href="<?php echo '../../php/edit_company.php?id='.$company_id ?>">
									<i class="fa-solid fa-pen-to-square mr-2"></i>
								</a>
								<i class="fa-solid fa-trash"></i>
							</td>
						</tr>
						<?php
                        }
                        ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>

</html>