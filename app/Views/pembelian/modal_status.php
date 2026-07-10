<?php foreach($transactions as $item): ?>

<div
class="modal fade"
id="statusModal<?= $item['id'] ?>"
tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<?= form_open('pembelian/status/'.$item['id']) ?>

<div class="modal-header">

<h5 class="modal-title">

Ubah Status

</h5>

<button
class="btn-close"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<select
name="status"
class="form-select">

<option
value="0"
<?= $item['status']==0?'selected':'' ?>>

Belum Selesai

</option>

<option
value="1"
<?= $item['status']==1?'selected':'' ?>>

Sudah Selesai

</option>

</select>

</div>

<div class="modal-footer">

<button
class="btn btn-primary">

Simpan

</button>

</div>

<?= form_close() ?>

</div>

</div>

</div>

<?php endforeach; ?>