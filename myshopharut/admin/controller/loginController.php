<?php
session_start();
include("../model/model.php");

if (isset($_POST["action"]) && $_POST["action"] === "login") {
    $login = $_POST["login"];
    $pass = $_POST["pass"];
    if ($login !== "" && $pass !== "") {
        $checkAdminLogin = $adminModel -> checkAdminLogin($login, $pass);
        if ($checkAdminLogin) {
            $_SESSION["userlogin"] = $login;
            $returnArray["action"] = 1;
            $returnArray["massege"] = "hajoxutyamb mutq eq gorcel";
        }else{
            $returnArray["action"] = 0;
            $returnArray["massege"] = "sxal tvyalner";
        }
    }else{
        $returnArray["action"] = 0;
        $returnArray["massege"] = "mutqagrel bolor dashter";
    }
    echo json_encode($returnArray);
}
?>