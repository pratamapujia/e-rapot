<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h4>Form Tambah Data Siswa</h4>
          </div>
          <form action="/siswa/save" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ID Siswa</label>
                  <input type="text" class="form-control" name="id_siswa" value="<?= $kode; ?>" readonly>
                  <!-- <div class="invalid-feedback">
                    </?= $validation->getError('id_siswa'); ?>
                  </div> -->
                </div>
                <div class="form-group col-md-6">
                  <label>NIS</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nis')) ? 'is-invalid' : ''; ?>" name="nis" value="<?= old('nis'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nis'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>NISN</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : ''; ?>" name="nisn" value="<?= old('nisn'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nisn'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_siswa')) ? 'is-invalid' : ''; ?>" name="nama_siswa" value="<?= old('nama_siswa'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_siswa'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Jenis Kelamin</label>
                  <select class="form-control selectric" name="jk_siswa">
                    <option value="">Pilih</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('tempat_lahir'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" name="tanggal_lahir" value="<?= old('tanggal_lahir'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('tanggal_lahir'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Agama</label>
                  <select class="form-control selectric" name="agama">
                    <option value="">Pilih</option>
                    <?php foreach ($agama as $a) : ?>
                      <option value="<?= $a['agama']; ?>"><?= $a['agama']; ?></option>
                    <?php endforeach ?>
                    <!-- <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Khonghucu</option> -->
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat Siswa</label>
                  <input type="text" class="form-control <?= ($validation->hasError('alamat_siswa')) ? 'is-invalid' : ''; ?>" name="alamat_siswa" value="<?= old('alamat_siswa'); ?>">
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon Siswa</label>
                  <input type="text" class="form-control <?= ($validation->hasError('telepon_siswa')) ? 'is-invalid' : ''; ?>" name="telepon_siswa" value="<?= old('telepon_siswa'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('telepon_siswa'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Ayah</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" name="nama_ayah" value="<?= old('nama_ayah'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_ayah'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_ayah')) ? 'is-invalid' : ''; ?>" name="pekerjaan_ayah" value="<?= old('pekerjaan_ayah'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('pekerjaan_ayah'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Ibu</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>" name="nama_ibu" value="<?= old('nama_ibu'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_ibu'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_ibu')) ? 'is-invalid' : ''; ?>" name="pekerjaan_ibu" value="<?= old('pekerjaan_ibu'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('pekerjaan_ibu'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat Orang Tua</label>
                  <input type="text" class="form-control <?= ($validation->hasError('alamat_ortu')) ? 'is-invalid' : ''; ?>" name="alamat_ortu" value="<?= old('alamat_ortu'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('alamat_ortu'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon Orang Tua</label>
                  <input type="text" class="form-control <?= ($validation->hasError('telepon_ortu')) ? 'is-invalid' : ''; ?>" name="telepon_ortu" value="<?= old('telepon_ortu'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('telepon_ortu'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Foto Siswa</label>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <img src="../img/fsiswa/none.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-md-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto_siswa')) ? 'is-invalid' : ''; ?>" name="foto_siswa" id="foto_siswa" onchange="previewImgSiswa()">
                        <label class="custom-file-label" for="foto_siswa">Pilih Gambar..</label>
                        <div class="invalid-feedback" style="padding-top: 5px;">
                          <?= $validation->getError('foto_siswa'); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="swal-2">Tambah Data</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>