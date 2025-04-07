<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<section id="super-main" class="super-container">


    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
       
        </tr>
        <?php foreach ($supermarkets as $supermarket): ?>
            <tr>
                <td><?= esc($supermarket['supermarket_id']) ?></td>
                <td><?= esc($supermarket['name']) ?></td>
   
            </tr>
        <?php endforeach; ?>
    </table>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('assets/js/home.js') ?>"></script>
<?= $this->endSection() ?>
