

<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<section id="super-main" class="super-container">
   
<h2 style="text-align: center;">Lista de Usuarios</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['user_id']) ?></td>
                <td><?= esc($user['name']) ?></td>
                <td><?= esc($user['email']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>



</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('assets/js/home.js') ?>"></script>
<?= $this->endSection() ?>