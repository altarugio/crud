<?php
$filename = "cadastrado.txt";
if(!file_exists("cadastrado.txt")){
    $handle = fopen("cadastrado.txt", "w");
} else {
    $handle = fopen("cadastrado.txt", "a");
}

fwrite($handle, ($_POST['nome'])."\n");
fwrite($handle, ($_POST['cpf'])."\n");
fflush($handle);
fclose($handle);

$handle = fopen("cadastrado.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: cadastro.php")
?>