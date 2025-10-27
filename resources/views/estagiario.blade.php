<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Estagiário - Gestão de Estagiários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>


    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background-color: #0d6efd;
      color: white;
      position: fixed;
      width: 240px;
      padding-top: 1rem;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
      border-radius: 6px;
      margin: 5px 10px;
      font-size: 15px;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #0b5ed7;
    }
    .main-content {
      margin-left: 240px;
      padding: 20px;
    }
    .section-header {
      background-color: #e9f2ff;
      border-left: 5px solid #0d6efd;
      padding: 10px 15px;
      font-weight: 600;
      color: #0d6efd;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h5 class="text-center mb-4">🎓 Gestão de Estagiários</h5>
    <a href="dashboard.html" class="active"><i class="bi bi-house-door me-2"></i> Dashboard</a>
    <a href="estagiarios.html"><i class="bi bi-people-fill me-2"></i> Estagiários</a>
    <a href="departamentos.html"><i class="bi bi-building me-2"></i> Departamentos</a>
    <a href="supervisores.html"><i class="bi bi-person-workspace me-2"></i> Supervisores</a>
    <a href="horarios.html"><i class="bi bi-calendar-week me-2"></i> Horarios</a>
    <a href="relatorios.html"><i class="bi bi-bar-chart-line me-2"></i> Relatórios</a>
    <a href="configuracoes.html"><i class="bi bi-gear me-2"></i> Configurações</a>
  </div>


  <div class="main-content">
 
    <nav class="navbar navbar-light bg-white shadow-sm mb-4 rounded">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h5 text-primary fw-semibold">Adicionar Estagiário</span>
        <div class="dropdown">
          <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Admin
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="#">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="card shadow-sm">
      <div class="card-header bg-white">
        <h5 class="mb-0 text-primary"><strong>📋 Informações do Estagiário</strong></h5>
      </div>
      <div class="card-body">
        <form action="#" method="POST" enctype="multipart/form-data">
          
          <div class="section-header">Informações Pessoais</div>
          <div class="row mb-3">
            <div class="col-md-3 text-center">
              <label for="foto" class="form-label fw-semibold">Foto de Perfil</label>
              <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                </div>
                <div class="col-md-4 mb-3">
                  <label for="genero" class="form-label">Gênero</label>
                  <select id="genero" name="genero" class="form-select">
                    <option value="">Selecione</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                  </select>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="nascimento" class="form-label">Data de Nascimento</label>
                  <input type="date" class="form-control" id="nascimento" name="nascimento">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@email.com">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Número de contacto">
                </div>
              </div>
            </div>
          </div>

          <div class="section-header">Informações Acadêmicas</div>
          <div class="row mb-3">
            <div class="col-md-6 mb-3">
              <label for="curso" class="form-label">Curso</label>
              <input type="text" class="form-control" id="curso" name="curso" placeholder="Nome do curso">
            </div>
            <div class="col-md-6 mb-3">
              <label for="departamento" class="form-label">Departamento</label>
              <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento">
            </div>
          </div>

      
          <div class="section-header">Conta de Acesso</div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="usuario" class="form-label">Nome de Usuário</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="username">
            </div>
            <div class="col-md-6 mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="********">
            </div>
          </div>

          <div class="text-end mt-4">
            <a href="dashboard.html" class="btn btn-outline-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
