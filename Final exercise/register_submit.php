<?php
session_start();
    include("config.php");
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' ){
        // Thuc hien xu lys khi nguoi dung dien day du thong tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $level = 0;
        if($password != $repassword){
            $_SESSION["thongbao"] = "Password nhap lai ko chinh xac";
            header("location:register.php");
            die();
        }
        $sql = "SELECT * FROM  user WHERE username='$username'";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);
        if(mysqli_num_rows($old) != 0){
            $_SESSION["thongbao"] = "Username da ton tai"; //ko chạy đc
            header("location:register.php");
        }else{
            $sql = "INSERT INTO  user (username, password, level) VALUES ('$username', '$password', $level)";
            if( mysqli_query($conn, $sql))
            $_SESSION["thongbao"] = "Da dang ky thanh cong"; // ko đc
            header("location:login.php");
        }
        // echo "Đã đăng ký thành công";
    // echo $sql;
    } else{
        $_SESSION["thongbao"] = "Vui long nhap day du thong tin";
        header("location:register.php");
    }
?>