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
    <!-- <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> <?= session()->getFlashdata('pesan'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?> -->
    <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
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
                    <a href="/guru/detail/<?= $g['id_guru']; ?>" class="dropdown-item has-icon"><i class="fas fa-eye"></i>Detail</a>
                    <a href="/guru/edit/<?= $g['id_guru']; ?>" class="dropdown-item has-icon"><i class="fas fa-edit"></i>Edit</a>
                    <!-- <form action="/guru/<?= $g['id_guru']; ?>" method="POST">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="dropdown-item has-icon text-danger btn-hapus" style="font-size: 13px;"><i class="fas fa-trash" style="padding-top: 9px;"></i>Hapus</button>
                    </form> -->
                    <a href="/guru/delete/<?= $g['id_guru']; ?>" class="dropdown-item has-icon text-danger hapus"><i class="fas fa-trash"></i>Hapus</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="author-box-center">
                <img src="/img/fguru/<?= $g['foto_guru']; ?>" alt="image" class="rounded author-box-picture" style="width: 100px; height: 130px;">
                <div class="clearfix"></div>
                <div class="author-box-name">
                  <a><?= $g['nama_guru']; ?></a>
                </div>
                <div class="author-box-job"><?= $g['status']; ?></div>
                <div class="mb-2 mt-3">
                  <div class="text font-weight-bold"><?= $g['telepon_guru']; ?></div>
                </div>
                <div class="author-box-job">
                  <i class="fas fa-map-marker-alt"> <?= $g['alamat_guru']; ?></i>
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