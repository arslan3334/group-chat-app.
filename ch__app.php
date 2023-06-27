<?php
session_start();

if (isset($_SESSION['user_data'])) {
	


?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['user_data']['first_name']." ".$_SESSION['user_data']['last_name'];?></title>
	<style type="text/css">
		
	</style>


<script type="text/javascript">
	
showmessage()
show_users()
setInterval(showmessage,1000)
setInterval(show_users,1000)		
function insertmessage(){


var message = document.getElementById('send_message').value

	var obj;

	if (window.XMLHttpRequest) {
obj = new XMLHttpRequest()

	}

	else{

obj = new ActiveXObject("Microsoft.XMLHTTP")

	}

obj.onreadystatechange = function(){

if (obj.readyState == 4 && obj.status == 200) {

	document.getElementById('send_message').value =""

	showmessage()
			
			}

}


obj.open("POST","ajaxprocess.php")
		obj.setRequestHeader("content-type","application/X-www-form-urlencoded");
		obj.send("action=insert_message&message="+message);

}



function showmessage(){

	var obj;

	if (window.XMLHttpRequest) {
obj = new XMLHttpRequest()

	}

	else{

obj = new ActiveXObject("Microsoft.XMLHTTP")

	}

obj.onreadystatechange = function(){

if (obj.readyState == 4 && obj.status == 200) {

	document.getElementById('show_messages').innerHTML=obj.responseText
			
			}

}


obj.open("POST","ajaxprocess.php")
		obj.setRequestHeader("content-type","application/X-www-form-urlencoded");
		obj.send("action=show_messages");

}

function show_users(){

	var obj;

	if (window.XMLHttpRequest) {
obj = new XMLHttpRequest()

	}

	else{

obj = new ActiveXObject("Microsoft.XMLHTTP")

	}

obj.onreadystatechange = function(){

if (obj.readyState == 4 && obj.status == 200) {

	document.getElementById('show_users').innerHTML=obj.responseText
			
			}

}


obj.open("POST","ajaxprocess.php")
		obj.setRequestHeader("content-type","application/X-www-form-urlencoded");
		obj.send("action=show_users");

}



</script>	

</head>
<body style="background-color:orange;">

<center>

<h1 style="background-color: red;color: white;border-radius: 10px;width: 100%"> GROUP CHAT WEB APPLICATION</h1>
<a href="logout.php" style="float: right;background-color: yellow;color: red;border:2px solid blue;border-width: thick;"><b>LOGOUT</b></a>
</center>
<div style="width: 100%;background-color: purple;border-radius: 15px;height: 55px;color: white">
<img src="images/<?php echo $_SESSION['user_data']['user_profile'];?>" style="width: 50px;height: 50px; border-radius: 200px; ">
<?php echo $_SESSION['user_data']['first_name']." ".$_SESSION['user_data']['last_name'];?> 
</div>
<table style="width: 100%;" >
<tr>

<td id="show_messages" style="width:70%;border-radius: 10px ;border:2px solid;background-color: gray;overflow-y:auto;" >

</td>	
<td id="show_users"style="width:30%;height:100px ;border:2px solid;background-color:silver"> </td>	
</tr>
<tr>
<td>
<br>	
<input type="text" name="" id="send_message" style="width:80%;border-radius:3px ;border:2px solid" placeholder="Message Type Here.." > <button onclick="insertmessage()">SEND</button>
</td>

</tr>	


</table>

</body>
</html>


<?php
}
else{
$msg="<h2  style='color:red;' >login first...!</h2>";

	header("location:index.php?msg=$msg");

}


?>