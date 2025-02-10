<?php


$name = $_POST["name"];
$password = $_POST["password"];
$status = $_POST["status"];

$user = array()

$errorMessage.="name=".$name."&";

if(!empty($name) && !empty($password)){
    if($status === "admin"){
        header("location: welcomeAdmin.html");
    }
    else if($status === "cashier"){
        header("location: welcomeCashier.html");
    }
    else if($status === "client"){
        header("location: welcomeClient.html");
    }
    exit();
}
else{
    $errorMessage.="error=1";
    header("location: loginPage.php?".$errorMessage);
    exit();
}