<?php
include('../../ADMIN/config/conex.php');
include('../layout/Parte_001.php');
include('../../ADMIN/app/controladores/Categoria/index.php');
?>
<style>
.form-container {
  max-width: 700px; /* Ajusta este valor según tus necesidades */
  margin: 0 auto; /* Centra el contenedor */
}


</style>



<main class="cs-page-wrapper">
  <nav class="bg-secondary mb-3" aria-label="breadcrumb">
    <div class="container">
      <ol class="breadcrumb breadcrumb-alt mb-0">
        <li class="breadcrumb-item">
          <a href="index.html"><i class="cxi-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Registro</li>
      </ol>
    </div>
  </nav>

  <section class="container pt-3 pt-md-4 pb-3 pb-sm-4 pb-lg-5 mb-4">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 form-container">
      <!-- Nav Tabs -->
      <ul class="nav nav-tabs justify-content-center" id="authTabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Registro rápido</a>
        </li>
      </ul>

      <!-- Tab Content -->
      <div class="tab-content pt-4" id="authTabsContent">
        <!-- Iniciar Sesión Tab -->
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
          <div class="px-md-5">
            <h3 class="modal-title mt-4 mb-0 text-center">Iniciar Sesión</h3>
            <p class="font-size-sm text-muted text-center">Sign in to your account using email and password provided during registration.</p>
            <form>
              <div class="form-group">
                <label for="signin-email">Email</label>
                <input type="email" class="form-control" placeholder="Your email address" required="">
              </div>
              <div class="form-group">
                <label for="signin-password" class="form-label">Password</label>
                <div class="cs-password-toggle input-group-overlay">
                  <input type="password" class="form-control appended-form-control" id="signin-password" placeholder="Your password" required="">
                  <div class="input-group-append-overlay">
                    <label class="btn cs-password-toggle-btn input-group-text">
                      <input type="checkbox" class="custom-control-input">
                      <i class="cxi-eye cs-password-toggle-indicator"></i>
                      <span class="sr-only">Show password</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center form-group">
                <a href="#" class="font-size-sm text-decoration-none">Olvido su contraseña?</a>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
              <p class="font-size-sm pt-4 mb-0">
                No tienes una cuenta?
                <a href="#" class="font-weight-bold text-decoration-none">Registrate</a>
              </p>
            </form>
          </div>
        </div>

        <!-- Registro rápido Tab -->
        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
          <div class="px-md-5">
            <h3 class="modal-title mt-4 mb-0 text-center">Registro rápido</h3>
            <p class="font-size-sm text-muted text-center">Sign up for a new account.</p>
            <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
                    <label for="register-nombres">Nombres completos</label>
                    <input type="text" class="form-control" placeholder="Names" required="">
                  </div>
                  <div class="col-lg-6">
                    <label for="register-apellidos">Apellidos completos</label>
                    <input type="text" class="form-control" placeholder="Fullname" required="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="register-email">Email</label>
                <input type="email" class="form-control" placeholder="Your email address" required="">
              </div>
              <div class="form-group">
                <label for="register-password" class="form-label">Password</label>
                <div class="cs-password-toggle input-group-overlay">
                  <input type="password" class="form-control appended-form-control" id="register-password" placeholder="Your password" required="">
                  <div class="input-group-append-overlay">
                    <label class="btn cs-password-toggle-btn input-group-text">
                      <input type="checkbox" class="custom-control-input">
                      <i class="cxi-eye cs-password-toggle-indicator"></i>
                      <span class="sr-only">Show password</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="remember-me" checked="">
                  <label for="remember-me" class="custom-control-label">Remember me</label>
                </div>
              
              </div>
              <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
              <p class="font-size-sm pt-4 mb-0">
                Ya tienes una cuenta?
                <a href="#" class="font-weight-bold text-decoration-none">Iniciar sesión</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php
include('../layout/Parte_002.php');
?>



