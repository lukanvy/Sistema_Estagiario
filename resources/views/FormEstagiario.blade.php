<!-- resources/views/estagiario/create.blade.php -->
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Estagiário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
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
