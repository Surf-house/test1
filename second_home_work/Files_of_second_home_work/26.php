<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</p>

<?php
$result26=0;
$array26 =array(rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100));
var_dump($array26);
echo" Our full array<hr>";

foreach($array26 as $key26=>$value26){
   
  if($value26>0 && $value26%2 ==0){
    $array[]=$value26;
    echo"$value26  <br />";
  }

  if($value26>0 && $value26%2 >=1){
    $array_azygous[]=$value26; 
  }  
}
foreach($array as $value){
  $result*=$value;
}  
echo "<hr>";
var_dump($array);
echo " There are  sum of numbers which we can divide on two :$result <br />";
echo "<hr>";
echo "There are azygous numbers: <br />";
var_dump($array_azygous);
?>

         <!-- Finish -->
