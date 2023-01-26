<?php require_once('Connections/conn.php');?>
<div class="container" dir="rtl" style="text-align: right !important;">
<?php
	$g=$_GET['g'];
	$sql = "SELECT * FROM customer WHERE name_cus LIKE'%$g%' ";
	$result = $conn->query($sql);
	if ($result->num_rows <= 0){
		echo"لا توجد نتيجة";
	}
	else if( $g == "" ){}
	else{
		echo'<body background="neymar-messi.jpeg">';
		echo'<body background="neymar-messi.jpeg">';
		echo'<table class="table" style="width:100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">اسم </th>
      <th scope="col">كلمة المرور</th>
      <th scope="col">البريد</th>
      <th scope="col">السكن</th>
	  <th scope="col">الهاتف</th>
      
    </tr>
  </thead>';
			while ($row = $result->fetch_assoc()){ 
				echo '<tr>';
					echo'<td><strong>'; echo $row['name_cus']; echo'</strong></td>';
					echo'<td><strong>'; echo $row['pass_cus']; echo'</strong></td>';
					echo'<td><strong>'; echo $row['email_cus']; echo'</strong></td>';
					echo'<td><strong>'; echo $row['address_cus']; echo'</strong></td>';
					echo'<td><strong>'; echo $row['phone_cus']; echo'</strong></td>';
					
				echo'</tr>';			
			}
	}
?> 
</div>