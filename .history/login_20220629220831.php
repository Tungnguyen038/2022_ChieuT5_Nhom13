<?php
  require_once('./database/config.php');
  session_start();

  if(isset($_POST['username']) && isset($_POST['pwd'])){
    try {
      $conn = new PDO("mysql:host=".HOST.";dbname=".DATABASE."", USERNAME, PASSWORD);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $query = "SELECT * FROM user WHERE username='$username' and password='$pwd'";

   try {
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    if($rowCount > 0){
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // echo $row['fullName'];
        $fullName = $row['fullName'];
        setcookie("fullName", $fullName, time() +3600, "/");
     
      }
      echo "Login Success!!";
      // echo $_GET['fullName'];
      header("Location: index.php");
    }else{
      alert("login faild")
    }
   } catch (\Throwable $th) {
    echo "Errors!!";
   }}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>website số 1 về bất động sản</title>
    <link
      href="https://staticfile.batdongsan.com.vn/images/logo/favicon_redesign_xl_1.ico"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./asserts/login.css" />
  </head>
  <body>
    <div class="overlay">
      <!-- LOGN IN FORM by Omar Dsoky -->
      <form action="" method="POST">
        <!--   con = Container  for items in the form-->
        <div class="con">
          <!--     Start  header Content  -->
          <header class="head-form">
            <a href="./index.html" style="text-decoration: none">
              <h2 style="color: #fff">Log In</h2>
            </a>
            <!--     A welcome message or an explanation of the login form -->
            <p>login here using your username and password</p>
          </header>
          <!--     End  header Content  -->
          <br />
          <div class="field-set">
            <!--   user name -->
            <!--   user name Input-->
            <div class="form-group">
              <div>
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input
                  class="form-input"
                  id="username"
                  name="username"
                  type="text"
                  placeholder="@UserName"
                  required
                  pattern="[A-Za-z0-9\-_\.]{6,20}"
                  title="Vui lòng nhập tối thiểu 6 ký tự và tối đa là 20 ký tự"
                />
              </div>
              <span class="form-message"></span>
            </div>

            <br />

            <!--   Password -->
            <div class="form-group1">
              <div class="form-group">
                <span class="input-item">
                  <i class="fa fa-key"></i>
                </span>
                <input
                  class="form-input"
                  type="password"
                  placeholder="Password"
                  id="psw"
                  name="pwd"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  title="Phải chứa ít nhất một số và một chữ cái viết hoa và viết thường và ít nhất 8 ký tự trở lên"
                  required
                />
              </div>
              <div id="message">
                <div class="mes">
                  <p id="letter" class="invalid">A lowercase letter</p>
                  <p id="capital" class="invalid">
                    A capital (uppercase) letter
                  </p>
                  <p id="number" class="invalid">A number</p>
                  <p id="length" class="invalid">Minimum 8 characters></p>
                </div>
              </div>
            </div>

            <!--      Show/hide password  -->
            <div class="forgot">
              <div
                class="forget-rmb"
                style="display: flex; align-items: center"
              >
                <input type="checkbox" />
                <span>Remember Me</span>
              </div>
              <a href="#">Forgot Password ?</a>
            </div>
            <a>
              <button class="log-in">Log In</button>
            </a>
          </div>
          <div class="other">
            <h4 style="font-weight: 300">Don't Have an Account ?</h4>
            <a class="" href="./register.html"> Create an account</a>
          </div>
        </div>

        <!-- End Form -->
      </form>
    </div>

    <script src="./js/login.js"></script>
  </body>
</html>
