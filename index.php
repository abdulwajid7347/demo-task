<?php

$conn = mysqli_connect('localhost', 'root', 'algolix786', 'test');
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";

?>
<?php
	$sql = "select * from registration where id = 1";
	$rs = mysqli_query($conn, $sql);
	//get row

	$fetchRow = mysqli_fetch_assoc($rs);
  $owners= ['m'=>'', 'f'=> ''];
  $owners[$fetchRow['gender']] = 'checked';
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
  <!-- <script src="val.js"></script><script> -->
  <script>
    function removeReadOnly() {
      $('.readonlyattributeclass').removeAttr( "readonly" );
      $(".buttonone").hide();
      $(".buttontwo").show();

      // window.location.href = "http://local.test.com/student.php";
    }
    function cancelreadmode() {
      $('.readonlyattributeclass').prop("readonly", true);
      $(".buttonone").show();
      $(".buttontwo").hide();

       //window.location.href = "http://local.test.com/student.php";
    }
     // function submitrecord() {
     //
     //
     //
     //    window.location.href = "http://local.test.com/student.php";
     //  }


</script>

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




/* input[type=edit] {
  background-color: #4CAF50;
  color: white;
  width: 10%;
  padding: 20px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
} */

input[type=button]:hover {
  background-color: #45a049;
  padding: 20px 20px 20px 20px;
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
  .col-25, .col-75, input[type=edit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body >





  <h1>Student Registration Form</h1>
<div class="container-fluid">
  <form class='is-readonly' action="student.php" method="POST">

    <div class="row">
      <div class="col-25">
        <label for="Email">Email</label>
      </div>
      <div class="col-75">
        <input class="readonlyattributeclass" type="email" id="email" name="email"  value="<?php echo $fetchRow['email']?>" placeholder="Your email address..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="text">Roll Number</label>
      </div>
      <div class="col-75">
        <input class="readonlyattributeclass" type="text" id="rollno" name="rollno" value="<?php echo $fetchRow['rollno']?>"  placeholder="Your roll number.." >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-37.5">


      <div class="form-check-inline">
      <label class="form-check-label" for="check1">
        <input  type="radio" class="form-check-input" id="check1" name="gender" <?php echo $owners['m']?>  value="m">male
      </label>
  </div>
  </div>

<div class="col-37.5">
  <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="radio"  class="form-check-input" id="check2" name="gender"  <?php echo $owners['f']?>  value="f" >female
      </label>
  </div>
  </div>



      </div>


    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" class="readonlyattributeclass" id="fname" name="firstname" value="<?php echo $fetchRow['firstname']?>" readonly placeholder="Your first name" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" class="readonlyattributeclass" id="lname" name="lastname" value="<?php echo $fetchRow['lastname']?>"  readonly placeholder="Your last name" >
      </div>
    </div>



    <div class="row">
      <div class="col-25">
        <label for="address">Address Data</label>
      </div>
      <div class="col-75">
        <input type="address" class="readonlyattributeclass" id="address" name="Address" value="<?php echo $fetchRow['Address']?>" readonly placeholder="Your address" >
      </div>
    </div>



    <div class="row">
      <div class="col-25">
        <label for="city">City</label>
      </div>
      <div class="col-75">
        <input type="text" class="readonlyattributeclass" id="city" name="City" value="<?php echo $fetchRow['City']?>" readonly placeholder="Your city" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <input type="text" class="readonlyattributeclass" id="country" name="Country" value="<?php echo $fetchRow['Country']?>" readonly placeholder="Your country" >
      </div>
    </div>



     <div class="row">
      <div class="col-25">
        <label for="telephoneno">Telephone Number</label>
      </div>
      <div class="col-75">
        <input type="number" class="readonlyattributeclass" id="telephoneno" name="Telephonenumber"  value="<?php echo $fetchRow['Telephone']?>" readonly placeholder="Your telephone number" >
      </div>
    </div>


  <div class="row">
      <div class="col-25">
         <label for="birthday">Birthday:</label>
      </div>
      <div class="col-75">
        <input  id="birthday" class="readonlyattributeclass"  value="<?php echo  ($fetchRow['birthday'] ? date("d/m/yy",strtotime($fetchRow['birthday'])):'') ?>"  readonly name="birthday">
      </div>
  </div>



  <!-- <button onclick="myFunction()"></button>
  <p id="demo"></p>

  <script>
function myFunction() {
  document.getElementById('country').contentEditable = true;
  document.getElementById("demo").innerHTML;
}
</script> -->


<div>
      <button  class="buttonone" type="button" onclick="removeReadOnly()">Edit</button>
      <button class="buttontwo" type="button" style="display:none" onclick="cancelreadmode()">cancel</button>
      <button class="buttontwo" type="submit" style="display:none"onclick="">Save</button>

      </div>


    </div>


  </form>
</div>
</body>
</html>
