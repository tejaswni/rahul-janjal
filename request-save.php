<?php

session_start();
include 'inc/database.php';

//include "../sms.php";
$db = new Database();
$user_id = $_SESSION['user']['user_id'];
$scheme_id = $_REQUEST['scheme_id'];

$valid = $db->select("request", "*", ["AND" => ['scheme_Id' => $scheme_id, 'user_id' => $user_id]]);
if($valid)
{
  echo '<script> alert("Yojna already Applyed"); </script>';
echo"<script>window.history.back(); </script>";
}
else
{

$data= $db->insert('request',['scheme_id' => $scheme_id,'user_id'=>$user_id]);

if ($data) {
       echo "<script> alert('Successful Request Send!');</script>";
   echo "<script>window.location='scheme.php?id=$scheme_id';</script>";
    
    

    
} else {
echo '<script> alert("Ops ! please try again."); </script>';
echo"<script>window.history.back(); </script>";

}
}
 
?>