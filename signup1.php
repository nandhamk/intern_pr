<!DOCTYPE html>
<html>
<head>
  sample
</head>
<body>
  <?php
  $server="localhost";
  $user="root";
  $pwd="";
  $database="student";
  $conn=mysqli_connect($server,$user,$pwd,$database);
  $loc="index.html";

  if($conn){
    $user=$_POST["usrname"];
    $pwd=$_POST["pwd"];
    $email=$_POST["email"];
    $sql="insert into login (user,pwd,email) values ('$user','$pwd','$email')";
    mysqli_query($conn,$sql);
    header("location: $loc");
  }
  mysqli_close($conn);
 ?>
</body>
</html>
