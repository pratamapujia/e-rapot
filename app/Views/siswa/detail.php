<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
          <div class="card author-box card-primary">
            <div class="card-body">
              <div class="author-box-left"><br>
                <img alt="image" src="/img/fsiswa/<?= $siswa['foto_siswa']; ?>" class="rounded-circle author-box-picture" style="width: 110px; height: 110px;">
                <div class="clearfix"></div>
              </div>
              <div class="author-box-details">
                <div class="author-box-name">
                  <h4><?= $siswa['nama_siswa']; ?></h4>
                </div>
                <div class="author-box-job" style="color: red;"><?= $siswa['nis']; ?></div><br>
                <div class="font-weight-bold">
                  <b>NISN : </b> <?= $siswa['nisn']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>TTL : </b> <?= $siswa['tempat_lahir']; ?> <?= $siswa['tanggal_lahir']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>NOMER TELEPON : </b> <?= $siswa['telepon_siswa']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>NAMA AYAH : </b> <?= $siswa['nama_ayah']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>PEKERJAAN AYAH : </b> <?= $siswa['pekerjaan_ayah']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>NAMA IBU : </b> <?= $siswa['nama_ibu']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>PEKERJAAN IBU : </b> <?= $siswa['pekerjaan_ibu']; ?>
                </div>
              </div>
            </div>
            <div class="card-footer text-right">
              <a href="/siswa" class="btn btn-sm btn-primary" type="button">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>