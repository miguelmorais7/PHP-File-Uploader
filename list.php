<?php

$folder = "files/";
$dir = dir($folder);

while($file = $dir->read()){
    if($file != '.' && $file != '..'){
        echo "<a href='".$folder.$file."'><img src='".$folder.$file."' width='50'>".$file."</a><br><br>";
        //echo $folder.$file."<br><br>";
    }
}

?>