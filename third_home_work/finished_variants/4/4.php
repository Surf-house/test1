<!-- Exercise 4 -->
<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>
<?php
$dir = "/opt/lampp/";
function file_info_fgr($dir){
    $array_file = scandir($dir);
  
    var_dump($array_file);
}

file_info_fgr($dir);
?>
<!-- Finish exercise 4 -->
