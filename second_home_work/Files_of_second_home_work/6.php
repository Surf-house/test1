<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
<!-- $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой'); -->
</p>
<?php


$en6=array();
$ru6=array();
$arr6 = array('green' =>'зеленый', 'red' =>'красный', 'blue' => 'голубой');
foreach($arr6 as $key6 =>$value6 ){

array_push($en6, $key6);

array_push($ru6, $value6);
}
 foreach($en6 as $value){
   echo " This is our result from EN array: $value <br />";
 } 
 foreach($ru6 as $value){
  echo " This is our result from RU array: $value <br />";
 }
 



                        // This is another method
// $en = array();
// $ru = array();
// $replacements = array('green' => "", 'red' => "", 'blue' => "");
// $replacements2 = array('1' => "зеленый", '2' => "красный", '3' => "голубой");


// $basket = array_replace($en, $replacements);
// print_r($basket);
// echo"Start from here <br />";
// var_dump($basket);

// $ru1 = array_replace($ru, $replacements2);
// print_r($ru1);
// echo"Start ru array <br />";
// var_dump($ru1);
                 
?>
      <!--  Finish -->
