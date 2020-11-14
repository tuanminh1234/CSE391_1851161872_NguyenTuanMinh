<?php
  ob_start();
  session_start();
  
  //require'config.php';
  require('config.php');     
?>
<!doctype html>
<html lang="en">

<head>
    <title>Register </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
        <section class="login-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 login-sec">
                        <h2 class="text-center">Register Now</h2>
                       
                        <form class="login-form"  method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-uppercase">Tên đăng nhập</label>
                                <input type="text" class="form-control" placeholder="" name="username">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="text-uppercase">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="" name = "password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="text-uppercase">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="repassword" placeholder="">
                            </div>


                            <div class="form-check">
                                <button type="submit" name="btnsubmit" class="btn btn-primary" >Đăng ký</button>
                            </div>

                        </form>
                        <?php
                         if (isset($_POST['btnsubmit'])){
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $password1 =  md5($password);
                            $repassword = $_POST["repassword"];
                            $level = 0;
                    
                            if (!$username || !$password) {
                                echo "<p style='text-align:center;color:red;'>Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.</p>";
                            }
                            else{

                
                                $sql = mysqli_query($conn,"INSERT INTO  user (username, password, level) VALUES ('$username', '$password1', $level)");
                                if($sql)
                                {
                                    echo "<div style='text-align:center;color:red;'>Đăng ký thành công.</div>";
                                    header("location:login.php");
                                }
                                else{
                                    echo "<div style='text-align:center;color:red;'> Có lỗi xảy ra trong quá trình đăng ký.</div>";
                                }
                                
                                
                            }
                        }
                        else{
                            die('');
                        }
                        ?>
                    
                    </div>
                </div>
        </section>
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>