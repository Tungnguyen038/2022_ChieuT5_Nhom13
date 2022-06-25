<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>website số 1 về bất động sản</title>
    <link rel="stylesheet" href="./asserts/grid.css" />
    <link rel="stylesheet" href="./asserts/base.css" />
    <link rel="stylesheet" href="./asserts/indexTT.css" />
    <link rel="stylesheet" href="./asserts/responsive.css" />
    <link rel="stylesheet" href="./asserts/cart.css" />
    <link
      href="https://staticfile.batdongsan.com.vn/images/logo/favicon_redesign_xl_1.ico"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      rel="icon"
      type="image/x-icon"
      href="https://routine.vn/media/favicon/default/output-onlinejpgtools.png"
    />
    <link
      rel="stylesheet"
      href="./fonts/fontawesome-free-5.15.4-web/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Rochester&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <link rel="stylesheet" href="./asserts/jquery.convform.css" />

    <script type="text/javascript" src="./js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="./js/jquery.convform.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
  </head>

  <body>
    <span class="loader"></span>
    <script type="text/javascript">
      window.addEventListener("load", function () {
        const loader = document.querySelector(".loader");
        loader.className += " hidden";
      });
    </script>
    <!-- <div class="main"> -->
    <!-- Thẻ bao bọc trang -->
    <!-- <div class="page-wrapper1"> -->
    <header class="header">
      <div class="row row-height">
        <div class="header-header">
          <div class="header-left hide-on-mobile">
            <ul class="header-left_left">
              <li class="header-left_left-item header-left_left-item-has">
                <a href="./category.html" class="">
                  <span class="header-left_title border-bottom"
                    >NHÀ ĐẤT BÁN</span
                  >
                </a>
                <div class="flex-ul flex-ul-nam">
                  <ul class="header-left_male-parent">
                    <li class="header-left_male-item">
                      <span class="border-bottom">BÁN CĂN HỘ CHUNG CƯ</span>
                    </li>
                    <li class="header-left_male-item">
                      <span class="border-bottom">BÁN NHÀ RIÊNG </span>
                    </li>
                    <li class="header-left_male-item">
                      <span class="border-bottom"> BÁN NHÀ MẶT PHỐ </span>
                    </li>
                    <li class="header-left_male-item">
                      <span class="border-bottom"> BÁN ĐẤT </span>
                    </li>
                    <li class="header-left_male-item">
                      <span class="border-bottom">
                        BÁN TRANG TRẠI KHU NGHĨ DƯỠNG
                      </span>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="header-left_left-item header-left_left-item-has-Nu">
                <a href="./category.html" class="">
                  <span class="header-left_title border-bottom"
                    >NHÀ ĐẤT CHO THUÊ</span
                  >
                </a>
              </li>
              <li class="header-left_left-item header-left_left-item-sale">
                <span
                  class="header-left_title border-bottom header-left_title-active"
                  >DỰ ÁN</span
                >
              </li>
              <li class="header-left_left-item header-left_left-item-new">
                <span class="header-left_title border-bottom">PHONG THỦY</span>
              </li>
            </ul>
          </div>
          <!-- logo mobile -->
          <div class="header-logo">
            <div class="menu-mobile">
              <i class="ti-menu"></i>
            </div>
            <a href="" class="logo">
              <img
                src="https://staticfile.batdongsan.com.vn/images/logo/h-logo.svg"
                style="fill: #fff"
                class="logo-header_img"
                alt=""
              />
            </a>
            <div class="search-mobile">
              <i class="ti-search"></i>
            </div>
          </div>
          <!--  -->
          <div class="header-right hide-on-mobile">
            <div
              class="header-right_search"
              style="border-bottom: 1px solid #fff"
            >
              <input
                type="text"
                placeholder="Tìm kiếm"
                class="parent-search_input"
                style="border: none"
              />
              <i class="fas fa-search" style="color: #fff; border: none"></i>
            </div>

            <ul class="header-right_right">
             
                  <?php
                  
 if(isset($_SESSION['fullName'])){
  function my_funciton(){
    echo "Hello";
  }
  ?>

   <li class="header-right-right-item">
   <a href="./login.php" class="header-login">
   <span class="header-right_title border-bottom"
       ><?php echo $_SESSION['fullName']?></span
     >
     </a>
 </li>
 <li class="header-right-right-item">
                <div href="" class="header-login">
                <span class="header-right_title border-bottom logout" 

                    >Đăng Xuất</span
                  >
                  </div>
              </li>
<?php
  
 }else{ 
  ?>
   <li class="header-right-right-item">
                <a href="./login.php" class="header-login">
                <span class="header-right_title border-bottom"
                    >Đăng Nhập</span
                  >
                  </a>
              </li>
              <li class="header-right-right-item">
                <a href="./login.php" class="header-login">
                <span class="header-right_title border-bottom"
                    >Đăng Ký</span
                  >
                  </a>
              </li>
                  <?php
 }
