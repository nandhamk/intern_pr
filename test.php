<!doctype html>
 <html>
 <head>
 <title>
 sample
 </title>
  </head>
 <body>
 <?php
$host = 'localhost';
$user = 'root';
$password = '';
$db ='student';
$url='page1.html';
$conn = mysqli_connect($host,$user,$password,$db);
if($conn){
	$flag=0;
	$user1 = $_POST["username"];
	$pwd = $_POST["password"];
	$sql = "SELECT * FROM login";
	$arr1=array();
	$i=0;
$sql1=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($sql1)){
	$arr1[$i]=$row;
	$i++;
}
$count1=mysqli_num_rows($sql1);
for($i=0;$i<$count1;$i++){
if($user1==$arr1[$i]['user'] || $user1==$arr1[$i]['email'] and $pwd==$arr1[$i]['pwd']){
	echo "successful";
	$flag=1;
	header("Location: $url");
	exit;
	break;
}}
if($flag == 0){echo "failed";}
}
else{
   echo "db connection error because of".mysqli_connect_error();
}
mysqli_close($conn);
?>
<p>status : <?php echo $count1 ?></p>
</body>
</html>
