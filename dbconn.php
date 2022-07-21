<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webtech_D";
$name="sadia";
$email="sadia@gmail.com";
//$apple=new Fruit();
//$apple->x;
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//$q="CREATE TABLE Student(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30) NOT NULL, Email VARCHAR(30) NOT NULL)";
	//$q="INSERT INTO Student(Name,Email) VALUES('Eva','eva@gmail.com')";
	//$q="INSERT INTO Student(Name,Email) VALUES('".$name."','".$email."')";
	//$q="DELETE FROM Student where ID=1003";
	$q="INSERT INTO Teacher(ID,Name,Email,Salary) VALUES(20024,'".$name."','".$email."',50000)";
	$result=$conn->query($q);
	if($result)
		echo "data inserted successfully";
	else
		echo "data not inserted";
	
		$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$q = "UPDATE Teacher(ID,Name,Email,Salary) VALUES(20023,'".$name."','".$email."',50000)";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
	//echo "successful connection";
?>