<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
    <!-- Estilos do bootstrap geral -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Icones do bootstrap, como lupa etc -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/mensagem.css">
</head>

<body>
    <!-- Container principal que ocupa toda a altura da tela -->
    <div class="container-fluid vh-100">
        <!-- Row (linha) principal que divide a tela em colunas -->
        <div class="row h-100">

            <!-- COLUNA 1: BARRA DE NAVEGAÇAO LATERAL ESQUERDA -->
            <div class="col-1 sidebar-nav">
                <div class="d-flex flex-column align-items-center py-4">
                    <!-- Logo do Instagram -->
                    <i class="bi bi-instagram fs-2 instagram-text mb-4"></i>
                    <!-- Icone de casa (home/inicio) -->
                    <i class="bi bi-house fs-4 instagram-text mb-4"></i>
                    <!-- Icone de mensagem (aviao de papel) -->
                    <i class="bi bi-send fs-4 instagram-blue"></i>
                </div>
            </div>

            <!-- COLUNA 2: LISTA DE CONVERSAS -->
            <div class="col-4 sidebar-nav">
                <!-- Cabeçalho da seçao de mensagens -->
                <div class="p-3" style="border-bottom: 1px solid var(--instagram-border);">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 instagram-text fw-bold">mariana.santos92</h5>
                        <i class="bi bi-chevron-down instagram-text"></i>
                    </div>
                    <!-- Campo de pesquisa -->
                    <input type="text" class="form-control chat-input rounded-pill py-2" placeholder="Pesquisar"
                        style="background-color: #f5f5f5">
                </div>


                <!-- Lista de conversas -->
                <div class="overflow-auto" style="height: calc(100vh - 280px);">

                    <!-- Conversa 1: Ana Clara -->
                    <div class="p-3 convesation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center"
                                style="width: 50px; heigth: 50px">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Ana Clara</div>
                                <small class="instgaram-text-light">Online ha 2 min</small>
                            </div>
                        </div>
                    </div>
                    <!-- Conversa 2: Gabriela lima -->
                    <div class="p-3 convesation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center"
                                style="width: 50px; heigth: 50px">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Gabriela lima</div>
                                <small class="instgaram-text-light">Online ha 2 h</small>
                            </div>
                        </div>
                    </div>
                    <!-- Conversa 3: Pedro Henrique -->
                    <div class="p-3 convesation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center"
                                style="width: 50px; heigth: 50px">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Pedro Henrique</div>
                                <small class="instgaram-text-light">Online ha 15 min</small>
                            </div>
                        </div>
                    </div>
                    <!-- Conversa 4: João Victor -->
                    <div class="p-3 convesation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center"
                                style="width: 50px; heigth: 50px">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">João Victor</div>
                                <small class="instgaram-text-light">Online ha 1 h</small>
                            </div>
                        </div>
                    </div>
                    <!-- Conversa 5: Larissa Oliveira (SELECIONADA) -->
                    <div class="p-3 convesation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center"
                                style="width: 50px; heigth: 50px">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Larissa Oliveira</div>
                                <small class="instgaram-text-light">Online agora</small>
                            </div>
                        </div>
                    </div>
                    <!-- Conversa 6: Rafael Costa -->
                    <div class="p-3 convesation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center"
                                style="width: 50px; heigth: 50px">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Rafael Costa</div>
                                <small class="instgaram-text-light">Online ha 1 dia</small>
                            </div>
                        </div>
                    </div>
                    <!-- Conversa 7: Camila Ferreira -->
                    <div class="p-3 convesation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center"
                                style="width: 50px; heigth: 50px">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Camila Ferreira</div>
                                <small class="instgaram-text-light">Online ha 3 dias</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLUNA 3: AREA DE CHAT PRINCIPAL -->
            <div class="col-7" style="background-color: var(--instagram-white);">

                <!-- Cabeçalho do chat -->
                <div class="p-3" style="border-bottom: 1px solid var(--instagram-border);">
                    <div class="d-flex align-items-center">
                        <!-- Avatar do contato ativo -->
                        <div class="bg-danger rounded-circle me-3 d-flex align-items-center justify-content-center"
                            style="width: 40px; height 40px;">
                            <i class="bi bi-person-fill text-white"></i>
                        </div>
                        <div>
                            <div class="fw-bold instagram-text">Larissa Oliveira</div>
                            <small class="instagram-text-light">Online agora</small>
                        </div>
                    </div>
                </div>

                <!-- Area das mensagens -->
                <div class="flex-grow-1 overflow-auto p-3" style="height: calc(100vh - 160px);">

                    <!-- Data da conversa -->
                    <div class="text-center mb-4">
                        <small class="instagram-text-light">Hoje 14:30</small>
                    </div>

                    <!-- Mensagem recebida -->
                    <div class="d-flex mb-3">
                        <div class="me-2">
                            <div class="bg-danger rounded-circle d-flex align-itens-center justify-content-center"
                                style="width: 30px; height: 30px">
                                <i class="bi bi-person-fill text-white fs-6"></i>
                            </div>
                        </div>
                        <div>
                            <div class="message-received rounded p-2" style="max-width: 300px;">
                                <span class="instagram-text">Oi! Tudo bem? Conseguiu fazer aquele trabalho de
                                    historia?</span>
                            </div>
                        </div>
                    </div>

                    <!-- MENSAGEM ENVIADA (pelo usuario) - A DIREITA -->
                    <div class="d-flex justify-content-end mb-3">
                        <div>
                            <div class="message-sent rounded p-2" style="max-width: 300px">
                                <span>Quer ajuda? Posso mandar minhas anotações!</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mensagem recebida com emojis -->
                    <div class="d-flex mb-3">
                        <div class="me-2">
                            <div class="bg-danger rounded-circle d-flex align-itens-center justify-content-center"
                                style="width: 30px; height: 30px">
                                <i class="bi bi-person-fill text-white fs-6"></i>
                            </div>
                        </div>
                        <div>
                            <div class="message-received rounded p-2 mb-2" style="max-width: 300px;">
                                <span class="instagram-text">Sério?! Voce é um anjo!❤️😍</span>
                            </div>
                            <!-- Reaçoes de emoji -->
                            <div class="d-flex">
                                <div class="bg-warning rounded-circle text-center me-1" style="width: 20px; height: 20px; line-height: 20px; font-size: 12px">❤️</div>
                                <div class="bg-warning rounded-circle text-center me-1" style="width: 20px; height: 20px; line-height: 20px; font-size: 12px">❤️</div>
                                <div class="bg-warning rounded-circle text-center me-1" style="width: 20px; height: 20px; line-height: 20px; font-size: 12px">❤️</div>
                            </div>
                        </div>
                    </div>

                    <!-- MENSAGEM ENVIADA -->

                </div>
            </div>
        </div>
    </div>
</body>

</html>