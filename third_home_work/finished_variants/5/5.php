<!-- Exercise 5 -->
<p>5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  
Директория и искомое слово задаются как параметры функции.</p>
<?php
$dir = "files/";
$some_words = "hello";
function file_info($dir, $some_words){
    $array_file = scandir($dir);
    foreach($array_file as $key => $value){
        if($a = stristr($value, $some_words))
         var_dump($a);
        }
    }
file_info($dir, $some_words);
?>
<!-- Finish exercise 5 -->