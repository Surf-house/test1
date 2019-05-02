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
if ($open = scandir($path)) {
    foreach ($open as $k => $v) {
        if ($v != "." && $v != "..") {
            echo '<img src="'.$path.$v.'" width="250px">';
        }
    }
}
?>
<!-- Finish -->
