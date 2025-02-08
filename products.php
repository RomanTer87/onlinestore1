<?php
if(isset($_GET['action']) && $_GET['action']=="add"){

	$id=intval($_GET['id']);

	if(isset($_SESSION['cart'][$id])){

		$_SESSION['cart'][$id]['quantity']++;
	}else{

		$sql_s="SELECT * FROM products
		WHERE id={$id}";
		$query_s=mysqli_query($mysqli, $sql_s);
		if(mysqli_num_rows($query_s) != 0){
			$row_s=mysqli_fetch_array($query_s);

			$_SESSION['cart'][$row_s['id']] = array(
				'quantity'=> 1,
				'price' => $row_s['price']
			);


		}else{
		
			$message = "Такого продукта не существует!";
		}
	}
}

?>
<h1> Меню </h1>	
<?php
	if(isset($message)){
		echo "<h2>$message</h2>";
	}
?>    
		<?php
		$sql="SELECT * FROM products ORDER BY name ASC";
		$query=mysqli_query($mysqli, $sql);

		while($row=mysqli_fetch_array($query)){
			?>
                    <div class="card">
                    <img src="<?php echo $row['image']?>" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']?></h5>
                        <p class="card-text"><?php echo $row['description']?></p>
						<p class="card-text"><?php echo $row['price']?></p>
						<a href="index.php?page=products&action=add&id=<?php echo $row['id'] ?>" class="btn btn-dark">В корзину</a>
                    </div>
                    </div>
			<?php 
		}
		?>