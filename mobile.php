<?php
session_start();
$user_list = array("919600830086","917305024764");
// if(in_array( $_POST['mobile'], $user_list)){

$_SESSION['is_logged_in'] = true;

echo "success";

// }else{
//     echo "invalid";
// }
?>