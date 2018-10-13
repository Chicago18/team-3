<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active"><?php echo $title; ?></li>
    </ol>
    <?php
    if($worksheets != null){
        foreach($worksheets as $worksheet){
          ?>
           <a href="<?php echo $worksheet['id'] ?>">
          <?php
        }
    }
    ?>
    <!-- Page Content -->
    <?php if($output != null){ ?>
      <?php
      foreach($output->css_files as $file): ?>
      	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
      <?php endforeach; ?>
      <?php foreach($output->js_files as $file): ?>
          <script src="<?php echo $file; ?>"></script>
      <?php endforeach; ?>
      <?php echo $output->output; ?>
    <?php
  }
    ?>
  </div>
  <!-- /.container-fluid -->

  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © MCAA 2018</span>
      </div>
    </div>
  </footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->
