<!-- exercise 2 -->
<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. 
Запишите ее в переменную $result.</p>

<?php
$arr = array(1, 20, 15, 17, 24, 35);
$sum = 0;
foreach($arr as $key =>$value){
  $sum +=$value;
}
echo "$sum <br />";
?>
    <!-- Finish -->
