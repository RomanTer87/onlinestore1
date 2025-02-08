<?php 
    session_start(); 
	require("includes/connection.php"); 

	if(isset($_GET['page'])){ 	 
		$pages=array("products", "cart"); 	 
		if(in_array($_GET['page'], $pages)) { 		 
			$_page=$_GET['page']; 		 
		}else{  
			$_page="products"; 			 
		} 
		 
	}else{ 
		 
		$_page="products"; 
		 
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pizza Olla</title>
</head> 
 
<body>
<div class="wrapper">
		<header class = "header">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                    <div class="container-fluid container">
                        <a class="navbar-brand" href="#"><b>Ristorante</b></a>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Italian_cooking_icon.svg/640px-Italian_cooking_icon.svg.png" alt="logo" width="90px">
                        <a class="navbar-brand" href="#"><b>Pizza Olla</b></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="index.php?page=products">Меню</a>
                            <a class="nav-link" href="index.php?page=cart">Корзина</a>
                        </div>
                        </div>
                    </div>
            </nav>
        </header>
		<main class="main py-3">
            <div class="container">
				<div class="row row-cols-1 row-cols-md-2 g-4">
					<div class="col-8">
						<?php require($_page.".php"); ?>
					</div>
					<div class="col-4">
					<div id="sidebar"> 
							<h1>Корзина</h1>
							<?php
								if(isset($_SESSION['cart'])){

									$sql = "SELECT * FROM products WHERE id IN (";
									foreach($_SESSION['cart'] as $id => $value){
										$sql.=$id.",";
									}

									$sql = substr($sql,0,-1).") ORDER BY name ASC";
									$query=mysqli_query($mysqli, $sql);
									while($row=mysqli_fetch_array($query)){

										?>
										<p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id']]['quantity'] ?></p>
										<?php
									}
									?>
									<hr />
									<a href="index.php?page=cart" class="btn btn-dark">В корзину</a>
									<?php

								}else{
									echo "<p>Ваша корзина пустая.<br> Пожалуйста, добавьте выбранные позиции</p>";
								}
							?>
							</div><!--end sidebar--> 
					</div>
				</div>
			</div>
        </main><!--end main-->
	</div>
		<footer class = "footer">
        <div class="text-bg-dark p-3 text-center">
                &copy; Copyright <?= date('Y') ?>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body> 
</html>