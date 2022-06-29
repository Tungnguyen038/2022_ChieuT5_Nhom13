<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="./fonts/themify-icons/themify-icons.css"/>
    <link rel="stylesheet" href="./asserts/base.css"/>
    <link rel="stylesheet" href="./asserts/grid.css"/>
    <link rel="stylesheet" href="./asserts/category-pay.css"/>
    <link rel="stylesheet" href="./asserts/category.css"/>
    <title>Website số 1 về bất động sản</title>
    <link
            href="https://staticfile.batdongsan.com.vn/images/logo/favicon_redesign_xl_1.ico"
            rel="shortcut icon"
            type="image/x-icon"
    />
</head>
<body>
<header class="header">
    <div class="row row-height">
        <div class="header-header">
            <div class="header-left">
                <ul class="header-left_left">
                    <li class="header-left_left-item header-left_left-item-has">
                        <span class="header-left_title border-bottom">NHÀ BÁN ĐẤT</span>
                    </li>
                    <li class="header-left_left-item header-left_left-item-has-Nu">
                        <span class="header-left_title border-bottom">NHÀ ĐẤT CHO THUÊ</span>
                    </li>
                    <li class="header-left_left-item header-left_left-item-sale">
                        <span class="header-left_title border-bottom header-left_title-active">DỰ ÁN</span>
                    </li>
                    <li class="header-left_left-item header-left_left-item-new">
                        <span class="header-left_title border-bottom">PHONG THỦY</span>
                    </li>
                </ul>
            </div>
            <!-- logo -->

            <div class="header-logo">
                <a href="./index.html" class="logo">
                    <img src="https://staticfile.batdongsan.com.vn/images/logo/h-logo.svg" style="fill: #fff"
                         class="logo-header_img" alt=""/>
                </a>
            </div>
            <!--  -->
            <div class="header-right">
                <div class="header-right_search">
                    <input type="text" placeholder="Tìm kiếm" class="parent-search_input"/>
                    <i class="fas fa-search" style="color: #333; font-size: 16px;"></i>
                </div>

                <ul class="header-right_right">
                    <li class="header-right-right-item">
                        <span class="header-right_title border-bottom">Đăng Nhập</span>
                    </li>
                    <li class="header-right-right-item header-right-right-item-has">
                        <span class="header-right_title border-bottom">Trợ Giúp</span>
                        <div class="flex-ul flex-ul-help">
                            <ul
                                    class="header-left_male-parent header-left_male-parent-help"
                            >
                                <li class="header-left_male-item">
                                    <span class="border-bottom"> CÔNG TY </span>
                                    <ul class="header-chil">
                                        <li class="header-chil_item">
                                            <span class="border-bottom"> VỀ CHÚNG TÔI </span>
                                        </li>
                                        <li class="header-chil_item">
                          <span class="border-bottom">
                            CHĂM SÓC KHÁCH HÀNG
                          </span>
                                        </li>
                                        <li class="header-chil_item">
                                            <span class="border-bottom"> TUYỂN DỤNG </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-left_male-item">
                                    <span class="border-bottom"> TIN TỨC </span>
                                </li>
                                <li class="header-left_male-item">
                                    <span class="border-bottom"> CHÍNH SÁCH </span>
                                    <ul class="header-chil">
                                        <li class="header-chil_item">
                          <span class="border-bottom">
                            KHÁCH HÀNG THÂN THIẾT
                          </span>
                                        </li>
                                        <li class="header-chil_item">
                                            <span class="border-bottom"> ĐỔI & TRẢ HÀNG </span>
                                        </li>
                                        <li class="header-chil_item">
                                            <span class="border-bottom"> BẢO HÀNH </span>
                                        </li>
                                        <li class="header-chil_item">
                                            <span class="border-bottom"> BẢO MẬT </span>
                                        </li>
                                        <li class="header-chil_item">
                          <span class="border-bottom">CÁC CÂU HỎI THƯỜNG GẶP</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-left_male-item">
                                    <span class="border-bottom"> HỆ THỐNG CỬA HÀNG </span>
                                </li>
                                <li class="header-left_male-item">
                                    <span class="border-bottom"> LIÊN HỆ </span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-right-right-item header-right-right-item-cart">
                        <a class="header-link">
                  <span class="header-right_title border-bottom"
                  >Giỏ Hàng(0)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="block__cart animate__animated animate__bounceInRight">
        <div class="block block-minicart">
            <div class="header__cart-list">
                <div class="minicart-top">
                    <a href="" class="minicart-link">
                        <span class="minicart-gh">Giỏ hàng</span>
                        <p class="minicart-sl">
                            <span class="minicart-quantity">0</span>
                            <span class="minicart-sp">Sản phẩm</span>
                        </p>
                    </a>
                    <span class="minicart-close">Đóng</span>
                </div>

                <div class="header__cart-empty">
                    <div class="header__cart-img">
                        <img src="../img/emptycart.png" alt="" class="cart__img"/>
                    </div>
                    <h4 class="empty-cart">
                        <span>Giỏ hàng trống rỗng</span>
                    </h4>
                    <span class="empty-cart2">
                <span>Bạn không có sản phẩm nào trong giỏ hàng</span>
              </span>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="body-pay">
    <div class="container row">
        <div class="container-left">
            <form action="connect.php" method="post">
            <div class="pay-left">
                <div class="left-name">
                    <div class="topic">
                        <h1></h1>
                    </div>
                    <div class="topic">
                        <h2>Thông tin giao hàng</h2>
                    </div>
                </div>
                    <div class="left-text">
                        <div class="dang-nhap row">
                            <p>Bạn đã có tài khoản?</p>
                            <p><a href="../login.html">Đăng nhập</a></p>
                        </div>
                        <div class="input">
                            <div class="name1">
                                <li><input placeholder="Họ và tên" type="text" id="hoTen" name="hoTen"/></li>
                            </div>
                            <div class="thongtin row">
                                <div class="mail">
                                    <li><input placeholder="Email (nếu có)" type="text" id="email" name="email"/></li>
                                </div>
                                <div class="sdt">
                                    <li><input placeholder="Số điện thoại" type="text" id="sdt" name="sdt"/></li>
                                </div>
                            </div>
                        </div>
                        <div class="diachi">
                            <li><input placeholder="Địa chỉ" type="text" id="diaChi" name="diaChi"/></li>
                        </div>
                    </div>
                <div class="left-button row">
                    <div class="button-pay">
                        <button>Thanh toán</button>
                    </div>
                </div>
                <div class="pay-bottom">
                    <p>Powered by Haravan</p>
                </div>
            </div>
            </form>
        </div>
        <div class="container-right">
            <div class="pay-right">
                <div class="san-pham">
                    <div class="sp row">
                        <div class="sp-img">
                            <img src="http://streaming1.danviet.vn/upload/2-2019/images/2019-06-04/Binh-Duong-thu-hoi-11-du-an--bat-dong-san-treo-nhieu-nam-img_6964-1559647481-width1200height800.jpg"/>
                        </div>
                        <div class="ten-sp">
                            <p>52/4, Phú Sơn, Trảng Bom, Đồng Nai</p>
                            <p>2 mặt tiền</p>
                        </div>
                        <div class="price">
                            <p>5.000.000.000<sup><u>đ</u></sup></p>
                        </div>
                    </div>
                    <div class="sp row">
                        <div class="sp-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBKHCbYx2IoVhYwR3S-RzhJlAosYx4dsfWCg&usqp=CAU"/>
                        </div>
                        <div class="ten-sp">
                            <p>Phường 5, Bình Thạnh, Thành Phố Hồ Chí Minh</p>
                            <p>1 mặt tiền</p>
                        </div>
                        <div class="price">
                            <p>1.500.000.000<sup><u>đ</u></sup></p>
                        </div>
                    </div>
                </div>

                <div class="gia-tam">
                    <div class="gia-sp row">
                        <div class="the-p">
                            <p>Tạm tính</p>
                        </div>
                        <div class="price">
                            <p>6.500.000.000<sup><u>đ</u></sup></p>
                        </div>
                    </div>
                </div>
                <div class="tong-tien row">
                    <div class="tong">
                        <p>Tổng cộng</p>
                    </div>
                    <div class="vnd">
                        <p>VND</p>
                    </div>
                    <div class="tien">
                        <p>6.500.000.000<sup><u>đ</u></sup></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bottom"></div>
