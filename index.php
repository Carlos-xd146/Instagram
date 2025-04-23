<?php


$nome = "Carlos";
$sobrenome = "Eduardo";

echo $nome . ' ' . $sobrenome;

echo '<br>';


$nota = 11;
if($nota<6){
    echo "Nota: ". $nota . ' - ' . "REPROVADO!";
} else {
    echo "Nota: ". $nota . ' - ' . "APROVADO!";
}




// --------------------------


$NomeServidor = "localhostt";
$NomeUsuario = "root";
$Senha = "";

$conexao = new mysqli($NomeServidor, $NomeUsuario, $Senha);

if($conexao->connect_error){
    die("Conexão falhou: " . $conexao->connect_error);
}

echo '<br><br>';
echo 'OK!';

?>