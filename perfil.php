<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Perfil</title>
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

                <!-- Botao de criar post (modal) -->
                <!-- data-bs-toggle e data-bs-target sao atributos do bootstrap para abrir modals-->
                <button class="btn btn-primary p-2 mb-2" data-bs-toggle="modal" data-bs-target="#criarPostModal">
                    <!-- Icone de mais -->
                    <i class="bi bi-plus-circle"></i>
    
                </button>
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

        <!-- coluna principal - conteudo do perfil -->
        <!-- col-10 = ocupa 10 de 12 colunas (aproximandamente 84% da largura) -->
        <div class="col-8">

            <!-- container interno com padding -->
            <!-- p-4 = padding de tamanho 4 em todos os lados -->
            <div class="p-4">

                <!-- seçao do cabeçalho do perfil -->
                <!-- mb-4 = margem inferior de tamanho 4 -->
                <div class="m-4">

                    <!-- linha para organizar foto e informaçoes lado a lado -->
                    <div class="row align-items-center">

                        <!-- coluna da foto de perfil -->
                        <!-- col-auto = largura automatica baseada no conteudo -->
                        <div class="col-auto">

                            <!-- foto de perfil -->
                            <!-- rounded-circle = torna a imagem circular -->
                            <!-- border = adiciona borda, boder-3 = borda grossa -->
                            <!-- border-primary = cor da borda azul -->
                            <img src="https://picsum.photos/seed/paula2/40/40" alt="Foto de perfil"
                                class="rounded-circle border border-3"
                                style="width: 150px, height: 150px; object-fit: cover">

                        </div>

                        <!-- coluna das informaçoes do perfil -->
                        <div class="col">

                            <!-- linha com nome de usuario e botoes -->
                            <!-- mb-3 = margem inferior de tamanho 3 -->
                            <div class="row align-items-center mb-3">

                                <!-- nome de usuario -->
                                <!-- col-auto -->
                                <div class="col-auto">

                                    <!-- h3 = tamanho de cabeçalho 3, mb-0 = sem margem inferior -->
                                    <h3 class="mb-0">paula.fernandes25</h3>
                                </div>

                                <!-- botoes de açao -->
                                <div class="col-auto">

                                    <!-- botao editar perfil -->
                                    <!-- btn = classe base para botoes -->
                                    <!-- btn-outline-secondary = botao com borda cinza -->

                                    <!-- me-2 = margem a direita de tamanho 2 -->
                                    <button class="btn btn-outline-secondary me-2">
                                        Editar pefil
                                    </button>

                                    <!-- Botao itens arquivados -->
                                    <button class="btn btn-outline-secondary me-2">
                                        Itens Arquivados
                                    </button>


                                    <!-- Botao de configuraçoes (icone de engrenagem) -->

                                    <!-- btn-outline-secondary = botao com borda cinza -->

                                    <button class="btn btn-outline-secondary">
                                        <i class="bi bi-gear"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- contadores (publicaçoes, seguidores, seguindo) -->
                            <!-- mb-3 = margem inferior de tamanho 3 -->
                            <div class="mb-3">

                                <!-- linha para organizar contadores lado a lado -->
                                <div class="row">

                                    <!-- contador de publicaçoes -->
                                    <!-- col-auto = largura automatica, me-4 = margema direita -->
                                    <div class="col-auto me-4">
                                        <!-- fw-bold = texto em negrito -->
                                        <span class="fw-bold">7</span> publicações
                                    </div>

                                    <!-- contador de seguidores -->
                                    <div class="col-auto me-4">
                                        <span class="fw-bold">99</span> seguidores
                                    </div>

                                    <!-- contador de seguindo -->
                                    <div class="col-auto me-4">
                                        <span class="fw-bold">95</span> seguindo
                                    </div>
                                </div>
                            </div>

                            <!-- BIOGRAFIA DO USUARIO -->
                            <div>

                                <!-- Nome completo em negrito -->
                                <!-- fw-bold = texto em negrito, d-block = exibe como bloco -->

                                <span class="fw-bold d-block">Paula Fernandes</span>

                                <!-- Descriçao profisional -->
                                <!-- d-block = exibe como bloco (quebra linha) -->
                                <span class="d-block">Maquiadora profisional</span>

                                <!-- informaçao adicional -->
                                <span class="d-block">Pedicure e Manicure</span>

                                <!-- Link para mais informaçoes -->
                                <!-- text-primary = cor azul do Bootstrap -->
                                <a href="#" class="text-primary text decoration-none">... mais</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LINHA SEPARADA -->
                <!-- hr - linha horizontal, my-4 = margem vertical - (superior e inferior) -->

                <hr class="my-4">

                <!-- ABAS DE NAVEGAÇAO DO CONTEUDO -->
                <!-- mb-4 = margem inferior do tamanho 4 -->
                <div class="mb-4">

                    <!-- Lista de abas -->
                    <!-- nav = navegaçao, nav-tabs = estilo de abas -->
                    <ul class="nav nav-tabs">

                        <!-- Aba de publicaçoes (ativa) -->
                        <li class="nav-item">
                            <!-- nav-link = estilo de link de navegaçao -->
                            <!-- active = marca como aba ativa -->
                            <!-- text-dark = cod do texto escura -->
                            <a href="#" class="nav-link active text-dark">
                                <!-- icone de grade -->
                                <i class="bi bi-grid-3x3 me-1"></i>
                                PUBLICAÇOES
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- GRADE DE PUBLICAÇOES -->
                <div>

                    <!-- Container da grade -->
                    <!-- row = linha do sistema de grid -->
                    <!-- g-1 = espaçamento pequeno entre colunas -->
                    <div class="row g-1">

                        <!-- primeira publicaçao -->
                        <!-- col-4 - ocupa 4 de 12 colunas (33% da largura) -->
                        <div class="col-4">
                            <!-- Imagem da publiçao -->
                            <!-- w-100 = largura de 100% do container pai -->
                            <!-- ratio ratio-1x1 = mantem proporçao quadrada -->
                            <div class="ratio ratio-1x1">
                                <img src="https://santandernegocioseempresas.com.br/media/filer_public/83/71/83714e24-6e99-41a8-b259-3809337f690c/manicure-pedicure-tudo-sobre.jpg"
                                alt="publicaçao 1"
                                class="w-100 h-100"
                                style="object-fit: cover;">
                            </div>
                        </div>

                        <div class="col-4">
                            <!-- Imagem da publiçao -->
                            <!-- w-100 = largura de 100% do container pai -->
                            <!-- ratio ratio-1x1 = mantem proporçao quadrada -->
                            <div class="ratio ratio-1x1">
                                <img src="https://santandernegocioseempresas.com.br/media/filer_public/83/71/83714e24-6e99-41a8-b259-3809337f690c/manicure-pedicure-tudo-sobre.jpg"
                                alt="publicaçao 1"
                                class="w-100 h-100"
                                style="object-fit: cover;">
                            </div>
                        </div>

                        <div class="col-4">
                            <!-- Imagem da publiçao -->
                            <!-- w-100 = largura de 100% do container pai -->
                            <!-- ratio ratio-1x1 = mantem proporçao quadrada -->
                            <div class="ratio ratio-1x1">
                                <img src="https://santandernegocioseempresas.com.br/media/filer_public/83/71/83714e24-6e99-41a8-b259-3809337f690c/manicure-pedicure-tudo-sobre.jpg"
                                alt="publicaçao 1"
                                class="w-100 h-100"
                                style="object-fit: cover;">
                            </div>
                        </div>

                        <div class="col-4">
                            <!-- Imagem da publiçao -->
                            <!-- w-100 = largura de 100% do container pai -->
                            <!-- ratio ratio-1x1 = mantem proporçao quadrada -->
                            <div class="ratio ratio-1x1">
                                <img src="https://santandernegocioseempresas.com.br/media/filer_public/83/71/83714e24-6e99-41a8-b259-3809337f690c/manicure-pedicure-tudo-sobre.jpg"
                                alt="publicaçao 1"
                                class="w-100 h-100"
                                style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP/MODAL PARA CRIAR NOVO POST -->
    <!-- Modal é o componente do Bootstrap para criar popups -->
    <!-- fade adiciona animaçao de aparecer/desaparecer -->
    <div class="modal fade" id="criarPostModal" tabindex="-1" aria-labelledby="criarPostModalLabel" aria-hidden="true">
        
        <!-- Container do Modal -->
        <!-- modal-dialog-centered centraliza o modal na tela -->
        <div class="modal-dialog modal-dialog-centered">

            <!-- Conteudo do modal -->
            <div class="modal-content">

                <!-- Cabeçalho do modal -->
                <!-- modal-header é a classe para o topo do modal -->
                <div class="modal-header">

                    <!-- titulo do modal -->
                    <!-- modal-title é a classe para o titulo -->
                    <h5 class="modal-title" id="criarPostModalLabel">
                        <!-- icone de camera -->
                        <i class="bi bi-camera"></i>
                        Criar Novo Post
                    </h5>

                    <!-- Botao X para fechar o modal -->
                    <!-- btn-close é a classe do Bootstrap para o botao de fechar -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <!-- Corpo do modal -->
                <!-- modal-body é onde fica o conteudo principal -->
                <div class="modal-body">

                    <!-- formulario para criar o post -->
                    <form>

                        <!-- Campo para upload de imagem -->
                        <!-- mb-3 adiciona margem na parte inferior -->
                        <div class="mb-3">

                            <!-- Label (texto) para o campo -->
                            <!-- form-label é a classe do Bootstrap para labels -->
                            <label for="imagemPost" class="form-label">
                                <!-- icone de imagem -->
                                <i class="bi bi-image"></i>
                                Selecionar imagem
                            </label>

                            <!-- Campo de upload de arquivo -->
                            <!-- form-control é a classe padrao para inputs -->
                            <input type="file" class="form-control" id="imagempost" accept="image/*">

                            <!-- Texto de ajuda abaixo do campo -->
                            <!-- form-text text-muted sao classes para texto de ajuda -->
                            <div class="form-text text-muted">
                                Escolha uma imagem para o seu post (JPG, PNG, GIF)
                            </div>
                        </div>

                        <!-- Campo para legenda do post -->
                        <div class="mb-3">
                            <!-- Label para o campo de texto -->
                            <label for="legendaPost" class="form-label">
                                <!-- Icone de texto -->
                                <i class="bi bi-chat-left-text"></i>
                                Legenda do Post
                            </label>

                            <!-- Campo de texto grande (textarea) -->
                            <!-- form-control é a classe padrao -->
                            <textarea class="form-control" id="legendaPost" rows="4" placeholder="Escreva uma legenda para o seu post..."></textarea>

                            <!-- Texto de ajuda -->
                            <div class="form-text text-muted">
                                Conte a história da sua foto! Use hashtags (#) para alcançar mais pessoas.

                            </div>
                        </div>

                        <!-- Campo para localizaçao -->
                        <div class="mb-3">
                            <!-- Label para localizaçao -->
                            <label for="localizacaoPost" class="form-label">
                                <!-- Icone de localizaçao -->
                                <i class="bi bi-geo-alt"></i>
                                Localização (opcional)
                            </label>

                            <!-- Campo de texto simples -->
                            <input type="text" class="form-control" id="localizacaoPost" placeholder="Ex: São Paulo, Brasil">

                            <!-- Texto de ajuda -->
                            <div class="form-text text-muted">
                                Adicione onde a foto foi tirada
                            </div>
                        </div>

                        <!-- Prévia da imagem selecionada -->
                        <!-- d-none esconde o elemento inicialmente -->
                        <div class="mb-3 d-none" id="previaImagem">
                            <!-- Titulo da previa -->
                            <label class="form-label">
                                <!-- icone de olho -->
                                <i class="bi bi-eye"></i>
                                Prévia da Imagem
                            </label>

                            <!-- Container da previa -->
                            <!-- text-center centraliza o conteudo -->
                            <div class="text-center">
                                <!-- Imagem de previa -->
                                <!-- img-fluid torna responsiva, rounded adiciona bordas arredondadas -->
                                <img id="imagemPrevia" src="" alt="Prévia" class="img-fluid rounded" style="max-height: 300px;">
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Rodapé do modal -->
                <!-- modal-footer é a classe para parte inferior -->
                <div class="modal-footer">
                    
                    <!-- Botao para cancelar -->
                    <!-- btn-secondary é um botao cinza -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <!-- Icone de X -->
                        <i class="bi bi-x-circle"></i>
                        Cancelar
                    </button>

                    <!-- Botao para publicar o post -->
                    <!-- btn-primary é um botao azul -->
                    <button type="button" class="btn btn-primary">
                        <!-- Icone de check -->
                        <i class="bi bi-check-circle"></i>
                        Publicar Post
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- script do bootstrap (necessario para componentes interativos) -->
    <!-- Mesmo nao usando JavaScript, é boa pratica incluir para futura expansao -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>