<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-6">
        <div class="card card-info">
          <div class="card-header">
            <h4>Form Tambah Data Kelas</h4>
          </div>
          <form action="/kelas/save" method="POST">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>ID Kelas</label>
                  <input type="text" class="form-control" readonly name="id_kelas" value="<?= $kode ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('id_kelas'); ?>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label>Tingkat Kelas</label>
                  <select class="form-control <?= ($validation->hasError('tingkat')) ? 'is-invalid' : ''; ?>" name="tingkat">
                    <option value=""> Pilih </option>
                    <option value="1">Kelas 10</option>
                    <option value="2">Kelas 11</option>
                    <option value="3">Kelas 12</option>
                  </select>
                  <div class="invalid-feedback">
                    <?= $validation->getError('tingkat'); ?>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label>Jurusan</label>
                  <select class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" name="jurusan">
                    <option value=""> Pilih </option>
                    <option value="TKR">TKR</option>
                    <option value="TKJ">TKJ</option>
                    <option value="RPL">RPL</option>
                  </select>
                  <div class="invalid-feedback">
                    <?= $validation->getError('jurusan'); ?>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label>Nama Kelas</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_kelas')) ? 'is-invalid' : ''; ?>" name="nama_kelas" value="<?= old('nama_kelas'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_kelas'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>