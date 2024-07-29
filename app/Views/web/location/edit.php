<?php $this->extend('layout/main') ?>

<?php $this->section('content') ?>
<div class="container">
    <form method="post" action="<?= base_url('location/location_update/' . $location['LocationID']) ?>">
        <button type="submit" class="btn btn-primary">Update data</button>
        <div class="mb-3">
            <label for="LocationName" class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="LocationName" id="LocationName" value="<?= $location['LocationName'] ?>">
        </div>
        <div class="mb-3">
            <label for="LocationDescription" class="form-label">Deskripsi Lokasi</label>
            <input type="text" class="form-control" name="LocationDescription" id="LocationDescription" value="<?= $location['LocationDescription'] ?>">
        </div>
    </form>

</div>
<!-- /.container-fluid -->
<?php $this->endSection() ?>