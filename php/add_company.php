<?php
include "./connection.php";

$cname=$_POST['cname'];
$cpname=$_POST['cpname'];
$email=$_POST['email'];
$url=$_POST['url'];
$addr=$_POST['addr'];

$sql = "INSERT INTO `company` (`company_name`,`contact_person_name`,`e_mail`,`url`,`address`) 
        VALUES ('$cname','$cpname','$email','$url','$addr')";
$result = mysqli_query($conn,$sql);
if($result)
{
?>
<script>
  alert('Registration succcessfully.');
  window.location.href = '../pages/admin/company_list.php';
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
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
