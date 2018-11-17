//transpose of a matrix

<?php
$trans = array(
    array(1, 2,9),
    array(3, 4,9),
    array(5, 6,9)
);
echo "<h2> Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$row][$col];
  }
}
echo "<h2> Transpose of Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$col][$row];
  }
  
}
?>



//multiplication of matrix

<?php 
$a1 = Array('0' => Array('0' => 1,'1' => 2),'1' => Array('0' => 4,'1' => 5));
$a2 = Array('0' => Array('0' => 1,'1' => 2),'1' => Array('0' => 4,'1' => 5));
$sum=0;
$sumArray = array();
$result = array();
for($i=0; $i<=1; $i++) {
    for($j=0; $j<=1; $j++) {
	for($k=0;$k<=1;$k++){
       		$sum =$sum+ $a1[$i][$k] * $a2[$k][$j];
	}
 	$result[$i][$j]=$sum;
	$sum=0;
    }
}
echo "<h2> first of Matrix </h2>";
for ($row = 0; $row < 2; $row++) {
	echo "<br>";
  for ($col = 0; $col < 2; $col++) {
    echo " ".$a1[$row][$col];
  }
}
echo "<h2> second of Matrix </h2>";
for ($row = 0; $row < 2; $row++) {
echo "<br>";  
  for ($col = 0; $col < 2; $col++) {
    echo " ".$a2[$row][$col];
  }
  
}
echo "<h2> result of Matrix </h2>";
for ($row = 0; $row < 2; $row++) {
echo "<br>";  
  for ($col = 0; $col < 2; $col++) {
    echo " ".$result[$row][$col];
  }
  
}

?>
