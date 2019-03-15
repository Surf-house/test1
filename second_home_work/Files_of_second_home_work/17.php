<!-- exercise17 -->
<p>17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
<?php
$array17s = array('January', 'February','March', 'April');
$array17 = array('January', 'February','March', 'April', 'May', 'June', 
'July', 'August', 'September', 'October', 'November', 'December');
foreach($array17 as $value17){
  if($value17 == 'March'){
    $month='March';
    echo"<b>$month </b><br />";
  }
  if($value17 !='March'){
  echo"$value17 <br />";
}
}
?>

       <!-- Finish -->




