<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="card card-primary">
      <div class="card-header">
        <h4>Data Guru</h4>
        <div class="form-inline mr-auto">
          <form action="" method="POST">
            <div class="search-element">
              <input class="form-control" name="cari" type="text" placeholder="Search">
              <button class="btn" name="submit" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </div>
        <div class="card-header-action">
          <a href="#" class="btn btn-danger btn-icon icon-left">
            <i class="far fa-file-alt"></i> Laporan
          </a>
          <a href="<?= base_url(); ?>/guru/create" class="btn btn-primary btn-icon icon-left">
            <i class="fas fa-plus"></i> Tambah Data Guru
          </a>
        </div>
      </div>
    </div>
    <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="row">
      <?php foreach ($guru as $g) : ?>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-warning author-box">
            <div class="card-header">
              <h4></h4>
              <div class="card-header-action">
                <div class="dropdown">
                  <a data-toggle="dropdown" class="btn"><i class="fas fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu">
                    <a href="<?= base_url(); ?>/guru/detail/<?= $g['id_guru']; ?>" class="dropdown-item has-icon"><i class="fas fa-eye"></i>Detail</a>
                    <a href="<?= base_url(); ?>/guru/edit/<?= $g['id_guru']; ?>" class="dropdown-item has-icon"><i class="fas fa-edit"></i>Edit</a>
                    <a href="<?= base_url(); ?>/guru/delete/<?= $g['id_guru']; ?>" class="dropdown-item has-icon text-danger hapus"><i class="fas fa-trash"></i>Hapus</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="author-box-center">
                <img src="<?= base_url(); ?>/img/fguru/<?= $g['foto_guru']; ?>" alt="image" class="rounded author-box-picture" style="width: 100px; height: 130px;">
                <div class="clearfix"></div>
                <div class="author-box-name">
                  <a><?= $g['nama_guru']; ?></a>
                </div>
                <div class="author-box-job"><?= $g['status'] == 'Aktif' ? "<div class='text-success'><i class='fas fa-check-circle'></i></div>" : "<div class='text-danger'><i class='fas fa-times-circle'></i></div>"; ?></div>
                <div class="mb-2 mt-3">
                  <div class="text font-weight-bold">
                    <i class="fas fa-phone"></i> <?= $g['telepon_guru']; ?>
                  </div>
                </div>
                <div class="author-box-job">
                  <i class="fas fa-map-marker-alt"></i> <?= $g['alamat_guru']; ?>
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