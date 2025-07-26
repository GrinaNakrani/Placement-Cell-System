<html>
<head>
        <title>
            Student register
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
  <body>
<?php
$conn = mysqli_connect("localhost","root","","tpo_db");

$fname=$_POST['fname'];
$en=$_POST['en'];
$email=$_POST['email'];
$passwd=$_POST['pswd'];
$branch=$_POST['branch'];
$phone=$_POST['phone'];
$phone2=$_POST['phone2'];
$ssc_mark=$_POST['ssc_mark'];
$hsc_mark=$_POST['hsc_mark'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
$s6=$_POST['s6'];
$cgpi=$_POST['cgpi'];
$cb1=$_POST['cb1'][0];
$cb2=$_POST['cb2'][0];
$role=2;

$sql = "INSERT INTO user (username,email,password,enrollment_no,contact_no1,contact_no2,role) 
        VALUES ('$fname','$email','$passwd','$en','$phone','$phone2','$role')";
$result = mysqli_query($conn,$sql);
if($result)
{
?>
<script>
  alert('Registration succcessfully.');
  window.location.href = './login1.php';
</script>
<?php
}
 else
 {
  ?>
<script>
  alert('Your Registration is not succcessfully.');
</script>
<?php
 }
$userId = $conn->insert_id;

 $sql = "INSERT INTO 
         result (user_id,ssc_marks,hsc_marks,sem1_marks,sem2_marks,sem3_marks,sem4_marks,sem5_marks,sem6_marks,cgpi) 
         VALUES ('$userId','$ssc_mark','$hsc_mark','$s1','$s2','$s3','$s4','$s5','$s6','$cgpi')";
 $result = mysqli_query($conn,$sql);
 if($result)
 {
  
 } 
 else
  {
 echo "Data is not store.";
 }

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
    </html>