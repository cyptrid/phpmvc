<div class="container mt-3">

    <div class="ro">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
    Tambah Data Mahasiswa
    </button>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs ): ?>            
                            <li class="list-group-item"><?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge-danger float-right ml-1" onclick="return confirm('yakin?')">hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge-success float-right ml-2 tampilModalUbah"  data-toggle="modal" data-id="<?= $mhs['id']; ?>" data-target="#formModal">ubah</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge-primary float-right ml-2">detail</a>
                            </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="nrp">nrp</label>
                <input type="number" class="form-control" id="nrp" name="nrp" aria-describedby="emailHelp">
            </div>
      
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="jurusan" id="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan">
                       <option value="Teknik Informatika">TI</option>
                       <option value="Sistem Informatika">SI</option>
                </select>
            </div>
            </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>