<?php

include 'inc/database.php';
session_start();
$db = new Database();
$mobile = $_POST['mobile'];
$first = $_POST['first'];
$middle =$_POST['middle'];
$last = $_POST['last'];
$addhar = $_POST['addhar'];
$gender = $_POST['gender'];
$birth_date=$_POST['birth_date'];

$category=$_POST['category'];


$password1 = md5($_POST['password1']);
$password2 = md5($_POST['password2']);
$data = $db->select("users", "mobile_no", ['mobile_no'=>$mobile]);
if($data!=null)
{
            echo "<script>alert('Mobile no already exist');</script>";

   echo"<script>window.history.back(); </script>";

}
 else {
    

if($password1 == $password2)
{
$signup = $db->insert("users", ['mobile_no'=>$mobile,'first'=>$first,'middle'=>$middle,'last'=>$last,'password' => $password1,'birth_date'=>$birth_date,'category'=>$category,'gender'=>$gender,'addhar_no'=>$addhar]);
}
else
{
        echo "<script>alert('Password is not match');</script>";

   echo"<script>window.history.back(); </script>";

}

if($signup)
{
$user = $db->select("users", "*", ['user_id'=>$signup]);

if ($user != NULL) {
    $user = $user[0];
    
        $_SESSION['user'] = $user;
        
   echo "<script>window.location='index.php';</script>";

     
  
} }else {
            echo "<script>alert('Something Went Wrong');</script>";
 echo"<script>window.history.back(); </script>";
}

 }

