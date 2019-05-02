<!-- Exercise2 -->
<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>
<form action="2.php" method="POST">
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
