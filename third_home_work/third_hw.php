<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>




<h1>Задачи по функциям и формам</h1>

<p><b>Все задания должны выполняться в папке functions_forms_tasks, в отдельных файлах, которые должны называться по номеру задания, например, "17.php".<br>
Если задание требует создания нескольких файлов - то такие файлы необходимо размещать в папке, название которой равно номеру задания.</b>
</p>

<p>
<b>Вопросы можно задавать на <a href="http://ask.php-academy.kiev.ua/" target="_blank">http://ask.php-academy.kiev.ua/</a>.</b>
</p>

<hr>

 <!-- Exercise 1 -->
<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>
<form action="third_hw.php" method="POST">
<textarea rows = "5" cols = "50" name = "des1"></textarea>
<hr>
<textarea rows = "5" cols = "50" name = "des2"></textarea>
<input type="submit" name="submit">
</form>

<?php
$a=false;
$b=false;

if(isset($_POST['des1']) && ($_POST['des2']) ){
    getCommonWords($a, $b);
}

function getCommonWords($a, $b){
          
    $array1=array();
    $array3=array();
    $array1=explode(" ", $_POST['des1']);
    echo "<pre>";
    var_dump($array1 );
    echo "<hr>";
    $array2=array();
    $array2=explode(" ", $_POST['des2']);
    var_dump($array2);
    foreach($array1 as $a){
        foreach($array2 as $b){
            if($a == $b){
                array_push($array3, $a);  
            }  
        }
    }
    echo "<hr>";
    echo "We have the same values: ";
    var_dump($array3);
}
?>
 <!-- Finish exercise1 -->


<!-- Exercise2 -->
<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>
<form action="third_hw.php" method="POST">
<textarea name="text" type="textarea" rows="5" cols="60"></textarea>
<input type="submit" name="submit">
<form>
<?php
  if(!isset($_POST['text'])){
    $_POST['text']="Enter words";
  }
  $words=array();
  $words=strtolower($_POST['text']);
  $words = explode(' ', $words);
  
function sorte($a,$b){
    return strlen($b)-strlen($a);
}
usort($words,'sorte');

  echo "<hr>";
 
  foreach($words as $key => $value){
  if($key>2){
      return false;
  }
   echo"  $value <br />";    
  }
?>
<!-- Finish exercise 2 -->


<!-- Exercise3 -->
<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. 
Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

<form action="third_hw.php" method="POST">
<input type="range" name="long" min="0" max="10">
<input type="submit" name="Run">
</form>
<?php
echo "<hr>";
  echo $_POST['long'];
  $long = $_POST['long'];

  $text = file_get_contents('text.txt');
  var_dump($text);
  if(!isset($text)){
      echo"Invalid file";
  }

  $words = explode(' ', $text);
  echo "<pre>";
  var_dump($words);


//   unset($words['1']);

  foreach($words  as  $key=>$value ){
    if(iconv_strlen($value) >= $long){
        echo "We found the some strings longer than we need";
        unset($words[$key]);       
    }
}
$string = implode(" ", $words);
var_dump($string);
file_put_contents('text.txt', $string);
?>
<!-- Finish exercise3-->


<!-- Exercise 4 -->
<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>
<?php
$dir = "/opt/lampp/htdocs/test/git/test1/third_home_work/uploadfiles/";
function file_info_fgr($dir){
    $array_file = scandir($dir);
  
    var_dump($array_file);
}

file_info_fgr($dir);
?>
<!-- Finish exercise 4 -->



<!-- Exercise 5 -->
<p>5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  
Директория и искомое слово задаются как параметры функции.</p>
<?php
$dir = "/opt/lampp/htdocs/test/git/test1/third_home_work/uploadfiles/";
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



<!-- Exercise6 -->
<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. 
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>
<html>
<head>
  <title>Загрузка файлов на сервер</title>
</head>
<body>
      <h2><p><b> Форма для загрузки файлов </b></p></h2>
      <form action="6.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="file" name="filename1"><br>
      <input type="file" name="filename2"><br>
      <input type="file" name="filename3"><br>
      <input type="file" name="filename4"><br>
      <input type="submit" value="Загрузить"><br>
      </form>
</body>
</html>

<?php
echo "<pre>";

foreach ($_FILES as $array){
var_dump ($array);
}

foreach($_FILES as $array)   
{
       if($array["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($array["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($array["tmp_name"], "/opt/lampp/htdocs/test/git/test1/third_home_work/finished_variants/6/image/".$array["name"]);
   } else {
      echo("Ошибка загрузки файла");
   }
}
 
$path = 'image/';
if (@$open = scandir($path)) {
    foreach ($open as $k => $v) {
        if ($v != "." && $v != "..") {
            echo '<img src="'.$path.$v.'" width="250px">';
        }
    }
}
?>
<!-- Finish -->


<!-- Exercise 7 -->
<p>7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. 
Все добавленные комментарии выводятся над текстовым полем.</p>
<hr>
<div> <?php
$text7 = file_get_contents('text7.txt');
$filename = "text7.txt";
var_dump($text7); 
?>  </div>

<?php
$somecontent = $_POST['des5'];
// Вначале давайте убедимся, что файл существует и доступен для записи.
if (is_writable($filename)) {

    // В нашем примере мы открываем $filename в режиме "записи в конец".
    // Таким образом, смещение установлено в конец файла и
    // наш $somecontent допишется в конец при использовании fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }

    // Записываем $somecontent в наш открытый файл.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Не могу произвести запись в файл ($filename)";
        exit;
    }
}
?>

