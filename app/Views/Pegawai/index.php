<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title">Data Terakhir</h3>
                        <div class="card-tools">
                            <span class="badge badge-danger">8 New Members</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- TABLE DATA PEGAWAI -->
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <a href="/pegawai/" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>
                                        <a href="/pegawai/" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry the Bird</td>
                                    <td>New York</td>
                                    <td>
                                        <a href="/pegawai/" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <a href="/pegawai/" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <a href="/pegawai/" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <a href="/pegawai/" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <a href="/pegawai/" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /.TABLE DATA PEGAWAI -->
                    </div>
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Tambah Data Pegawai</a>
                    </div>
                </div>

            </div>
            <div class="col md-6">
                <!-- USERS LIST -->
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title">Pegawai Terbaru</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="users-list clearfix">
                            <li>
                                <img src="<?= base_url() ?>/template/dist/img/user1-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Alexander Pierce</a>
                                <span class="users-list-date">Today</span>
                            </li>
                            <li>
                                <img src="<?= base_url() ?>/template/dist/img/user8-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Norman</a>
                                <span class="users-list-date">Yesterday</span>
                            </li>
                            <li>
                                <img src="<?= base_url() ?>/template/dist/img/user7-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Jane</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="<?= base_url() ?>/template/dist/img/user6-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">John</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="<?= base_url() ?>/template/dist/img/user2-160x160.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Alexander</a>
                                <span class="users-list-date">13 Jan</span>
                            </li>
                            <li>
                                <img src="<?= base_url() ?>/template/dist/img/user5-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Sarah</a>
                                <span class="users-list-date">14 Jan</span>
                            </li>
                            <li>
                                <img src="<?= base_url() ?>/template/dist/img/user4-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Nora</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                            <li>
                                <img src="<?= base_url() ?>/template/dist/img/user3-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Nadia</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Lihat Semua Data</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>