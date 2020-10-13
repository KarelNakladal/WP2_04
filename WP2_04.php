<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$pc = array(
    'MB'  => "Asus Z87M-PLUS"
    'CPU'  => "Intel Core i5-4590"
    'RAM'  => "8 GB @ 1.6 GHz"
    'GPU'  => "Nvidia GTX 970"
    'PS'  => "550W"
    'HDD'  => "none"
    'SSHD'  => "SSHD 1TB"
    'SSD'  => "none"
    'monitor'  => "Asus/Samsung/LG TV"
    'keyboard'  => "A4tech Bloody B110 Turbo"
    'mouse'  => "A4tech Bloody V9C"
)


?>   



<h1>Můj počítač</h1>
    <ul>
    <li>Mother board: <?= $pc['MB'] ?></li>
    <li>CPU: <?= $pc['CPU'] ?></li>
    <li>GPU: <?= $pc['GPU'] ?></li>
    <li>RAM: <?= $pc['RAM'] ?></li>
    <li>SSD: <?= $pc['SSD'] ?></li>
    <li>SSD: <?= $pc['SShD'] ?></li>
    <li>HDD: <?= $pc['HDD'] ?></li>
    <li>Monitor: <?= $pc['monitor'] ?></li>
    <li>Power source: <?= $pc['PS'] ?></li>
    <li>Keyboard: <?= $pc['keyboard'] ?></li>
    <li>Mouse: <?= $pc['mouse'] ?></li>
    </ul>
</body>
</html>