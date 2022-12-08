<?php 
function calendar(int $year,int $month): void {
    for($i = 1;$i < 32;$i++) {
        if(checkdate($month,$i,$year)) {
            print "{$i} &nbsp;";
        }     
    }
}
print '2024年2月のカレンダー:<br/>';
calendar(2024,2);

$dt = DateTime::createFromFormat('Y年m月d日','2021年12月4日');
print $dt->format('Y/m/d (D)');

$day = DateTime::createFromFormat('Y年m月d日','2022年11月27日');
print $day->format('Y年m月d日');
print $day->format('Y年m月t日');
$day->add(new DateInterval('P1M10D'));
print $day->format('Y年m月d日');

