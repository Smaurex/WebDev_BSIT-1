<?php


$name = $_POST["name"];
$password = $_POST["password"];
$role = $_POST["role"];

$errorMessage.="name=".$name."&";

$accounts = array (
    array("John",  "123", "admin"),
    array("Doe", "456", "cashier"),
    array("Mauris", "790", "client")
  );

  if (!empty($name) && !empty($password)) {

    $found = false; // Flag to track if a valid account is found

    // Loop through accounts
    foreach ($accounts as $account) {
        if ($name == $account[0] && $password == $account[1] && $role == $account[2]) {
            $found = true;

            // Redirect based on status
            if ($role == "admin") {
                header("location: welcomeAdmin.html");
                exit();
            } elseif ($role == "cashier") {
                header("location: welcomeCashier.html");
                exit();
            } elseif ($role == "client") {
                header("location: welcomeClient.html");
                exit();
            }
        }
    }

    // If no account was found
    if (!$found) {
        header("location: loginPage.php?error=No account found");
        exit();
    }

}
else{
    $errorMessage.="error=1";
    header("location: loginPage.php?".$errorMessage);
    exit();
}
