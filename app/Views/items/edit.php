<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<div class="container">
    <h2>Edit Item</h2>
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
    <form method="post" action="<?= base_url('inventaris/update/' . $item['ItemID']) ?>">
        <div class="mb-3">
            <label for="ItemName" class="form-label">Item name</label>
            <input type="text" class="form-control" id="ItemName" name="ItemName" value="<?= esc($item['ItemName']) ?>">
        </div>
        <div class=" mb-3">
            <label for="CategoryID" class="form-label">Category ID</label>
            <input type="text" class="form-control" id="CategoryID" name="CategoryID" value="<?= esc($item['CategoryID']) ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Location ID</label>
            <input type="text" class="form-control" id="LocationID" name="LocationID" value="<?= esc($item['LocationID']) ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="Quantity" name="Quantity" value="<?= esc($item['Quantity']) ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Purchase Date</label>
            <input type="text" class="form-control" id="PurchaseDate" name="PurchaseDate" value="<?= esc($item['PurchaseDate']) ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="text" class="form-control" id="Price" name="Price" value="<?= esc($item['ItemName']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $this->endSection() ?>