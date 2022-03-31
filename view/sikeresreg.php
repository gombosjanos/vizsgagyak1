<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/siker.css">
    <title>Document</title>
</head>
<body>
<?php



if(isset($_GET['uzenet'])){
    $uzenet=$_GET['uzenet'];
}







?>
<div class="text-center pt-5" style="background-color:grey;">
<form action="index.php?index=true" method="POST">
<p><?php echo $uzenet ?></p>
<input type="submit" class="btn btn-success" value="Vissza" name="back">
</form>
</div>
    
</body>
</html>


