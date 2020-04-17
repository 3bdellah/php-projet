
<?php
if(isset($_GET['del'])){
    $panier->del($_GET['del']);
}
?>
<di class="checkout">
    <div class="title">
        <div class="wrap">
        <h2 class="first">Shoppin Cart</h2>
        <a href ="#" class="proceed">Proceed to checkout</a>
        </div>
    </div>
    <div class="table">
        <div class="wrap">
            <div class="rowtitle">
            <span class="name">Product name</span>
            <span class="price">Price</span>
            <span class="quantity">Quantity</span>
            <span class="subtotal">Subtotal</span>
            <span class="action">Actions</span>
            </div>
            
            <?php
            $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $products = array();
            }else{
               $products = $DB->query('SELECT * FROM products  WHERE id IN ('.implode(',',$ids).')'); 
            }
            foreach ($products as $products):
            ?>
            
            <div class="row">
            <a href="#" class="img"> <img src="image/"></a>
            <span class="name"></span>
            <span class="price"><?php echo number_format ($products->prix,2,',',' ');?>MAD</span>
            <span class="quantity">1</span>
            <span class="subtotal"><?php echo number_format($products->prix * 1.196,2,',',' ');?>MAD</span>
            <span class="action">
                <a href="panier.php?del=<?= $products->id; ?>" class="del"><img src="image/"></a>
                </span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</di>
  













