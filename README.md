$con=mysqli_connect("localhost","root","","users");
// $con->query("CREATE DATABASE users");
// if(isset($_POST['insert'])){
//     $data= htmlspecialchars( $_POST['namee']);
//     if(!empty($data)){
//         $select=$con->query("SELECT  username from employee  where (username ='$data') limit 1");
//         if($select->num_rows==0){
//             $con->query("INSERT INTO employee (username) values ('$data')");
//             echo"the process is sucssufuly";
//         }else{
//             echo"the data is exist ";
//         }
//     }
// }

// if(isset($_POST['delete'])){
//     $data= htmlspecialchars( $_POST['namee']);
//     if(!empty($data)){
//         $select=$con->query("SELECT * from employee where (username='$data') limit 1");
//         if($select->num_rows==1){
//             $con->query("DELETE from employee where username='$data'");
//             echo"the delete is scussefuly";
//         }else{
//          echo "the data not exist";
//         }
//     }
// }

// if(isset($_POST['update'])){
//     $data=htmlspecialchars($_POST['namee']);
//     if(!empty($data)){
//         $select=$con->query("SELECT * from employee where username='$_POST[number]' limit 1");
//         if($select->num_rows==1){
//             $con->query("UPDATE employee set username='$data' where username='$_POST[number]' ");
//             echo"the update is sucssufly";
//         }else{
//             echo"the data not exist";
//         }
//     }
// }


if(isset($_POST['print'])){
    $data= htmlspecialchars( $_POST['namee']);
    if(!empty($data)){
    
        $select=$con->query("SELECT * from employee ORDER BY username ASC");
        if($select->num_rows>=1){
      while($row=mysqli_fetch_assoc($select)){
        echo"id =$row[id].    .$row[username].'<br>'";
      }
    
    }
      else{
        echo"no data";
      }
    }
}







?>
<hr>
<form action="index1.php" method="post">
<input type="email" name="namee" placeholder="Enter your name">
<br>
<input type="text" name="number" placeholder="Enter the number update">
<br>
<input type="submit" name="print" value="print">
<input type="submit" name="delete" value="delete">
<input type="submit" name="update" value="update">




</form>
