<?php
    session_start();
?>
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
                                    <a class="dropdown-item" href="dhcq.php" style="color: whitesmoke;">Đại học chính quy</a>
                                    <a class="dropdown-item" href="cdcq.php" style="color: whitesmoke;">Cao đẳng chính quy</a>
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
                                <a class="nav-link" href="tb.php">Thông báo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="time.php">Giờ
                                    học</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="hd.php">Hướng
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
                    <h3>THÔNG BÁO</h3>
                </div>
                <div class="vertical-menu present">
                    <ul style="list-style: none;">
                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=847" title="Thời khóa biểu các lớp học kỳ phụ năm học 2019-2020 (cơ sở Hà Nội)">Thời
                                khóa biểu các lớp học kỳ phụ năm học 2019-2020 (cơ sở Hà Nội)
                                <img class="img" src="images/unnamed.jpg" alt=""></a>
                            <br>
                            <span class="date">Ngày đăng: 06-08-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=846" title="Thông báo v/v xử lý SV vi phạm quy chế thi kết thúc học phần HK II năm học 2019-2020">Thông
                                báo v/v xử lý SV vi phạm quy chế thi kết thúc học phần HK II năm học
                                2019-2020</a>
                            <img class="img" src="images/unnamed.jpg" alt="">
                            <br>
                            <span class="date">Ngày đăng: 03-08-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=845" title="Thời khoá biểu các lớp học kỳ phụ cơ sở Nam Định (đợt 1)">Thời khoá
                                biểu các lớp học kỳ phụ cơ sở Nam Định (đợt 1)</a>
                            <img class="img" src="images/unnamed.jpg" alt="">
                            <br>
                            <span class="date">Ngày đăng: 01-08-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=843" title="Thông báo v/v triển khai kế hoạch học tập từ tuần ngày 03/8 đến ngày 16/8/2020">Thông
                                báo v/v triển khai kế hoạch học tập từ tuần ngày 03/8 đến ngày 16/8/2020</a>
                            <img class="img" src="images/unnamed.jpg" alt="">
                            <br>
                            <span class="date">Ngày đăng: 30-07-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=842" title="Thông báo kế hoạch nhận Bằng tốt nghiệp và Chứng chỉ GDTC đợt xét tốt nghiệp tháng 6/2020">Thông
                                báo kế hoạch nhận Bằng tốt nghiệp và Chứng chỉ GDTC đợt xét tốt nghiệp tháng
                                6/2020</a>
                            <img class="img" src="images/unnamed.jpg" alt="">
                            <br>
                            <span class="date">Ngày đăng: 29-07-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=841" title="THÔNG BÁO VỀ CÁC LỚP HỌC PHẦN ĐƯỢC MỞ VÀ CHƯA ĐƯỢC MỞ TRONG HỌC KỲ PHỤ NĂM HỌC 2019-2020">THÔNG
                                BÁO VỀ CÁC LỚP HỌC PHẦN ĐƯỢC MỞ VÀ CHƯA ĐƯỢC MỞ TRONG HỌC KỲ PHỤ NĂM HỌC
                                2019-2020</a>
                            <br>
                            <span class="date">Ngày đăng: 22-07-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=840" title="Thông báo v/v chi trả tiền hỗ trợ 8% học phí cho SV hệ Đại học và Cao đẳng chính quy">Thông
                                báo v/v chi trả tiền hỗ trợ 8% học phí cho SV hệ Đại học và Cao đẳng chính
                                quy</a>
                            <br>
                            <span class="date">Ngày đăng: 04-07-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=839" title="Kế hoạch v/v tổ chức Lễ trao giấy chứng nhận kiểm định chất lượng cho 6 chương trình đào tạo và Bế giảng, traong bằng tốt nghiệp cho SV Đại học chính quy khóa 2016-2020">Kế
                                hoạch v/v tổ chức Lễ trao giấy chứng nhận kiểm định chất lượng cho 6 chương
                                trình đào tạo và Bế giảng, traong bằng tốt nghiệp cho SV Đại học chính quy
                                khóa 2016-2020</a>
                            <br>
                            <span class="date">Ngày đăng: 30-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=838" title="Thông báo v/v chi trả tiền hỗ trợ phí internet và học phí cho SV hệ ĐH chính quy khóa 10 và CĐ khóa 26">Thông
                                báo v/v chi trả tiền hỗ trợ phí internet và học phí cho SV hệ ĐH chính quy
                                khóa 10 và CĐ khóa 26</a>
                            <br>
                            <span class="date">Ngày đăng: 29-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=837" title="Thông báo kế hoạch nhận Giấy chứng nhận tốt nghiệp và Phụ lục văn bằng (Bảng điểm) cho SV tốt nghiệp tháng 6 năm 2020">Thông
                                báo kế hoạch nhận Giấy chứng nhận tốt nghiệp và Phụ lục văn bằng (Bảng điểm)
                                cho SV tốt nghiệp tháng 6 năm 2020</a>
                            <br>
                            <span class="date">Ngày đăng: 29-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=836" title="Thông báo v/v tổ chức các lớp học kỳ phụ năm học 2019-2020">Thông báo
                                v/v tổ chức các lớp học kỳ phụ năm học 2019-2020</a>
                            <br>
                            <span class="date">Ngày đăng: 26-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=835" title="Quyết định v/v công nhận đạt chuẩn đầu ra Tiếng Anh đối với SV có chứng chỉ Tiếng Anh quốc tế (bổ sung)">Quyết
                                định v/v công nhận đạt chuẩn đầu ra Tiếng Anh đối với SV có chứng chỉ Tiếng
                                Anh quốc tế (bổ sung)</a>
                            <br>
                            <span class="date">Ngày đăng: 22-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=834" title="Quyết định v/v công nhận đạt chuẩn đầu ra Tiếng Anh đối với SV có chứng chỉ Tiếng Anh quốc tế">Quyết
                                định v/v công nhận đạt chuẩn đầu ra Tiếng Anh đối với SV có chứng chỉ Tiếng
                                Anh quốc tế</a>
                            <br>
                            <span class="date">Ngày đăng: 18-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=833" title="Thông báo v/v tổ chức thi kết thúc học phần, học kỳ II năm học 2019-2020">Thông
                                báo v/v tổ chức thi kết thúc học phần, học kỳ II năm học 2019-2020</a>
                            <br>
                            <span class="date">Ngày đăng: 16-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=832" title="Thông báo v/v xử lý sinh viên vi phạm quy chế thi các học phần thi lại học kỳ I năm học 2019-2020">Thông
                                báo v/v xử lý sinh viên vi phạm quy chế thi các học phần thi lại học kỳ I
                                năm học 2019-2020</a>
                            <br>
                            <span class="date">Ngày đăng: 12-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=831" title="Kế hoạch nghỉ hè, kế hoạch thi lại, kế hoạch đào tạo học kỳ phụ năm học 2019-2020 và kế hoạch đào tạo năm học 2020-2021">Kế
                                hoạch nghỉ hè, kế hoạch thi lại, kế hoạch đào tạo học kỳ phụ năm học
                                2019-2020 và kế hoạch đào tạo năm học 2020-2021</a>
                            <br>
                            <span class="date">Ngày đăng: 12-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=830" title="Thông báo v/v khảo sát nhu cầu lắp điều hòa tại các phòng học và học song ngành">Thông
                                báo v/v khảo sát nhu cầu lắp điều hòa tại các phòng học và học song
                                ngành</a>
                            <br>
                            <span class="date">Ngày đăng: 10-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=829" title="Thông báo kế hoạch xét tiến độ kết thúc học kỳ I năm học 2019-2020">Thông
                                báo kế hoạch xét tiến độ kết thúc học kỳ I năm học 2019-2020</a>
                            <br>
                            <span class="date">Ngày đăng: 05-06-2020</span>
                            <hr class="dashed">
                        </li>

                        <li>
                            <a style="color: #0098DB;" href="http://daotao.uneti.edu.vn/NewsDetail.aspx?NewsID=828" title="Thông báo kế hoạch tốt nghiệp các lớp Đại học khóa 10, Cao đẳng khóa 26 và sinh viên các khóa trước">Thông
                                báo kế hoạch tốt nghiệp các lớp Đại học khóa 10, Cao đẳng khóa 26 và sinh
                                viên các khóa trước</a>
                            <br>
                            <span class="date">Ngày đăng: 05-06-2020</span>
                            <hr class="dashed">
                        </li>
                    </ul>
                    <a style="color: #0098DB; float: right;" href="http://daotao.uneti.edu.vn/News.aspx?MenuID=394" title="Xem thêm" class="read_more">Xem thêm</a>
                </div>
            </div>
            <div class="col-3" style="border :1px solid white;">
                <div class="body">
                    <div style=" background: #0098DB; color: rgb(243, 240, 233); margin-bottom: 10px;">
                        <h3>ĐĂNG NHẬP</h3>
                    </div>
                    <div style="padding-left: 10px;">
                        <br>
                        <button type="submit" name="submit" class="btn btn-default"><a href="register.php">Đăng ký</a></button> 
                        <button type="submit" name="submit" class="btn btn-default"><a href="login.php">Đăng nhập</a></button>
                    </div>
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