<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <?= form_open('diskon') ?>

            <div class="modal-header">

                <h5 class="modal-title">
                    Tambah Data
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
                        name="tanggal"
                        value="<?= old('tanggal') ?>"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Nominal
                    </label>

                    <input
                        type="number"
                        class="form-control"
                        name="nominal"
                        value="<?= old('nominal') ?>"
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