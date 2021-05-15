<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="card card-primary">
          <div class="card-header">
            <h4><?= lang('Auth.loginTitle') ?></h4>
          </div>
          <div class="card-body">
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form method="POST" action="<?= route_to('login') ?>">
              <?= csrf_field() ?>
              <?php if ($config->validFields === ['email']) : ?>
                <div class="form-group">
                  <label for="login"><?= lang('Auth.email') ?></label>
                  <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login">
                  <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                  </div>
                </div>
              <?php else : ?>
                <div class="form-group">
                  <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                  <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login">
                  <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                  </div>
                </div>
              <?php endif; ?>
              <div class="form-group">
                <label for="password" class="control-label"><?= lang('Auth.password') ?></label>
                <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
                <div class="invalid-feedback">
                  <?= session('errors.password') ?>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block"><?= lang('Auth.loginAction') ?></button>
              </div>
            </form>
          </div>
        </div>
        <div class="mt-5 text-muted text-center">
          Don't have an account? <a href="<?= route_to('register') ?>">Create an account</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>