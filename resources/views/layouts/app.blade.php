<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestão de Estagiários')</title>
    
    <!-- CSS do projeto -->
    @vite(['resources/css/estagiario.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-blue">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo-container">
                <span class="logo-icon">🎓</span>
            </div>
            <h5 class="sidebar-title">Gestão de Estagiários</h5>
        </div>
        <nav class="sidebar-nav">
            <a href="{{ route('dashboard') }}" class="sidebar-link">
                <i class="bi bi-house-door me-3"></i> Dashboard
            </a>
            <a href="{{ route('estagiario.create') }}" class="sidebar-link active">
                <i class="bi bi-people-fill me-3"></i> Estagiários
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-building me-3"></i> Departamentos
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-person-workspace me-3"></i> Supervisores
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-calendar-week me-3"></i> Horários
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-bar-chart-line me-3"></i> Relatórios
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-gear me-3"></i> Configurações
            </a>
        </nav>
    </aside>

    <!-- Conteúdo principal -->
    <main class="main-content">
        <!-- Header -->
        <div class="page-header">
            <div class="header-title">
                <h1 class="page-title">@yield('page-title', 'Gestão de Estagiários')</h1>
                <p class="page-subtitle">@yield('page-subtitle', 'Sistema de gestão académica')</p>
            </div>
            
            <!-- Dropdown Admin -->
            <div class="dropdown-container">
                <button class="admin-dropdown-btn">
                    <i class="bi bi-person-circle"></i>
                    <span>Admin</span>
                    <i class="bi bi-caret-down-fill text-sm"></i>
                </button>
                <ul class="dropdown-menu hidden">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configurações</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item logout" href="#"><i class="bi bi-box-arrow-right me-2"></i>Sair</a></li>
                </ul>
            </div>
        </div>

        <!-- Conteúdo da página -->
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script do dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.querySelector('.admin-dropdown-btn');
            const dropdownMenu = document.querySelector('.dropdown-menu');
            
            if (dropdownButton && dropdownMenu) {
                dropdownButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    dropdownMenu.classList.toggle('hidden');
                });
                
                // Fechar dropdown ao clicar fora
                document.addEventListener('click', function() {
                    dropdownMenu.classList.add('hidden');
                });
                
                // Prevenir fechar ao clicar dentro do dropdown
                dropdownMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        });
    </script>
</body>
</html>