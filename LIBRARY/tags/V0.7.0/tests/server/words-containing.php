<?php
$req_value = $_GET['value'];
$vals = file("words.txt");

$count = count($vals);
$output = "";
for ($i = 0; $i < $count; $i++) {
    $pos = stripos($vals[$i], $req_value);
    if ($pos === FALSE) {
      // Skip it.
    } else {
      if ($pos >= 0) {
        $output .= "$vals[$i]";
      }
    }
}
echo "$output";
?>
