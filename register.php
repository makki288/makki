
<?php require_once "Connections/conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> register  </title>
<link rel="stylesheet" href="css/styles.css">
<style>
  body{
    background-image: url("img/1.jpg") !important;
    background-repeat: no-repeat;
    background-size: cover;
  }
.carousel .carousel-item {
  height: 500px;
}

.carousel-item img {
    position: absolute;
    object-fit:cover;
    top: 0;
    left: 0;
    min-height: 500px;
}
</style>
</head>
<body>
<?php include "temp/navbar.php"; ?>

<br>
<div class="container" dir="rtl" style="text-align: right !important;">
<form method="POST" action="register.php">
اسم : <input class="form-control" type="text" name="name" required/>
<br>
إيميل : <input class="form-control" type="text" name="email" required/>
<br>
رقم الهاتف : <input class="form-control" type="text" name="phone" required/>
<br>
السكن : <input class="form-control" type="text" name="addrss" required />
<br>
العمر : <input class="form-control" type="date" name="age" required />
<br>
كلمة مرور : <input class="form-control" type="text" name="password" required />
<br>
<button class="btn btn-dark" type="submit" name="register">انشاء حساب</button>
</form>
</div>
<?php 

if(isset($_POST['register'])){
    $email = $_POST['email'];
	$query = mysqli_query($conn,"SELECT * FROM customer WHERE email_cus = '".$email."'");
	
    if(mysqli_num_rows($query) > 0){
        echo '<div class="alert alert-danger" role="alert">
        هذا حساب سابقا مستخدم
      </div>';
    }else{
        $name =$_POST['name'] ;
        $email = $_POST['email'];
		$phone = $_POST['phone'];
		$addrss = $_POST['addrss'];
        $age = $_POST['age'];
        $password =$_POST['password'] ;
      
		$query2 =  mysqli_query($conn,"INSERT INTO `customer`(`name_cus`, `pass_cus`, `email_cus`, `address_cus`, `phone_cus`) VALUES ('".$name."','".$password."','".$email."','".$addrss."','".$phone."')");
        
        if($query2){
            echo '<div class="alert alert-success" role="alert">
            تم إنشاء حساب بنجاح 
          </div>';
		  sleep(2);
		  header("location: login.php");
        }else{
            echo '<div class="alert alert-danger" role="alert">
            حدث خطا غير متوقع
          </div>';
        }
       
    }

}
?>
 <script src="js/scripts.js"></script><script src="js/scriptss.js"></script><script src="js/scriptsss.js"></script>
</body>
</html>