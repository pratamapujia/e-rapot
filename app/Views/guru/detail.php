<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-7">
          <div class="card author-box card-primary">
            <div class="card-body">
              <div class="author-box-left"><br>
                <img alt="image" src="/img/fguru/<?= $guru['foto_guru']; ?>" class="rounded author-box-picture" style="width: 110px; height: 140px;">
                <div class="clearfix"></div>
              </div>
              <div class="author-box-details">
                <div class="author-box-name">
                  <h4><?= $guru['nama_guru']; ?></h4>
                </div>
                <div class="author-box-job"><?= $guru['status'] == 'Aktif' ? "<div class='text-success'>Aktif</div>" : "<div class='text-danger'>Tidak Aktif</div>"; ?></div><br>
                <dl class="row">
                  <dt class="col-sm-3">
                    ID Guru
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $guru['id_guru']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    NIP Guru
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $guru['nip']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Kelamin
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $guru['jk_guru']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Profesi
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $guru['profesi']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    No Telp
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $guru['telepon_guru']; ?>
                  </dd>
                  <dt class="col-sm-3">
                    Alamat
                  </dt>
                  <dd class="col-sm-9">
                    : <?= $guru['alamat_guru']; ?>
                  </dd>
                </dl>
                <div class="card-footer text-right">
                  <a href="/guru" class="btn btn-sm btn-primary" type="button">Kembali</a>
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