<?php 
$name = "森　郁弥"; 
if ($name) {
    echo "私は" . $name . "です";
    echo '<br>';
} else {
    echo $name . "ではありません";
}
?>

<?php
$amount = 0; // 合計を初期化
$i = 1;      // 足し算のはじめの数
 
while( $i <= 10000 ) { 
    $amount += $i; // $totalに$iを足す
    $i++;          // $iに1を足す
}
 
echo '合計は' . $amount;
?>

<?php
$fruits = array("リンゴ", "ブドウ", 
"ナシ", "メロン", "ザクロ");

foreach ($fruits as $fruit) {
    echo $fruit . "/";
    echo '<br>';
}
?>

<?php
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$start = 1;
for($i = $start; $i <= 100; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . "/";
  }
}
?>
