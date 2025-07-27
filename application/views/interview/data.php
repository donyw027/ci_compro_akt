<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Kandidat Interview
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
                    <th width="100">Tgl Loker</th>

                    <th width="200">posisi</th>
                    <!-- <th>deskripsi</th> -->
                    <th>Cek Kandidat</th>
                    <th>Status Lowongan</th>



                    <!-- <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($loker) :
                    foreach ($loker as $lokeri) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $lokeri['tgl_loker']; ?></td>

                            <td><?= $lokeri['posisi']; ?></td>
                            <?php
                            if ($lokeri['status'] == "open") {
                            ?>
                                <td class="badge-success"><?= $lokeri['status']; ?></td>
                            <?php } else {
                            ?>
                                <td class="badge-danger"><?= $lokeri['status']; ?></td>
                            <?php } ?>
                            <td>
                                <!-- <a href="<?= base_url('cek_sortir/interview_index/') . $lokeri['id'] ?>" class="btn btn btn-sm btn-primary">Cek Kandidat<i class="fa fa-fw fa-book"></i></a> -->

                                <a href="<?= base_url('cek_sortir/kandidat_by_status/' . $lokeri['id'] . '/interview') ?>" class="btn btn-sm btn-success">
                                    Cek Kandidat <i class="fa fa-comments"></i>
                                </a>
                            </td>



                            <!-- <td>

                                <a href="<?= base_url('loker/edit/') . $lokeri['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('loker/delete/') . $lokeri['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td> -->
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan loker</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>