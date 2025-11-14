<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PIDS – Panel de administración</title>
  <link rel="stylesheet" href="css/editar.css">
  <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>

  <!-- ===== HEADER ===== -->
  <header class="pids-header" role="banner" aria-label="Encabezado principal">
    <div class="pids-wrap">
      <a href="index.php" class="pids-brand" aria-label="Ir al inicio">
        <img src="img/logo2.png" alt="PIDS" class="pids-logo">
        <span class="pids-brand-text pids-brand-text-big">
          Plataforma de Inclusión Digital Senior
        </span>
      </a>
      <nav class="pids-nav" aria-label="Navegación principal">
        <a href="index.php">Inicio</a>
        <a href="guias.php">Guías</a>
        <a href="contacto.php">Contacto</a>
        <a href="editar.php" class="active">Admin</a>
        <a href="logout.php">Cerrar</a>
      </nav>
      <button class="pids-a11y-btn" id="btnA11y">A+</button>
    </div>
  </header>

  <!-- ===== CONTENIDO PRINCIPAL ===== -->
  <main class="panel-main">
    <div class="pids-wrap">

      <!-- Encabezado del panel -->
      <section class="panel-header">
        <h1>Panel de administración</h1>
        <p>Gestiona los cursos y tutoriales de la plataforma.</p>
        <button class="btn btn-primary btn-add-top">+ Agregar curso</button>
        <button class="btn btn-primary btn-add-top">^ Actualizar curso</button>
        <button class="btn btn-primary btn-add-top">- Eliminar curso</button>
      </section>

      <!-- Tarjeta CRUD -->
      <section class="panel-card" aria-label="Gestión de cursos">
        <h2>Cursos / Tutoriales</h2>

        <div class="crud-table-wrapper">
          <table class="crud-table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Información</th>
                <th>Actividades</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Mensaje placeholder (sin BD aún) -->
              <tr class="empty-row">
                <td colspan="5">
                  Aún no hay cursos cargados. Usa el botón <strong>“Agregar curso”</strong> para crear el primero.
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </main>

  <!-- ===== FOOTER ===== -->
  <footer class="pids-footer">
    <div class="pids-wrap pids-footer-copy">
      <p>&copy; <span id="copyYear"></span> PIDS — Inclusión digital para personas mayores.</p>
    </div>
  </footer>

  <!-- Script general -->
  <script src="js/index.js"></script>
</body>
</html>
