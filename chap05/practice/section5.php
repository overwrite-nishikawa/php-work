<?php 
$str = 'サーバーサイド';
print mb_substr($str,4,3);
$str2 = 'ｻｰﾊﾞｰｻｲﾄﾞ技術';
print mb_convert_kana($str2,'K');

$str3 = '鈴木\t太郎\t男\t50歳\t広島県';

print_r(explode('\t',$str3));

// $address = '住所は〒184-0000 鎌ヶ谷市槙野町0-0-0です。';
// if(preg_match_all('/<.+>/,$address,$data,PREG_SET_ORDER')) {
//     foreach($data as $item) {
//         print htmlspecialchars($item[0]);
//     }
// }

// $str = "お問い合わせはCQW15204@niffty.comまで";

// preg_replace('/[a-z]0-9\.\-]+@([a-z0-9\-]+\+[a-z0-9\-]+\i]])','<a href = "mailto:~">')

$str = 'お問い合わせはCQW15204@nifty.comまで';
print preg_replace('/[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+/i', '<a href="mailto:$0">$0</a>', $str);

$tag = 'PHPはPHP;Hypreetext Preprocessorの略です';
// preg_match_all('PHP',$tag,PREG_SET_ORDER);
print mb_strpos($tag,'PHP',2);

print preg_replace('%sの気温は、%.1f℃です','弘前','15.156');

print mb_convert_case('wings knowledge',MB_CASE_TITLE);

// print mb_convert_encoding('ボクの名前はリオです.','ボク','私',' リオ','凛生');
$str2 = "ボクの名前はリオです.";

print str_replace(['ボク','リオ'],['私','凛生'],$str2);
$str3 = 'https://wings.msn.to/';

var_dump(str_starts_with($str3,'http://'));

$data = ['高江','青木','片渕'];

// 末尾に追加
array_push($data,'山田','日尾');
// 先頭に追加
array_unshift($data,'掛谷','土井');

// print_r($data2);

print_r(array_slice($data,3,3));

print ceil(12.2);
print abs(-12);

unset($x);