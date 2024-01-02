
<!-- This is a form tag in Html-->
<form action = "index1.php" method ="post">

<input type="text" name="name" placeholder="Enter your name"><!-- Must be the user Enter  your name-->
<br>
<input type="submit" value="Send" name="submit">

</form>

<!--Start PHP Tag-->
<?php 
if(isset($_POST['submit']))    //check the user enter the button 
{
$isName=$_POST['name'];      //declare variable isName
if(empty($isName)){         //check the isName empty
    echo "warring must be not empty";}


else{
    if(is_string($isName))   //check isNmae is string 
          {define('name',"$isName");      //declare variable Name const
           echo name;}
    else{
          echo "please Enter your text ";}//
}
}
?>
