<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h4>Form Tambah Data Guru</h4>
          </div>
          <form action="/guru/save" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ID Guru</label>
                  <input type="text" class="form-control" name="id_guru" value="<?= $kode; ?>" readonly>
                  <!-- <div class="invalid-feedback">
                    </?= $validation->getError('id_guru'); ?>
                  </div> -->
                </div>
                <div class="form-group col-md-6">
                  <label>NIP</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?>" name="nip" value="<?= old('nip'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nip'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Guru</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_guru')) ? 'is-invalid' : ''; ?>" name="nama_guru" value="<?= old('nama_guru'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_guru'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Jenis Kelamin</label>
                  <select class="form-control selectric" name="jk_guru">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon</label>
                  <input type="text" class="form-control <?= ($validation->hasError('telepon_guru')) ? 'is-invalid' : ''; ?>" name="telepon_guru" value="<?= old('telepon_guru'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('telepon_guru'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Profesi</label>
                  <select class="form-control selectric" name="profesi">
                    <option value="Guru Biasa">Guru Biasa</option>
                    <option value="Guru BK">Guru BK</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Status</label>
                  <select class="form-control selectric" name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat</label>
                  <input type="text" class="form-control <?= ($validation->hasError('alamat_guru')) ? 'is-invalid' : ''; ?>" name="alamat_guru" value="<?= old('alamat_guru'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('alamat_guru'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Foto Guru</label>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <img src="../img/fguru/none.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-md-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto_guru')) ? 'is-invalid' : ''; ?>" name="foto_guru" id="foto_guru" onchange="previewImgGuru()">
                        <label class="custom-file-label" for="foto_guru">Pilih Gambar..</label>
                        <div class="invalid-feedback" style="padding-top: 5px;">
                          <?= $validation->getError('foto_guru'); ?>
                        </div>
                      </div>
                    </div>
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