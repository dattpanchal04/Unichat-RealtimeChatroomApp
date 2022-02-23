<!-- PHP Code Here -->
<?php

$room = $_POST['room'];

// If name of the room is out of lengh then throw this alert meassage
if(strlen($room) > 20 or strlen($room) < 5)
{
	$msg = "Please choose a name between 5 to 20 characters!";
	echo '<script language="javascript">';
	echo 'alert("'.$msg.'");';
	echo 'window.location="http://localhost/Realtime_Chatroom/";';
	echo '</script>';
}

// if room is not alphanumeric then throw alert
else if (!ctype_alnum($room)) {
	$msg = "Please choose a an alphanumeric room name!";
	echo '<script language="javascript">';
	echo 'alert("'.$msg.'");';
	echo 'window.location="http://localhost/Realtime_Chatroom/";';
	echo '</script>';
}

// Else connect to the database
else
{
	include 'db_connect.php';
}


// Check if room is already exists

$sql = "SELECT * FROM `rooms` WHERE roomname = '$room'";
$result = mysqli_query($conn, $sql);

if($result)
{
	if(mysqli_num_rows($result) > 0)
	{
		$msg = "Sorry, this room is already exists! Please choose a diffrent room name!";
		echo '<script language="javascript">';
		echo 'alert("'.$msg.'");';
		echo 'window.location="http://localhost/Realtime_Chatroom/";';
		echo '</script>';
	}
	else
	{
		$sql = "INSERT INTO `rooms` (`roomname`, `stime`) VALUES ('$room', current_timestamp());";
		if(mysqli_query($conn, $sql))
		{
			$msg = "Your room is ready and now you can chat now!";
			echo '<script language="javascript">';
			echo 'alert("'.$msg.'");';
			echo 'window.location="http://localhost/Realtime_Chatroom/rooms.php?roomname=' . $room. '";';
			echo '</script>';
		}
	}
}
else
{
	echo "Error: ". mysqli_error($conn);
}

?>