<!-- exercise 5 -->
<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'.</p>
<?php
$arr3= array('200' => 'Коля', '300' => 'Вася', '400' => 'Петя');
foreach($arr3 as $key3 =>$value3){
  echo "$value3 salary - $key3 <br />";
}
?>
<!-- Finish -->
