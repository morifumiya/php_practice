<?php
echo "課題1 = ";
function outputDouble($num){
  return $num * 2;
}
  echo outputDouble(5);
  echo "\n";

?>

<?php
function sumab($a,$b){
    return $a + $b;
}
echo "課題2 =　" . sumab(2,5); "\n";
echo "\n";
?>

<?php
echo "課題3 = ";
function multiply($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  echo $result;
}
multiply(array(1, 3, 5 ,7, 9));
echo "\n";

?>

<?php
echo "課題4 = ";
 function max_array($arr) {
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a) {
     if ($max_number < $a) {
         $max_number = $a;
     }
 }
 return $max_number;
 }
 echo max_array(array(8, 9, 3, 4));
 echo "\n";
?>

<?php
//strip_tags — 文字列から HTML および PHP タグを取り除く//;
echo "課題5/1 = ";
$contents = "<b>sample</b>";
$contents = strip_tags($contents);
echo $contents;
echo "\n";
?>

<?php
echo "課題5/2 = ";
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";
?>

<?php
//array_merge — ひとつまたは複数の配列をマージする//;
echo "課題5/3 = ";
$array1 = array("color" => "red", "fish" => "sarmon" );
$array2 = array("fruit" => "peach", "animal" => "dog");
$result = $array1 + $array2;
var_dump($result);
echo "\n";
?>

<?php
echo "課題5/4 = ";
date_default_timezone_set('Asia/Tokyo');
echo time();
echo "\n";
?>

<?php
echo date( "n月j日", mktime(0,0,0,4,0) );
echo "\n";
?>

<?php
echo "課題5/5 = ";
date_default_timezone_set('Asia/Tokyo');
echo date('Y/m/d');
echo "\n";
?>