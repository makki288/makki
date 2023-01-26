<?php
require_once "Connections/conn.php";

if (isset($_SESSTION["uid"])) {
  header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="img/imagesssss.png" alt="logo" width="50" height="50">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="max-width: 90%; width:100%; justify-content: center; ">
	  <li class="nav-item">
        <a class="nav-link" href="commation.php"> التواصل مع الموقع </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="search.php">  البحث </a>
      </li>
	   <li class="nav-item active">
        <a class="nav-link" href="home.php"> صفحة الرئيسية <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav> 
<main class="container mt-3" style="text-align: right!important;">
<form method="POST">
<p class="font-weight-bold"> : اسم المستخدم </p>
<input class="form-control" type="email" name="email" required/>
<p class="font-weight-bold"> : كلمة المرور </p>
<input class="form-control" type="password" name="password" required/>
<a class="btn btn-outline-dark mt-3" href="register.php">انشاء حساب </a>
<button class="btn btn-warning mt-3" type="submit" name="login">تسجيل دخول</button>
</form>
<?php
if(isset($_POST['login'])){
$email = $_POST["email"];
$password = $_POST["password"];

$query = mysqli_query($conn,"SELECT * FROM customer WHERE email_cus = '".$email."' AND pass_cus = '".$password."'");
if(($row = mysqli_fetch_object($query)) != null){

  $_SESSION["name"] = $row->name_cus;
  $_SESSION["uid"] = $row->id_cus;
   //cooki
  setcookie('name', $_SESSION['name'], time() + (86400 * 30), "/");
  setcookie('uid', $_SESSION['uid'], time() + (86400 * 30), "/");

  if($row->role == 0){
   

  }
  echo '<meta http-equiv="refresh" content="2;url=home.php" />';
  echo "<div class=' text-center text-success'><h5>تم تسجيل الدخول بنجاح</h5><div>";

}else{
  echo "<div class=' text-center text-danger'><h5>عفواً المستخدم غير موجود ! يمكنك انشاء حساب جديد</h5><div>";

}
}
?>
</main>

<script src="js/scripts.js"></script><script src="js/scriptss.js"></script><script src="js/scriptsss.js"></script>
</body>
</html>
