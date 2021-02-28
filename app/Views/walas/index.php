<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-danger">
          <div class="card-header">
            <h4>Data Wali Kelas</h4>
            <div class="card-header-action">
              <a href="/walas/create" class="btn btn-primary btn-icon icon-left">
                <i class="fas fa-plus"></i> Tambah Data Wali Kelas
              </a>
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
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-left">
                      ID Walas
                    </th>
                    <th class="text-left">Profile</th>
                    <th class="text-left">NIP</th>
                    <th class="text-left">Nama Guru</th>
                    <th class="text-left">Mengampu Mapel</th>
                    <th class="text-left">Wali Kelas</th>
                    <th class="text-left">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($walas as $w) : ?>
                    <tr>
                      <td class="text-left"><a href="/guru/detail/<?= $w['id_guru']; ?>"><?= $w['id_walas']; ?></a></td>
                      <td>
                        <img alt="image" src="/img/fguru/<?= $w['foto_guru']; ?>" width="35">
                      </td>
                      <td class="text-left"><?= $w['nip']; ?></td>
                      <td class="text-left"><?= $w['nama_guru']; ?></td>
                      <td class="text-left"><?= $w['nama_mapel']; ?></td>
                      <td class="text-left"><?= $w['nama_kelas']; ?></td>
                      <td class="text-left">
                        <div class="btn-group mb-3 btn-group-sm" role="group">
                          <!-- <a class="btn btn-icon btn-info" data-toggle="tooltip" data-placement="left" title="Detail" href="/walas/<?= $w['id_walas']; ?>" style="padding-top: 6px;"><i class="fas fa-eye"></i></a> -->
                          <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="left" title="Edit" href="/walas/edit/<?= $w['id_walas']; ?>"><i class="fas fa-edit"></i></a>
                          <!-- <form action="/walas/<?= $w['id_walas']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" data-toggle="tooltip" data-placement="left" title="Hapus" class="btn btn-icon btn-danger" onclick="return confirm('apakah anda yakin mau menghapus data ini !!!')"><i class="fas fa-trash"></i></button>
                          </form> -->
                          <a href="/walas/delete/<?= $w['id_walas']; ?>" class="btn btn-icon btn-danger hapus" data-toggle="tooltip" data-placement="left" title="Hapus"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
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