<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="img/imagesssss.png" alt="logo" width="50" height="50">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="max-width: 90%; width:100%; justify-content: center; ">
    <?php if(!isset($_SESSION["uid"])){ ?>
      <li class="nav-item <?php echo $login;  ?>">
        <a class="nav-link" href="login.php">تسجيل دخول</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="logout.php">تسجيل الخروج</a>
      </li>
      <?php }else{ ?>
       
        <?php } ?>
        <?php if(isset($_SESSION["admin"])){ ?>
		<li class="nav-item <?php echo $login;  ?>">
        <a class="nav-link" href="login.php">تسجيل دخول</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="logout.php">تسجيل الخروج</a>
      </li>
      <li class="nav-item <?php echo $login;  ?>">
        <a class="nav-link" href="add_serves.php">لوحة التحكم</a>
      </li>
      <li class="nav-item <?php echo $login;  ?>">
        <a class="nav-link" href="customers.php">عرض المستخدمين</a>
      </li>
      
      <?php } ?>
	  <li class="nav-item <?php echo $contact; ?>">
        <a class="nav-link" href="commation.php"> التواصل مع الموقع </a>
      </li>
	  <li class="nav-item <?php echo $search; ?>">
        <a class="nav-link" href="search.php"> البحث  </a>
      </li>
	   <li class="nav-item <?php echo $home; ?>">
        <a class="nav-link" href="home.php"> صفحة الرئيسية <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
<?php if (isset($_SESSION["uid"])) {?>
<h3 class="text-primary">مرحباً بك <b class="text-info"><?php echo $_SESSION["name"];  ?></b></h3>
<?php }?>

</nav>
