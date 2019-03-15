<!-- exercise19 -->
<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
<?php 
$array19 = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach($array19 as $value19){
  if($value19=='Friday'){
    $day='Friday';
    echo"<b>$value19</b><br /> ";
  }
  if($value19!='Friday'){
    echo"$value19 <br />";
  }
} 
?>