<form action="third_hw.php" method="POST">
<textarea rows = "5" cols = "50" name = "des5"></textarea>
<input type="submit" name="submit">
</form>

<!-- Finish exercise 7 -->



<!-- Exercise 8 -->
<p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. 
Все добавленные комментарии выводятся над текстовым полем. 
Реализовать проверку на наличие в тексте запрещенных слов, матов. 
При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>

<hr>
<div> <?php
$filename = "text8.txt";
$text8 = file_get_contents('text8.txt');
echo "$text8 <br />";
?> </div>

<?php
 $string=$_POST['des8'];
var_dump($string);
$somecontent=(strip_tags($string, '<br>'));
var_dump($somecontent);
$variant = (empty($somecontent));
if ($variant) {
    echo "Enter some text below";
    
}
// Вначале давайте убедимся, что файл существует и доступен для записи.
if (is_writable($filename)) {

    // В нашем примере мы открываем $filename в режиме "записи в конец".
    // Таким образом, смещение установлено в конец файла и
    // наш $somecontent допишется в конец при использовании fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }
}

$bad_words = array("fuck", "sheet", "niger");
$change_words   = array("....", "not good ", "black people");

$newsomecontent = str_replace($bad_words, $change_words, $somecontent, $count);
if($count <=0){
   fwrite($handle, $newsomecontent);      
}

if ($count >0){
    echo "Invalid coment, you should be more polite <br />";
    }
?>

<form action="third_hw.php" method="POST">
<textarea rows = "5" cols = "50" name = "des8"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finish exercise 8 -->


<!-- Exercise 9 -->
<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>

<?php
$string9 = $_POST['des9'];
$result9 = strrev("$string9"); // выводит "!dlrow olleH"
var_dump($result9);
?>

<form action="third_hw.php" method="POST">
<textarea rows = "5" cols = "50" name = "des9"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finish exercise 9 -->


<!-- Exercise 10 -->
<p>10. Написать функцию, которая считает количество уникальных слов в тексте. 
Слова разделяются пробелами. Текст должен вводиться с формы.</p>

<?php
if(empty($_POST['des10'])){
    $_POST['des10'] = "";
}
$words10 = $_POST['des10'];
$array10 = explode(' ', $words10);
$result10 = count(array_unique($array10));

var_dump($array10);
echo "<hr>";
echo "We have this quantity of unique words $result10";

?>

<form action="third_hw.php" method="POST">
<textarea rows = "5" cols = "50" name = "des10"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finish exercise 10 -->



<!-- Exercise 11 -->
<p>11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, 
что каждое новое предложение начиняется с большой буквы.<br>
Пример:<br><br>
Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';</p>

<?php
if(empty($_POST['des11'])){
    $_POST['des11'] = 0;
}
$words11 = $_POST['des11'];
var_dump($words11);

$mode =2;
$array11 = explode('.', $words11);

foreach($array11 as $key11 => $value11){
    $value11 = trim($value11);
    $array11_2 = explode(' ', $value11);
    // переводим первый символ в верхний регистр
    $res = mb_convert_case($array11_2['0'],  $mode, "UTF-8");
    $array11_2['0'] = $res;
        
     
     $string11 = implode(" ", $array11_2);
     var_dump("$string11 <br />");
       
}
?>

<form action="third_hw.php" method="POST">
<textarea rows = "5" cols = "50" name = "des11"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finished exercise 11 -->




 <!-- Exercise 12               -->
<p>12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
Пример:<br><br>
Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
</p>
<p>
<?php
if(empty($_POST['des12'])){
    $_POST['des12'] = "";
}
var_dump($_POST['des12']);
$array12 = explode(".", $_POST['des12']);
var_dump($array12);

$array12_2 = implode(".", array_reverse($array12));
var_dump($array12_2);
?>
<form action="third_hw.php" method="POST">
<textarea rows = "5" cols = "50" name = "des12"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finished exercise 12 -->

<!-- Exercise 13 -->
13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br>
<br>
Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения количества:<br><br>

Пример вывода:<br>
яблоко – 12<br>
черешня – 8<br>
груша – 5<br>
слива - 3<br>
</p>
<?php
echo "<hr>";
if(empty($_POST['des13'])){
    $_POST['des13'] = "";
}

$array13 = explode(" ", $_POST['des13']);
sort($array13, SORT_NUMERIC);
$array13_1=(array_count_values($array13));

asort($array13_1);
$array13_1 = array_reverse($array13_1);

foreach($array13_1 as $key13 => $value13){
    echo "$key13 - $value13 <br />";
}
?>

<form action="third_hw.php" method="POST">
<textarea rows = "5" cols = "50" name = "des13"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finish exercise 13 -->



<hr>

<p>
<b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>



