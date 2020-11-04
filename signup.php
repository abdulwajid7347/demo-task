<?php
session_start();

if (isset($_SESSION['id'])) {
  header("Location: home.php");
  exit();
}
include ("connection.php");
//die(print_r($_POST));
if (isset($_POST['email'])) {

  $email=$_POST['email'];
  $rollno=$_POST['rollno'];
  $gender=$_POST['gender'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $Address=$_POST['Address'];
  $City=$_POST['City'];
  $Country=$_POST['Country'];
  $Telephonenumber = $_POST['Telephonenumber'];
  $birthday=$_POST['birthday'];


  $sql = "INSERT INTO registration (email,rollno,gender,firstname,lastname,Address,City,Country,Telephone) VALUES ('$email','$rollno','$gender','$firstname','$lastname','$Address','$City','$Country','$Telephonenumber')";
  //die(print_r($_POST));
  if (mysqli_query($conn, $sql))
  {
    $last_id = mysqli_insert_id($conn);
    echo "Records inserted successfully. Last inserted ID is: " . $last_id;
  }

  else
  {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

  
  $_SESSION['email']=$email;
  $_SESSION['rollno']=$rollno;
  $_SESSION['lastname']=$row['lastname'];
  $_SESSION['id']=$last_id;
  $_SESSION['loggedin_time'] = time();
  $_SESSION['expire'] = $_SESSION['loggedin_time'] + (1 * 20);
  header("Location: home.php");



  mysqli_close($conn);
}


else if (!isset($_POST['submit'])){





  ?>






  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1.0";

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
    .box{
      background-color:black;
      height:1000px;
      width:100%;
    }
    .box1{
      background-color:white;
      width:50%;
      height:1000px;
      float:left;
    }
    .box2{
      background-color:white;
      width:50%;
      height:1000px;
      float:right;
      position: relative;



    }
    .box11{
      text-align: center;
      position: relative;
      top: 50%;
    }
    .box11>h1{
      font-size: 3em;
      color:blue;
    }

    .box11>p{
      font-size: 2em;
      color:black;
    }

    .container-fluid {
      border-radius: 5px;
      background-color: #ffffff;
      padding: 20px;
      border:1px solid  black;
      position:absolute;
      top:35%;
      height: 550px;
      width:65%;

    }

    .col-50a {
      float: left;
      width: 45%;
      margin-top: 6px ;
    }

    .col-50b {
      float: left;
      width: 45%;
      margin-top: 6px ;
      margin-left: 7%;
    }
    .col-100 {
      float: left;
      width: 97%;
      margin-top: 6px ;
    }

    .col-30{
      float: left;
      width: 30%;
      margin-top: 14px ;
    }

    .col-35{
      float: left;
      width: 35%;

    }
    .top1{

      color: blue;
    }





    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    input{
      width: 100%;
      padding: 12px;
      border: 1px solid #778899;;
      border-radius: 4px;
      resize: vertical;
    }
    button{
      background-color: green;
      font-size: 20px;
      border-radius: 4px;
    }

  </style>
</head>
<body style="height:100%">
  <form  action="" method="post">
    <div class="box">

      <div class="box1">
        <div class="box11">

          <h1>Facebook</h1>
          <p>Facebook helps you connect and share with the people in your life</p>

        </div>
      </div>
      <div class="box2">



        <div class="container-fluid">

          <div class="top1">
            <h2 >Sign Up</h2>
            <h4>It's quick and easy.</h4>
          </div>

          <div class="row">
            <div class="col-50a">
              <input  type="text" id="firstname" name="firstname"   placeholder="First Name" required>
            </div>
            <div class="col-50b">
              <input  type="text" id="lastname" name="lastname"   placeholder="Last name" required>
            </div>
          </div>


          <div class="row">
            <div class="col-30">
              <label for="gender">Gender</label>
            </div>
            <div class="col-35">


              <div class="form-check-inline">
                <label class="form-check-label" for="check1">
                  <input  type="radio" class="form-check-input" id="male" name="gender" value="m" required >male
                </label>
              </div>
            </div>

            <div class="col-35">
              <div class="form-check-inline">
                <label class="form-check-label" for="check2">
                  <input type="radio"  class="form-check-input" id="female" name="gender" value ="f" required >female
                </label>
              </div>
            </div>



          </div>




          <div class="row">
            <div class="col-100">
              <input  type="email" id="email" name="email"   placeholder="Email" required>
            </div>

          </div>

          <div class="row">
            <div class="col-100">
              <input  type="text" id="rollno" name="rollno"   placeholder="Roll Number" required>
            </div>




            <div class="row">
              <div class="col-100">
                <input  type="text" id="Address" name="Address"   placeholder="Address" required>
              </div>
            </div>


            <div class="row">
              <div class="col-100">
                <input  type="text" id="City" name="City"   placeholder="City" required>
              </div>

            </div>

            <div class="row">
              <div class="col-100">
                <input  type="text" id="Country" name="Country"   placeholder="Country" required>
              </div>

            </div>

            <div class="row">
              <div class="col-100">
                <input  type="number" id="Telephonenumber" name="Telephonenumber"   placeholder="Phone number" required>
              </div>

            </div>

            <div class="row">
              <div class="col-100">
                <input  type="date" id="birthday" name="birthday"   placeholder="Date of Birth" required>
              </div>

            </div>


            <div class="row">
              <div class="col-50a">
                <button type="submit">Submit </button>
              </div>

            </div>






          </div>



        </div>
      </div>
    </div>

  </form>




</body>
</html>

<?php

}
?>
