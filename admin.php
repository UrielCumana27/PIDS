<?php
session_start();
$error = isset($_GET['error']) ? $_GET['error'] : "";
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

      <nav class="pids-nav" aria-label="Navegación principal">
        <a href="index.php">Inicio</a>
        <a href="guias.php">Guías</a>
        <a href="contacto.php">Contacto</a>
      </nav>

      <nav class="pids-nav" aria-label="Navegación principal">
        <button class="pids-a11y-btn" type="button" id="toggleA11y" aria-pressed="false">A+</button>
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
                <button type="button" id="btnAdmin" class="pids-btn pids-btn-outline" onclick="window.location.href='index.php'">Volver</button>
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
        <p>Plataforma de capacitación digital para adultos mayores. Enfoque en habilidades básicas, autonomía y seguridad.</p>
      </div>
      <div>
        <h3>Enlaces</h3>
        <ul class="pids-list">
          <li><a href="guias.php">Guías</a></li>
          <li><a href="materiales.php">Materiales imprimibles</a></li>
          <li><a href="accesibilidad.php">Accesibilidad</a></li>
          <li><a href="terminos.php">Términos y privacidad</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </div>
      <div>
        <h3>Contáctanos</h3>
        <ul class="pids-list">
          <li><a href="mailto:PIDS@gmail.com">PIDS@gmail.com</a></li>
          <li><a href="https://www.instagram.com/" target="_blank" rel="noopener">Instagram</a></li>
          <li><a href="https://www.facebook.com/" target="_blank" rel="noopener">Facebook</a></li>
        </ul>
      </div>
    </div>

    <div class="pids-wrap pids-footer-copy">
      <p>&copy; <span id="copyYear"></span> PIDS — Inclusión digital para personas mayores.</p>
    </div>
  </footer>

 <script src="js/admin.js"></script>
</body>
</html>