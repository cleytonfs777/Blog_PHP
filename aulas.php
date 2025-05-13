<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Exemplos de Alertas com Bootstrap 5</title>
  <!-- CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Ícones do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <h1 class="mb-4">Exemplos de Alertas com Bootstrap 5</h1>

    <!-- Alertas Simples -->
    <div class="alert alert-primary" role="alert">
      Este é um alerta primário — confira!
    </div>
    <div class="alert alert-secondary" role="alert">
      Este é um alerta secundário — confira!
    </div>
    <div class="alert alert-success" role="alert">
      Este é um alerta de sucesso — confira!
    </div>
    <div class="alert alert-danger" role="alert">
      Este é um alerta de perigo — confira!
    </div>
    <div class="alert alert-warning" role="alert">
      Este é um alerta de aviso — confira!
    </div>
    <div class="alert alert-info" role="alert">
      Este é um alerta informativo — confira!
    </div>
    <div class="alert alert-light" role="alert">
      Este é um alerta claro — confira!
    </div>
    <div class="alert alert-dark" role="alert">
      Este é um alerta escuro — confira!
    </div>

    <!-- Alertas com Botão de Fechar -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Atenção!</strong> Verifique os campos obrigatórios.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>

    <!-- Alertas com Ícones -->
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <i class="bi bi-check-circle-fill me-2"></i>
      <div>
        Operação realizada com sucesso!
      </div>
    </div>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <i class="bi bi-exclamation-triangle-fill me-2"></i>
      <div>
        Ocorreu um erro ao processar sua solicitação.
      </div>
    </div>

    <!-- Alertas com Conteúdo Adicional -->
    <div class="alert alert-info" role="alert">
      <h4 class="alert-heading">Informação Importante</h4>
      <p>Este é um exemplo de alerta com conteúdo adicional. Você pode incluir mais detalhes aqui.</p>
      <hr>
      <p class="mb-0">Utilize utilitários de margem para manter o espaçamento adequado.</p>
    </div>
  </div>

  <!-- JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
