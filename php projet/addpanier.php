<?php
require'DB.class.php';
require'panier.class.php';
$DB=new DB();
$panier=new panier();


if(isset($_GET['id'])){
    $product = $DB->query('SELECT id FROM products WHERE id=:id',array('id'=>$_GET['id']));
   if(empty($product)){
       die("ce produit n'existe pas ");
   }
    $panier->add($product[0]->id);
    die('le produit a bien été ajouter a votre panier<br> <a href="javascript:history.back()">retourner sur le catalogue</a>');
}else{
    die("vous n'avez pas sélectionné de produit à ajouter au panier");
}
    
?>