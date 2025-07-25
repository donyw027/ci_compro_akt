<!-- <?php

		var_dump($loker);
		?> -->

<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Form Kandidat</h2>
					<ul class="bread-list">
						<li><a href="<?= site_url('home') ?>"><?= $this->lang->line('home') ?></a></li>
						<li><i class="icofont-simple-right"></i></li>
						<li class="active"><?= $this->lang->line('career') ?> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
<br><br>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card shadow-sm mb-4 border-bottom-primary">
				<div class="card-header  text-white d-flex justify-content-between align-items-center">
					<h4 class="m-0 font-weight-bold">
						Form Kandidat
					</h4>

				</div>
				<div class="card-body pb-2">
					<?= $this->session->flashdata('pesan'); ?>
					<?= form_open(); ?>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Posisi Yang dilamar</label>
						<div class="col-md-6">
							<input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan posisi ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<hr>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Nama</label>
						<div class="col-md-6">
							<input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan Nama ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Tempat Lahir</label>
						<div class="col-md-6">
							<input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan Tempat Lahir ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Tanggal Lahir</label>
						<div class="col-md-6">
							<input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan Tanggal Lahir ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Email</label>
						<div class="col-md-6">
							<input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan Email ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">No Whatsapp</label>
						<div class="col-md-6">
							<input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan No Whatsapp ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Pendidikan Terakhir</label>
						<div class="col-md-6">
							<select id="posisi" value="<?= set_value('posisi'); ?>" name="posisi" class="form-control">
								<option value="">--Pendidikan Terakhir--</option>

								<option value="">SMA / SMK</option>
								<option value="">D-I /D-III</option>
								<option value="">D-IV / S-1</option>
								<option value="">S-2 (Pascasarjana)</option>
							</select>
							<!-- <input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan No Whatsapp ..."> -->
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Jurusan</label>
						<div class="col-md-6">
							<input value="<?= set_value('posisi'); ?>" type="text" id="posisi" name="posisi" class="form-control" placeholder="Masukan Jurusan ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
						<div class="col-md-8 d-flex">
							<div class="form-check form-check-inline ml-0">
								<input class="form-check-input ml-0" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" <?= set_radio('jenis_kelamin', 'Laki-laki'); ?> required>
								<label class="form-check-label" for="laki_laki">Laki-laki</label>
							</div>
							<div class="form-check form-check-inline ml-3">
								<input class="form-check-input ml-0" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?= set_radio('jenis_kelamin', 'Perempuan'); ?>>
								<label class="form-check-label" for="perempuan">Perempuan</label>
							</div>
							<?= form_error('jenis_kelamin', '<span class="text-danger small ml-2">', '</span>'); ?>
						</div>
					</div>




					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Upload Foto Formal <br> (Max Size: 1MB, Format: JPEG, JPG, PNG)</label>
						<div class="col-md-4">
							<input value="<?= set_value('posisi'); ?>" type="file" id="posisi" name="posisi" class="form-control" placeholder="Upload Foto ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Upload CV <br> (Max Size: 1MB, Format: JPEG, JPG, PNG)</label>
						<div class="col-md-4">
							<input value="<?= set_value('posisi'); ?>" type="file" id="posisi" name="posisi" class="form-control" placeholder="Upload CV ...">
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>


					<div class="alert alert-primary" role="alert">
						<h6 class="col-12 h6 mb-0 text-gray-800"> Dengan ini saya menyatakan bahwa aplikasi data ini diisi dengan sejujur-jujurnya dan apabila dikemudian hari ditemukan kesalahan pada sebagian data, saya bersedia menerima sanksi yang ditentukan oleh perusahaan.</h6>



					</div>




					<div class="alert alert-danger" role="alert">
						<h6 class="col-12 h6 mb-0 text-gray-800"> HARAP PERIKSA KEMBALI FORMULIR ANDA SEBELUM MENGIRIM</h6>

					</div>


					<!-- <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="batas_lamar">Batas Lamar</label>
                        <div class="col-md-4">
                            <input value="<?= set_value('batas_lamar'); ?>" type="date" id="batas_lamar" name="batas_lamar" class="form-control" placeholder="Batas Lamar">
                            <?= form_error('batas_lamar', '<span class="text-danger small">', '</span>'); ?>
                        </div>

                        <label class="col-md-2 col-form-label text-md-right" for="status">Status</label>
                        <div class="col-md-4">
                            <select id="status" name="status" class="form-control">
                                <option value="">--Pilih Status--</option>
                                <option value="open" <?= set_select('status', 'open'); ?>>Open</option>
                                <option value="close" <?= set_select('status', 'close'); ?>>Close</option>
                            </select>
                            <?= form_error('status', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div> -->

					<div class="form-group row justify-content-end">
						<div class="col-md-8">
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-save"></i> Simpan
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
</div>