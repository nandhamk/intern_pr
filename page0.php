
<?php
$ch=$_POST['choice'];
if($ch == "instructor")
    {header("Location: page2.html");
    }elseif($ch == "course"){
      header("Location: page3.html");
    }elseif($ch == "students"){
      header("Location: page4.html");
    }}
    else{
      header("Loaction: page1.html");
    }
?>
