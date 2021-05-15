<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-8">
          <div class="card author-box card-primary">
            <div class="card-body">
              <div class="author-box-left"><br>
                <img alt="image" src="<?= base_url(); ?>/img/fsiswa/<?= $siswa['foto_siswa']; ?>" class="rounded author-box-picture" style="width: 110px; height: 140px;">
                <div class="clearfix"></div>
              </div>
              <div class="author-box-details">
                <div class="author-box-name">
                  <h3>Nama : <?= $siswa['nama_siswa']; ?></h3>
                </div>
                <br>
                <dl class="row">
                  <dt class="col-sm-3">
                    NIS Siswa
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['nis']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    NISN Siswa
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['nisn']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    TTL
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['tempat_lahir']; ?>, <?= $siswa['tanggal_lahir']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Agama
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['agama']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Alamat
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['alamat_siswa']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    No Telp
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['telepon_siswa']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Ayah
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['nama_ayah']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Pekerjaan
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['pekerjaan_ayah']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Ibu
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['nama_ibu']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Pekerjaan
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['pekerjaan_ibu']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    No Telp Ortu
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['telepon_ortu']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Alamat Ortu
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $siswa['alamat_ortu']; ?>
                  </dd>
                </dl>
                <div class="text-right">
                  <a href="<?= base_url(); ?>/siswa" class="btn btn-sm btn-primary" type="button">Kembali</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>