<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-6">
        <div class="card card-info">
          <div class="card-header">
            <h4>Form Ubah Data Kelas</h4>
          </div>
          <form action="/kelas/update/<?= $kelas['id_kelas']; ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>ID Kelas</label>
                  <input type="text" class="form-control" name="id_kelas" value="<?= $kelas['id_kelas'] ?>" readonly>
                  <!-- <div class="invalid-feedback">
                    </?= $validation->getError('id_kelas'); ?>
                  </div> -->
                </div>
                <div class="form-group col-md-12">
                  <label>Tingkat Kelas</label>
                  <select class="form-control" name="tingkat">
                    <option value=""> Pilih </option>
                    <option value="1" <?= $kelas['tingkat'] == "1" ? "selected" : null; ?>>Kelas 10</option>
                    <option value="2" <?= $kelas['tingkat'] == "2" ? "selected" : null; ?>>Kelas 11</option>
                    <option value="3" <?= $kelas['tingkat'] == "3" ? "selected" : null; ?>>Kelas 12</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>Jurusan</label>
                  <select class="form-control" name="jurusan">
                    <option value=""> Pilih </option>
                    <option value="TKR" <?= $kelas['jurusan'] == "TKR" ? "selected" : null; ?>>TKR</option>
                    <option value="TKJ" <?= $kelas['jurusan'] == "TKJ" ? "selected" : null; ?>>TKJ</option>
                    <option value="RPL" <?= $kelas['jurusan'] == "RPL" ? "selected" : null; ?>>RPL</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>Nama Kelas</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_kelas')) ? 'is-invalid' : ''; ?>" name="nama_kelas" value="<?= (old('nama_kelas')) ? old('nama_kelas') : $kelas['nama_kelas'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_kelas'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>