<?php
    if(isset($_POST['submit'])){

        foreach($_POST['quantity'] as $key => $val){
            if($val==0){
                unset($_SESSION['cart'][$key]);
            }else{
                $_SESSION['cart'][$key]['quantity'] = $val;
            }
        }
    }

?>

<h1>Корзина заказов</h1>
<a href="index.php?page=products" class="btn btn-dark">Вернуться к МЕНЮ</a>
<form method="post" action="index.php?page=cart">

    <table class="table table-success table-striped">
        <tr>
            <th>Наименование</th>
            <th>Количество</th>
            <th>Цена</th>
            <th>Общ. цена</th>
        </tr>
        
        <?php

            $sql="SELECT * FROM products WHERE id IN (";
					foreach($_SESSION['cart'] as $id => $value){
						$sql.=$id.",";
					}

					$sql = substr($sql,0,-1).") ORDER BY name ASC";
					$query=mysqli_query($mysqli, $sql);
                    $totalprice=0;


                    while($row=mysqli_fetch_array($query)){
                        $subtotal=$_SESSION['cart'][$row['id']]['quantity']*$row['price'];
                        $totalprice+=$subtotal;
						?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><input type="text" name="quantity[<?php echo $row['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>"></td>
                            <td><?php echo $row['price'] ?> руб.</td>
                            <td><?php echo $_SESSION['cart'][$row['id']]['quantity']*$row['price'] ?> руб.</td>
                        </tr>
						<?php
					}
                ?>
                 <tr>
                    <td>Total Price: <?php echo $totalprice ?></td>
                 </tr>



    </table>
    <br />
    <button type="submit" name="submit" class="btn btn-dark"> Обновить корзину </button>

</form>
<br/>
<p>Чтобы удалить товар, установите его количество на 0.</p>