<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tintas | Login </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="menu-icon" id="menu-icon">
      &#9776;
    </div>
    <h1>Login</h1>
    <div class="header-content">
        <div class="profile">
            <a href="perfil.html">
            <i class="fas fa-user-circle profile-icon"></i> 
            </a>
        </div>
    </div>
  </header>

  <main>

  <nav class="menu" id="menu">
    <ul>
        <h1 style="font-size: 18px; opacity: 70%;">NAVEGAR</h1>
      <li><a href="index.html">Sobre</a></li>
      <li><a href="perfil.html">Perfil</a></li>
      <li><a href="login.php">Cadastro / Login</a></li>
      <li><a href="estoque.html">Estoque</a></li>
      <li><a href="contato.html">Contato</a></li>
    </ul>
  </nav>

    <div class="login">
        <h1>Login</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>Entrar</button>
        <br><br>
        <a href="cadastro.php">
        <button style="padding: 10px; font-size: 16px">Criar Conta</button>
        </a>
    </div>

  
    <p style="text-align: center;"> Pagina de login ou cadastro </p>
  </main>

  <script src="../script.js"></script>

    <footer>
        <p>&copy; 2024 Fatec Tintas </p>
    </footer>
</body>
</html>