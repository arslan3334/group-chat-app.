<?php
session_start();
require_once('require/connection.php');
 extract($_REQUEST); 

if (isset($email )&&isset($pass)) {
	
// print_r($_REQUEST);

if (isset($login)) {


$query="SELECT * FROM users WHERE email='$email' AND passw='$pass';";

$result=mysqli_query($connection,$query);

if ($result->num_rows>0) {


$row=mysqli_fetch_assoc($result);

 $_SESSION['user_data']=$row;	

 $query2="UPDATE users SET is_online=1
WHERE user_id={$_SESSION['user_data']['user_id']};";
$resul2=mysqli_query($connection,$query2);
	
header("location:ch__app.php");

}else{

$msg="<h2  style='color:red;' >invalid email or password...!</h2>";

	header("location:index.php?msg=$msg");
}


}


}
else{
$msg="<h2  style='color:red;' >login first...!</h2>";

	header("location:index.php?msg=$msg");

}





?>