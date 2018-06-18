<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
  $server="localhost";
  $user="root";
  $pwd="";
  $database="student";
  $conn=mysqli_connect($server,$user,$pwd,$database);
  if($conn)
  {
      $roll=$_POST['rollno'];
      $name=$_POST['Name'];
      $course=$_POST['Course'];
      $depid=$_POST['Depid'];
      $sql="insert into student ('Rollno','Name','Course','Depid') values ('$roll','$name','$course','$depid') ";
      mysqli_query($conn,$sql);
    }
    else{
      header("Loaction: page1.html");
    }

  mysqli_close($conn);
  ?>
</body>
</html>
