<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<div class="container">
    <form method="post" action="<?= base_url('categoris/category_update/' . $kategori['CategoryID']) ?>">
        <button type="submit" class="btn btn-primary">Update data</button>
        <div class="mb-3">
            <label for="CategoryName" class="form-label">Kategori</label>
            <input type="text" class="form-control" name="CategoryName" id="CategoryName" value="<?= $kategori['CategoryName'] ?>">
        </div>
    </form>

</div>
<!-- /.container-fluid -->
<?php $this->endSection() ?>