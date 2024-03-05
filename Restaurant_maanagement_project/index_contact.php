//Full Code of php file for mySql database connection with html form
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="db";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $First_Name = $_POST['First_Name'];
	 $Last_Name = $_POST['Last_Name'];
	 $Email = $_POST['Email'];
	 $Subject = $_POST['Subject'];
	 $Message = $_POST['Message'];


	 $sql_query = "INSERT INTO bt(fn,ln,em,subj,mess)
	  VALUES ('$First_Name','$Last_Name','$Email','$Subject','$Message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>