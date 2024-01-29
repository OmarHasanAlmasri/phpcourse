

<?php
session_start();
 $con=mysqli_connect("localhost","root","","employee");



if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=sha1($_POST['password']);
  if(!empty($username) and !empty($password)){
 $select=$con->query("SELECT * FROM users where (username='$username') AND `password`='$password' limit 1 ");
if($select->num_rows==1){
  while($row=mysqli_fetch_assoc($select))
$_SESSION['username']=$row['username'];
// header("Location:index1.php");
echo'<meta http-equiv="refresh" content="0;url=inex1.php" />';
die();
}else{
  echo"password or username not found";
}

  }else{
    echo" all filed is required";
  }
}
// echo $_SESSION['username'];

if(isset($_POST['logout'])){
  if($_SESSION['username']){
session_destroy();
echo "destroy";
  }
}


?>




 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] )?>" method="post">

<input type="text" name="username" placeholder="Enter your name">
<br>
<input type="password" name="password" placeholder="Enter password">
<br>
<input type="submit" name="submit" value="login">

<input type="submit" name="logout" value="logout">

</form> 