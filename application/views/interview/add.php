<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card shadow-sm mb-4 border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form <?= $title; ?>
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('loker/admin_index') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-2">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="posisi">Posisi</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan posisi ...">
                        <?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="deskripsi">Deskripsi</label>
                    <div class="col-md-10">
                        <textarea name="deskripsi" id="editor" class="form-control"><?= set_value('deskripsi'); ?></textarea>


                        <?= form_error('deskripsi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="batas_lamar">Batas Lamar</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('batas_lamar'); ?>" type="date" id="batas_lamar" name="batas_lamar" class="form-control" placeholder="batas_lamar">
                        <?= form_error('batas_lamar', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="status">Status</label>
                    <div class="col-md-10">
                        <select value="<?= set_value('status'); ?>" type="text" id="status" name="status" class="form-control" placeholder=" Masukan status">
                            <option value="">--Pilih Status--</option>
                            <option value="open">open</option>
                            <option value="close">close</option>
                        </select>

                        <?= form_error('status', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <br>
                <div class="row form-group justify-content-end">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Reset
                        </button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>