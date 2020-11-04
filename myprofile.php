<?php

// phpinfo();
session_start();
include("connection.php");
$user_id2=$_SESSION['id'];

if (!isset($_SESSION['id']) ) {
    header("Location: index.php");
    exit();
}

// die(print_r($_FILES));


// $email=$_POST['email'];
// $rollno=$_POST['rollno'];
// $gender=$_POST['gender'];
// $firstname=$_POST['firstname'];
// $lastname=$_POST['lastname'];
// $Address=$_POST['Address'];
// $City=$_POST['City'];
// $Country=$_POST['Country'];
// $Telephonenumber = $_POST['Telephonenumber'];
// $birthday=$_POST['birthday'];
//
//
//
// $sql="UPDATE registration SET email='$email', rollno='$rollno', gender='$gender',
//     firstname='$firstname', lastname='$lastname', Address='$Address', City='$City', Country='$Country',Telephone='$Telephonenumber' WHERE id='$user_id2'";
// //die("vjvj");


// $sql = "INSERT INTO registration (email,rollno,gender,firstname,lastname,Address,City,Country,Telephone) VALUES ('$email','$rollno','$gender','$firstname','$lastname','$Address','$City','$Country','$Telephonenumber')";
// //die(print_r($_POST));
// if (mysqli_query($conn, $sql))
// {
//   echo "Records updated successfully";
// }
//
// else
// {
//   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
// }


if (isset($_POST['upload'])) {

    // Get image name
    $image=$_FILES["file"]["name"];
    $path="images/".$_FILES["file"]["name"];
    if(move_uploaded_file($_FILES["file"]["tmp_name"],$path)){
        

    }

    // $insert_path="INSERT INTO image_table VALUES('$folder','$upload_image')";
    //
    // $var=mysql_query($inser_path);
    //
    //
    //     $imagetmp=addslashes (file_get_contents($_FILES['file']['tmp_name']));
    //
    //
    //     $tmppath='images/'.$image;
    //       $sql = "INSERT INTO registration (email,rollno,gender,firstname,lastname,Address,City,Country,Telephone,img)
    //        VALUES ('$email','$rollno','$gender','$firstname','$lastname','$Address','$City','$Country','$Telephonenumber','$image')";
    //
    //     if(move_uploaded_file($_FILES['file']['tmp_name'],$tmppath)) {
    //
    //     		echo( "Image uploaded successfully");
    //     	}else{
    //
    //     		echo ("Failed to upload image");
    //     	}

}

if (isset($_POST['submit'])){




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



    $sql="UPDATE registration SET email='$email', rollno='$rollno', gender='$gender',
    firstname='$firstname', lastname='$lastname', Address='$Address', City='$City', Country='$Country',Telephone='$Telephonenumber' img='$image' WHERE id='$user_id2'";
    // execute query
    mysqli_query($db, $sql);

    if (mysqli_query($conn, $sql))
    {

      echo "Records inserted successfully.";
    }

    else
    {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }





}

else{


    $sql = "SELECT * FROM registration WHERE id='$user_id2'";
    $rs = mysqli_query($conn, $sql);
    $fetchRow = mysqli_fetch_assoc($rs);
    $owners= ['m'=>'', 'f'=> ''];
    $owners[$fetchRow['gender']] = 'checked';


    //die(print_r($fetchRow));

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <title>My Profile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="val.js"></script>
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
        margin-left:60px;
    }
    .col-50 {
        float: left;
        width: 50%;
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





    <h1>My Profile</h1>
    <div class="container-fluid">
        <form class='is-readonly' action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-50">

                    <div class="row">
                        <div class="col-25">
                            <label for="Email">image</label>
                        </div>
                        <div class="col-25">
                            <img src="<?= 'images/' .$fetchRow['img']?>" alt="Girl in a jacket" width="500" height="600">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Email">Email</label>
                        </div>
                        <div class="col-25">
                            <input class="readonlyattributeclass" type="email" id="email" name="email"  value="<?= $fetchRow['email']?>" readonly placeholder="Your email address..">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="text">Roll Number</label>
                        </div>
                        <div class="col-25">
                            <input class="readonlyattributeclass" type="text" id="rollno" name="rollno" value="<?php echo $fetchRow['rollno']?>" readonly placeholder="Your roll number.." >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="gender">Gender</label>
                        </div>
                        <div class="col-37.5">


                            <div class="form-check-inline">
                                <label class="form-check-label" for="check1">
                                    <input  type="radio" class="form-check-input" id="check1" name="gender" <?php echo $owners['m']?>  value="m" readonly>male
                                </label>
                            </div>
                        </div>

                        <div class="col-37.5">
                            <div class="form-check-inline">
                                <label class="form-check-label" for="check2">
                                    <input type="radio"  class="form-check-input" id="check2" name="gender"  <?php echo $owners['f']?>  value="f" readonly>female
                                </label>
                            </div>
                        </div>



                    </div>


                    <div class="row">
                        <div class="col-25">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="col-25">
                            <input type="text" class="readonlyattributeclass" id="fname" name="firstname" value="<?php echo $fetchRow['firstname']?>" readonly placeholder="Your first name" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="col-25">
                            <input type="text" class="readonlyattributeclass" id="lname" name="lastname" value="<?php echo $fetchRow['lastname']?>"  readonly placeholder="Your last name" >
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-25">
                            <label for="address">Address Data</label>
                        </div>
                        <div class="col-25">
                            <input type="address" class="readonlyattributeclass" id="address" name="Address" value="<?php echo $fetchRow['Address']?>" readonly placeholder="Your address" >
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-25">
                            <label for="city">City</label>
                        </div>
                        <div class="col-25">
                            <input type="text" class="readonlyattributeclass" id="city" name="City" value="<?php echo $fetchRow['City']?>" readonly placeholder="Your city" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="country">Country</label>
                        </div>
                        <div class="col-25">
                            <input type="text" class="readonlyattributeclass" id="country" name="Country" value="<?php echo $fetchRow['Country']?>" readonly placeholder="Your country" >
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-25">
                            <label for="telephoneno">Telephone Number</label>
                        </div>
                        <div class="col-25">
                            <input type="number" class="readonlyattributeclass" id="telephoneno" name="Telephonenumber"  value="<?php echo $fetchRow['Telephone']?>" readonly placeholder="Your telephone number" >
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-25">
                            <label for="birthday">Birthday:</label>
                        </div>
                        <div class="col-25">
                            <input  id="birthday" class="readonlyattributeclass"  value="<?php echo  ($fetchRow['birthday'] ? date("d/m/yy",strtotime($fetchRow['birthday'])):'') ?>"  readonly name="birthday">
                        </div>
                    </div>

                </div>


                <div class="col-50">


                    <div class="row">
                        <div class="col-25">
                            <input  type="file"  name="file" />
                            <button  name="upload" type="submit"> upload </button>
                        </div>
                    </div>


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
        <button class="buttontwo" type="submit" name="submit" style="display:none"onclick="">Save</button>

    </div>




</form>
</div>
</body>
</html>
<?php
}
?>
