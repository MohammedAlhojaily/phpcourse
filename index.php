<?php
// variables المتغيرات
$title = "Mohammed Alhojaily";
$num = 40;
$float = 3.14;
$bool = true;
$bool2 = false;
$nothing = NULL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " - Home Page" ?></title>
</head>
<body>
    <?php
     echo "<h1> Welcome to $title </h1>";
     echo $num;
     echo "<br>";
     echo $float;
     ?>
</body>
</html>