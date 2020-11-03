<?php
// echo "welcome";
session_start();

include ("connection.php");

if(isset($_POST['email']) && isset($_POST['rollno']))
{

  function validate($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }

  $email=validate($_POST['email']);
  $rollno=validate($_POST['rollno']);
  if(empty($email)){
    header("Location: index.php?error=Email is required");
    exit();

  }

  else if(empty($rollno)){

    header("Location: index.php?error=Roll number is required");
    exit();
  }

  else{

    $sql = "SELECT * FROM registration WHERE email = '$email' AND rollno = '$rollno'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)===1)
    {
      $row=mysqli_fetch_assoc($result);
      if($row['email']=== $email && $row['rollno']===$rollno){
        $_SESSION['email']=$row['email'];
        $_SESSION['rollno']=$row['rollno'];
        $_SESSION['lastname']=$row['lastname'];
        $_SESSION['id']=$row['id'];
        $_SESSION['loggedin_time'] = time();
        $_SESSION['expire'] = $_SESSION['loggedin_time'] + (1 * 20);
        header("Location: home.php");
      }else{
        header("Location: index.php?error=Incorrect Password");
        exit();
      }
    }
    else{
      header("Location: index.php?error=Incorrect Password");
      exit();
    }
  }

}
else {


  header("Location: index.php");
  exit();
}




?>
