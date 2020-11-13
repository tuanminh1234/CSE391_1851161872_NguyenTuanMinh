<?php
                       require('config.php');
                        if (isset($_POST['btnsubmit'])){
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $sql="SELECT * FROM user WHERE username='$username' and password='$password'";  
                            
                            $query = mysqli_query($conn,$sql);
                            
                            if ($row=mysqli_num_rows($query)> 0) {
                                if($row == 1){
                                    echo "<div style='text-align:center;color:red;'>Đăng nhập thành công</div>";
                                    header('location:admin/admin.php');
                                }
                            }else{
                                echo "<div style='text-align:center;color:red;'>Tài khoản không đúng</div>";
                                header('location:login.php');
                            }
                        }            
?>