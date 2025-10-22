<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Gestão de Estagiários</title>
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

    <div class="d-flex justify-content-end mb-3">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Admin
        </button>
        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
          <li><a class="dropdown-item" href="usuarios.html">Usuários</a></li>
          <li><a class="dropdown-item" href="configuracoes.html">Configurações</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-danger" href="logout.html">Sair</a></li>
        </ul>
      </div>
    </div>

  
        <div class="text-center mb-4">
      <img src="{{ asset('imagens/up.jfif.jpg') }}" alt="Logotipo da Universidade" class="logo-universidade mb-2">
      <h4 class="fw-bold text-primary">Universidade Pedagogica</h4>
    </div>

    <div class="row g-4">

      <div class="col-md-3">
        <div class="card text-center shadow-sm p-3" onclick="window.location.href='estagiarios.html'">
          <div class="icon text-primary"><i class="bi bi-mortarboard-fill"></i></div>
          <h6 class="fw-semibold">Estagiários</h6>
        </div>
      </div>

    <div class="col-md-3">
        <div class="card text-center shadow-sm p-3" onclick="window.location.href='departamentos.html'">
          <div class="icon text-success"><i class="bi bi-building-check"></i></div>
          <h6 class="fw-semibold">Supervisor</h6>
        </div>
      </div>

     <div class="col-md-3">
  <div class="card text-center shadow-sm p-3" onclick="window.location.href='departamentos.html'">
    <div class="icon text-success"><i class="bi bi-building"></i></div>
    <h6 class="fw-semibold">Departamentos</h6>
  </div>
</div>

<div class="col-md-3">
  <div class="card text-center shadow-sm p-3" onclick="window.location.href='relatorios.html'">
    <div class="icon text-info"><i class="bi bi-file-bar-graph"></i></div>
    <h6 class="fw-semibold">Relatórios</h6>
  </div>
</div>
 

      <div class="col-md-3">
        <div class="card text-center shadow-sm p-3" onclick="window.loc
