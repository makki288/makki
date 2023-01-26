<?php require_once "Connections/conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> عرض المستخدمين  </title>
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
<body bgcolor="white">
<?php include "temp/navbar.php"; ?>
<br>
<div class="container text-center">
  <img src="img/3.jpg" class="rounded" width="20%"><br>
  <h2> عرض المستخدمين</h2>
</div>
<br>

<?php require_once('Connections/conn.php');?>
<div class="container" dir="rtl" style="text-align: right !important;">
<?php
	$sql = "SELECT * FROM customer ";
	$result = $conn->query($sql);
	if ($result->num_rows <= 0){
		echo"لا توجد نتيجة";
	}
	else{
		echo'<table class="table" style="width:100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">الاسم</th>
      <th scope="col">البريد</th>
      <th scope="col">العنوان</th>
      <th scope="col">رقم الهاتف</th>
      <th scope="col">النوع</th>
      <th scope="col">##</th>
    </tr>
  </thead>';
			while ($row = $result->fetch_assoc()){ 
				echo '<tr>';
					echo'<td><strong>'; echo $row['name_cus']; echo'</strong></td>';
					echo'<td><strong>'; echo $row['email_cus']; echo'</strong></td>';
					echo'<td><strong>'; echo $row['address_cus']; echo'</strong></td>';
					echo'<td><strong>'; echo $row['phone_cus']; echo'</strong></td>';
					echo'<td><strong>'; echo $row['role'] == 1 ? "عميل" : "مدير"; echo'</strong></td>';  
					echo'<td><a href="edit_customer.php?id='.$row["id_cus"].'" class="btn btn-primary">تعديل<a> | 
                    <a href="customers.php?id=' . $row['id_cus'] . '" onclick="return confirm(\'هل انت متأكد من حذف المستخدم ؟ \');" class="btn btn-danger">حذف</a>

                    </td>';  
				echo'</tr>';			
			}
	}

    if(isset($_GET["id"])){
        mysqli_query($conn,"DELETE FROM customer WHERE id_cus = '".$_GET["id"]."'");
        header("location: customers.php");
    }
?> 
</div>

		<script src="js/scripts.js"></script>
    <script src="js/scriptss.js"></script>
    <script src="js/scriptsss.js"></script>
</body>
</html>
