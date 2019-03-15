<!-- exercise 18 -->
<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p>
<?php
$array18 = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <?php foreach($array18 as $key18 => $value18){
      if($key18<=4){
       echo "$value18 <br />";
}
      if($key18>=5){
        echo" <b>$value18  </b><br />";
      }
}
 ?>
</body>
</html>

         <!-- Finish -->
