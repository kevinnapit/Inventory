<?php $this->extend('layout/main'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <form method="post" action="<?= base_url('inventaris/inventaris_update/' . $inventaris['ItemID']) ?>">
        <div class="mb-3">
            <label for="ItemName" class="form-label">Item name</label>
            <input type="text" class="form-control" name="ItemName" id="ItemName" value="<?= $inventaris['ItemName'] ?>">
        </div>
        <div class="mb-3">
            <label for="CategoryID" class="form-label">Category ID</label>
            <input type="text" class="form-control" name="CategoryID" id="CategoryID" value="<?= $inventaris['CategoryID'] ?>">
        </div>
        <div class="mb-3">
            <label for="LocationID" class="form-label">Location ID</label>
            <input type="text" class="form-control" name="LocationID" id="LocationID" value="<?= $inventaris['LocationID'] ?>">
        </div>
        <div class="mb-3">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" name="Quantity" id="Quantity" value="<?= $inventaris['Quantity'] ?>">
        </div>
        <div class="mb-3">
            <label for="PurchaseDate" class="form-label">Purchase Date</label>
            <input type="text" class="form-control" name="PurchaseDate" id="PurchaseDate" value="<?= $inventaris['PurchaseDate'] ?>" placeholder="yyyy-mm-dd">
        </div>
        <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input type="text" class="form-control" name="Price" id="Price" value="<?= $inventaris['Price'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update data</button>
    </form>

</div>

<?php $this->endSection('content'); ?>