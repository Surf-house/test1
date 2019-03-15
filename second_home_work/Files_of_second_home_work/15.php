<!-- exercise 15 -->
<p>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.</p>

<?php
$sum15=0;
$a15=0;
$array15 =array(4, 2, 5, 19, 13, 0, 10);

foreach($array15 as $key15 => $value15 ){
  $a15++;
  $sum15 +=$key15 - $a15;
  
}
echo "Amount of elements in array:";
echo  abs($sum15) ;

          //  simpler method 
//  $result15 = count($array15);
// echo " From count function: $result15 <br />";
?>
      <!-- Finish -->
