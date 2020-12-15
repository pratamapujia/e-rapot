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
              <a href="tambah-siswa.php" class="btn btn-primary btn-icon icon-left">
                <i class="fas fa-plus"></i> Tambah Data Siswa
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-center">
                      ID Siswa
                    </th>
                    <th>Profile</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat Siswa</th>
                    <th>Telepon Siswa</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($siswa as $s) : ?>
                    <tr>
                      <td><?= $s['id_siswa']; ?></td>
                      <td>
                        <img alt="image" src="/img/fsiswa/<?= $s['foto_siswa']; ?>" width="35">
                      </td>
                      <td><?= $s['nis']; ?></td>
                      <td><?= $s['nama_siswa']; ?></td>
                      <td><?= $s['jk_siswa']; ?></td>
                      <td><?= $s['agama']; ?></td>
                      <td><?= $s['alamat_siswa']; ?></td>
                      <td><?= $s['telepon_siswa']; ?></td>
                      <td>
                        <div class="btn-group mb-3 btn-group-sm" role="group">
                          <a class="btn btn-icon btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail" href="/siswa/<?= $s['id_siswa']; ?>"><i class="fas fa-eye"></i></a>
                          <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit" href="#"><i class="fas fa-edit"></i></a>
                          <a class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus" href="#"><i class="fas fa-trash"></i></a>
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