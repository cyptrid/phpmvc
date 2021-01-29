<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-toogle="modal" data-target="#formModal">
        Tambah Data Mahasiswa
        </button>
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs ): ?>            
                            <li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge-primary">detail</a>
                            </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>