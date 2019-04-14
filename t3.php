<?php 

function pairs_up_to($nums, $k) 
{
	$n = 0;
	$a = [];
    for ($i = 0; $i < count($nums); $i++) {
		for ($j = 0; $j < count($nums); $j++) {
			if ($i == $j) continue;
            if (($nums[$i] + $nums[$j]) == $k) {
				$elm = [$nums[$i], $nums[$j]];
				sort($elm);
                if (array_search($elm, $a) === false) {
					$a[$n++] = $elm;
				}
            }
        }
    }
    return $a;
}

function isArrayDiff($a1, $a2)
{
	foreach ($a1 as $key => $value) {
		if (!isset($a2[$key]) ) {
			return false;
		}
		if (is_array($a1[$key])) {
			if (!isArrayDiff($a1[$key], $a2[$key])) {
				return false;
			}
		} else if ($a1[$key] !== $a2[$key]) { 
			return false;
		}
	}
	return true;
}


function test1($test_data)
{
	$a1 = [[1, 4], [2, 3], [-1, 6]];
	$a2 = pairs_up_to($test_data, 5);
	return (integer) isArrayDiff($a1, $a2);
}

function test2($test_data)
{
	$a1 = [[1, 1], [-1, 3]];
	$a2 = pairs_up_to($test_data, 2);
	return (integer) isArrayDiff($a1, $a2);
}

function test3($test_data)
{
	$a1 = [[1, 6], [3, 4]];
	$a2 = pairs_up_to($test_data, 7);
	return (integer) isArrayDiff($a1, $a2);
}

$test_data = [1, 3, 2, 4, 20, 11, 2, 1, 3, 6, -1];

echo '<pre>';
echo 'result test1: ' . test1($test_data) . PHP_EOL;
echo 'result test2: ' . test2($test_data) . PHP_EOL;
echo 'result test3: ' . test3($test_data) . PHP_EOL;
echo '</pre>';

// echo '<pre>';
// print_r(pairs_up_to([1, 3, 2, 4, 20, 11, 2, 1, 3, 6, -1], 5));
// print_r(pairs_up_to([1, 3, 2, 4, 20, 11, 2, 1, 3, 6, -1], 2));
// print_r(pairs_up_to([1, 3, 2, 4, 20, 11, 2, 1, 3, 6, -1], 7));
// echo '<pre>';