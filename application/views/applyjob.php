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
					<!-- <?= form_open(); ?> -->
					<?= form_open_multipart(); ?>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="posisi">Posisi Yang dilamar</label>
						<div class="col-md-6">
							<input value="<?= $loker['posisi']; ?>" type="text" id="posisi" name="posisi" class="form-control" readonly>
							<?= form_error('posisi', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<hr>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="nama">Nama</label>
						<div class="col-md-6">
							<input value="<?= set_value('nama'); ?>" type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama ...">
							<?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="tempat_lahir">Tempat & Tanggal Lahir</label>
						<div class="col-md-3">
							<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?= set_value('tempat_lahir'); ?>" placeholder="Tempat Lahir ...">
							<?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
						</div>

						<div class="col-md-3 ml-0">
							<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?= set_value('tgl_lahir'); ?>">
							<?= form_error('tgl_lahir', '<small class="text-danger">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="email">Email</label>
						<div class="col-md-6">
							<input value="<?= set_value('email'); ?>" type="text" id="email" name="email" class="form-control" placeholder="Masukan Email ...">
							<?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="no_wa">No Whatsapp</label>
						<div class="col-md-6">
							<input value="<?= set_value('no_wa'); ?>" type="text" id="no_wa" name="no_wa" class="form-control" placeholder="Masukan No Whatsapp ...">
							<?= form_error('no_wa', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="pendidikan">Pendidikan Terakhir</label>
						<div class="col-md-6">
							<select id="pendidikan" name="pendidikan" class="form-control">
								<option value="">--Pendidikan Terakhir--</option>
								<option value="SMA / SMK">SMA / SMK</option>
								<option value="D-I /D-III">D-I /D-III</option>
								<option value="D-IV / S-1">D-IV / S-1</option>
								<option value="S-2 (Pascasarjana)">S-2 (Pascasarjana)</option>
							</select>

							<?= form_error('pendidikan', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="jurusan">Jurusan</label>
						<div class="col-md-6">
							<input value="<?= set_value('jurusan'); ?>" type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Masukan Jurusan ...">
							<?= form_error('jurusan', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
						<div class="col-md-8 d-flex">
							<div class="form-check form-check-inline ml-0">
								<input class="form-check-input ml-0" type="radio" name="jk" id="laki_laki" value="Laki-laki" <?= set_radio('jk', 'Laki-laki'); ?> required>
								<label class="form-check-label" for="laki_laki">Laki-laki</label>
							</div>
							<div class="form-check form-check-inline ml-3">
								<input class="form-check-input ml-0" type="radio" name="jk" id="perempuan" value="Perempuan" <?= set_radio('jk', 'Perempuan'); ?>>
								<label class="form-check-label" for="perempuan">Perempuan</label>
							</div>
							<?= form_error('jk', '<span class="text-danger small ml-2">', '</span>'); ?>
						</div>
					</div>




					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="foto">Upload Foto Formal <br> (Max Size: 1MB, Format: JPEG, JPG, PNG)</label>
						<div class="col-md-4">
							<input value="<?= set_value('foto'); ?>" type="file" id="foto" name="foto" class="form-control" placeholder="Upload Foto ...">
							<?= form_error('foto', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right" for="cv">Upload CV <br> (Max Size: 1MB, Format: PDF)</label>
						<div class="col-md-4">
							<input value="<?= set_value('cv'); ?>" type="file" id="cv" name="cv" class="form-control" placeholder="Upload CV ...">
							<?= form_error('cv', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>


					<div class="alert alert-primary mt-4" role="alert">
						<i class="fa fa-info-circle"></i>
						Dengan ini saya menyatakan bahwa data aplikasi ini diisi dengan sejujur-jujurnya. Apabila dikemudian hari ditemukan kesalahan, saya bersedia menerima sanksi yang ditentukan oleh perusahaan.
					</div>
					<div class="alert alert-danger" role="alert">
						<i class="fa fa-exclamation-triangle"></i>
						HARAP PERIKSA KEMBALI FORMULIR ANDA SEBELUM MENGIRIM!
					</div>



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