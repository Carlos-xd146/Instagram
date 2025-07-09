<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram - Cadastre-se</title>
    <!-- Estilos do bootstrap geral -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Icones do bootstrap, como lupa etc -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

</head>

<body>
    <!-- Container principal que centraliza todo o conteudo da pagina -->
    <div class="bg-light min-vh-100 d-flex align-items-center justify-content-center">
        <!-- Container que limita a largura da conteudo -->
        <div class="container">
            <!-- Row (linha) do bootstrap para organizar o layout em colunas -->
            <div class="row justify-content-center">
                <!-- Coluna que ocupa tamnhos diferentes dependendo do tamanho da tela -->
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Card principal que contem todo o formulario de cadastro -->
                    <div class="card shadow bg-white">
                        <!-- Corpo do card onde fica todo o conteudo -->
                        <div class="card-body p-4">
                            <!-- Titulo "Instagram" centralizado -->
                            <h1 class="text-center mb-3 fw-bold display-4" style="font-family: cursive;">Instagram</h1>

                            <!-- Subtitulo explicativo -->
                            <p class="text-muted text-center mb-4 fs-6">
                                Cadastre-se para ver fotos e videos dos seus amigos.
                            </p>

                            <!-- botao do facebook -->
                            <button class="btn btn-primary w-100 mb-3 d-flex align-items-center justify-content-center">
                                <!-- icone do facebook usando bootstrap icons -->
                                <!-- bi-facebook = icone especifico do Facebook -->
                                <!-- me-2 = margin-end (margem à direita) de tamanho 2 -->
                                <i class="bi bi-facebook me-2"></i>
                                Entrar com o Facebook
                            </button>

                            <!-- Divisor "OU" -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-grow-1 border-top"></div>

                                <span class="mx-3 text-muted fw-bold">OU</span>

                                <div class="flex-grow-1 border-top"></div>
                            </div>
                            <!-- Formulario da cadastro -->
                            <form>
                                <!-- Campo para numero de celular ou email -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Numero do celular ou email">
                                </div>

                                <!-- Campo para senha -->
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Senha">
                                </div>

                                <!-- Campo para nome completo -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nome completo">
                                </div>

                                <!-- Campo para nome de usuário -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nome de usuário">
                                </div>

                                <!-- Texto explicativo sobre informaçoes de contato -->
                                <small class="text-muted text-center d-block mb-3">
                                    As pessoas que usam nosso serviço poder ter carregado suas informaçoes de contato no Instagram.
                                    <a href="#" class="text-decoration-none">Saiba mais</a>
                                </small>

                                <!-- Texto sobre termos e politicas -->
                                <small class="text-muted text-center d-block mb-3">
                                    Ao se cadastrar, voce concorda com nossos
                                    <a href="#" class="text-decoration-none">Termos</a>,
                                    <a href="#" class="text-decoration-none">Politica de Privacidade</a> e 
                                    <a href="#" class="text-decoration-none">Politica de Cookies</a>
                                </small>

                                <!-- Botao de cadastro -->
                                <button type="submit" class="btn btn-info w-100 mb-3 text-white">
                                    Cadastro-se
                                </button>
                            </form>

                        </div>
                    </div>

                    <!-- Fim do card principal -->
                    
                    <!-- Card Secundario para login -->
                    <div class="card mt-3 bg-white">
                        <div class="card-body text-center py-3">
                            Tem uma conta?
                            <a href="#" class="text-decoration-none fw-bold">Conecte-se</a>
                        </div>
                    </div>

                    <!-- Seçao "Obtenha o aplicativo" -->
                    <div class="text-center mt-4 mb-3">
                        <p>Obtenha o aplicativo</p>

                        <div class="d-flex justify-content-center gap-2">
                            <!-- Bagde do google play -->
                            <a href="#" class="text-decoration-none">
                                <div class="badge bg-dark text-white px-3 py-2 rounded d-flex align-items-center">
                                    <i class="bi bi-google-play me-2 fs-5"></i>
                                    <div>
                                        <small class="d-block">DISPONIVEL NO</small>
                                        <span class="fw-bold">Google Play</span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-decoration-none">
                                <div class="badge bg-dark text-white px-3 py-2 rounded d-flex align-items-center">
                                    <i class="bi bi-microsoft me-2 fs-5"></i>
                                    <div>
                                        <small class="d-block">BAIXE DA</small>
                                        <span class="fw-bold">Microsoft</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Fim do container dos badges -->
                    </div>
                    <!-- Fim da seçao "Obtenha o aplicativo" -->
                </div>
                <!-- Fim da coluna principal -->
            </div>
            <!-- Fim da row -->
        </div>
        <!-- Fim do container -->
    </div>
    <!-- Fim do container principal -->

</body>

</html>