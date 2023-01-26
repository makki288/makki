

<?php require_once "Connections/conn.php"; 
if(!isset($_SESSION["admin"])){
  header("Location: home.php");
}
$id = $_GET["id"];
$custQuery = mysqli_query($conn,"SELECT * FROM customer WHERE id_cus = '$id'");
$customer = mysqli_fetch_object($custQuery);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> تعديل المزاد  </title>
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
<div class="input-group flex-nowrap">
<div class="text-center">
  <img src="img/xxx.jpg" class="rounded" width="75%">
        <h3>مدير النظام</h3>
</div><br>
<div class="container" dir="rtl" style="text-align: right !important;">
<form method="POST" enctype="multipart/form-data" >
 اسم المستخدم: <input class="form-control" type="text" name="name" required value="<?php echo $customer->name_cus; ?>"/>
<br>
البريد الالكتروني  : <input class="form-control" type="text" name="email" required value="<?php echo $customer->email_cus; ?>"/>
<br>
 العنوان : <input class="form-control" type="text" name="address" required value="<?php echo $customer->address_cus; ?>"/>
<br>
رقم الهاتف : <input class="form-control" type="text" name="phone" required value="<?php echo $customer->phone_cus; ?>"/>
<br>

<button class="btn btn-dark" type="submit" name="edit">تعديل</button>
<!-- <button class="btn btn-dark" type="submit" name="update">تعديل</button> -->
<!-- <button class="btn btn-dark" type="submit" name="delete">حذف</button> -->
</form>
</div>
</div>
<?php 

if(isset($_POST['edit'])){
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$phone = $_POST["phone"];


$query = mysqli_query($conn,"UPDATE  `customer` SET `name_cus` = '".$name."',email_cus = '".$email."',address_cus= '".$address."',phone_cus='".$phone."' WHERE id_cus = '$id'");
if($query)
{
echo "<script>alert('تمت تعديل المستخدم بنجاح')</script>";
}else{
  echo "<script>alert('حدثت مشكلة أثناء حفظ البيانات')</script>";

}
}
// if($_POST["update"]==true)
// {

// }

// if($_POST["delete"]==true)
// {

// }

?>
 <script src="js/scripts.js"></script><script src="js/scriptss.js"></script><script src="js/scriptsss.js"></script>
</body>
</html>