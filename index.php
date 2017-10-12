<?php

$m = 6;

for( $i = 1;$i<=$m;$i++ ) {
  
  for( $j = $m-$i; $j>=0;$j-- ) {
    echo " ";
  }
  
  
  for( $k = 0;$k<$i; $k++ ) {
    echo "H";
  }
  
  for( $l = 1; $l<$i; $l++ ) {
    echo "H";
  }
  echo "\n";
  
}

for($i = 0; $i<5; $i++) {
  
  for($j = 1; $j<=4; $j++) {
      echo " ";
  }
  
  for($l = 1; $l<6;$l++) {
    echo "H";
  }
  
  for($k = 1;$k<$m*3;$k++) {
    echo " ";
  }
  
  for($l = 1; $l<6;$l++) {
    echo "H";
  }
  
  echo "\n";
  
}


for($i = 0; $i<3; $i++) {
  
  for($j = 1; $j<=4; $j++) {
      echo " ";
  }
  
  for($l = 3; $l<$m*5;$l++) {
    echo "H";
  }
  
  echo "\n";
  
}

for($i = 0; $i<5; $i++) {
  
  for($j = 1; $j<=4; $j++) {
      echo " ";
  }
  
  for($l = 1; $l<6;$l++) {
    echo "H";
  }
  
  for($k = 1;$k<$m*3;$k++) {
    echo " ";
  }
  
  for($l = 1; $l<6;$l++) {
    echo "H";
  }
  
  echo "\n";
  
}


for($p = 0; $p<6; $p++) {
  
  
  for($k = ($m*4)+$p; $k>1; $k--) {
    echo " ";
  }
  
  
  for( $h = $p; $h<6; $h++ ) {
    echo "H";
  }
  
  
  for( $r = $p; $r<5; $r++ ) {
    echo "H";
  }
  

  echo "\n";
  
}














?>