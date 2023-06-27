<?php
session_start();
require_once('require/connection.php');
if (isset($_SESSION['user_data'])){
$query2="UPDATE users SET is_online=0
WHERE user_id='{$_SESSION['user_data']['user_id']}';";
$resul2=mysqli_query($connection,$query2);
if ($resul2) {
	
$msg="<h1 style='color:green'>logged out</h1>";
session_destroy();
header("location:index.php?msg=$msg");
}
}
else{
$msg="<h2  style='color:red;' >login first...!</h2>";

	header("location:index.php?msg=$msg");

}

?>