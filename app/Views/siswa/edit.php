<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h4>Form Ubah Data Siswa</h4>
          </div>
          <form action="/siswa/update/<?= $siswa['id_siswa']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <input type="hidden" name="fotoLama" value="<?= $siswa['foto_siswa']; ?>">
                <div class="form-group col-md-6">
                  <label>ID Siswa</label>
                  <input type="text" class="form-control <?= ($validation->hasError('id_siswa')) ? 'is-invalid' : ''; ?>" name="id_siswa" value="<?= (old('id_siswa')) ? old('id_siswa') : $siswa['id_siswa'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('id_siswa'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>NIS</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nis')) ? 'is-invalid' : ''; ?>" name="nis" value="<?= (old('nis')) ? old('nis') : $siswa['nis'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nis'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>NISN</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : ''; ?>" name="nisn" value="<?= (old('nisn')) ? old('nisn') : $siswa['nisn'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nisn'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_siswa')) ? 'is-invalid' : ''; ?>" name="nama_siswa" value="<?= (old('nama_siswa')) ? old('nama_siswa') : $siswa['nama_siswa'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_siswa'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Jenis Kelamin</label>
                  <select class="form-control select2" name="jk_siswa" required>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" name="tempat_lahir" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $siswa['tempat_lahir'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('tempat_lahir'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" name="tanggal_lahir" value="<?= (old('tanggal_lahir')) ? old('tanggal_lahir') : $siswa['tanggal_lahir'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('tanggal_lahir'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Agama</label>
                  <select class="form-control select2" name="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Khonghucu</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat Siswa</label>
                  <input type="text" class="form-control <?= ($validation->hasError('alamat_siswa')) ? 'is-invalid' : ''; ?>" name="alamat_siswa" value="<?= (old('alamat_siswa')) ? old('alamat_siswa') : $siswa['alamat_siswa'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon Siswa</label>
                  <input type="text" class="form-control <?= ($validation->hasError('telepon_siswa')) ? 'is-invalid' : ''; ?>" name="telepon_siswa" value="<?= (old('telepon_siswa')) ? old('telepon_siswa') : $siswa['telepon_siswa'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('telepon_siswa'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Ayah</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" name="nama_ayah" value="<?= (old('nama_ayah')) ? old('nama_ayah') : $siswa['nama_ayah'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_ayah'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_ayah')) ? 'is-invalid' : ''; ?>" name="pekerjaan_ayah" value="<?= (old('pekerjaan_ayah')) ? old('pekerjaan_ayah') : $siswa['pekerjaan_ayah'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('pekerjaan_ayah'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Ibu</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>" name="nama_ibu" value="<?= (old('nama_ibu')) ? old('nama_ibu') : $siswa['nama_ibu'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_ibu'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_ibu')) ? 'is-invalid' : ''; ?>" name="pekerjaan_ibu" value="<?= (old('pekerjaan_ibu')) ? old('pekerjaan_ibu') : $siswa['pekerjaan_ibu'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('pekerjaan_ibu'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat Orang Tua</label>
                  <input type="text" class="form-control <?= ($validation->hasError('alamat_ortu')) ? 'is-invalid' : ''; ?>" name="alamat_ortu" value="<?= (old('alamat_ortu')) ? old('alamat_ortu') : $siswa['alamat_ortu'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('alamat_ortu'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon Orang Tua</label>
                  <input type="text" class="form-control <?= ($validation->hasError('telepon_ortu')) ? 'is-invalid' : ''; ?>" name="telepon_ortu" value="<?= (old('telepon_ortu')) ? old('telepon_ortu') : $siswa['telepon_ortu'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('telepon_ortu'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Foto Siswa</label>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <img src="/img/fsiswa/<?= $siswa['foto_siswa']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-md-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto_siswa')) ? 'is-invalid' : ''; ?>" name="foto_siswa" id="foto_siswa" onchange="previewImgSiswa()">
                        <label class="custom-file-label" for="foto_siswa"><?= $siswa['foto_siswa']; ?></label>
                        <div class="invalid-feedback" style="padding-top: 5px;">
                          <?= $validation->getError('foto_siswa'); ?>
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