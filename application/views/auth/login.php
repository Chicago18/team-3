<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><h1><?php echo lang('login_heading');?></h1>
      <p><?php echo lang('login_subheading');?></p></div>
      <div class="card-body">
        <div id="infoMessage"><?php echo $message;?></div>
        <form method="POST" action="login">
          <div class="form-group">
            <div class="form-label-group">
              <p>
                <?php echo lang('login_identity_label', 'identity');?>
                <?php echo form_input($identity);?>
              </p>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <p>
                <?php echo lang('login_password_label', 'password');?>
                <?php echo form_input($password);?>
              </p>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <p>
                  <?php echo lang('login_remember_label', 'remember');?>
                  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                </p>
              </label>
            </div>
          </div>
          <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.html"><?php echo lang('login_forgot_password');?></a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
