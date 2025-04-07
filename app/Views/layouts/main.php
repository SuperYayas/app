<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Mi sitio web' ?></title>

  
    <!-- ✅ CSS global -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">

    <!-- ⏩ Estilos específicos de cada vista -->
    <?= $this->renderSection('styles') ?>
</head>
<body>

    <?= $this->include('includes/header') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('includes/footer') ?>

    <?= $this->renderSection('scripts') ?>
</body>
</html>
