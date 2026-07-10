<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if(session()->getFlashdata('success')) : ?>
<div class="alert alert-success alert-dismissible fade show">
    <?= session()->getFlashdata('success') ?>
    <button class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>

<table class="table datatable">

<thead>

<tr>

<th>#</th>
<th>ID Pembelian</th>
<th>Pembeli</th>
<th>Waktu Pembelian</th>
<th>Total Bayar</th>
<th>Alamat</th>
<th>Status</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php foreach($transactions as $index=>$item): ?>

<tr>

<td><?= $index+1 ?></td>

<td><?= $item['id'] ?></td>

<td><?= $item['username'] ?></td>

<td><?= $item['created_at'] ?></td>

<td><?= number_to_currency($item['total_harga'],'IDR') ?></td>

<td><?= $item['alamat'] ?></td>

<td>

<?php if($item['status']==1): ?>

<span class="badge bg-primary">
Sudah Selesai
</span>

<?php else: ?>

<span class="badge bg-warning">
Belum Selesai
</span>

<?php endif; ?>

</td>

<td>

<button
class="btn btn-success btn-sm"
data-bs-toggle="modal"
data-bs-target="#detailModal<?= $item['id'] ?>">

Detail

</button>

<button
class="btn btn-info btn-sm"
data-bs-toggle="modal"
data-bs-target="#statusModal<?= $item['id'] ?>">

Ubah Status

</button>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

<?= $this->include('pembelian/modal_detail') ?>
<?= $this->include('pembelian/modal_status') ?>

<?= $this->endSection() ?>