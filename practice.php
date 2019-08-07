<?php
echo 'hello world!';
?>

<?php
$a = 3;
$b = 7;
echo $a + $b;
?>

<?php
echo "課題1 = ";
function outputDouble($num){
  $result = $num * 2;
  echo $result;
}
outputDouble(5);
echo "\n";
echo '<br>'
?>

<?php
echo "課題2 = ";
function f($a, $b) {
    $result = $a + $b;
    echo $result;
    echo '<br>';
}

f(2, 3);
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