<?php foreach ($discounts as $discount) : ?>

<div class="modal fade"
     id="editModal-<?= $discount['id'] ?>"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <?= form_open('diskon/edit/' . $discount['id']) ?>

            <div class="modal-header">

                <h5 class="modal-title">
                    Edit Data
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>

            </div>

            <div class="modal-body">

                <div class="mb-3">

                    <label class="form-label">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        class="form-control"
                        value="<?= $discount['tanggal'] ?>"
                        readonly>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Nominal
                    </label>

                    <input
                        type="number"
                        class="form-control"
                        name="nominal"
                        value="<?= $discount['nominal'] ?>"
                        required>

                </div>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">

                    Close

                </button>

                <button
                    type="submit"
                    class="btn btn-primary">

                    Simpan

                </button>

            </div>

            <?= form_close() ?>

        </div>

    </div>

</div>

<?php endforeach; ?>