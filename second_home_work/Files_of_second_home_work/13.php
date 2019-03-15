<!-- exercise 13 -->
<p>13. Вывести таблицу умножения</p>
<?php
 $numbers = range(1,9);
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
  <?php foreach ($numbers as $numberRow): ?>
  
      <tr>
        <?php foreach($numbers as $numberCol): ?>
          <td><?=$numberRow * $numberCol ?></td>
        <?php endforeach; ?>
      </tr>

  <?php endforeach; ?>
  </table>

</body>
</html>


       <!-- Finish -->
