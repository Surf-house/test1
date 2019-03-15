!-- exercise 16 -->
<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9</p>
<?php

$arrayq = array( "first" => array (1, 2, 3),
"second" => array(4, 5, 6),
"third" => array(7, 8, 9)
);
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
   <table border="1">
     <tr>
     <?php foreach($arrayq["first"] as $value16f):?>
     <td><?=$value16f?></td>
     <?php endforeach; ?>
      </tr>
      <tr>
      <?php foreach($arrayq["second"] as $value16s):?>
      <td><?=$value16s?></td>
    <?php endforeach; ?>
     </tr>
     <tr>
     <?php foreach($arrayq["third"] as $value16t):?>
     <td><?=$value16t?></td>
    <?php endforeach; ?>
      </tr>
   </table>
 </body>
 </html>


    <!-- Finish -->
