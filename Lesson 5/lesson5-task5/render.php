<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=0">Від дешевших до дорожчих</a>
<br>
<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=1">Від дорожчих до дешевших</a>
<br>
<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=discount&order=0">Від дешевших до дорожчих з урахуванням знижки</a>
<br>
<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=discount&order=1">Від дорожчих до дешевших з урахуванням знижки</a>

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
		
  /*  var_dump($sort);
    var_dump($order);*/
    
    if ($order==1 && $sort==='price') {
		usort($products, function($a, $b) {
			return ($b['price']-$a['price']);
		});
	}
    
    if ($order==0 && $sort==='price'){
		usort($products, function($a, $b) {
			return ($a['price']-$b['price']);
			
			
		});
    }
    
    if ($order==1 && $sort==='discount') {
	    foreach ($products as $product) $product['price'] = $product['price'] - ($product['price'] * ($product['discount'] / 100));
		    usort($products, function ($a, $b) {
			    return ($b['price'] - $a['price']);
		    });
    }
    
    if ($order==0 && $sort==='discount') {
	    foreach ($products as $product) {
		    $product['price'] = $product['price'] - ($product['price'] * ($product['discount'] / 100));
		    usort($products, function ($a, $b) {
			    return ($a['price']-$b['price']);
		    });
	    }
    }
    
	foreach($products as $product)  :
?>
    <div class="product">
        <p class="sku">Код: <?php echo $product['sku']?></p>
        <h4><?php echo $product['name']?><h4>
        <p> Ціна: <span class="price"><?php echo $product['price']?></span> грн </p>
        <p> <strong>НОВА ЦІНА:</strong> <span class="price"><?php echo ($product['price'] - ($product['price'] * ($product['discount'] / 100))); ?> </span> грн </p>
        <p><?php if(!$product['qty'] > 0) { echo 'Нема в наявності'; } ?></p>
    </div>
<?php endforeach; ?>
