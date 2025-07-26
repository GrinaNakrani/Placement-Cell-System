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
                <a href="company_list.php" class="nav-link">Companies List</a><br>
            </div>
            <div>
                <a href="vacancy_reg_form.php" class="nav-link active">Vacancy Registration Form</a><br>
            </div>
            
        </div>
    </div>
    <div class="right">
        <div class="card m-3">
            <div class="card-body">
                <h5 class="card-title">VACANCY REGISTRATION FORM</h5>
                <form action="../../php/add_company.php" method="post" autocomplete="on">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="vcode" class="form-label">Vacancy Code</label>
                            <input type="text" class="form-control" id="vcode" name="vcode"
                                placeholder="Enter Company vacancy code " aria-label="Last vacancy code">
                        </div>

                        <div class="col-6">
                            <label for="sal" class="form-label">Salary</label>
                            <input type="sal" class="form-control" name="sal" id="sal"
                                placeholder="Enter Company Salary" aria-label="salary">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="post" class="form-label">Post</label>
                            <input type="text" class="form-control" id="post" name="post" placeholder="Enter "
                                aria-label="post">
                        </div>
                        <div class="col-6">
                            <label for="student" class="form-label">For Which Year Student</label>
                            <input type="text" class="form-control" id="student" name="student"
                                placeholder="which year Student" aria-label="For which year Student"><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="dept" class="form-label">Department</label><br>
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 bd-highlight">
                                        <input type="checkbox" name="CE" value="CE">
                                        <label for="CE">Computer Engineering</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 bd-highlight">
                                        <input type="checkbox" name="IT" value="IT">
                                        <label for="IT">Information Technology</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 bd-highlight">
                                        <input type="checkbox" name="EE" value="EE">
                                        <label for="EE">Electrical Engineering</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 bd-highlight">
                                        <input type="checkbox" name="ME" value="ME">
                                        <label for="ME">Mechanical Engineering</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 bd-highlight">
                                        <input type="checkbox" name="Civ" value="Civ">
                                        <label for="Civ">Civil Engineering</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 bd-highlight">
                                        <input type="checkbox" name="AE" value="AE">
                                        <label for="AE">Architectural Engineering</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 bd-highlight"><input type="checkbox" name="gen" value="gen">
                                        <label for="gen">General</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="oti" class="form-label">Other Information</label>
                                    <textarea rows="5" cols="50" class="form-control" id="oti" name="oti"
                                        placeholder="Enter Other Information"> </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" <label for="vacancy form" class="form-label">Vacancy Form</label><br>
                                    <input type="radio" id="open" name="vac_form" value="open">
                                      <label for="open">Open</label>&nbsp;&nbsp;&nbsp;
                                      <input type="radio" id="close" name="vac_form" value="close">
                                      <label for="close">Close</label><br>
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