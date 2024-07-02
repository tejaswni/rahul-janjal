<?php


include 'inc/database.php';
session_start();

$db = new Database();
$user_name = $_REQUEST['user_name'];

$password = md5($_REQUEST['password']);

//$user=$db->query( "select * from user where user_name='".$user_name."' and password='".$password."'or user_name='".$user_name."' and password='".$password.'" );

$user = $db->select("users", "*", ["AND" => ['mobile_no' => $user_name, 'password' => $password]]);
// $user = $db->select("user", "*", ["AND" => ['user_name' => $user_name,  'password' => $password]]);
//$client = $db->query("select * from students where student_institute_id='" . $student_institute_id . "' and password='" . $password . "'")->fetchAll();
//var_dump($client);
if ($user != NULL) {
    $user = $user[0];
    if ($user['deleted'] == 0) {
        $_SESSION['user'] = $user;

        //echo '<script>alert("Login successfuly"); </script>';
        //echo "<script>window.location='index.php';</script>";
        
        header("location:" . $_SERVER['HTTP_REFERER']);
    } else {
        echo '<script>alert("Invalid User"); </script>';
        echo '<script>alert("window.history.back();");</script>';
    }
} else {
    echo '<script>alert("Incorrect User Name Or Password , please try again.");window.history.back(); </script>';
}
