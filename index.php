<?php
require_once 'src/array.php';

function line() {
    echo "================================="."<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Array</title>
</head>
<body>
    <h3>Detail user</h3>
    <?php
    foreach($nama as $value => $key) {
        echo line();
        echo "Nama : ".$key['nama']."<br>";
        echo "Umur : ".$key['umur']."<br>";
        echo "Alamat : ".$key['alamat']."<br>";
        echo line();
    }
    ?>
</body>
</html>