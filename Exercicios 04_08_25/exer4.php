<?php
$x =  $_GET['num1'];
$y =  $_GET['num2'];

if($x > $y) {
  echo "$x é maior que $y<br>";
}

if($x < $y) {
  echo "$x é menor que $y<br>";
}

if($x >= $y) {
  echo "$x é maior ou igual que $y<br>";
}

if($x <= $y) {
  echo "$x é menor ou igual que $y<br>";
}

if($x == $y) {
  echo "$x é igual que $y<br>";
}

if($x != $y) {
  echo "$x é diferente de $y<br>";
}

if($x <> $y) {
  echo "$x é diferente de $y<br>";
}

if($x === $y) {
  echo "$x é identico $y<br>";
}

if($x !== $y) {
  echo "$x Não identico $y<br>";
}

if($x <=> $y) {
  echo "$x é menor, igual ou maior que $y<br>";
}
?>