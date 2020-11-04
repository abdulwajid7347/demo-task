
<?php
session_start();

if (isset($_SESSION['id'])) {
    header("Location: home.php");
    exit();
}
include('connection.php');


// 	$sql = "select * from registration where id = 1";
// 	$rs = mysqli_query($conn, $sql);
// 	//get row
//
// 	$fetchRow = mysqli_fetch_assoc($rs);
//   $owners= ['m'=>'', 'f'=> ''];
//   $owners[$fetchRow['gender']] = 'checked';
//   // die(print_r($fetchRow,true));


// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1.0";

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        top:47%;
        left:16%;
        height: 300px;
        width:50%;

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
        width:100%;
    }

</style>
</head>
<body style="height:100%">

    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
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
                    <h1>Log in to Facebook</h1>
                </div>
                <form action="login.php" method="post">

                    <div class="row">
                        <div class="col-100">
                            <input  type="email" id="email" name="email"   placeholder="Email">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-100">
                            <input  type="text" id="rollno" name="rollno"   placeholder="RollNo">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-100">
                            <button class="buttonlogin" type="submit"  >Login</button>
                        </div>

                    </div>

                </form>

                <div class="row">
                    <div class="col-100">
                        <button class="buttonsignup" type="button"  onclick="window.location='http://local.test.com/signup.php'">Sign Up</button>
                    </div>

                </div>
            </div>
        </div>

    </div>




</body>
</html>
