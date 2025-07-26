<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php
    $yang_login = $this->session->userdata('login_session')['nama'];
    ?>


    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                <h1 class="col-12 h3 mb-0 text-gray-800">Selamat Datang di SI AKT Career <?= $yang_login; ?> </h1>

            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Lowongan Publish</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_open_loker; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Lowongan Tidak Publish</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_close_loker; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->



    <!-- Content Row -->
    <div class="row">



        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tes</h6>
                </div>
                <div class="card-body">

                    <p>tes</p>
                    <a target="_blank" rel="nofollow" href="">Cek Pelamar &rarr;</a>
                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kandidat dipilih</h6>
                </div>
                <div class="card-body">
                    <p>Tes</p>
                    <a target="_blank" rel="nofollow" href="">Cek Calon Kandidat &rarr;</a>


                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->