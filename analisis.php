<?php

$p1 = $_REQUEST['product0Heigth'] + $_REQUEST['product0Width'];
$p2 = $_REQUEST['product1Heigth'] + $_REQUEST['product1Width'];
$p3 = $_REQUEST['product2Heigth'] + $_REQUEST['product2Width'];

$start = "Ordenado por orden de mayor de dimensión de productos el resultado es el siguiente: ";
$d1 = "Dimensión de producto 1: $p1";
$d2 = "Dimensión de producto 2: $p2";
$d3 = "Dimensión de producto 3: $p3";

if($p1 > $p2 && $p2 > $p3) {
  echo $start."<br>".$d1."<br>".$d2."<br>".$d3;
} elseif($p1 > $p2 && $p3 > $p2) {
  echo $start."<br>".$d1."<br>".$d3."<br>".$d2;
} elseif ($p2 > $p3 && $p3 > $p1) {
  echo $start."<br>".$d2."<br>".$d3."<br>".$d1;
} elseif($p2 > $p3 && $p1 > $p3) {
  echo $start."<br>".$d2."<br>".$d1."<br>".$d3;
} elseif($p3 > $p1 && $p1 > $p2) {
  echo $start."<br>".$d3."<br>".$d1."<br>".$d2;
} elseif($p3 > $p1 && $p2 > $p1) {
  echo $start."<br>".$d3."<br>".$d2."<br>".$d1;
}

?>