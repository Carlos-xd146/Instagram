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
                <img src="./img/perfil.jpg" 
                     alt="Avatar do usuario"
                     class="rounded-circle img-fluid"
                     width="48" height="48">
                <strong>slittleguys</strong>
                <small class="text-muted ms-auto">3 d</small>
              </div>
              
              <!-- Post image -->
              <img src="./img/montreal.webp" 
                   alt=""
                   class="card-img-top">
              
              <!-- Actions & Metrics -->
              <div class="card-footer d-flex align-items-center gap-2 bg-white border-0 py-3">
                <span class="fw-bold">1.200 curtidas</span>
                <button class="btn p-0 heart-btn" type="button" data-bs-toggle="button" aria-pressed="false" aria-label="Curtir este post">
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
                  <input type="text" class="form-control border-0" placeholder="Adicione um comentário..." aria-label="Adicionar comentário">
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



</body>

</html>