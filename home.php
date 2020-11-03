<?php
session_start();
include ("connection.php");


if (!isset($_SESSION['id']) ) {
  header("Location: index.php");
  exit();
} else {
  if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $user_id = $_SESSION['id'];
    $sql = "INSERT INTO posts (text,user_id) VALUES ('$text','$user_id')";
    if (mysqli_query($conn, $sql)) {
      mysqli_close($conn);
      header("Location: home.php");
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  }
  else {
  $user1_id = $_SESSION['id'];
    $sql = "SELECT * FROM posts WHERE user_id= '$user1_id'";



    $rs = mysqli_query($conn, $sql);
    //get row

  //  $fetchRow = mysqli_fetch_assoc($rs);
//     while ($row = mysqli_fetch_array($rs, MYSQLI_NUM)) {
//     echo $row[0];
//     echo $row[1];
//     echo $row[2];
//
// }
// die("bhjwvwhs");
//      die(print_r($fetchRow['user_id']));

    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8"
      <meta name="viewport" content="width=device-width, initial-scale=1.0";

      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <title>HOME</title>

      <style>

      .commnetbox{
        margin-left: 20px;

      }
      .button{
        margin-left: 20px;
      }

      </style>
    </head>
    <body>
      <form  action="" method="post">
        <h1>Hello, <?php echo $_SESSION['lastname'] ; ?></h1>
        <h2>Write new post:</h2>

        <input   name="text" ></input>

        <div class="row">
          <div class="col-100">
            <button class="button" type="submit" name="submit"  value="submit" >Submit</button>
          </div>

        </div>
      </form>

      <?php foreach ($rs as $row) {

        $id = $row['id'];
        $text = $row['text'];

        ?>
          <!DOCTYPE html>
        <html>
        <head>
          <meta charset="utf-8"
          <meta name="viewport" content="width=device-width, initial-scale=1.0";
        </head>

        <body>

          <h1>Previous Posts<h1>
            <input   name="text" value="<?php echo $row['text']?>"></input>
          </body>


          </html>


        <?php } ?>
        <a href="logout.php">Logout</a>


      </body>
      </html>

      <?php

    }
    // }
  }
  ?>
