<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Đăng ký</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h3>Đăng ký hệ thống</h3>
    <p>
        <?php
            if(isset($_SESSION["thongbao"]) ){
                echo $_SESSION["thongbao"];
            }
        ?>
    </p>
        <form action="register_submit.php" method="POST">
            <table>
                <tr>
                    <td>Tên đăng nhập:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Nhập lại mật khẩu:</td>
                    <td><input type="password" name="repassword"></td>
                </tr>
                <tr colspan="2">
                    <td>
                        <input type="submit" name="submit" value =" Đăng ký" class =" btn btn-primary">
                        <button type="reset">Làm mới</button>
                    </td>
                </tr>
            </table>
        </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>