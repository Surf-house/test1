<!-- exercise 4 -->
<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>
<!-- $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); -->

<?php
$arr2= array('green' =>'зеленый', 'red' =>'красный', 'blue' =>'голубой');
foreach($arr2 as $key2 =>$value2){
  
  
  echo "$value2 <br />";
}
?>
<p></p>

<?php
$arr2= array('green' =>'зеленый', 'red' =>'красный', 'blue' =>'голубой');
foreach($arr2 as $key2 =>$value2){
echo "$key2 <br />";
}
?>
           <!-- Finish -->
