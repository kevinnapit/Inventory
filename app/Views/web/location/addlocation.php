<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<div class="container mt-5">
    <?php if (session()->getFlashdata('status')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('status') ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form method="post" action="<?= base_url('location/location_store') ?>">
        <div class="form-group">
            <label for="LocationName">Nama Lokasi</label>
            <input type="text" class="form-control" name="LocationName" id="LocationID" value="<?= old('LocationID') ?>" required>
        </div>
        <div class="form-group">
            <label for="LocationDescripsion">Deskripsi Lokasi</label>
            <input type="text" class="form-control" name="LocationDescription" id="LocationDescription" value="<?= old('LocationDescripsion') ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Add data</button>
    </form>
</div>
<?php $this->endSection() ?>