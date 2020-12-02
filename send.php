<?php

print_r($_FILES['file']);

$fileName = $_FILES['file']['name'];
$fileCurrentPath = $_FILES['file']['tmp_name'];
$savePath = 'files/'.$fileName;

if(move_uploaded_file($fileCurrentPath, $savePath)){
    header("Location: index.php");
}
else{
    echo "error loading file";
}

?>