<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="./css/estilos.css">
  <title>Instagram</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
  
  
  
</head>

<body class="bg-light">
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar (Menu) -->
      <nav class="col-2 bg-white border-end p-3 position-fixed h-100 sidebar">
        <div class="d-flex flex-column h-100">
          <!-- logo -->
          <img src="" alt="">
          <!-- Menu Navegação -->
          <ul class="nav flex-column gap-2">
            <li class="nav-item">
              <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" href="./home.php">
                <i class="bi bi-house fs-5"></i>
                <span class="">Página Inicial</span>
              </a>
              <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" href="./home.php">
                <i class="bi bi-search fs-5"></i>
                <span class="">Pesquisa</span>
              </a>
              <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" href="./home.php">
                <i class="bi bi-send fs-5"></i>
                <span class="">Mensagens</span>
              </a>
              <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" href="./home.php">
                <i class="bi bi-person-circle fs-5"></i>
                <span class="">Perfil</span>
              </a>
              <!-- Botao de criar post (modal) -->
              <!-- data-bs-toggle e data-bs-target sao atributos do bootstrap para abrir modals-->
              <button class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded"
                data-bs-toggle="modal" data-bs-target="#criarPostModal">
                <!-- Icone de mais -->
                <i class="bi bi-plus-circle fs-5"></i>
                Criar Post
              </button>
            </li>
          </ul>
        </div>
      </nav>
      <main class="col p-0 offset-md-3 offset-lg-2">
        <div class="container main-content">
          <div class="py-4">
            <!-- Post Card 1 -->
            <div class="card mb-4 border-0 shadow-sm">
              <!-- Header -->
              <div class="card-header d-flex align-items-center gap-2 bg-white border-0 py-3">
                <img src="./img/perfil.jpg" alt="Avatar do usuario" class="rounded-circle img-fluid" width="48"
                  height="48">
                <strong>slittleguys</strong>
                <small class="text-muted ms-auto">3 d</small>
              </div>

              <!-- Post image -->
              <img src="./img/montreal.webp" alt="" class="card-img-top">

              <!-- Actions & Metrics -->
              <div class="card-footer d-flex align-items-center gap-2 bg-white border-0 py-3">
                <span class="fw-bold">1.200 curtidas</span>
                <button class="btn p-0 heart-btn" type="button" data-bs-toggle="button" aria-pressed="false"
                  aria-label="Curtir este post">
                  <i class="bi bi-heart fs-5"></i>
                  <i class="bi bi-heart-fill fs-5 text-danger d-none"></i>
                </button>
              </div>

              <!-- Descrição -->
              <div class="card-body p-3 pt-0">
                <p class="card-text mb-2">
                  <strong>slittleguys</strong> Montreal, Canada
                </p>
              </div>

              <!-- Comentarios -->
              <div class="px-3 pb-3">
                <div class="input-group">
                  <input type="text" class="form-control border-0" placeholder="Adicione um comentário..."
                    aria-label="Adicionar comentário">
                  <button class="btn btn-outline-secondary border-0" type="button">
                    Publicar
                  </button>
                </div>

              </div>
            </div>


          </div>

        </div>
        <div>

        </div>

      </main>
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
              <input id="urlImagem" type="file" class="form-control" id="imagempost" accept="image/*">

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
              <textarea id="descricao" class="form-control" id="legendaPost" rows="4"
                placeholder="Escreva uma legenda para o seu post..."></textarea>

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
          <button type="button" id="btnPostSalvar" class="btn btn-primary">
            <!-- Icone de check -->
            <i class="bi bi-check-circle"></i>
            Publicar Post
          </button>
        </div>
      </div>
    </div>
  </div>

  <script src="./js/postSalvar.js"></script>


</body>

</html>