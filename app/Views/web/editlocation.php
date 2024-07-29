<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<div class="container">
    <h2>Edit Location</h2>
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
    <form method="post" action="<?= base_url('location/update/' . $location['LocationID']) ?>">
        <div class="mb-3">
            <label for="LocationName" class="form-label">Location Name</label>
            <input type="text" class="form-control" id="LocationID" name="LocationID" value="<?= esc($location['LocationID']) ?>">
        </div>
        <div class=" mb-3">
            <label for="LocationDescription" class="form-label">Location Description</label>
            <input type="text" class="form-control" id="LocationDescription" name="LocationDescription" value="<?= esc($location['LocationDescription']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $this->endSection() ?>