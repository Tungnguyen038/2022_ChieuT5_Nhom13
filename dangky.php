<!-- <?php
include 'admin/config.php';
$err = [];
if(isset($_POST['name'])){
   $name = $_POST['name'];
    $email = $_POST['email']; 
     $rePassword = $_POST['rePassword']; 
      $password = $_POST['password']; 

      if(empty($name)){
    $err['name'] = 'Bạn chưa nhập tên';
      }
      if(empty($email)){
    $err['email'] = 'Bạn chưa nhập email';
      }
      if(empty($password)){
    $err['password'] = 'Bạn chưa nhập mật khẩu';
      }
      if($password != $rePassword){
    $err['rePassword'] = 'Mật khẩu nhập lại không đúng';
      }

    
var_dump($err);
if(empty($err)){
    $sql = "INSERT INTO user(name,email,password) VALUES ('$name' ,'$email','$password' ) ";
     $query = mysqli_query($conn , $sql);
     if($query){
    header('location: index.php');
     }
}

}
?>
 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phần mềm bất động sản</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asserts/register.css">
    <link
            rel="icon"
            type="image/x-icon"
            href="https://routine.vn/media/favicon/default/output-onlinejpgtools.png"
    />
    <style >
        .has-error{
            color: red
        }
    </style>
</head>
<body>
<!-- <div class="registration-form">
    <form>

        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" id="password" placeholder="rePassword">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Email">
        </div>
       
       
        <div class="form-group">
            <a href="dangky.php">

                <button type="button" class="btn btn-block create-account">Create Account</button>
            </a>
        </div>
    </form>
    <div class="social-media">
        <h5>Sign up with social media</h5>
        <div class="social-icons">
            <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
            <a href="#"><i class="icon-social-google" title="Google"></i></a>
            <a href="#"><i class="icon-social-instagram" title="Instagram"></i></a>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row">
       <div class="col-md-6">
          <form action="" method="POST" role="form">
              <legend>Đăng ký</legend>
              <div class="form-group">
                  <label for=""> Tên người dùng</label>
                  <input type="text" class="form-control" id="" placeholder="" name="name">
                  <div class="has-error">
                      <span><?php echo (isset($err['name']))? $err['name']:''?>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                  <label for=""> Email</label>
                  <input type="text" class="form-control" id="" placeholder="" name="email" >
                  <div class="has-error">
                      <span><?php echo (isset($err['email']))? $err['email']:''?>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                  <label for=""> Mật Khẩu</label>
                  <input type="password" class="form-control" id="" placeholder="" name="password" >
                  <div class="has-error">
                      <span><?php echo (isset($err['password']))? $err['password']:''?>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                  <label for=""> Nhập lại mật khẩu</label>
                  <input type="password" class="form-control" id="" placeholder="" name ="rePassword" >
                  <div class="has-error">
                      <span><?php echo (isset($err['rePassword']))? $err['rePassword']:''?>
                      </span>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary"> Submit</button>
          </form> 
       </div>
    </div>
</div>
<script src="./js/register.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
    $(document).ready(function(){
        $('#birth-date').mask('00/00/0000');
        $('#phone-number').mask('000-0000-0000');
    })
</script>
</body>
</html>
