<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> search  </title>
  <link rel="stylesheet" href="css/styles.css">
  <!-- <link rel="stylesheet" style="text/css" href="css/stylesss.css"> -->
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
  <h2>البحث</h2>
</div>
<br>
           <form action="search.php" method="POST" class="search">
                <input type="hidden" id="siteId" name="siteId" value="3088904278">
                <input type="hidden" id="pageId" name="pageId" value="8847215">
                <input type="text" id="name-0670"name="na" class="form-control offset-md-4 col-md-4 text-center" onKeyUp="loadDoc(this.value)" class="search" required=""> 
                <div class="col-md-4"></div>

            </form><br>
            <script>
            function loadDoc(str) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("demo").innerHTML
                            = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "ajax.php?g="+str, true);
                xhttp.send();
            }
        </script>
        <div id="demo"><h2></h2></div>
		<script src="js/scripts.js"></script>
    <script src="js/scriptss.js"></script>
    <script src="js/scriptsss.js"></script>
</body>
</html>
