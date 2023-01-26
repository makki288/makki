<?php require_once "Connections/conn.php"; 
if(!isset($_SESSION["admin"])){
  header("Location: index.php");
}?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> اضافة  </title>
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
<body >
<?php include "temp/navbar.php"; ?>
<br>
<div class="input-group flex-nowrap">
<div class="text-center">
  <img src="img/xxx.jpg"  class="rounded" width="75%">
        <h3>مدير النظام</h3>
</div><br>
<div class="container" dir="rtl" style="text-align: right !important;">
<form method="POST" enctype="multipart/form-data" >
 الصور: <input class="form-control" name="files[]" multiple type="file" required />
<br>
السعر  : <input class="form-control" type="text" name="price" required />
<br>
 الوصف : <input class="form-control" type="text" name="description" required />
<br>


<button class="btn btn-dark" type="submit" name="add">اضافة</button>
</form>
</div>
</div>
<?php 

if(isset($_POST['add'])){
$price = $_POST["price"];
$description = $_POST["description"];


$imagesNames = multiUpload();
$query = mysqli_query($conn,"INSERT INTO `serves`(`images`, `price`, `description`) VALUES('".$imagesNames."','".$price."','".$description."')");
if($query)
{
echo "<script>alert('تمت تعديل المستخدم بنجاح')</script>";
}else{
  echo "<script>alert('حدثت مشكلة أثناء حفظ البيانات')</script>";

}
}
?>
 <script src="js/scriptsmy.js"></script><script src="js/scriptssmy.js"></script><script src="js/scriptsssmy.js"></script>
</body>
</html>