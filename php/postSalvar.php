<?php
try {
    $validacao=true;
    if (isset($_POST["Usuario"]) && $_POST["Usuario"] != "") {
        $usuarioID = $_POST["Usuario"];
    } else {
        echo "<script>console.log('Usuário não encontrado');</script>";
        $validacao=false;
    }
    if (isset($_POST["LinkImagem"]) && $_POST["LinkImagem"] != "") {
        $LinkImagem = $_POST["LinkImagem"];
    } else {
        echo "<script>console.log('Imagem não encontrada');</script>";
        $validacao=false;
    }

    if (isset($_POST["Descricao"]) && $_POST["Descricao"] != "") {
        $Descricao = $_POST["Descricao"];
    } else {
        echo "<script>console.log('Descrição não encontrado');</script>";
        $validacao=false;
    }
    if($validacao){
        // Salvar o post
    }


} catch (Exception $erro) {
    echo "<script>console.log($erro);</script>";
}

?>