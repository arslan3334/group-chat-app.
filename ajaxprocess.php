<?php
session_start();
require_once('require/connection.php');
extract($_REQUEST);
if (isset($_SESSION['user_data'])){

date_default_timezone_set("Asia/Karachi");
if (isset($_REQUEST['action']) && $_REQUEST['action'] == "insert_message") {

$time=time();	

$userdata=$_SESSION['user_data'];

$query = "INSERT INTO mesages(message_desc,muser_id,msg_time)

VALUES('{$message}','{$userdata['user_id']}','{$time}'); ";

	$result = mysqli_query($connection,$query);

	if ($result) {
		echo "<h1 style='color:green' > MSG SENT SUCCESSFULLY</h1>";
	}


	else{

		echo "<h1 style='color:red' > MSG SENT FAILED</h1>";
	}


}


if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_messages") {

$query2 = "SELECT * FROM mesages INNER JOIN users WHERE users.`user_id`=mesages.`muser_id`;";

	$result2 = mysqli_query($connection,$query2);


	if ($result2->num_rows>0){


while ($data=mysqli_fetch_assoc($result2)) {

?> <table>  <?php
if ($data['muser_id']==$_SESSION['user_data']['user_id']) {
	
?>

<tr>
<td>	
<div style=" width:400px;background-color:green;border-radius: 5px;color: white;float:left;">
<img src="images/<?php echo $data['user_profile'];?>" style="width: 50px;height: 50px; border-radius: 20px; ">
<?php echo $data['first_name']." ".$data['last_name']."<?br>";?>
<br>
<?php echo $data['message_desc']."  ".date('h:i:A',$data['msg_time'])."</br>";?>

</div>
<br>
</td>
</tr>
<?php

}

else{

?>

<tr >
<td style="float: right;">	
<div style=" width:400px;background-color:blue;border-radius: 5px;color: white;float:right;margin-left:500px">
<img src="images/<?php echo $data['user_profile'];?>" style="width: 50px;height: 50px; border-radius: 20px; ">
<?php echo $data['first_name']." ".$data['last_name']."<?br>";?>
<br>
<?php echo $data['message_desc']."  ".date('h:i:A',$data['msg_time'])."</br>";?>

</div>
<br>
</td>
</tr>
<?php


}

?></table><?php


}


}
	


}


if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_users") {

$query4 = "SELECT * FROM users";

	$result4 = mysqli_query($connection,$query4);


	if ($result4->num_rows>0){
echo"<h1 style='background-color:yellow;color:red'> ALL USERS</h1>";

while ($usersdata=mysqli_fetch_assoc($result4)) {


	if ($usersdata['is_online']==1) {
		
		echo"<p style='color:green;'>".$usersdata['first_name']." ".$usersdata['last_name']."   ONLINE</p>"; 
		
	}
	else{

		echo"<p style='color:red;'>".$usersdata['first_name']." ".$usersdata['last_name']."  OFFLINE</p>"; 

	}
}

}

}
}
else{
$msg="<h2  style='color:red;' >login first...!</h2>";

	header("location:index.php?msg=$msg");

}

?>