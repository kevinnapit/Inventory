<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<div class="container">
    <h2>Edit Categories</h2>
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
    <form method="post" action="<?= base_url('category/update/' . $category['CategoryID']) ?>">
        <div class="mb-3">
            <label for="CategoryID" class="form-label">Category ID</label>
            <input type="text" class="form-control" id="CategoryID" name="CategoryID" value="<?= esc($location['CategoryID']) ?>">
        </div>
        <div class=" mb-3">
            <label for="CategoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="CategoryName" name="CategoryName" value="<?= esc($location['CategoryName']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $this->endSection() ?>