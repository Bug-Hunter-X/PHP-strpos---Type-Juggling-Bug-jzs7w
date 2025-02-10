The correct way to check the result of `strpos()` is to use the strict comparison operator (`===`) which prevents type juggling.

```php
<?php
$haystack = "This is a test string";
$needle = "test";

if (strpos($haystack, $needle) !== false) {
  echo "Needle found!";
} else {
  echo "Needle not found!";
}

$haystack2 = "This is another string";
$needle2 = "missing";

if (strpos($haystack2, $needle2) !== false) {
  echo "Needle found!";
} else {
  echo "Needle not found!";
}
?>
```
This ensures that we only consider the actual boolean `false` returned by `strpos()` when the needle is not found, avoiding the type juggling pitfall.