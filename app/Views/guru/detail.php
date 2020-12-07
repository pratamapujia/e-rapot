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
                <img alt="image" src="/img/fguru/<?= $guru['foto_guru']; ?>" class="rounded-circle author-box-picture" style="width: 110px; height: 110px;">
                <div class="clearfix"></div>
              </div>
              <div class="author-box-details">
                <div class="author-box-name">
                  <h4><?= $guru['nama_guru']; ?></h4>
                </div>
                <div class="author-box-job" style="color: red;"><?= $guru['status']; ?></div><br>
                <div class="font-weight-bold">
                  <b>NIP : </b> <?= $guru['nip']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>PROFESI : </b> <?= $guru['profesi']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>NOMER TELEPON : </b> <?= $guru['telepon_guru']; ?>
                </div>
                <div class="font-weight-bold">
                  <b>ALAMAT : </b> <?= $guru['alamat_guru']; ?>
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