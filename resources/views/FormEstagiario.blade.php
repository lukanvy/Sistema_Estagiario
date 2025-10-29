<!-- resources/views/estagiario/create.blade.php -->
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Estagiário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
      <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
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
      transition: 0.3s;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #0b5ed7;
    }
    .main-content {
      margin-left: 240px;
      padding: 20px;
    }
    .logo-universidade {
      width: 65px;
      height: auto;
    }
    .card {
      border: none;
      border-radius: 10px;
      transition: transform 0.2s;
      cursor: pointer;
    }
    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .icon {
      font-size: 2.2rem;
      margin-bottom: 10px;
    }
  </style>
</head>
<body class="bg-light py-4">


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

    <div class="d-flex justify-content-end mb-3">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Admin
        </button>
       <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class
            ="dropdown-item text-danger" href="#">Sair</a></li>
          </ul>
      </div>
    </div>

  
        <div class="text-center mb-4">
      <img src="{{ asset('imagens/up.jfif.jpg') }}" alt="Logotipo da Universidade" class="logo-universidade mb-2">
      <h4 class="fw-bold text-primary">Universidade Pedagogica</h4>
    </div>
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">Cadastrar Estagiário</h3>
        </div>
        <div class="card-body">
            <!-- Rota que processa o formulário -->
            <form action="{{ route('estagiario.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" name="id" id="id" class="form-control" required>
                    </div>
                    <div class="col-md-10">
                        <label for="nome_completo" class="form-label">Nome Completo</label>
                        <input type="text" name="nome_completo" id="nome_completo" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="curso" class="form-label">Curso</label>
                        <input type="text" name="curso" id="curso" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <label for="ano" class="form-label">Ano</label>
                        <input type="number" name="ano" id="ano" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="supervisor" class="form-label">Supervisor</label>
                        <input type="text" name="supervisor" id="supervisor" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="alocacao" class="form-label">Alocação</label>
                        <input type="text" name="alocacao" id="alocacao" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <label for="data_inicio" class="form-label">Data Início</label>
                        <input type="date" name="data_inicio" id="data_inicio" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <label for="data_fim" class="form-label">Data Fim</label>
                        <input type="date" name="data_fim" id="data_fim" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="observacoes" class="form-label">Observações</label>
                    <textarea name="observacoes" id="observacoes" rows="3" class="form-control"></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('estagiario.index') }}" class="btn btn-secondary me-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
