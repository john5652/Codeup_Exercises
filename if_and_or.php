<?php 

 $x = 0;
 $y = 5;
 $z = 10;

  if ($x < $y && $y < $z) {
  echo "{$x} < {$y} < {$z}\n";
  } 

  if ($x > $x  || $x < $z ) {
  	echo " $x is greater than 0 OR less than 10 ";
  }

  if ($y > $x  || $y < $z ) {
  	echo " $y is greater than 0 OR less than 10 ";
  }

  if ($z > $x  || $z < $z ) {
  	echo " $z is greater than 0 OR less than 10 ";
  }

  if ($x > $x  && $x < $z ) {
  	echo " $x is greater than 0 AND less than 10 ";
  }

  if ($y > $x  && $y < $z ) {
  	echo " $y is greater than 0 AND less than 10 ";
  }

  if ($z > $x  && $z < $z ) {
  	echo " $z is greater than 0 AND less than 10 ";
  }
  	



 ?>