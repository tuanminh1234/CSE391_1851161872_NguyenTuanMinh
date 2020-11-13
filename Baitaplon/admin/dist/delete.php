<?php
        ob_start();
        $conn = mysqli_connect("localhost","root","", "baitaplon");
        mysqli_set_charset($conn, "utf8");

        if (isset($_GET['key'])&&($_GET['key']!=''))
        {
    
        
        $delete1 = mysqli_query($conn, " DELETE FROM user where id='$_GET[id]'");
        if($delete1)
        {
            header("location: index.php");
        }
        else{
            echo "<div style='text-align:center;color:red;'> Xóa không thành công.</div>";
        }
        }
        else{die();}
    ?>