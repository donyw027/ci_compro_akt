<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Tidak Relevan | <?= $loker['posisi']; ?>
                </h4>
            </div>
            <!-- <div class="col-auto">
                <a href="<?= base_url('Loker/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Loker
                    </span>
                </a>
            </div> -->
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" style="width: 100%;" id="dataTable4">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Nama</th>
                    <th>Pendidikan</th>
                    <th>Jurusan</th>
                    <th>No WA</th>
                    <th>Detail</th>
                    <th>Ubah Status Kandidat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($kandidat) :
                    foreach ($kandidat as $kandidati) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $kandidati['nama']; ?></td>
                            <td><?= $kandidati['pendidikan']; ?></td>
                            <td><?= $kandidati['jurusan']; ?></td>

                            <td><?= $kandidati['no_wa']; ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalDetail<?= $kandidati['id'] ?>">
                                    Detail Kandidat <i class="fa fa-fw fa-book"></i>
                                </button>
                                <!-- modal -->
                                <div class="modal fade" id="modalDetail<?= $kandidati['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel<?= $kandidati['id'] ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title" id="modalDetailLabel<?= $kandidati['id'] ?>">Detail Kandidat: <?= $kandidati['nama'] ?></h5>
                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-bordered mb-0">
                                                    <tr>
                                                        <th colspan="2" class="text-center bg-secondary text-white">
                                                            Kandidat <?= $loker['posisi'] ?>

                                                        </th>
                                                        <th colspan="2" class="text-center bg-secondary text-white">
                                                            Apply Date : <?= $kandidati['applydate'] ?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" rowspan="3" style="width:200px;">
                                                            <?php if ($kandidati['foto']) : ?>
                                                                <img src="<?= base_url('uploads/foto/' . $kandidati['foto']) ?>" alt="Foto Kandidat" style="max-width:100px;max-height:130px;">
                                                            <?php else: ?>
                                                                <em>Tidak ada foto</em>
                                                            <?php endif; ?>
                                                        </td>
                                                        <th>Nama</th>
                                                        <td><?= $kandidati['nama'] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td><?= $kandidati['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No WA</th>
                                                        <td><?= $kandidati['no_wa'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat, Tgl Lahir</th>
                                                        <td colspan="2"><?= $kandidati['tempat_lahir'] ?>, <?= $kandidati['tgl_lahir'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pendidikan & Jurusan</th>
                                                        <td colspan="2"><?= $kandidati['pendidikan'] ?> - <?= $kandidati['jurusan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Kelamin</th>
                                                        <td colspan="2"><?= $kandidati['jk'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3">CV</th>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <!-- <?php if ($kandidati['cv']) : ?>
                                        <?php $ext = pathinfo($kandidati['cv'], PATHINFO_EXTENSION); ?>
                                        <a href="<?= base_url('uploads/cv/' . $kandidati['cv']) ?>" target="_blank">Lihat CV</a> -->






                                                            <?php if (strtolower($ext) == 'pdf'): ?>
                                                                <div class="mt-2" style="height:800px;">
                                                                    <iframe src="<?= base_url('uploads/cv/' . $kandidati['cv']) ?>" width="100%" height="100%"></iframe>
                                                                </div>
                                                            <?php else: ?>
                                                                <span class="text-muted">Preview hanya tersedia untuk file PDF</span>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <em>Tidak ada CV</em>
                                                        <?php endif; ?>
                                                        </td>
                                                    </tr>

                                                </table>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn btn-sm  btn-secondary" data-dismiss="modal">Tutup</button>


                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </td>
                            <td>
                                <a href="<?= base_url('kandidat/edit/') . $kandidati['id'] ?>" class="btn btn btn-sm btn-secondary">Sortir<i class="fa fa-fw fa-filter"></i></a>
                                <a href="<?= base_url('kandidat/edit/') . $kandidati['id'] ?>" class="btn btn btn-sm btn-success">Interview<i class="fa fa-fw fa-check"></i></a>
                            </td>
                        </tr>



                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada kandidat pelamar</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>


        <!-- Modal -->






    </div>
</div>