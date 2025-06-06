<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Instagram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <?php
    // echo var_dump($_POST);
    $email_post = $_POST["email"];
    $senha_post = $_POST["senha"];

    $nomeservidor = "localhost";
    $nomeusuario = "root";
    $senha = "";
    $bancodados = "carlos_instagram";

    $conexao = new mysqli($nomeservidor, $nomeusuario, $senha, $bancodados);
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }
    
    $sql = "
        select * from usuario where email='$email_post' AND senha='$senha_post'
            ";
    $resposta = $conexao->query($sql);
    if($resposta){
        while($linha = $resposta->fetch_assoc()){
            // echo var_dump(value: $linha);
            $nome = $linha["nome"];
            $ID = $linha["ID"];
            echo "<script>localStorage.setItem('UsuarioLogadoNome','$nome'</script>";
            echo "<script>localStorage.setItem('UsuarioLogadoID','$id'</script>";
            header('Location: ./home.php');
        }
    }
    echo "<script>console.log('Conexão estabelecida')</script>";
    $conexao->close();

    ?>
    
</head>

<body>

    <div class="container-fluid login justify-content-center d-flex align-items-center vh-100 flex-column">
        <figure class="figure">
            <img src="img/instagram.png" class="figure-img img-fluid">
        </figure>
        <form action="./index.php" method="POST">
            <input type="email" placeholder="email" class="mb-2 form-control" name="email">
            <input type="password" placeholder="senha" class="mb-2 form-control" name="senha">
            <button type="submit" class="btn btn-primary container-fluid">Entrar</button>
        </form>
        <p>OU</p>

        <a href="">Esqueceu a senha?</a>
        <a href="">Entrar com o Google</a>
        <p>Nao tem uma conta? <a href="">Cadastre-se</a></p>

    </div>
    <div>
        <footer class="container-fluid text-cinza">
            <div class="container-fluid d-flex justify-content-around flex-wrap gap-1">
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Meta</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Sobre</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Blog</a>
                <a href=""
                    class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Carreiras</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Ajuda</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">API</a>
                <a href=""
                    class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Privacidade</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Termos</a>
                <a href=""
                    class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Localizações</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Instagram
                    Lite</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Threads</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Upload de
                    contatos e não usuários</a>
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Meta
                    Verified</a>
            </div>

            <h6>2025 HeroGeek Carlos Eduardo</h6>
        </footer>

    </div>

</body>

</html>