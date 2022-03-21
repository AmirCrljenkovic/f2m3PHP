<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$image = "https://www.amsterdamsdagblad.nl/image/1659_1747_1200_1200.jpg";
$titel = "Mediacollege Amsterdam";
?>
<h1><?php echo $titel; ?></h1>
<img src="<?php echo $image?>" alt="<?php echo $titel?>" />
</body>
</html>