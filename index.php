<?php

$conn = mysqli_connect('localhost', 'root', 'algolix786', 'test');
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>
<?php
	$sql = "select * from registration where id = 1";
	$rs = mysqli_query($conn, $sql);
	//get row

	$fetchRow = mysqli_fetch_assoc($rs);
  // die(print_r($fetchRow,true));
?>













<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="val.js"></script>
  <style>
* {
  box-sizing: border-box;
}

input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  text-align-last: left;
  float: left;
}




input[type=submit] {
  background-color: #4CAF50;
  color: white;
  width: 10%;
  padding: 20px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container-fluid {
  border-radius: 5px;
  background-color: #ffffff;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body >
  <h1>Student Registration Form</h1>
<div class="container-fluid">
  <form action="student.php" method="POST">

    <div class="row">
      <div class="col-25">
        <label for="Email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email"  value="<?php echo $fetchRow['email']?>" placeholder="Your email address..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="text">Roll Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="rollno" name="rollno" value="<?php echo $fetchRow['rollno']?>" placeholder="Your roll number..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-37.5">


      <div class="form-check-inline">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="gender" value="<?php echo $fetchRow['gender']?>">male
      </label>
  </div>
  </div>

<div class="col-37.5">
  <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="gender" value="<?php echo $fetchRow['gender']?>"checked>female
      </label>
  </div>
  </div>



      </div>


    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value="<?php echo $fetchRow['firstname']?>" placeholder="Your first name" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" value="<?php echo $fetchRow['lastname']?>" placeholder="Your last name" >
      </div>
    </div>



    <div class="row">
      <div class="col-25">
        <label for="address">Address Data</label>
      </div>
      <div class="col-75">
        <input type="address" id="address" name="Address" value="<?php echo $fetchRow['Address']?>" placeholder="Your address" >
      </div>
    </div>



    <div class="row">
      <div class="col-25">
        <label for="city">City</label>
      </div>
      <div class="col-75">
        <input type="text" id="city" name="City" value="<?php echo $fetchRow['City']?>" placeholder="Your city" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <input type="text" id="country" name="Country" value="<?php echo $fetchRow['Country']?>" placeholder="Your country" >
      </div>
    </div>



     <div class="row">
      <div class="col-25">
        <label for="telephoneno">Telephone Number</label>
      </div>
      <div class="col-75">
        <input type="number" id="telephoneno" name="Telephonenumber"  value="<?php echo $fetchRow['Telephone']?>" placeholder="Your telephone number" >
      </div>
    </div>


  <div class="row">
      <div class="col-25">
         <label for="birthday">Birthday:</label>
      </div>
      <div class="col-75">
        <input  id="birthday"  value="<?php echo  date("d/m/yy",strtotime($fetchRow['birthday'])) ?>" name="birthday">
      </div>
  </div>





    <div class="row">
      <div class="col-33">

      <input type="submit" value="Submit">
      </div>
      <div class="col-33">

      <input type="submit" value="Submit">
      </div>
      <div class="col-33">

      <input type="submit" value="Submit">
      </div>

    </div>


  </form>
</div>
</body>
</html>
