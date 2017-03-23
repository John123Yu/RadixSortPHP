<?php

$list = array();
$listTwo = array();
$holdingList = array(0,0,0,0,0,0,0,0,0,0);

for($i = 0; $i < 30; $i++) {
	$list[] = rand(1,100);
	$listTwo[] = 0;
}

print_r($list);
echo '<br>';

for($j = 0; $j < sizeof($list); $j++) {
	$ones = $list[$j] % 10;
	switch ($ones) {
		case 0:
			$holdingList[0] += 1;
			break;
		case 1:
			$holdingList[1] += 1;
			break;
		case 2:
			$holdingList[2] += 1;
			break;
		case 3:
			$holdingList[3] += 1;
			break;
		case 4:
			$holdingList[4] += 1;
			break;
		case 5:
			$holdingList[5] += 1;
			break;
		case 6:
			$holdingList[6] += 1;
			break;
		case 7:
			$holdingList[7] += 1;
			break;
		case 8:
			$holdingList[8] += 1;
			break;
		case 9:
			$holdingList[9] += 1;
			break;
	}
}

echo '<br>';
print_r($holdingList);

for($k = 1; $k < sizeof($holdingList); $k++) {
	$holdingList[$k] = $holdingList[$k] + $holdingList[$k-1];
}

echo '<br>';
print_r($holdingList);

for($i = sizeof($list) - 1; $i >= 0; $i--) {
	$ones = $list[$i] % 10;
	$holdingList[$ones] -= 1;
	$listTwo[$holdingList[$ones]] = $list[$i];
}

echo '<br>';
echo '<br>';
print_r($listTwo);

$holdingList = array(0,0,0,0,0,0,0,0,0,0);

for($j = 0; $j < sizeof($listTwo); $j++) {
	$tens = $listTwo[$j] % 100;
	$tens = floor($tens / 10);
	switch ($tens) {
		case 0:
			$holdingList[0] += 1;
			break;
		case 1:
			$holdingList[1] += 1;
			break;
		case 2:
			$holdingList[2] += 1;
			break;
		case 3:
			$holdingList[3] += 1;
			break;
		case 4:
			$holdingList[4] += 1;
			break;
		case 5:
			$holdingList[5] += 1;
			break;
		case 6:
			$holdingList[6] += 1;
			break;
		case 7:
			$holdingList[7] += 1;
			break;
		case 8:
			$holdingList[8] += 1;
			break;
		case 9:
			$holdingList[9] += 1;
			break;
	}
}

for($k = 1; $k < sizeof($holdingList); $k++) {
	$holdingList[$k] = $holdingList[$k] + $holdingList[$k-1];
}

echo '<br>';
echo '<br>';
print_r($holdingList);

for($i = sizeof($listTwo) - 1; $i >= 0; $i--) {
	$tens = $listTwo[$i] % 100;
	$tens = floor($tens / 10);
	$holdingList[$tens] -= 1;
	$list[$holdingList[$tens]] = $listTwo[$i];
}

echo '<br>';
echo '<br>';
print_r($list);


?>





