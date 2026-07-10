<?php foreach($transactions as $item): ?>

<div class="modal fade"
id="detailModal<?= $item['id'] ?>"
tabindex="-1">

<div class="modal-dialog ">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title">

Detail Transaksi #<?= $item['id'] ?>

</h5>

<button
class="btn-close"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<?php if(isset($products[$item['id']])): ?>

<?php foreach($products[$item['id']] as $no=>$produk): ?>

<div class="row mb-3">

<div class="col-3">

<img
src="<?= base_url('img/'.$produk['foto']) ?>"
class="img-fluid img-thumbnail">

</div>

<div class="col-9">

<strong>

<?= $produk['nama'] ?>

</strong>

<br>

<?php
$hargaAsli=$produk['harga'];
$hargaDiskon=max(0,$hargaAsli-$produk['diskon']);
?>

<?php if($produk['diskon']>0): ?>

<small class="text-danger">

<del>

<?= number_to_currency($hargaAsli,'IDR') ?>

</del>

</small>

<br>

<strong>

<?= number_to_currency($hargaDiskon,'IDR') ?>

</strong>

<?php else: ?>

<strong>

<?= number_to_currency($hargaAsli,'IDR') ?>

</strong>

<?php endif; ?>

<br>

(<?= $produk['jumlah'] ?> pcs)

<br>

Subtotal

:

<strong>

<?= number_to_currency($produk['subtotal_harga'],'IDR') ?>

</strong>

</div>

</div>

<hr>

<?php endforeach; ?>

<?php endif; ?>

<div class="text-end">

<strong>

Ongkir

<?= number_to_currency($item['ongkir'],'IDR') ?>

</strong>

</div>

</div>

</div>

</div>

</div>

<?php endforeach; ?>