<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
            <?= form_open('login'); ?>
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" id="username" autocomplete="off" required placeholder="Username"  value="<?= set_value('username') ?>"/>
            </div>
            <div class="input-field-password" id="show_hide_password">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" minlength="8" autocomplete="off" required placeholder="Password"/>
              <button type="button"><span class="fas fa-eye-slash" aria-hidden="false"></span></button>
            </div>
            <div class="remember">
                <input class="remember-input" id="rememberme" type="checkbox" name="rememberme" />
                <label  class="remember-label"  for="rememberme">Remember Me</label>
            </div>

            <input type="submit" value="Login" class="btn solid" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome Back</h3>
            <p>
              Login Page Administrator Sri Intan Perkasa,<br>
              Have a good day
            </p>
          </div>
          <!-- <img src="<?= $logo_source = (empty($dataapp['logo_instansi'])) ? base_url('assets/img/clock-image.png') : (($dataapp['logo_instansi'] == 'default-logo.png') ? base_url('assets/img/clock-image.png') : base_url('storage/setting/' . $dataapp['logo_instansi'])); ?>" class="image" style="width:50%;"> -->
          <img src="<?php echo base_url('assets/img/image_4.svg') ?>" class="image" alt=""/>
        </div>
      </div>
    </div>
    <!-- Javascript file -->
    <script src="<?php echo base_url('assets/login/app.js') ?>"></script>
</body>


