<?php
session_start();
$adminActivo = isset($_SESSION['admin_id']);

if ($adminActivo) {
    header("Location: editar.php");
    exit;
}
require_once "config.php"; // conexión a pids_db

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario  = trim($_POST['usuario'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($usuario === "" || $password === "") {
        $error = "Por favor, completa todos los campos.";
    } else {
        // Usamos la tabla correcta: admins
        $stmt = $conn->prepare("SELECT id, password FROM admins WHERE usuario = ?");
        if (!$stmt) {
            die("Error en la consulta: " . $conn->error);
        }

        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $db_password);
            $stmt->fetch();

            // SIN HASH: contraseña en texto plano
            if ($password === $db_password) {
                $_SESSION['admin_id']      = $id;
                $_SESSION['admin_usuario'] = $usuario;

                // 🔁 AQUÍ TE LLEVA A editar.php
                header("Location: editar.php");
                exit;
            } else {
                $error = "Usuario o contraseña incorrectos.";
            }
        } else {
            $error = "Usuario o contraseña incorrectos.";
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PIDS - Login</title>
  <link rel="stylesheet" href="css/admin.css">
  <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>
<body>

  <!-- HEADER -->
  <header class="pids-header">
    <div class="pids-wrap">
      <div class="pids-brand">
        <img src="img/logo2.png" alt="logo PIDS" class="pids-logo">
        <div class="pids-brand-text-big">Plataforma de Inclusión Digital Senior</div>
      </div>

      <nav class="pids-nav">
        <a href="index.php">Inicio</a>
        <a href="guias.php">Guías</a>
        <a href="contacto.php">Contacto</a>
      </nav>

      <nav class="pids-nav">
        <button class="pids-a11y-btn" type="button" id="toggleA11y">A+</button>
      </nav>
    </div>
  </header>

  <!-- MAIN -->
  <main>
    <section class="services-section">
      <div class="pids-wrap">
        <h2 class="section-title">Iniciar sesión</h2>

        <div class="pids-features" style="justify-items:center;">
          <div class="pids-card login-card">
            <h3>Acceso a la plataforma</h3>

            <?php if (!empty($error)): ?>
              <p class="error-msg"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <form action="login.php" method="POST" class="login-form" autocomplete="off" novalidate>
              <label for="usuario">Usuario</label>
              <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>

              <label for="password">Contraseña</label>
              <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

              <div class="buttons">
                <button type="submit" class="pids-btn">Ingresar</button>
                <button type="button" class="pids-btn pids-btn-outline" onclick="window.location.href='index.php'">Volver</button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="pids-footer">
    <div class="pids-wrap pids-footer-grid">

      <div>
        <h3>Sobre el proyecto</h3>
        <p>Plataforma de capacitación digital para adultos mayores.</p>
      </div>

      <div>
        <h3>Enlaces</h3>
        <ul class="pids-list">
          <li><a href="guias.php">Guías</a></li>
          <li><a href="materiales.php">Materiales</a></li>
          <li><a href="accesibilidad.php">Accesibilidad</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </div>

      <div>
        <h3>Contáctanos</h3>
        <ul class="pids-list">
          <li><a href="mailto:pids@gmail.com">pids@gmail.com</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>

    </div>
  </footer>

</body>
</html>

