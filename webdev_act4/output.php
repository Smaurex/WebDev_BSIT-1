<?php


$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$age = $_POST["age"];
$gender = $_POST["gender"];


$errorMessage.= "firstName=".$firstName."&";
$errorMessage.= "lastName=".$lastName."&";
$errorMessage.= "age=".$age."&";
$errorMessage.= "gender=".$gender."&";


if(empty($firstName) || empty($lastName) || empty($age) || empty($gender)){
    $errorMessage.="error=1";
    header("location: ./input.php?".$errorMessage);
    exit();
}
else{
    header("location: ./congrats.html");
}