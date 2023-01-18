
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST['nome'];
    $pass = $_POST['senha'];
    if(empty($nome)){
        echo "vazio";
    }else{
        echo $nome . $pass; 
    }
}
?>
