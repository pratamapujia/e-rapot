<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-info">
          <div class="card-header">
            <h4>Data Kelas</h4>
            <div class="card-header-action">
              <a href="/kelas/create" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Kelas
              </a>
            </div>
          </div>
          <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>SUCCESS</strong> <?= session()->getFlashdata('pesan'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-left">ID Kelas</th>
                    <th class="text-left">Tingkat</th>
                    <th class="text-left">Nama Kelas</th>
                    <th class="text-left">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($kelas as $k) : ?>
                    <tr>
                      <td class="text-left"><?= $k['id_kelas']; ?></td>
                      <td class="text-left"><?= $k['tingkat']; ?></td>
                      <td class="text-left"><?= $k['nama_kelas']; ?></td>
                      <td class="text-left">
                        <div class="btn-group mb-3 btn-group-sm" role="group">
                          <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="left" title="Edit" href="/kelas/edit/<?= $k['id_kelas']; ?>"><i class="fas fa-edit" style="padding-top: 5.5px; padding-left: 5px;"></i></a>
                          <form action="/kelas/<?= $k['id_kelas']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" data-toggle="tooltip" data-placement="left" title="Hapus" class="btn btn-icon btn-danger" onclick="return confirm('apakah anda yakin mau menghapus data ini !!!')"><i class="fas fa-trash"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>