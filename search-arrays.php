<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
$needle = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function isInArray ($needle, $array) {

  $result = array_search($needle, $array);

  	if ($result !== false) {
  		return true;
  	} else {
  		return false;
  	}
}


function compareArrays ($names, $compare) {
  $count=0; 
  foreach($names as $name) {
  	$result = array_search($name, $compare);

  	if ($result !== false) {
  		$count++;
  	} 
  }
  	return $count;
}  	

echo isInArray("Tina", $names). PHP_EOL;
echo compareArrays($names, $needle). PHP_EOL;

?>
