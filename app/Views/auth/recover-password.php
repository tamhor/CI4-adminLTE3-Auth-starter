<?= $this->extend('auth/auth/_layout') ?>
<?= $this->section('content') ?>

<div class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
        <form action="<?= base_url('AuthController/recover_password') ?>" method="post">
          <input type="hidden" name="recovery_key" value="<?= $key ?>">
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="confpassword" class="form-control" placeholder="Confirm Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Change password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mt-3 mb-1">
          <a href="/login">Login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>
<?php if (session()->getFlashdata('msg')) : ?>
  <?= session()->getFlashdata('msg') ?>
<?php endif; ?>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
  $(function() {
    toastr.options.timeOut = 0;
    toastr.options.extendedTimeOut = 0;
    var error = $('.errors').html();
    if (error) {
      toastr.error(error)
      $('.errors').hide();
    }
    var success = $('.success').html();
    if (success) {
      toastr.success(success);
      $('.success').hide();
    }
  });
</script>
<?= $this->endSection() ?>