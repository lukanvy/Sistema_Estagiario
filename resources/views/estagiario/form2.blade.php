<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estagiário</title>
    @vite(['resources/css/estagiario.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-gradient-blue font-sans min-h-screen flex">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo-container">
                <span class="logo-icon">🎓</span>
            </div>
            <h5 class="sidebar-title">Gestão de Estagiários</h5>
        </div>
        <nav class="sidebar-nav">
            <a href="{{ route('dashboard') }}" class="sidebar-link active">
                <i class="bi bi-house-door me-3"></i> Dashboard
            </a>
            <a href="{{ route('estagiario.create') }}" class="sidebar-link">
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
                <h1 class="page-title">Cadastro de Estagiário</h1>
                <p class="page-subtitle">Preencha os dados do novo estagiário</p>
            </div>
            
            <!-- Dropdown Admin -->
            <div class="dropdown-container">
                <button class="admin-dropdown-btn">
                    <i class="bi bi-person-circle"></i>
                    <span>Admin</span>
                    <i class="bi bi-caret-down-fill text-sm"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configurações</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item logout" href="#"><i class="bi bi-box-arrow-right me-2"></i>Sair</a></li>
                </ul>
            </div>
        </div>

        <!-- Logotipo e Título -->
        <div class="university-header">
            <div class="logo-wrapper">
                <img src="{{ asset('imagens/up.jfif.jpg') }}" alt="Logotipo da Universidade" class="university-logo">
            </div>
            <h4 class="university-title">Universidade Pedagógica</h4>
            <p class="university-subtitle">Sistema de Gestão de Estagiários</p>
        </div>

        <!-- Formulário -->
        <div class="form-container">
            <div class="form-header">
                <div class="form-icon">
                    <i class="bi bi-person-plus"></i>
                </div>
                <div>
                    <h3 class="form-title">Dados do Estagiário</h3>
                    <p class="form-subtitle">Informações pessoais e académicas</p>
                </div>
            </div>

            <form action="{{ route('estagiario.store') }}" method="POST" enctype="multipart/form-data" class="estagiario-form">
                @csrf

                <!-- Nome e Ano -->
                <div class="form-grid">
                    <div class="form-group large">
                        <label class="form-label">Nome Completo</label>
                        <div class="input-container">
                            <i class="bi bi-person input-icon"></i>
                            <input type="text" name="nome_completo" class="form-input with-icon" placeholder="Digite o nome completo" required>
                        </div>
                    </div>
                    <div class="form-group small">
                        <label class="form-label">Ano</label>
                        <input type="number" name="ano" class="form-input text-center" placeholder="2025" min="2020" max="2030" required>
                    </div>
                </div>

                
                <div class="form-grid">
                    <div class="form-group medium">
                        <label class="form-label">Curso</label>
                        <div class="input-container">
                            <i class="bi bi-book input-icon"></i>
                            <input type="text" name="curso" class="form-input with-icon" placeholder="Nome do curso" required>
                        </div>
                    </div>
                    <div class="form-group medium">
                        <label class="form-label">Email</label>
                        <div class="input-container">
                            <i class="bi bi-envelope input-icon"></i>
                            <input type="email" name="email" class="form-input with-icon" placeholder="email@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group medium">
                        <label class="form-label">Telefone</label>
                        <div class="input-container">
                            <i class="bi bi-phone input-icon"></i>
                            <input type="text" name="telefone" class="form-input with-icon" placeholder="+258 8X XXX XXX" required>
                        </div>
                    </div>
                    <div class="form-group small">
                        <label class="form-label">Supervisor</label>
                        <div class="input-container">
                            <i class="bi bi-person-badge input-icon"></i>
                            <input type="text" name="supervisor" class="form-input with-icon" placeholder="Nome" required>
                        </div>
                    </div>
                </div>

                <!-- Alocação, Datas, Arquivo -->
                <div class="form-grid">
                    <div class="form-group medium">
                        <label class="form-label">Alocação</label>
                        <div class="input-container">
                            <i class="bi bi-building input-icon"></i>
                            <input type="text" name="alocacao" class="form-input with-icon" placeholder="Departamento/Setor" required>
                        </div>
                    </div>
                    <div class="form-group small">
                        <label class="form-label">Data Início</label>
                        <div class="input-container">
                            <i class="bi bi-calendar3 input-icon"></i>
                            <input type="date" name="data_inicio" class="form-input with-icon" required>
                        </div>
                    </div>
                    <div class="form-group small">
                        <label class="form-label">Data Fim</label>
                        <div class="input-container">
                            <i class="bi bi-calendar3 input-icon"></i>
                            <input type="date" name="data_fim" class="form-input with-icon" required>
                        </div>
                    </div>
                    <div class="form-group medium">
                        <label class="form-label">Carta (PDF/DOC)</label>
                        <div class="input-container">
                            <i class="bi bi-file-earmark-arrow-up input-icon"></i>
                            <input type="file" name="carta" class="form-input with-icon file-input" accept=".pdf,.doc,.docx">
                        </div>
                    </div>
                </div>

                <!-- Observações -->
                <div class="form-group full">
                    <label class="form-label">Observações</label>
                    <div class="input-container">
                        <i class="bi bi-chat-text input-icon textarea-icon"></i>
                        <textarea name="observacoes" rows="4" class="form-input with-icon textarea" placeholder="Adicione observações relevantes..."></textarea>
                    </div>
                </div>

                <!-- Botões -->
                <div class="form-actions">
                    <a href="{{ route('estagiario.index') }}" class="btn-cancel">
                        <i class="bi bi-x-circle me-2"></i>
                        Cancelar
                    </a>
                    <button type="submit" class="btn-submit">
                        <i class="bi bi-check-circle me-2"></i>
                        Salvar Estagiário
                    </button>
                </div>
            </form>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.querySelector('.admin-dropdown-btn');
            const dropdownMenu = document.querySelector('.dropdown-menu');
            
            dropdownButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
            
            document.addEventListener('click', function(event) {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>

</body>
</html>