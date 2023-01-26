
<?php require_once "Connections/conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> contact  </title>
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
<form method="POST" >
اسم : <input class="form-control" type="text" name="name" required/>
<br>
إيميل : <input class="form-control" type="text" name="email" required/>
<br>
التاريخ : <input class="form-control" type="date" name="date" required/>
<br>
اكتب طلبك الخاص : <textarea class="form-control"  name="problem" rows="8" cols="25" required/></textarea>
<br>
<button class="btn btn-dark" type="submit" name="go"> ارسال طلبك </button>
</form>
</div>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST["name"];
$email = $_POST["email"];
$problem = $_POST["problem"];
$date = $_POST["date"];

$query = mysqli_query($conn,"INSERT INTO `messages`(`name_cus_mes`, `email_cus_mes`, `message_cus_mes`, `date_cus_mes`) VALUES ('".$name."','".$email."','".$problem."','".$date."')");

if ($query) {
  echo "<script>alert('تمت اضافة المراسلة بنجاح');</script>";
}else{
  echo "<script>alert('حدث خطأ اثناء اضافة المراسلة');</script>";
}
}
?>
 <script src="js/scripts.js"></script><script src="js/scriptss.js"></script><script src="js/scriptsss.js"></script>
</body>
</html>






