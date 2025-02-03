function my_function($a, $b) {
  if ($a === $b) {
    return true;
  } else {
    return false;
  }
}

// This works as expected
var_dump(my_function(1, 1)); // bool(true)
var_dump(my_function(1, 2)); // bool(false)

// This does not work as expected
var_dump(my_function(0, '0')); // bool(false)
var_dump(my_function(null, false)); // bool(false)