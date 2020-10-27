<?php

echo "<h1>Hello World!!!!</h1>";
echo "<h2>Hello World!!!!</h2>";

$email=$_POST['email'];
$rollno=$_POST['rollno'];
$gender=$_POST['gender'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Country=$_POST['Country'];
$Telephonenumber=$_POST['Telephonenumber'];
$birthday=$_POST['birthday'];


// $conn=new mysqli('localhost','root','algolix786','test');
//
// if($conn->connect_error){
//   die('connection failed  : '.$conn->connect_error);
// }
// else{
//   $stmt=$conn->prepare("insert into registration(email,rollno,gender,firstname,lastname,Address,City,Country,Telephonenumber,birthday)
//   values(?,?,?,?,?,?,?,?,?,?)");
//
//   $resolve->bind_param('',$email,$rollno,$gender,$firstname,$lastname,$Address,$City,$Country,$Telephonenumber,$birthday);
//   die("hello");
//   $stmt->execute();
//   echo"success";
//   $stmt->close();
//   $conn->close();
// }


$conn = mysqli_connect('localhost', 'root', 'algolix786', 'test');
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "INSERT INTO registration (email,rollno,gender,firstname,lastname,Address,City,Country,Telephone) VALUES ('$email','$rollno','$gender','$firstname','$lastname','$Address','$City','$Country','$Telephonenumber')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>
