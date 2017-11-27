<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mebalih - Dashboard</title>
	<link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/admin/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/admin/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php $this->load->view('admin/component/header');?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

      <?php echo validation_errors('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>', '</div>'); ?>
      <?php
      if ($this->session->flashdata('success')) {
          echo '<div class="alert alert-dismissable alert-success"><button type="button" class="close" data-dismiss="alert">×</button>' . $this->session->flashdata('success') . '</div>';
      }
      if ($this->session->flashdata('error')) {
          echo '<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>' . $this->session->flashdata('error') . '</div>';
      }
      ?>
      <?php if (!empty($content)): ?>
          <?php $this->load->view($content); ?>
      <?php else: ?>
          <?php echo 'Halaman tidak ada'; ?>
      <?php endif; ?>
      <!-- End Content -->

  <div class="col-sm-12">
  	<p class="back-link">&copy;2017 Mebalih company.</p>
  </div>
</div>	<!--/.main-->

  <script src="<?php echo base_url();?>assets/admin/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/chart-data.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/easypiechart.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/easypiechart-data.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/custom.js"></script>
  <script>
    window.onload = function () {
      var chart1 = document.getElementById("line-chart").getContext("2d");
      window.myLine = new Chart(chart1).Line(lineChartData, {
        responsive: true,
        scaleLineColor: "rgba(0,0,0,.2)",
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleFontColor: "#c5c7cc"
      });
    };
  </script>

</body>
</html>
