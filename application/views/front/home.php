<div class="container-fluid">
    <div class="mt-4 jumbotron jumbotron-fluid shadow-lg">
        <div class="container">
            <div class="text-center">
                <img src="<?= (empty($dataapp['logo_instansi'])) ? base_url('assets/img/clock-image.png') : (($dataapp['logo_instansi'] == 'default-logo.png') ? base_url('assets/img/clock-image.png') : base_url('storage/setting/' . $dataapp['logo_instansi'])); ?>" class="card-img" style="width:15%;">
                <h1 class="display-5">
                    <?= (empty($dataapp['nama_instansi'])) ? '[Nama Instansi Belum Disetting]' : $dataapp['nama_instansi']; ?>
                </h1>
                <h4>
                    <div class="d-inline"><?= $greeting ?></div>, <?= $user['nama_lengkap'] ?>
                </h4>
                <p class="lead">
                    <marquee width="60%" direction="left"><?= (empty($dataapp['jumbotron_lead_set'])) ? '[Ubah Kalimat Pada Teks Ini Disetting Aplikasi]' : $dataapp['jumbotron_lead_set']; ?></marquee>
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xl-7">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <span class="fas fa-user mr-3"></span>Identitas Diri
                </div>
                <div class="card-body">
                    <div class="row detail">
                        <div class="col-md-4 p-2">
                            <img class="img-thumbnail" src="<?= ($user['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $user['image'])); ?>" class="card-img" style="width:100%;">
                        </div>
                        <div class="col-md-8">
                            <dl class="row">
                                <dt class="col-sm-5">Nama Lengkap:</dt>
                                <dd class="col-sm-7"><?= $user['nama_lengkap'] ?></dd>
                                <dt class="col-sm-5">Umur:</dt>
                                <dd class="col-sm-7"><?= $user['umur'] ?><div class="ml-1 d-inline">Tahun</div>
                                </dd>
                                <dt class="col-sm-5">Instansi:</dt>
                                <dd class="col-sm-7 text-truncate"><?= $user['instansi'] ?></dd>
                                <dt class="col-sm-5">Jabatan:</dt>
                                <dd class="col-sm-7"><?= $user['jabatan'] ?></dd>
                                <dt class="col-sm-5">Jenis Kelamin:</dt>
                                <dd class="col-sm-7"><?= $user['jenis_kelamin'] ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end small">
                        <!-- <div class="text-muted">Kode Pegawai: <?= $user['kode_pegawai'] ?></div> -->
                        <div class="text-muted">Akun Dibuat: <?= date('d F Y', $user['date_created']); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="card mb-4">
                <div class="card-header text-center"><span class="fas fa-bullhorn mr-3"></span>Portal Berita</div>
                <div class="card-body overflow-auto" style="max-height: 340px">
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-4 d-flex align-items-md-center p-1">
                                <img src="<?= base_url('assets/img/berita-1.jpg')?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= substr('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.' ,0, 20);?>...</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="stretched-link" style="dislay:none;"></a>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-4 d-flex align-items-md-center">
                                <img src="<?= ($user['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $user['image'])); ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="stretched-link" style="dislay:none;"></a>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= substr('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.' ,0, 30);?>...</h5>
                            <p class="card-text"><?= substr('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.' ,0, 100);?>...</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>    
                        <a href="#" class="stretched-link" style="dislay:none;"></a>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal QR Code -->
<div class="modal fade" id="qrcodemodal" tabindex="-1" role="dialog" aria-labelledby="qrcodemodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="qrcodemodallabel"><span class="fas fa-qrcode mr-1"></span>QR Code Pegawai</h5>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img class="img my-2" src="<?= $img_source = ($user['qr_code_image'] == 'no-qrcode.png' ? base_url('assets/img/no-qrcode.png') : base_url('storage/qrcode_pegawai/' . $user['qr_code_image'])); ?>" style="width:50%;">
                </div>
                <dl class="row">
                    <dt class="col-sm-5">Nama Lengkap:</dt>
                    <dd class="col-sm-7"><?= $user['nama_lengkap'] ?></dd>
                    <dt class="col-sm-5">NPWP:</dt>
                    <dd class="col-sm-7"><?= $user['npwp'] ?></dd>
                    <dt class="col-sm-5">Kode Pegawai:</dt>
                    <dd class="col-sm-7"><?= $user['kode_pegawai'] ?></dd>
                </dl>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>