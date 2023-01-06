<?php
//error_reporting(0);
$server_name="localhost";
$username="root";
$password="";
$database_name="wa1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $Name = $_POST['name'];
	 $Email = $_POST['email'];
	 $Title = $_POST['title'];
	 $Review = $_POST['review'];
	

	 $sql_query = "INSERT INTO write_article VALUES ('$Name','$Email','$Title','$Review')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error:" .$sql_query. "" .mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>