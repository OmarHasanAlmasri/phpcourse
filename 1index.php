

<?php

 $con=mysqli_connect("localhost","root","","employee");



if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=sha1($_POST['password']);
  $age=$_POST['age'];
  $date=date("Y/M/d h:m:s");
  if(!empty($username) and !empty($password)){
$con->query("INSERT INTO users(username,password,age,date) values ('$username','$password','$age','$date')");
echo $date;
echo"is succsufly";
  }else{
    echo" all filed is required";
  }
}


?>




 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] )?>" method="post">

<input type="text" name="username" placeholder="Enter your name">
<br>
<input type="password" name="password" placeholder="Enter password">
<br>
<input type="date" name="age" placeholder="enter date" >
<br>
<input type="submit" name="submit" value="submit">



</form> 