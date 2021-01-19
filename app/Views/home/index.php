<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-xl-3 col-lg-6">
        <div class="card card-warning">
          <a href="/guru" class="card-body card-type-3">
            <div class="row">
              <div class="col">
                <h6 class="text-muted mb-0">Jumlah Guru</h6>
                <span class="font-weight-bold mb-0">50</span>
              </div>
              <div class="col-auto">
                <div class="card-circle l-bg-orange text-white">
                  <i class="fas fa-chalkboard-teacher"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-info">
          <a href="/siswa" class="card-body card-type-3">
            <div class="row">
              <div class="col">
                <h6 class="text-muted mb-0">Jumlah Siswa</h6>
                <span class="font-weight-bold mb-0">562</span>
              </div>
              <div class="col-auto">
                <div class="card-circle l-bg-cyan text-white">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-success">
          <a href="/mapel" class="card-body card-type-3">
            <div class="row">
              <div class="col">
                <h6 class="text-muted mb-0">Jumalah Mapel</h6>
                <span class="font-weight-bold mb-0">30</span>
              </div>
              <div class="col-auto">
                <div class="card-circle l-bg-green text-white">
                  <i class="fas fa-book-open"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-primary">
          <a href="/kelas" class="card-body card-type-3">
            <div class="row">
              <div class="col">
                <h6 class="text-muted mb-0">Jumlah Kelas</h6>
                <span class="font-weight-bold mb-0">20</span>
              </div>
              <div class="col-auto">
                <div class="card-circle l-bg-purple text-white">
                  <i class="fas fa-building"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>