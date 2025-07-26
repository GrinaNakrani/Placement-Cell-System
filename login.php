<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./assets/styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <center>
    <br>
    <center><h1>Training and Placement Cell System</h1></center>
    <br><br>
    <div class="form">
        <p>LOGIN</p>
    <form action="./php/authentication.php" method='post'>
        <div>
    <i class="fa-solid fa-calendar-days"></i>    
    <input type="text" name="username" placeholder="username">
</div>
        <input type="password" name="password" placeholder="password">
        <button>login</button>
        <p class="message">Not register? <a href="./pages/student/student_registration.php">Create New account</a></p>
        <p class="message"><a href="reset.php">Forget password?</a></p>
    </form>
</div>
<br>
    <br>
</center>
</body>
</html>