<footer class="footer">
    <div class="row">
        <div class="col l-6 m-12">
            <div class="row">
                <div class="footer-left col l-6 m-12">
                    <h3>THAM GIA BẢNG TIN CỦA CHÚNG TÔI</h3>
                    <div class="footer-left_left">
                        <input
                                type="email"
                                placeholder="Nhập email của bạn"
                                class="footer-left-input"
                        />
                        <i class="ti-email"></i>
                    </div>
                    <p class="footer-p">
                        ROUTINE CO,. LTD | Mã Số Thuế: 0106486365 | Văn Phòng: Tầng 10
                        Tòa Nhà IMC, 62 Trần Quang Khải, Phường Tân Định, Quận 1, Tp.HCM
                    </p>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item-link">FACEBOOK</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item-link">INSTAGRAM</a>
                        </li>
                    </ul>
                    <p class="footer-left-p">
                        <a href="">
                            <img
                                    src="https://routine.vn/media/wysiwyg/dang-ky-website-thuong-mai-dien-tu-1024x388-1024x388.png"
                                    alt=""
                            />
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col l-6 m-12">
            <div class="row">
                <div class="footer-right col l-4 m-12">
                    <h4>CÔNG TY</h4>
                    <ul class="footer-right-list">
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Giới thiệu về ROUTINE</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Tuyển dụng</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Tin tức</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Chăm sóc khách hàng</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-right col l-4 m-12">
                    <h4>CHÍNH SÁCH KHÁCH HÀNG</h4>
                    <ul class="footer-right-list">
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Chính sách khách hàng thân thiết</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Chính sách đổi và trả hàng</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Chính sách bảo hành</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Chính sách bảo mật</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">Câu hỏi thường gặp</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-right col l-4 m-12">
                    <h4>THÔNG TIN KHÁCH HÀNG</h4>
                    <ul class="footer-right-list">
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">- CỬA HÀNG THỨ 29</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">24/8 lê văn việt, quận 9 TPHCM</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">- CỬA HÀNG THỨ 28</a>
                        </li>
                        <li class="footer-right-item">
                            <a href="" class="footer-right-link">28 võ văn ngân,TP Thủ Đức TPHCM</a>
                        </li>
                        <li class="footer-right-item footer-right-item-mg">
                            <a href="" class="footer-right-link footer-right-link-active">Xem tất cả các cửa hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
