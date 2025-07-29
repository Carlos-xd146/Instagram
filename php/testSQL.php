<!-- 
SELECT * from usuario => Seleciona todo mundo da tabela
SELECT * from usuario WHERE nome="Carlos" => seleciona todo mundo da tabela onde o atributo é igual Carlos.  
INSERT INTO USUARIO ('Nome', 'Email', 'Senha', 'Tel', 'Foto', 'Arroba')
VALUES ('Ricardo', 'ricardo@gmail.com', '123', '(34) 91234-5678', 'ricardo.png', '@Ricardo')

-->




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE SQL</title>
    <!-- Estilos do bootstrap geral -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Icones do bootstrap, como lupa etc -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">


    <style>
        th, td {
            padding: 10px;
        }

        tr {
            border-bottom: 1px solid black;
        }


    </style>

</head>

<body>

    <div class="container">
        <?php
        try {

            if (isset($_POST["SQLQuery"]) && $_POST["SQLQuery"]!= ""){
                $textArea = $_POST["SQLQuery"];
             

                echo "<p style='color:red'>" . $textArea . "</p>";

                // Abrindo Conexão
                $nomeservidor = "localhost";
                $nomeusuario = "root";
                $senha = "";
                $bancodados = "carlos_instagram";


                $conexao = new mysqli($nomeservidor, $nomeusuario, $senha, $bancodados);
                if ($conexao->connect_error) {
                    die("Conexão falhou: " . $conexao->connect_error);
                }

                $resposta = $conexao->query($textArea);
                
                }
            }
        catch (Exception $erro) {
            echo $erro;
        }

        ?>
        <form action="./testSQL.php" method="POST" class="d-flex flex-column gap-2">
            <label>SQL para executar</label>
            <textarea name="SQLQuery" id="SQLQuery"></textarea>
            <button type="submit">EXECUTAR</button>
            <div id="resposta">RESPOSTA
                <br><br>

                <table>
                <?php

                $colocarCabecalho = true;
                if ($resposta) {
                    while ($linha = $resposta->fetch_assoc()) {
                        
                        if($colocarCabecalho){

                        // imprimir th
                        echo "<tr>";
                        foreach ($linha as $chave => $valor){
                            echo "<th>$chave</th>";
                        }
                        echo "</tr>";
                        $colocarCabecalho =  false;   
                        }

                        // imprimir td
                        echo "<tr>";
                        foreach ($linha as $chave => $valor){
                            echo "<td>$valor</td>";
                        }
                        echo "</tr>";
                        
                        // echo var_dump($linha);
                        
                    }
                }
                ?>    
                </table>
            </div>
        </form>

    </div>




</body>

</html>