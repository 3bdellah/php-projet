<?php require'header.php';?>




<div class="container site ">
<div class="tab-content">
<div class="tab-pane active" id="#1">
<div class="row">
<?php
$products = $DB->query('SELECT * FROM products');
foreach ($products as $products):
    ?> 
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail"><img alt="..." src="image/m<?php echo $products->id;?>.png" />
                <div class="price" style="color:white;"><?php echo number_format((float)$products->prix, 2, '.', ''). ' MAD';?></div>
                <div class="caption">
                   <h4 align="center"><?php echo $products->name;?></h4>
                    <div>PRIX :<?php echo number_format ($products->prix,2);?>MAD</div>
                    <a class="btn bnt-order" href="addpanier.php?id=<?= $products->id; ?>" role="button">Commander</a></div>
                </div>
            </div>
<?php endforeach ?>
</div>
</div>
</div>
</div>


   <?php require'footer.php';?>