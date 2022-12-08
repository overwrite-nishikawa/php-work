<?php
$point = 75;
if ($point >= 90) {
  print '優';
} elseif ($point >= 70) {
  print '良';
} elseif ($point >= 50) {
  print '可';
} else {
  print '不可';
}

match($point) {
  90 => '優',
  70 => '良',
  50 => '可',
  default => '不可'
};

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                