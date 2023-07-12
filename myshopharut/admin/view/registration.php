<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/registration.css">
    <title>Registration</title>
</head>
<body>
    <form action ="../controller/regController.php" method ="post">
        <input name="name" type="text" placeholder="Name">
        <input name="surname" type="text" placeholder="Surname">
        <input name="phone" type="tel" placeholder="Phone">
        <input name="email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <input name="confirm" type="password" placeholder="Confirm password">
        <button name = "action">Sign in</button>
    </form>

    <?php
if (isset($_SESSION["error"])) {
    echo $_SESSION["error"];
    unset($_SESSION["error"]);
}





?>
</body>
</html>