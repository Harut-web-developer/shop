<?php
session_start();
include("../model/model.php");
if (isset($_POST["catBut"])) {
    $catName = $_POST["catName"];
    if (!empty($catName)) {
        $addCategory = $adminModel -> addCaategory($catName);
            if ($addCategory) {
                $_SESSION["status"] = "success";
                $_SESSION["messege"] = "kategorian avelacvel e";
            }else{
                $_SESSION["status"] = "error";
                $_SESSION["messege"] = "chi hajoxvel avelacnel categorian";
            }
    }else{
        $_SESSION["status"] = "error";
        $_SESSION["messege"] = "xndrum em lracnel dashter";
    }
    header("location:../index.php");
}

if (isset($_POST["update"])) {
    $categoryName = $_POST["catName"];
    $categoryId = $_POST["catId"];

    $updateCat = $adminModel -> updateCat($categoryName, $categoryId);
    if ($updateCat) {
        $returnArray["status"] = 1;
        $returnArray["messege"] = "success";
    }else{
        $returnArray["status"] = 0;
        $returnArray["messege"] = "failed";
    }
    echo json_encode($returnArray);
    exit;
}


if(isset($_POST["delete"])){
    $deleteName = $_POST["delName"];
    $deleteId =$_POST["delId"];

    $deleteCat = $adminModel -> deleteCat($deleteId);
    if ($deleteCat) {
        $returnArray["status"] = 1;
        $returnArray["messege"] = "success";
    }else{
        $returnArray["status"] = 0;
        $returnArray["messege"] = "failed";
    }
    echo json_encode($returnArray);
    exit;
}
?>