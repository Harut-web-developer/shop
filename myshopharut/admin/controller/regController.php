<?php
include("../model/model.php");
session_start();
if (isset($_POST["action"])) {
   $name = $_POST["name"];
   $surname = $_POST["surname"];
   $phone = $_POST["phone"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $confirm = $_POST["confirm"]; 
   if ($name == "" || $surname == "" || $phone == "" || $email == "" || $password == "" || $confirm == "") {
        $_SESSION["error"] = "lracnel dasher";
    header("location:../view/registration.php");

   }else{
    if ($password !== $confirm) {
       $_SESSION["error"] = "gaxtnabarer nuyn chen";
    }else{
        $checkAdmin = $adminModel -> checkAdmin($email);
        if ($checkAdmin > 0) {
            $_SESSION["error"] = "tvyal emailov ka grancum";
        }else{
            $addAdmin = $adminModel -> addAdmin($name, $surname, $phone, $email, $password);
            if ($addAdmin) {
            // $_SESSION["error"] = "grancum  hajoxvel e";
            header("location:../view/login.php");die;

            }else{
                $_SESSION["error"] = "grancum chi hajoxvel";
            }
        }
    }
    header("location:../view/registration.php");
   }
}

// if(isset($_POST["action"])){
//     $name = $_POST["name"];
//     $surname = $_POST["surname"];
//     $phone = $_POST["phone"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];
//     $confirm = $_POST["confirm"];
//     if ($name !== "" ||  $phone !== ""  $password !== "" || $confirm !== "") {
//         if ($password !== $confirm) {
//             $_SESSION["error"] = "gaxtnabarer nuyn chen";
//             header("location:../view/registration.php");
//         }else{
//             $checkAdmin = $adminModel -> checkAdmin($email);
//             if($checkAdmin > 0){
//                 $_SESSION["error"] = "tvjal mailov granvac mard ka";
//             }else{
//                 $addAdmin = $adminModel -> addAdmin($name, $surname, $phone, $email, $password);
//                 if ($addAdmin) {
//                     header("location:../view/login.php");
//                 }else{
//                     $_SESSION["error"] = "grancum chi hajoxvel";
//                 }
//             }
//         }
//     }else{
//         $_SESSION["error"] = "lracnel dashter";
//         header("location:../view/registration.php");

//     }
// }


?>



