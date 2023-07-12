<?php
class AdminModel{
    public $conn;
    
    public function __construct(){
        $this -> conn = mysqli_connect("localhost", "root", "", "harutshop");
        if (!$this -> conn) {
            die(mysqli_connect_error($this -> conn));
        }
    }
    public function checkAdmin($email){
        $query = "SELECT * FROM `admin` WHERE email = '$email'";
        $res = mysqli_query($this -> conn, $query);
        $result = mysqli_num_rows($res);
        return $result;
    }
    public function addAdmin($name, $surname, $phone, $email, $password){
        $query = "INSERT INTO `admin` VALUES(null, '$name', '$surname', '$phone', '$email', '$password')";
        $res = mysqli_query($this -> conn, $query);
        return $res;
    }
    public function checkAdminLogin($login, $pass){
        $query = "SELECT * FROM `admin` WHERE email = '$login' AND password = '$pass'";
        $res = mysqli_query($this -> conn, $query);
        if (mysqli_num_rows($res) > 0) {
            return $result = true;
        }else{
            return $result = false;
        }
    }
    public function addCaategory($catName){
        $query = "INSERT INTO `categories` VALUES(null, '$catName', 'active')";
        $res = mysqli_query($this -> conn, $query);
        return $res;
    }
    public function showCategory(){
        $query = "SELECT * FROM `categories` WHERE status = 'active'";
        $res = mysqli_query($this -> conn, $query);
        $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
        return $result;
    }
    public function updateCat($categoryName, $categoryId){
        $query = "UPDATE `categories` SET catName = '$categoryName' WHERE cat_id = '$categoryId'";
        $res = mysqli_query($this -> conn, $query);
        return $res;
    }
    public function deleteCat($deleteId){
        $query = "DELETE FROM `categories` WHERE cat_id = '$deleteId'";
        $res = mysqli_query($this -> conn, $query);
        return $res;
    }
}






































$adminModel = new AdminModel();









?>