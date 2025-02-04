// Solution: Iterate over a copy of the array
function foo(array $arr) {
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c', 'a'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

//Or use a for loop for better index control
function foo2(array $arr) {
  for ($i = count($arr) -1 ; $i >=0; $i--) {
    if ($arr[$i] === 'a') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c', 'a'];
$result = foo2($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )