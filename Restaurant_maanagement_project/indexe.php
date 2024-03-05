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
	 $Table_Type = $_POST['Table_Type'];
	 $Guest_Number = $_POST['Guest_Number'];
     $Placement = $_POST['Placement'];
     $Date = $_POST['Date'];
     $Time = $_POST['Time'];
     $Note = $_POST['Note'];

	 $sql_query = "INSERT INTO tb (fn,ln,em,tt,gn,place,date,time,note)
	 VALUES ('$First_Name','$Last_Name','$Email','$Table_Type','$Guest_Number','$Placement','$Date','$Time','$Note')";

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