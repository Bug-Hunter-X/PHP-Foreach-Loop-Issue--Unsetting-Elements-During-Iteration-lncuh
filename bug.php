function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c', 'a'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

// The issue is that modifying an array while iterating over it with foreach can lead to unexpected results.
// When an element is unset, the internal pointer of the foreach loop might skip elements.
// In this specific example, the second 'a' is skipped because the index changes after the first 'a' is unset.
