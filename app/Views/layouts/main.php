<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta básico -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <meta name="description" content="Breve descripción de tu sitio web para SEO (entre 140 y 160 caracteres).">
    <meta name="author" content="Tu nombre o nombre de la empresa">
    <meta name="robots" content="index, follow">

    <!-- Open Graph para redes sociales -->
    <meta property="og:title" content="Título atractivo para redes sociales">
    <meta property="og:description" content="Descripción atractiva para compartir">
    <meta property="og:image" content="https://tusitio.com/imagen-og.jpg">
    <meta property="og:url" content="https://tusitio.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Título para Twitter">
    <meta name="twitter:description" content="Descripción para Twitter">
    <meta name="twitter:image" content="https://tusitio.com/imagen-twitter.jpg">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">


    <!-- ✅ CSS global -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">

    <!-- ⏩ Estilos específicos de cada vista -->
    <?= $this->renderSection('styles') ?>

    <!-- Fuentes y tipografía -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Scripts opcionales (defer para rendimiento) -->
    <script src="/js/app.js" defer></script>

    <!-- Otros: tema para navegadores móviles -->
    <meta name="theme-color" content="#ffffff">
</head>

<body>

    <?= $this->include('includes/header') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('includes/footer') ?>

    <?= $this->renderSection('scripts') ?>


    <script>
        function toggleTheme() {
            document.body.classList.toggle("dark-mode");
            localStorage.setItem("theme", document.body.classList.contains("dark-mode") ? "dark" : "light");
        }

        (function () {
            if (localStorage.getItem("theme") === "dark") {
                document.body.classList.add("dark-mode");
            }
        })();

        function filterItems() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let items = document.querySelectorAll(".box");

            items.forEach((item) => {
                let text = item.textContent.toLowerCase();
                item.style.display = text.includes(input) ? "block" : "none";
            });
        }

        function toggleMenu() {
            let menu = document.getElementById("mobileMenu");
            menu.style.display = menu.style.display === "flex" ? "none" : "flex";
        }
    </script>
</body>

</html>