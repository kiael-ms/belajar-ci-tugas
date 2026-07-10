<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<?php
if (session()->getFlashData('failed')) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">

    <ul class="mb-0">
        <li><?= session()->getFlashData('failed') ?></li>
    </ul>

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
    </button>

</div>
<?php
}
?>

<!-- Tombol Tambah -->
<button type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#addModal">
    Tambah Data
</button>

<br><br>

<!-- Table -->
<table class="table datatable">

    <thead>

        <tr>

            <th scope="col">#</th>

            <th scope="col">Tanggal</th>

            <th scope="col">Nominal</th>

            <th scope="col"></th>

        </tr>

    </thead>

    <tbody>

        <?php foreach ($discounts as $index => $discount) : ?>

            <tr>

                <th scope="row">
                    <?= $index + 1 ?>
                </th>

                <td>
                    <?= $discount['tanggal'] ?>
                </td>

                <td>
                    <?= $discount['nominal'] ?>
                </td>

                <td>

                    <button
                        type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#editModal-<?= $discount['id'] ?>">

                        Ubah

                    </button>

                    <a
                        href="<?= base_url('diskon/delete/' . $discount['id']) ?>"
                        class="btn btn-danger"
                        onclick="return confirm('Yakin hapus data ini ?')">

                        Hapus

                    </a>

                </td>

            </tr>

        <?php endforeach ?>

    </tbody>

</table>

<!-- Modal Tambah -->
<?= $this->include('discount/modal_add') ?>

<!-- Modal Edit -->
<?= $this->include('discount/modal_edit') ?>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?php if(session()->getFlashData('failed')) : ?>

<script>

var myModal = new bootstrap.Modal(
    document.getElementById('addModal')
);

myModal.show();

</script>

<?php endif; ?>

<?= $this->endSection() ?>