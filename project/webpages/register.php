
<?php
	//session_start();
	
	$conn= mysqli_connect("localhost:3306", "root", "", "ceylonteastore");
	?>

<!DOCTYPE html>
<html>
	<head>
	
		<title> Register User  </title> 
	</head>
		<body>
			<div class="header">
				<h2>Register user</h2>
			</div>
			
			<form method="post" action="connection.php">
			
				<table>
					<tr>
						<td>Full Name </td>
						<td> <input type="text" name ="fullname" class="txtinput" placeholder ="Enter your name"> </td>
					</tr>
					
					<tr>
						<td>E mail 	</td>
						<td> <input type="email" name ="email" class="txtinput" placeholder ="Enter your email address"> </td>
					</tr>
					
					<tr>
						<td>Phone Number </td>
						<td> <input type="text" name ="tp" class="txtinput" placeholder ="Enter your phone number"> </td>
					</tr>
					
					<tr>
						<td>City	</td>
						<td> <input type="text" name ="city" class="txtinput" placeholder ="Enter your city"> </td>
					</tr>
					
					<tr>
						<td>Password </td>
						<td> <input type="password" name ="passwrd1" class="txtinput" placeholder ="Enter a password"> </td>
					</tr>
					
					<tr>
						<td>Confirm Password </td>
						<td> <input type="password" name ="passwrd2" class="txtinput" placeholder ="Enter your password again"> </td>
					</tr>
					
					<tr>
						<td></td>
						<td> <input type="submit" name ="registerbtn" value="Register"> </td>
						<td> <input type="submit" name ="cancel" value="Cancel"> </td>
					</tr>
				</table>
			
			</form>
			 
			
		</body>
		

</html>

 