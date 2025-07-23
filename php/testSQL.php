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

    <?php
    $textArea = $_POST["SQLQuery"];
    echo $textArea;
    
    ?>

</head>
<body>

    <div class="container">
        <form action="./testSQL.php" method="POST" class="d-flex flex-column gap-2">
            <label>SQL para executar</label>
            <textarea name="SQLQuery" id="SQLQuery"></textarea>
            <button type="submit">EXECUTAR</button>
            <div id="resposta">RESPOSTA</div>
        </form>

    </div>
    


    
</body>
</html>