<!-- <?php

		var_dump($loker);
		?> -->

<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2><?= $this->lang->line('career') ?></h2>
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
<section class="Feautes section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- <h2>Career </h2> -->
				<?= $this->session->flashdata('pesan'); ?>



				<div class="container my-5">
					<div class="row">
						<?php
						$ada_open = false;
						foreach ($loker as $lowongan):
							if ($lowongan['status'] === 'open'):
								$ada_open = true;
								$unique_id = 'modal_' . $lowongan['id'];
								$deskripsi_limit = word_limiter($lowongan['deskripsi'], 20);
						?>
								<div class="col-md-4 mb-4 ">
									<div class="card h-100 shadow-sm">
										<div class="card-header">
											<h5 class="card-title"><?= $lowongan['posisi'] ?> <br>
												<span class="badge badge-success">Open</span>
											</h5>
											<p class="card-text"><strong>Batas Lamar:</strong> <?= $lowongan['batas_lamar'] ?></p>


										</div>
										<div class="card-body">
											<!-- <b>Deskripsi:</b> -->
											<!-- <p class="card-text" style="min-height: 150px;"><?= $deskripsi_limit ?>...</p> -->

											<!-- Tombol Modal -->
											<button type="button" class="btn btn-sm btn-outline-primary mt-2 mr-2" data-toggle="modal" data-target="#<?= $unique_id ?>">
												Detail Lowongan
											</button> <br>

											<a style="color:white;" href="<?= base_url('welcome/applyjob/') . $lowongan['id'] ?>" type="button" class="btn btn-info mt-2">Apply Now</a>
										</div>
									</div>
								</div>

								<!-- Modal Deskripsi Lengkap -->
								<div class="modal fade" id="<?= $unique_id ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $unique_id ?>Label" aria-hidden="true">
									<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="<?= $unique_id ?>Label"><?= $lowongan['posisi'] ?> - Detail Deskripsi</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<?= $lowongan['deskripsi']; ?>
											</div>
											<div class="modal-footer">
												<a style="color:white;" href="<?= base_url('welcome/applyjob/') .  $lowongan['id']  ?>" type="button" class="btn btn-info ">Apply Now</a>


												<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
											</div>
										</div>
									</div>
								</div>

						<?php
							endif;
						endforeach;
						?>

						<?php if (!$ada_open): ?>
							<div class="col-12 text-center">
								<div class="alert alert-info" role="alert">
									<img src="<?= base_url('assets/img/section-img.png') ?>" alt="#">
									<h6><?= $this->lang->line('career_content') ?></h6>

								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>


			</div>
		</div>

	</div>
</section>