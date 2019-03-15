<!-- exercise 25 -->
<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>
<?php
$array25 = array('1'=> rand(1,100), '2'=>rand(1,100),'3'=> rand(1,100),'4'=> rand(1,100),'5'=> rand(1,100));
var_dump($array25);
echo "<br />";
foreach($array25 as $key25 => $value25){
$min = min($array25);
$max = max($array25);

}
echo "$min and $max <br />";

$max_val = max($array25);
$min_val = min($array25);
$max_key = array_search($max_val, $array25);
$min_key = array_search($min_val, $array25);
$array25[$min_key] = $max_val;
$array25[$max_key] = $min_val;
foreach($array25 as $value25){
  echo "$value25 <br />";
}
?>
   <!-- Finish -->
