<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<section id="super-main" class="super-container">


    <table>
        <tr>
            <th>list_id</th>
            <th>user_id</th>
            <th>created_at</th>
       
        </tr>
        <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= esc($ticket['list_id']) ?></td>
                <td><?= esc($ticket['user_id']) ?></td>
                <td><?= esc($ticket['created_at']) ?></td>
   
            </tr>
        <?php endforeach; ?>
    </table>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('assets/js/home.js') ?>"></script>
<?= $this->endSection() ?>
