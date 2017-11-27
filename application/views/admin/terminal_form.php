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
  <?php foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
</head>
<body>
<?php $this->load->view('admin/component/header');?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<h1 class="page-header"></h1>
  <div class="panel panel-default">
      <div class="panel-heading"><?php echo $content_name;?> </div>
      <div class="panel-body">
          <?php echo $output; ?>
      </div>
    </div>

  <div class="col-sm-12">
  	<p class="back-link">&copy;2017 Mebalih company.</p>
  </div>
</div>	<!--/.main-->


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
