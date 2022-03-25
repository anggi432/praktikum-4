<?php
require_once "class_persegipanjang.php";
$persegipanjang1 = new Persegipanjang(10, 15);
$persegipanjang2 = new Persegipanjang(27, 30);
echo "Persegi panjang 1 mempunyai P = ".$persegipanjang1->panjang. ", L = ".$persegipanjang1->lebar;
echo "<br/> Persegi panjang 2 mempunyai P = ".$persegipanjang2->panjang. ", L = ".$persegipanjang2->lebar;
echo "<br/> Luas persegi panjang 1 = ".$persegipanjang1->getLuas();
echo "<br/> Luas persegi panjang 2 = ".$persegipanjang2->getLuas();
echo "<br/> Keliling persegi panjang 1 = ".$persegipanjang1->getkeliling();
echo "<br/> Keliling persegi panjang 2 = ".$persegipanjang2->getkeliling();
?>