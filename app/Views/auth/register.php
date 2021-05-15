<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="card card-primary">
          <div class="card-header">
            <h4><?= lang('Auth.register') ?></h4>
          </div>
          <div class="card-body">
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="<?= route_to('register') ?>" method="post">
              <?= csrf_field() ?>
              <div class="form-group">
                <label for="username"><?= lang('Auth.username') ?></label>
                <input id="username" type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
              </div>
              <div class="form-group">
                <label for="email"><?= lang('Auth.email') ?></label>
                <input id="email" type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" value="<?= old('email') ?>">
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="password" class="d-block"><?= lang('Auth.password') ?></label>
                  <input id="password" type="password" class="form-control pwstrength <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" data-indicator="pwindicator" name="password" autocomplete="off">
                  <div id="pwindicator" class="pwindicator">
                    <div class="bar"></div>
                    <div class="label"></div>
                  </div>
                </div>
                <div class="form-group col-6">
                  <label for="password2" class="d-block"><?= lang('Auth.repeatPassword') ?></label>
                  <input id="password2" type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block"><?= lang('Auth.register') ?></button>
              </div>
            </form>
          </div>
          <div class="mb-4 text-muted text-center">
            <?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>