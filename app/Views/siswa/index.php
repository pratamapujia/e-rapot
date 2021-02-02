<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-danger">
          <div class="card-header">
            <h4>Data Siswa</h4>
            <div class="card-header-action">
              <a href="/siswa/create" class="btn btn-primary btn-icon icon-left">
                <i class="fas fa-plus"></i> Tambah Data Siswa
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
                    <th class="text-left">
                      ID Siswa
                    </th>
                    <th class="text-left">Profile</th>
                    <th class="text-left">NIS</th>
                    <th class="text-left">Nama Siswa</th>
                    <th class="text-left">Jenis Kelamin</th>
                    <th class="text-left">Agama</th>
                    <th class="text-left">Alamat Siswa</th>
                    <th class="text-left">Telepon Siswa</th>
                    <th class="text-left">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($siswa as $s) : ?>
                    <tr>
                      <td class="text-left"><?= $s['id_siswa']; ?></td>
                      <td>
                        <img alt="image" src="/img/fsiswa/<?= $s['foto_siswa']; ?>" width="35">
                      </td>
                      <td class="text-left"><?= $s['nis']; ?></td>
                      <td class="text-left"><?= $s['nama_siswa']; ?></td>
                      <td class="text-left"><?= $s['jk_siswa']; ?></td>
                      <td class="text-left"><?= $s['agama']; ?></td>
                      <td class="text-left"><?= $s['alamat_siswa']; ?></td>
                      <td class="text-left"><?= $s['telepon_siswa']; ?></td>
                      <td class="text-left">
                        <div class="btn-group mb-3 btn-group-sm" role="group">
                          <a class="btn btn-icon btn-info" data-toggle="tooltip" data-placement="left" title="Detail" href="/siswa/<?= $s['id_siswa']; ?>"><i class="fas fa-eye"></i></a>
                          <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="left" title="Edit" href="/siswa/edit/<?= $s['id_siswa']; ?>"><i class="fas fa-edit"></i></a>
                          <form action="/siswa/<?= $s['id_siswa']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" data-toggle="tooltip" data-placement="left" title="Hapus" class="btn btn-icon btn-danger" onclick="return confirm('apakah anda yakin mau menghapus data ini !!!')"><i class="fas fa-trash"></i></button>
                          </form>
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