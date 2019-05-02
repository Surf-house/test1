<!-- Exercise3 -->
<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. 
Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

<form action="3.php" method="POST">
<input type="range" name="long" min="0" max="10">
<input type="submit" name="Run">
</form>
<?php
if(empty($_POST['long'])){
    $_POST['long'] = "chose how long will be your words";
}
echo "<hr>";
//   echo $_POST['long'];
  $long = $_POST['long'];

  $text = file_get_contents('text.txt');
  var_dump($text);
  if(!isset($text)){
      echo"Invalid file";
  }

  $words = explode(' ', $text);
  echo "<pre>";
  var_dump($words);

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
<!-- Finish -->