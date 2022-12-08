<?php 
// for($count = 0,$a = 1,$b = 1;$a <=  9,$b <= 9,$count = $a * $b;$a++,$b++) {
//     print "{$count} <br/>";
// } 

for($i = 1;$i < 10; $i++) {
    for($j = 1;$j < 10; $j++) {
        $result = $i * $j;
        print "{$result} &nbsp;";
    }
    print '<br />';
}

$sum = 0;    
$i = 0;
// for($i = 1;$i <=100; $i ++) {
//     if($i %2 !== 0) { continue; }
//         $sum += $i;
// }
// print "合計は${sum}です。";

while($i <= 100) {
    $i = 0;
    $i++;
    $sum += $i;
    if($i %2 !== 0) { continue; }
}
print "合計は${sum}です。";

for($i = 1;$i <= 100;$i++) {
    if(!($i % 2)) { continue; }
    print $i;
}
