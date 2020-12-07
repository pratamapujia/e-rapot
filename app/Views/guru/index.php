<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="card card-primary">
      <div class="card-header">
        <h4>Data Guru</h4>
        <div class="card-header-action">
          <a href="/guru/create" class="btn btn-primary btn-icon icon-left">
            <i class="fas fa-plus"></i> Tambah Data Guru
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($guru as $g) : ?>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-warning author-box">
            <div class="card-header">
              <h4></h4>
              <div class="card-header-action">
                <div class="dropdown">
                  <a href="" data-toggle="dropdown" class="btn"><i class="fas fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu">
                    <a href="/guru/<?= $g['id_guru']; ?>" class="dropdown-item has-icon"><i class="fas fa-eye"></i>Detail</a>
                    <a href="/guru/edit" class="dropdown-item has-icon"><i class="fas fa-edit"></i>Edit</a>
                    <a href="#" class="dropdown-item has-icon"><i class="fas fa-trash"></i>Hapus</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="author-box-center">
                <img src="/img/fguru/<?= $g['foto_guru']; ?>" alt="image" class="rounded-circle author-box-picture" style="width: 100px; height: 100px;">
                <div class="clearfix"></div>
                <div class="author-box-name">
                  <a><?= $g['nama_guru']; ?></a>
                </div>
                <div class="author-box-job"><?= $g['status']; ?></div>
                <div class="mb-2 mt-3">
                  <div class="text font-weight-bold"><?= $g['telepon_guru']; ?></div>
                </div>
                <div class="author-box-job">
                  <i class="fas fa-map-marker-alt"><?= $g['alamat_guru']; ?></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>