<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIDS – Guías</title>
    <link rel="stylesheet" href="css/styleSeguridad.css">
    <link rel="icon" href="img/logo.png">
</head>
<body>

    <!-- ===== HEADER IDENTICO AL INDEX ===== -->
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
                <a href="guias.php" class="active">Guías</a>
                <a href="contacto.php">Contacto</a>
            </nav>
            <button class="pids-a11y-btn" id="btnA11y">A+</button>
        </div>
    </header>

    <!-- ===== TÍTULO ===== -->
    <section class="titulo-guias">
        <h1>Guías De Seguridad</h1>
        <p>Aprende a tu ritmo con guías simples, claras y adaptadas para ti.</p>
    </section>

    <!-- ===== GRID DE GUÍAS ===== -->
    <main class="pids-wrap guias-grid">

        <article class="guias-card">
            <img src="img/ofimatica.png" class="guias-img" alt="Ofimática">
            <h3>Guías de Ofimática</h3>
            <p>Word, Excel, PowerPoint y herramientas esenciales.</p>
        </article>

        <article class="guias-card">
            <img src="img/seguridad.jpg" class="guias-img" alt="Seguridad digital">
            <h3>Guías de Seguridad</h3>
            <p>Aprende a proteger tu información y evitar estafas.</p>
        </article>

        <article class="guias-card">
            <img src="img/tramites2.jpg" class="guias-img" alt="Trámites">
            <h3>Guías de Trámites</h3>
            <p>Aprende a usar Clave Única, pedir horas médicas y más.</p>
        </article>

    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="pids-footer">
        <div class="pids-wrap pids-footer-copy">
            <p>&copy; <span id="copyYear"></span> PIDS — Inclusión digital para personas mayores.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/index.js"></script>

</body>
</html>
