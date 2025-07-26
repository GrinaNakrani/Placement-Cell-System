<html>

<head>
    <title> Admin Dashboard </title>
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
                <a href="company_list.php" class="nav-link active">Companies list</a><br>
            </div>
            <div>
                <a href="vacancy_reg_form.php" class="nav-link">Vacancy Registration Form</a><br>
            </div>
           
        </div>
    </div>
    <div class="right">
        <div class="card m-3">
            <div class="card-body">
                <h5 class="card-title">COMPANY REGISTRATION FORM</h5>
                <form action="../../php/add_company.php" method="post" autocomplete="on">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="cname" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="cname" name="cname"
                                placeholder="Enter your Company name" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="cpname" class="form-label">Contact Person Name</label>
                            <input type="text" class="form-control" id="cpname" name="cpname"
                                placeholder="Enter Contact Person Name " aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="email" class="form-label">Company Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter Company Email" aria-label="Last name">
                        </div>
                        <div class="col">
                            <label for="url" class="form-label">Company URL</label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="Enter Company Url "
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="add" class="form-label">Company Address</label>
                            <textarea rows="5" cols="50" class="form-control" id="addr" name="addr"
                                placeholder="Enter your Address"> </textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" class="btn btn-secondary" value="Reset" />
                    </div>
                </form>
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