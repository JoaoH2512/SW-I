<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
  <div class="title">Bem-vindo ao Mundo Gamer! Faça seu Login</div>
  <div class="container">
      <form action="processa.php" method="POST">
   <!-- Email  -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form1Example1" class="form-control" name="email" required />
            <label class="form-label" for="form1Example1">Email</label>
    </div>

  <!-- Senha  -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form1Example2" class="form-control" name="senha" required />
    <label class="form-label" for="form1Example2">Senha</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Caixa de Seleção -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
        <label class="form-label" for="form1Example3"> Lembrar de mim </label>
    </div>
  </div>

    <div class="col">
      <!-- Simples link -->
      <a href="esqueceu.php">Esqueceu a senha?</a>
    </div>
  </div>

  <!-- Submit  -->
  <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>