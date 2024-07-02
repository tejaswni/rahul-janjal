<?php

include 'inc/database.php';

$db = new Database();
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$message= $_POST['message'];
$complaint = $db->insert("complaints", ['name' => $name,'mobile'=>$mobile,'address'=>$address,'message' => $message,]);
if ($complaint) {
    echo "<script>alert('Thanks For Feedback');</script>";
    echo "<script>window.location='index.php';</script>";
    
} else {
    //echo alert('Oops', 'Something Went Wrong!', false);
    echo "<script>window.location='complaint.php';</script>";
//    print_r($db->error());
}
