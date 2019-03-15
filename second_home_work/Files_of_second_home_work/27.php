<!-- exercise 27 -->
<p>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. 
Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). 
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, 
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. 
В каждой ячейке должно находиться случайное число. <br><br>
<?php
define("RAND_START", 1);
define("RAND_END", 20);


$colors = array('red','yellow','blue','gray','maroon','brown','green');
$rand_colors =array_rand($colors, 7);

$r=$colors[$rand_colors[0]];
$g=$colors[$rand_colors[1]];
$b=$colors[$rand_colors[2]];
$d=$colors[$rand_colors[3]];
$c=$colors[$rand_colors[4]];
$v=$colors[$rand_colors[5]];
$n=$colors[$rand_colors[6]];


$colEnd = rand(RAND_START, RAND_END);
$rowEnd = rand(RAND_START, RAND_END);

$numbersColumn=range(1,$colEnd);
$numbersRow = range(1,$rowEnd);

?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <?php foreach ($numbersRow as $numberRow): ?>
    <tr>
    <?php foreach($numbersColumn as $numberCol): 
    ?>

<?php foreach($colors as $value)
{ 
  $value1=$value;
  $q=$numberRow * $numberCol;
}   
 
  if($q%2 ==0 || $q>=20){
    $value1=$g;
  }
  if($q%2 == 1 ){
    $value1=$d;
  }
  if($q%3==1){
    $value1=$b;
  }
  if($q%3 == 0){
    $value1=$r;
  }
  if($q%5 ==0 && $q<25){
    $value1=$c;
  }
  if($q%9==0){
    $value1=$v;
  }
  if($q%20==0){
    $value1=$n;
  }
 ?>

      <td style="background:<?=$value1?>"><?=$numberRow * $numberCol?></td>
      
<?php endforeach; ?>
    </tr>
<?php endforeach; ?>
   </table>
</body>
</html>
 <!-- Finish -->
