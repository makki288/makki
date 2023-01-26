

<?php  require_once "Connections/conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> home  </title>
<link rel="stylesheet" href="css/styles.css">

<style>
  body{
    background-image: url("img/1.jpg") !important;
    background-repeat: no-repeat;
    background-size: cover;
  }
.carousel .carousel-item {
  height: 50px;
}

.carousel-item img {
    position: absolute;
    object-fit:cover;
    top: 0;
    left: 0;
    min-height: 50px;
}
</style>
</head>
<body>
<?php include "temp/navbar.php"; ?><br><br>
<?php 
		
                                $sql = "SELECT * FROM serves ";
		                        $result = $conn->query($sql);
			
		
                                if(mysqli_num_rows($result) == 0){ ?>
                                <h3 class="text-center alert alert-warning">welcom to wepsite hospoital</h3>
                        
                                <?php }else{

                                while($results = mysqli_fetch_object($result)){
                                ?>
								<div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal"  >
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="uploads/<?php echo explode(",",$results->images)[0]; ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center" style="color:white"><?php echo number_format($results->price);?> جنيه</div>
                                <div class="portfolio-caption-subheading text-center" style="color:white;"><?php echo $results->description; ?></div>
                            </div>
                        </div>
                    </div>
								
								<?php }} ?>
           
 <script src="js/scripts.js"></script><script src="js/scriptss.js"></script><script src="js/scriptsss.js"></script>
</body>
</html>