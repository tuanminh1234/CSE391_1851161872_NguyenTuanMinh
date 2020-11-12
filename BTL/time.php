<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Trường đại học kinh tế kỹ thuật công nghiệp</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <img src="images/banner-phongdaotao.jpg" width="100%">
            <div id="menu">
                <nav class="navbar navbar-expand-sm navbar-dark bg-primary S">
                    <a class="navbar-brand " href="#"></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"><img src="images/home.png" alt="Trang chủ"></img> Trang chủ
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="1.php">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chương trình đào tạo</a>
                                <div class="dropdown-menu color" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="http://daotao.uneti.edu.vn/PageContent.aspx?MenuID=376" style="color: whitesmoke;">Đại học chính quy</a>
                                    <a class="dropdown-item" href="http://daotao.uneti.edu.vn/PageContent.aspx?MenuID=378" style="color: whitesmoke;">Cao đẳng chính quy</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quy chế quy định</a>
                                <div class="dropdown-menu color" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="2.php" style="color: whitesmoke;">Quy chế, quy định</a>
                                    <a class="dropdown-item" href="3.php" style="color: whitesmoke;">Văn bản Luật</a>
                                    <a class="dropdown-item" href="4.php" style="color: whitesmoke;">Chương trình giải quyết thủ tục hành chính</a>
                                    <a class="dropdown-item" href="5.php" style="color: whitesmoke;">Biểu mẫu dùng cho HSSV</a>
                                    <a class="dropdown-item" href="6.php" style="color: whitesmoke;">Quy chế của Bộ Giáo dục và Đào tạo</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://tuyensinh.uneti.edu.vn/">Tuyển sinh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://daotao.uneti.edu.vn/News.aspx?MenuID=394">Thông báo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://daotao.uneti.edu.vn/PageContent.aspx?MenuID=423">Giờ
                                    học</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://daotao.uneti.edu.vn/PageContent.aspx?MenuID=436">Hướng
                                    dẫn dành cho sinh viên</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
    </header>
    <div class="wrapper container-fluid">
        <div class="row" style="margin-top: 10px; ">
            <div class="col-9" style=" margin-top: 10px; ">
                <div class="head" style="background-color: #0098DB; width: 840px;">
                    <h3>Bố trí giờ học tại các cơ sở đào tạo </h3>
                </div>
                <div class="vertical-menu present">
                    <ul style="list-style: none;">
                        
                        <li>
                            <img class="img" src="images/Giohoc2015.gif" alt="" style="width: auto;height:auto" >
                            <br>
                            
                            <hr class="dashed">
                        </li>
                        
                        
                        
                        
                       
                    </ul>
                    
                </div>
            </div>
            <div class="col-3" style="border :1px solid white;">
                <div class="body">
                    <div style=" background: #0098DB; color: rgb(243, 240, 233); margin-bottom: 10px;">
                        <h3>ĐĂNG NHẬP</h3>
                    </div>
                    <form action="register_submit.php" method="POST">
                        <div class="healdy">
                            <div style="padding-left: 10px;">
                                <label>Mã sinh viên:</label>
                                <input type="text" name="username" placeholder="Nhập tên tài khoản"> <br> <br>
                                <label>Mật khẩu:</label><br>
                                <input type="password" placeholder="Nhập mật khẩu" name="password" /><br> <br>
                                <label>Nhập lại mật khẩu</label><br>
                                <input type="passsword" placeholder="Nhập lại mật khẩu" name="repassword">
                            </div>
                            <div style="padding-left: 10px;">
                                <br>
                                <input type="submit" name="submit" value =" Đăng nhập" class =" btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="body">
                    <div class="sclot" style="background-color: #0098DB; color: rgb(243, 240, 233); font-size: 15px;">
                        <h3>THÔNG BÁO</h3>
                    </div>
                    <div class="vertical-menu">
                        <ul style="list-style: none;">
                            <li>
                                <a href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=817">
                                    <img src="images/arrow-2.png" alt="Thông báo v/v tiếp tục thực hiện các biện pháp phòng chống dịch Covid-19 từ ngày 23/4/2020 đến ngày 10/5/2020">
                                    Thông báo v/v tiếp tục thực hiện các biện pháp phò...</a>
                                <hr class="dashed">
                            </li>
                            <li>
                                <a href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=800">
                                    <img src="images/arrow-2.png" alt="v/v tiếp tục thực hiện các biện pháp phòng chống dịch Covid-19 từ ngày 23/4/2020 đến ngày 10/5/2020">
                                    Hướng dẫn SV thực hiện nội dung liên quan tới yêu ...</a>
                                <hr class="dashed">
                            <li>
                                <a href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=799">
                                    <img src="images/arrow-2.png" alt="Hướng dẫn SV thực hiện nội dung liên quan tới yêu cầu về tài khoản Email">
                                    Hướng dẫn SV thực hiện nội dung liên quan tới yêu ...</a>
                                <hr class="dashed">
                            </li>
                            <a href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=724">
                                <img src="images/arrow-2.png" alt="Quyết định v/v miễn học, miễm thi và tính điểm các học phần Anh văn trong chương trình đào tạo cho sinh viên có chứng chỉ Tiếng Anh quốc tế">
                                Quyết định v/v miễn học, miễm thi và tính điểm các...</a>
                            <hr class="dashed">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="body">
                    <div class="sclot" style="background-color: #0098DB; color: rgb(243, 240, 233); font-size: 13px;">
                        <h3>DÀNH CHO PHỤ HUYNH</h3>
                    </div>
                    <div>
                        <ul style="list-style: none;">
                            <li>
                                <a href="http://daotao.uneti.edu.vn/TraCuuThongTin.aspx">
                                    <img src="images/arrow-2.png" alt="Tra cứu thông tin">
                                    Tra cứu thông tin</a>
                                <hr class="dashed">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="body">
                    <div class="sclot" style="background-color: #0098DB; color: rgb(243, 240, 233);">
                        <h3>LIÊN KẾT</h3>
                    </div>
                    <div class="vertical-menu">
                        <ul style="list-style: none;">
                            <li>
                                <a href="http://iuh.edu.vn/">
                                    <img src="images/arrow-2.png" alt="ĐH Công Nghiệp TP.HCM"> ĐH Công Nghiệp TP.HCM</a>
                                <hr class="dashed">
                            </li>
                            <li>
                                <a href="http://ascvn.com.vn/">
                                    <img src="images/arrow-2.png" alt="Công ty TNHH Tiến bộ Sài Gòn"> Công ty TNHH Tiến
                                    bộ Sài Gòn</a>
                                <hr class="dashed">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="body">
                    <div class="scolt" style="background-color: #0098DB; color: rgb(243, 240, 233);">
                        <h3>THỐNG KÊ</h3>
                    </div>
                    <div>
                        <img src="images/khach.png" alt=""> Đang online: 266</img>
                        <br>
                        <img src="images/homnay.png" alt=""> Hôm nay:9159</img>
                        <br>
                        <img src="images/homqua.png" alt=""> Hôm qua: 21369</img>
                        <br>
                        <img src="images/tongcong.png" alt=""> Tổng cộng: 57465421</img>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="wrapper footerr">
            <p>Copyright © 2013 Trường Đại học Kinh tế Kỹ thuật Công nghiệp - Phòng Đào Tạo</p>
            <p>Địa chỉ: 456-Minh Khai, Hà Nội - Fax:(04)8623938</p>
            <p>Điện thoại: (04)8621504 - Email: uneti@vnn.vn</p>
            <p>Thiết kế bởi EPMT</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>