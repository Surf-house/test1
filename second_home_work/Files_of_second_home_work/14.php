<!-- exercise14 -->
<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>
<?php
$result=FALSE;
$array14=array(4, 2, 5, 19, 13, 0, 10);
foreach($array14 as $e){
  if($e==2 || $e==3 || $e==4){
    $result=TRUE;
  } 
  
}
 
if($result==TRUE){
  echo "There are numbers in array";
}
if($result==FALSE){
  echo "With out numbers in array";
}
?>
      <!-- Finish -->
