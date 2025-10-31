<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Lista de Estagiários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
  <div class="container">
    <h3 class="mb-4">Lista de Estagiários</h3>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Curso</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Supervisor</th>
          <th>Alocacao</th>
          <th>Data_Inicio</th>
          <th>Data_Fim</th>
          <th>Observações</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($estagiarios as $e)
<tr>
  <td>{{ $e->id }}</td>
  <td>{{ $e->nome }}</td>
  <td>{{ $e->curso }}</td>
  <td>{{ $e->email }}</td>
  <td>{{ $e->telefone }}</td>
  <td>{{ $e->alocacao }}</td>
  <td>{{ $e->data_inicio }}</td>
  <td>
    <a href="#" class="btn btn-sm btn-primary">Ver</a>
    <a href="#" class="btn btn-sm btn-warning">Editar</a>
    <a href="#" class="btn btn-sm btn-danger">Remover</a>
  </td>
</tr>
@endforeach

      </tbody>
    </table>
  </div>
</body>
</html>
