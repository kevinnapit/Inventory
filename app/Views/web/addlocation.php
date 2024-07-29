<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<div class="container">
    <h2>Add Lokasi</h2>
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger">
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <p><?= esc($error) ?></p>
            <?php endforeach ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <form method="post" action="<?= base_url('location/submit_location') ?>">
        <div class="form-group">
            <label for="LocationName">Location Name</label>
            <input type="text" class="form-control" name="LocationName" id="LocationName" value="<?= old('LocationName') ?>" required>
        </div>
        <div class="form-group">
            <label for="LocationDesription">Location Description</label>
            <input type="text" class="form-control" name="LocationDescription" id="LocationDesription" value="<?= old('LocationDesription') ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Add data</button>
    </form>
</div>
<?php $this->endSection() ?>