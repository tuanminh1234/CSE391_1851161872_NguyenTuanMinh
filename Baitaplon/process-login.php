<?php
// session_start();
//     require('config.php');
//     $errors = array();

//     $username = $_POST['username'];
// 	if (empty($username)) {
// 		$errors[] = 'You forgot to enter your user.';
// 	}

//     $password = $_POST['password'];
//     if (empty($password)) {
//     $errors[] = 'You forgot to enter your password.';
//     }

//     if (empty($errors)) {
//         // B2: Khai bao truy van
//         $sql = "SELECT * FROM user WHERE username = '$username'";
//         $result = mysqli_query($conn,$sql);
//         if(mysqli_num_rows($result)>0){
//             $row = mysqli_fetch_assoc($result);
//             $password1=$row['password'];
//             if(password_verify($password, $password1))
//             {
                
//                 $_SESSION['username'] = $username;
//                 header("location:admin.php");
//                 die();
//             }else{
//                 echo "Mat khau ko chinh xac";
//             }
//         }else{
//             echo "Ko ton tai Tai khoan hoac Tai khoan chua duoc kich hoat";
//         }

//         }else{
//             echo "Hien thi loi";
//     }
    if($_POST['username']=='admin'&& $_POST['password']=='123456'){
        header("Location: admin/dist/index.php");
    }else{
        exit;
    }
?>