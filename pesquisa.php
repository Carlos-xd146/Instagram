<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pesquisa</title>

    <!-- Estilos do bootstrap geral -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Icones do bootstrap, como lupa etc -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

</head>

<body>
    <div class="d-flex vh-100">
        <div class="bg-white border-end p-3 flex-shrink-0" style="width: 80px;">
            <div class="text-center mb-4">
                <i class="bi bi-instagram fs-2 text-dark"></i>
            </div>

            <nav class="nav flex-column">
                <!-- home -->
                <a href="#" class="nav-link text-dark p-2 mb-2 text-center">
                    <i class="bi bi-house fs-4"></i>
                </a>
                <!-- pesquisa -->
                <a href="#" class="nav-link text-dark p-2 mb-2 text-center bg-light rounded">
                    <i class="bi bi-search fs-4"></i>
                </a>
                <!-- coraçao -->
                <a href="#" class="nav-link text-dark p-2 mb-2 text-center">
                    <i class="bi bi-heart fs-4"></i>
                </a>

                <!-- icone de chat (mensagens) -->
                <a href="#" class="nav-link text-dark p-2 mb-2 text-center">
                    <i class="bi bi-chat fs-4"></i>
                </a>
            </nav>
        </div>
        <div class="bg-white border-end p-3 flex-shrink-0" style="width: 350px">
            <h4 class="fw-bold mb-3">Pesquisa</h4>

            <!-- Campo de entreda para digitar a pesquisa -->
            <div class="mb-3">
                <div class="input-group">
                    <input type="text" class="form-control bg-lght border-0" placeholder="Pesquisar" value="paula">
                </div>
            </div>

            <div>
                <div class="d-flex align-items-center p-2 mb-2 rounded" style="cursor: pointer">
                    <div class="me-3 flex-shrink-0">
                        <!-- Avatar -->
                        <img src="https://picsum.photos/seed/paula1/40/40" alt="Avatar de Paula.daniela1992"
                            class="rounded-circle" width="40" height="40">
                    </div>

                    <div>
                        <div class="fw-bold mb-0">paula.daniela1992</div>
                        <div class="text-muted small">Paula Daniela • Seguido(a) por jaopaulo1440...</div>
                    </div>
                </div>
                <div class="d-flex align-items-center p-2 mb-2 rounded" style="cursor: pointer">
                    <div class="me-3 flex-shrink-0">
                        <!-- Avatar -->
                        <img src="https://picsum.photos/seed/paula2/40/40" alt="Avatar de Paula.fernandes25"
                            class="rounded-circle" width="40" height="40">
                    </div>

                    <div>
                        <div class="fw-bold mb-0">paula.fernandes25</div>
                        <div class="text-muted small">Paula Fernandes • Seguido(a) por Daniel2002...</div>
                    </div>
                </div>
                <div class="d-flex align-items-center p-2 mb-2 rounded" style="cursor: pointer">
                    <div class="me-3 flex-shrink-0">
                        <!-- Avatar -->
                        <img src="https://picsum.photos/seed/paula3/40/40" alt="Avatar de Paula.gonçalves"
                            class="rounded-circle" width="40" height="40">
                    </div>

                    <div>
                        <div class="fw-bold mb-0">paula.gonçalves</div>
                        <div class="text-muted small">Paula Gonçalves • Seguido(a) por Daniel2002...</div>
                    </div>
                </div>
                <div class="d-flex align-items-center p-2 mb-2 rounded" style="cursor: pointer">
                    <div class="me-3 flex-shrink-0">
                        <!-- Avatar -->
                        <img src="https://picsum.photos/seed/paula4/40/40" alt="Avatar de Maria.paula"
                            class="rounded-circle" width="40" height="40">
                    </div>

                    <div>
                        <div class="fw-bold mb-0">Maria.paula</div>
                        <div class="text-muted small">Maria Paula • Seguido(a) por jaopaulo1440...</div>
                    </div>
                </div>
                <div class="d-flex align-items-center p-2 mb-2 rounded" style="cursor: pointer">
                    <div class="me-3 flex-shrink-0">
                        <!-- Avatar -->
                        <img src="https://picsum.photos/seed/paula5/40/40" alt="Avatar de Paula.Maria123"
                            class="rounded-circle" width="40" height="40">
                    </div>

                    <div>
                        <div class="fw-bold mb-0">Paula.Maria</div>
                        <div class="text-muted small">Paula Maria • Seguido(a) por Daniel2002...</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-grow-1 bg-white d-flex align-items-center justify-content-center">
            <div class="text-center text-muted">
                <i class="bi bi-search display-1 mb-3"></i>
                <h5>Selecione um resultado da pesquisa</h5>
                <p>Clique em um dos úsuarios encontrados para ver o perfil</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>