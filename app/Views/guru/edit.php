<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h4>Form Ubah Data Guru</h4>
          </div>
          <form action="/guru/update/<?= $guru['id_guru']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <input type="hidden" name="fotoLama" value="<?= $guru['foto_guru']; ?>">
                <div class=" form-group col-md-6">
                  <label>ID Guru</label>
                  <input type="text" class="form-control" name="id_guru" value="<?= $guru['id_guru'] ?>" readonly>
                  <!-- <div class="invalid-feedback">
                    </?= $validation->getError('id_guru'); ?>
                  </div> -->
                </div>
                <div class="form-group col-md-6">
                  <label>NIP</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?>" name="nip" value="<?= (old('nip')) ? old('nip') : $guru['nip'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nip'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Guru</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_guru')) ? 'is-invalid' : ''; ?>" name="nama_guru" value="<?= (old('nama_guru')) ? old('nama_guru') : $guru['nama_guru'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_guru'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" selected="<?= $guru['jk_guru']; ?>" name="jk_guru">
                    <option value="Laki-Laki" <?= $guru['jk_guru'] == "Laki-Laki" ? "selected" : null; ?>>Laki-Laki</option>
                    <option value="Perempuan" <?= $guru['jk_guru'] == "Perempuan" ? "selected" : null; ?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon</label>
                  <input type="text" class="form-control <?= ($validation->hasError('telepon_guru')) ? 'is-invalid' : ''; ?>" name="telepon_guru" value="<?= (old('telepon_guru')) ? old('telepon_guru') : $guru['telepon_guru'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('telepon_guru'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Profesi</label>
                  <select class="form-control" selected="<?= $guru['profesi']; ?>" name="profesi">
                    <option value="Guru Biasa" <?= $guru['profesi'] == "Guru Biasa" ? "selected" : null; ?>>Guru Biasa</option>
                    <option value="Guru BK" <?= $guru['profesi'] == "Guru BK" ? "selected" : null; ?>>Guru BK</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Status</label>
                  <select class="form-control" selected="<?= $guru['status']; ?>" name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat</label>
                  <input type="text" class="form-control <?= ($validation->hasError('alamat_guru')) ? 'is-invalid' : ''; ?>" name="alamat_guru" value="<?= (old('alamat_guru')) ? old('alamat_guru') : $guru['alamat_guru'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('alamat_guru'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>File</label>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <img src="/img/fguru/<?= $guru['foto_guru']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-md-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto_guru')) ? 'is-invalid' : ''; ?>" name="foto_guru" id="foto_guru" onchange="previewImgGuru()">
                        <label class="custom-file-label" for="foto_guru"><?= $guru['foto_guru']; ?></label>
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
              <button type="submit" class="btn btn-primary" id="swal-2">Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>