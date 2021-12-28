<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=0">Від дешевших до дорожчих</a>
    <br>
<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=1">Від дорожчих до дешевших</a>


<?php
if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
        } else 
        { 
            $sort = "name";
        }
if (isset($_GET['order'])) {
            $order = $_GET['order'];
        } else {
            $order = 0;
        } 

// Сортування
/*	if ($order!=0) {
		usort($products, function($a, $b) {
			return ($b['price']-$a['price']);
		});
	} else {
		usort($products, function($a, $b) {
			return ($a['price']-$b['price']);
		});
	}*/
	$price = [];
	foreach ($products as $key => $row) {
        $price[$key] = $row['price'];
    }
	if ($order!=0) {
		array_multisort($price, SORT_DESC, $products);
	} else {
		array_multisort ($price, SORT_ASC, $products);
	}
foreach($products as $product)  :
?>
    <div class="product">
        <p class="sku">Код: <?php echo $product['sku']?></p>
        <h4><?php echo $product['name']?><h4>
        <p> Ціна: <span class="price"><?php echo $product['price']?></span> грн</p>
        <p><?php if(!$product['qty'] > 0) { echo 'Нема в наявності'; } ?></p>
    </div>
<?php endforeach; ?>