?>
      
              <li
                class="header-right-right-item gio-hang header-right-right__cart"
              >
                <span class="header-right_title border-bottom">Giỏ Hàng</span>
                <span class="header__cart-quantity">(9)</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- phan gio hang -->
      <div class="block__cart animate__animated animate__bounceInRight">
        <div class="block block-minicart">
          <div class="header__cart-list">
            <div class="minicart-top">
              <a href="" class="minicart-link">
                <span class="minicart-gh">Giỏ hàng</span>
                <p class="minicart-sl">
                  <span class="minicart-quantity">9</span>
                  <span class="minicart-sp">Sản phẩm</span>
                </p>
              </a>
              <span class="minicart-close">Đóng</span>
            </div>

            <div class="list-cart">
              <ul class="list-cart-list">
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img
                        src="https://routine.vn/media/catalog/product/cache/59db0cfd5192c9a4d6ff231b8171cf2c/z/2/z2990008326075_2400052467f313240a78f37a3c1f3457_2.jpg"
                        alt="có ảnh nha"
                      />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img src="./img1/HOME5.jpg" alt="có ảnh nha" />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img
                        src="https://routine.vn/media/catalog/product/cache/59db0cfd5192c9a4d6ff231b8171cf2c/z/2/z2990008326075_2400052467f313240a78f37a3c1f3457_2.jpg"
                        alt="có ảnh nha"
                      />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img
                        src="https://routine.vn/media/catalog/product/cache/59db0cfd5192c9a4d6ff231b8171cf2c/z/2/z2990008326075_2400052467f313240a78f37a3c1f3457_2.jpg"
                        alt="có ảnh nha"
                      />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img
                        src="https://routine.vn/media/catalog/product/cache/59db0cfd5192c9a4d6ff231b8171cf2c/z/2/z2990008326075_2400052467f313240a78f37a3c1f3457_2.jpg"
                        alt="có ảnh nha"
                      />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img
                        src="https://routine.vn/media/catalog/product/cache/59db0cfd5192c9a4d6ff231b8171cf2c/z/2/z2990008326075_2400052467f313240a78f37a3c1f3457_2.jpg"
                        alt="có ảnh nha"
                      />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img
                        src="https://routine.vn/media/catalog/product/cache/59db0cfd5192c9a4d6ff231b8171cf2c/z/2/z2990008326075_2400052467f313240a78f37a3c1f3457_2.jpg"
                        alt="có ảnh nha"
                      />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img
                        src="https://routine.vn/media/catalog/product/cache/59db0cfd5192c9a4d6ff231b8171cf2c/z/2/z2990008326075_2400052467f313240a78f37a3c1f3457_2.jpg"
                        alt="có ảnh nha"
                      />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-cart-item">
                  <a href="#" class="list-cart-link">
                    <div class="list-cart-img">
                      <img
                        src="https://routine.vn/media/catalog/product/cache/59db0cfd5192c9a4d6ff231b8171cf2c/z/2/z2990008326075_2400052467f313240a78f37a3c1f3457_2.jpg"
                        alt="có ảnh nha"
                      />
                    </div>
                    <div class="list-cart-right">
                      <div class="heading-cart">
                        <h3>
                          ÁO POLO, NHÃN TRANG TRÍÁO POLO, NHÃN TRANG TRÍÁO POLO,
                          NHÃN TRANG TRÍ
                        </h3>
                        <input type="checkbox" name="" id="" />
                      </div>
                      <span class="span1">S/ BRIGHT WHITE</span>
                      <span class="span2">380.000 đ</span>
                      <div class="quantity-cart">
                        <span>Tới sản phẩm</span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <!-- Slider 1 -->
      <div class="slider" id="slider1">
        <!-- Slides -->
        <div
          style="
            background-image: url('https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
          "
        ></div>
        <div
          style="
            background-image: url('https://images.pexels.com/photos/32870/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
          "
        ></div>
        <div
          style="
            background-image: url('https://images.pexels.com/photos/53610/large-home-residential-house-architecture-53610.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
          "
        ></div>
        <div
          style="
            background-image: url('https://images.pexels.com/photos/3958958/pexels-photo-3958958.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
          "
        ></div>
        <div
          style="
            background-image: url('https://images.pexels.com/photos/280222/pexels-photo-280222.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
          "
        ></div>
        <!-- The Arrows -->
        <i class="left" class="arrows" style="z-index: 2; position: absolute"
          ><svg viewBox="0 0 100 100">
            <path
              d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
            ></path></svg
        ></i>
        <i class="right" class="arrows" style="z-index: 2; position: absolute"
          ><svg viewBox="0 0 100 100">
            <path
              d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
              transform="translate(100, 100) rotate(180) "
            ></path></svg
        ></i>
        <!-- Title Bar -->
        <span class="titleBar">
          <h1>Chần chờ gì nửa mà không mua cho mình một miếng đất nào...</h1>
        </span>
      </div>

      <br />

      <div class="row2Wrap">
        <div class="slider" id="slider2">
          <div
            style="
              background-image: url(https://images.pexels.com/photos/210617/pexels-photo-210617.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            "
          ></div>
          <div
            style="
              background-image: url(https://images.pexels.com/photos/5178055/pexels-photo-5178055.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            "
          ></div>
          <div
            style="
              background-image: url(https://images.pexels.com/photos/5178034/pexels-photo-5178034.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            "
          ></div>
          <div
            style="
              background-image: url(https://images.pexels.com/photos/10883490/pexels-photo-10883490.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            "
          ></div>

          <i class="left" class="arrows" style="z-index: 2; position: absolute">
            <svg viewBox="0 0 100 100">
              <path
                d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
              ></path>
            </svg>
          </i>
          <i
            class="right"
            class="arrows"
            style="z-index: 2; position: absolute"
          >
            <svg viewBox="0 0 100 100">
              <path
                d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
                transform="translate(100, 100) rotate(180) "
              ></path>
            </svg>
          </i>
        </div>

        <!-- Slider 1 -->
        <div class="slider" id="slider3">
          <div
            style="
              background-image: url(https://images.pexels.com/photos/9751916/pexels-photo-9751916.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            "
          >
            <span>
              <h2>Sang trọng, độc quyền...</h2>
            </span>
          </div>
          <div
            style="
              background-image: url(https://images.pexels.com/photos/8314634/pexels-photo-8314634.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            "
          >
            <span>
              <h2>Đất kinh doanh số 1...</h2>
            </span>
          </div>
          <div
            style="
              background-image: url(https://images.pexels.com/photos/1438834/pexels-photo-1438834.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            "
          >
            <span>
              <h2>Bật nhất, sắc xảo...</h2>
            </span>
          </div>
          <!-- The Arrows -->
          <i class="left" class="arrows" style="z-index: 2; position: absolute"
            ><svg viewBox="0 0 100 100">
              <path
                d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
              ></path></svg
          ></i>
          <i
            class="right"
            class="arrows"
            style="z-index: 2; position: absolute"
          >
            <svg viewBox="0 0 100 100">
              <path
                d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
                transform="translate(100, 100) rotate(180) "
              ></path></svg
          ></i>
          <!-- Title Bar -->
          <!--     <span class="titleBar">
      <h1>I am like a leaf in the wind.</h1> 
      <p>Watch me soar!</p>
  </span> -->
        </div>
      </div>
    </div>

    <footer class="footer" style="margin-top: 380px">
      <div class="row">
        <div class="col l-6 m">
          <div class="row">
            <div class="footer-left col l-6">
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
        <div class="col l-6">
          <div class="row">
            <div class="footer-right col l-4">
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
            <div class="footer-right col l-4">
              <h4>CHÍNH SÁCH KHÁCH HÀNG</h4>
              <ul class="footer-right-list">
                <li class="footer-right-item">
                  <a href="" class="footer-right-link"
                    >Chính sách khách hàng thân thiết</a
                  >
                </li>
                <li class="footer-right-item">
                  <a href="" class="footer-right-link"
                    >Chính sách đổi và trả hàng</a
                  >
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
            <div class="footer-right col l-4">
              <h4>THÔNG TIN KHÁCH HÀNG</h4>
              <ul class="footer-right-list">
                <li class="footer-right-item">
                  <a href="" class="footer-right-link">- CỬA HÀNG THỨ 29</a>
                </li>
                <li class="footer-right-item">
                  <a href="" class="footer-right-link"
                    >24/8 lê văn việt, quận 9 TPHCM</a
                  >
                </li>
                <li class="footer-right-item">
                  <a href="" class="footer-right-link">- CỬA HÀNG THỨ 28</a>
                </li>
                <li class="footer-right-item">
                  <a href="" class="footer-right-link"
                    >28 võ văn ngân,TP Thủ Đức TPHCM</a
                  >
                </li>
                <li class="footer-right-item footer-right-item-mg">
                  <a href="" class="footer-right-link footer-right-link-active"
                    >Xem tất cả các cửa hàng</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- </div> -->
    <!-- </div> -->
    <!-- phan tim kiem -->
    <div class="mobile-layer animate__animated animate__backInUp">
      <div class="modal-overlay"></div>
      <div class="mobile-s">
        <div class="close-search-vip">
          <i class="ti-close close-search"></i>
        </div>
        <div class="input-search">
          <input type="text" placeholder="Tìm kiếm" />
          <i class="ti-search"></i>
        </div>
      </div>
    </div>

    <!--  mobile menu -->
    <div class="mobile-menu animate__animated animate__bounceInLeft">
      <div class="overlay-mnu"></div>
      <div class="mobi-menu">
        <div class="menu-header">
          <div class="item-menu">
            <ul class="menu-list">
              <li class="menu-item">
                <a href=""><span>Nam</span></a>
              </li>
              <li class="menu-item">
                <a href=""><span>Nữ</span></a>
              </li>
              <li class="menu-item">
                <a href=""><span>saleonline</span></a>
              </li>
              <li class="menu-item">
                <a href=""><span> new arrivals</span></a>
              </li>
            </ul>
          </div>
          <div class="close-menu">
            <a href="">
              <i class="ti-close"></i>
            </a>
          </div>
        </div>

        <div class="body-menu-item">
          <ul class="body-list">
            <li class="body-item">
              <a href=""><span>bộ sưu tập</span></a>
            </li>
            <li class="body-item">
              <a href=""><span>áo nam</span></a>
            </li>
            <li class="body-item">
              <a href=""><span>quần nam</span></a>
            </li>
            <li class="body-item">
              <a href=""><span>giày dép nam</span></a>
            </li>
            <li class="body-item">
              <a href=""><span>phụ kiện thời trang nam</span></a>
            </li>
            <li class="body-item">
              <a href=""><span>+ trợ giúp</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div
      class="delete-cart animate__animated animate__fadeInBottomRight"
      style="transition: all 0.5s"
    >
      <button class="del-cart">Xóa</button>
      <button class="edit-cart">sửa</button>
    </div>

    <script src="./js/home.js"></script>
    <script>

    document.querySelector(".logout").addEventListener("click", () =>{
      <?php 
        $_SESSION['fullName'] = null;
        header('Location: index.php')
        ?>
    })
    </script>
  </body>
</html>
