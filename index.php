<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fxy</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="page">

    <h1>fxy</h1>
    <p>files for dev</p>


<?php

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$types = scandir('./files');
$root = 'https://idd.cl/p/fxd/';
$count = 0;

foreach ($types as $type) {
    if ($type != '.' && $type != '..' && $type != '.DS_Store') {
        $count++;
        echo '<h2>' . $type . '</h2>';
        $files = scandir('./files/' . $type);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && $file != '.DS_Store') {
                $link = $root .'/files/'.$type.'/'. $file;
                $link_view = $root .'/files/'.$type.'/<span>'. $file.'</span>';
                echo '<a class="link c'.$count.'" href="'.$link.'" target="_blank">' . $link_view . '</a> <br>';
            }
        }
    }
}



// $ficheros1  = scandir($directorio);
// $ficheros2  = scandir($directorio, 1);
 
// echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// print_r($ficheros2);
?>

</div>


</body>
</html>