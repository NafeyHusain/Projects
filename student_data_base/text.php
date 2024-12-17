<?php

$conn = mysqli_connect('localhost', 'nafey', '1234', 'student_data_base');
if(!$conn){
	echo 'Connection error: '. mysqli_connect_error();
}

?>
