<html>
<head>
	<title>Student Form</title>
	<style>
		body {
			background: linear-gradient(135deg, #71b7e6, #9b59b6);
			font-family: calibri;
		}

		table {
			box-shadow: 10px 10px 15px 15px grey;
			border-radius: 15px;
			background-color: white;
			font-size: 20px;
		}
	</style>
</head>

<body>
	<br>
	
    <h1><center> Training and Placement cell system</center></h1>
	<br>
	<form action="./php/register.php" method="post" autocomplete="on" onsubmit="return validate()">
		<center>
			<table bgcolor="white" width="10px" cellpadding=5px cellspacing=3px>
				<tr>
					<td colspan="2"><label for="title" style="font-size:25px; background:linear-gradient(135deg,#71b7e6,#9b59b6);"><b>REGISTRATION FORM<b></label></td>
				</tr>
				<tr>
					<td colspan="3" width=10><label for="fname"><b>Full Name</b></label></td>
					<td colspan="3" width=10><label for="number"><b>Enrollment Number</b></label></td>
				</tr>
				<tr>
					<td colspan="3"><input type="text" id="fname" name="fname" placeholder="Enter your name" required style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
					<td colspan="3"><input type="text" id="number" name="en" placeholder="Enter your enrollment no." required style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
				</tr>
				<tr>
					<td colspan="3" width=10><label for="pswd"><b>Password</b></label></td>
					<td colspan="3" width=10><label for="cpswd"><b>Confirm Password</b></label></td>
				</tr>
				<tr>
					<td colspan="3"><input type="password" id="pswd" name="pswd" placeholder="Enter your Password" required style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
					<td colspan="3"><input type="password" id="cpswd" name="cpswd" placeholder="Enter your Confirm password" required style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
					
				</tr>

				<tr>
					<td colspan="3" width=10><label for="email" size="10"><b>Email</b></label></td>
					<td colspan="3" width=10><label for="branch"><b>Branch</b></label></td>
				</tr>
				<tr>
					<td colspan="3"><input type="email" name="email" id="email" placeholder="Enter your Email" required style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
					<td colspan="3">
						<select name="branch" id="branch" name="branch" style="width:400px; height:35px; border:1px solid; border-radius:5px; padding:5px;">
							<option value="DWPD">Computer Engineering</option>
							<option value="CMTS">Information Technology</option>
							<option value="JAVA">Electrical Engineering</option>
							<option value="CNS">Mechanical Engineering</option>
							<option value="CNS">Civil Engineering</option>
							<option value="CNS">Architecture Engineering</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" width=10><label for="contact_num"><b>Contact Number1</b></label></td>
					<td colspan="3" width=10><label for="contact_num1"><b>Contact Number2</b></label></td>
				</tr>
				<tr>
					<td colspan="3"><input type="tel" name="phone" id="contact_num" pattern="[0-9]{10}" placeholder="0123456789" required style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
					<td colspan="3"><input type="tel" name="phone2" id="contact_num1" pattern="[0-9]{10}" placeholder="0123456789" style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
				</tr>
				<tr>
					<td colspan="3" width=10><label for="ssc_mark"><b>SSC %</b></label></td>
					<td colspan="3" width=10><label for="hsc_mark"><b>HSC %</b></label></td>
				</tr>
				<tr>
					<td colspan="3"><input type="number" step=".01" name="ssc_mark" id="ssc_mark" required style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
					<td colspan="3"><input type="number" step=".01" name="hsc_mark" id="hsc_mark" style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
				</tr>
				<tr>
					<td colspan="6">
						<center><label for="name"><b>SPI OF ALL SEMESTER</b></label></center>
					</td>
				</tr>
				<tr>
					<td>
						<label>SEM 1</label>
					</td>
					<td>
						<label>SEM 2</label>
					</td>
					<td><label>SEM 3</label></td>
					<td><label>SEM 4</label></td>
					<td><label>SEM 5</label></td>
					<td><label>SEM 6</label></td>
				</tr>
				<tr>
					<td><input type="number" step=".01" name="s1" required style="width:100px; height:35px; border-radius:5px; padding:15px;"></td>
					<td><input type="number" step=".01" name="s2" required style="width:100px; height:35px; border-radius:5px; padding:15px;"></td>
					<td><input type="number" step=".01" name="s3" required style="width:100px; height:35px; border-radius:5px; padding:15px;"></td>
					<td><input type="number" step=".01" name="s4" required style="width:100px; height:35px; border-radius:5px; padding:15px;"></td>
					<td><input type="number" step=".01" name="s5" required style="width:100px; height:35px; border-radius:5px; padding:15px;"></td>
					<td><input type="number" step=".01" name="s6" required style="width:100px; height:35px; border-radius:5px; padding:15px;"></td>
				</tr>
				<tr>
					<td align="center"><label for="number"><b>CGPI</b></label></td>
					<td colspan="4" align="center"><input type="number" step=".01" name="cgpi" requird style="width:400px; height:35px; border-radius:5px; padding:15px;"></td>
				</tr>
				<tr>
					<td colspan="6">
						<b><input type="checkbox" value="true" name="cb1[]" required>I accept that all the information provided above by me is correct and accurate.I know that 
						&nbsp;&nbsp;&nbsp;&nbsp;providing incorrect and inaccurate information is an offence.</b>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<b><input type="checkbox" value="true" name="cb2[]" required>I declare that I have no objection if my information in this form is shared with the company.</b>
					</td>
				</tr>
				<tr>
					<th colspan="6"><input type="submit" value="Submit" style="width:500px; height:35px; border-radius:5px; 
					background:linear-gradient(135deg,#71b7e6,#9b59b6); color:white;"></th>
				</tr>
			</table>
	</form>
	<script>
		function validate (e) 
		{
			const pswd = document.getElementById('pswd').value;
			const cpswd = document.getElementById('cpswd').value;
			console.log(pswd)
			console.log(cpswd)
			if (pswd !== cpswd) 
			{
				alert('Password and confirm password must be same');
				return false;
			}
			return true;
		}
	</script>
</body>
</html>