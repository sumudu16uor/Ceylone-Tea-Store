 <?php
	//session_start();
	
	$conn= mysqli_connect("localhost:3306", "root", "", "ceylonteastore");
		
		//if(mysqli_connect_errno()){
		//	die('database connection failed'.mysqli_connect_errno());
		//} 

 


	if(isset($_post['registerbtn'])){
		//echo "vaghsdvfasfdf";
		
		$full= $_post['fullname'];
		$email= $_post['email'];
		$tp= $_post['tp']; 
		$city= $_post['city'];
		$pwd=$_post['passwrd1'];
	
	
 	
	$sql= "INSERT INTO 'register'('cus_name','cus_email','cus_tp','cus_city','password')

		values('$full','$email','$tp','$city','$pwd')"; 
		
		$result= mysqli_query($conn,$sql);
		/*if($result){
			echo "inserted";
		}
		else{
			echo "not  inserted";
		} */	
	}
?>