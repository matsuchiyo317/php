<?php
$Company = "estra";
$Service = "COACHTECH";

echo $Company . "は" . $service . "を運営しています";

echo "\n";

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "fizzbuzz";
    echo "\n";
    continue;
  }
  elseif ($i % 3 == 0) {
    echo "fizz";
    echo "\n";
    continue;
  }
  elseif ($i % 5 == 0) {
    echo "buzz";
    echo "\n";
    continue;
  }
  else {
    echo $i;
    echo "\n";
  }
}

function getSquareArea($base, $height) {
  return $base * $height;
}
function getTriangleArea($base, $height) {
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height) {
  return ($upperBase + $lowerBase) * $height / 2;
}