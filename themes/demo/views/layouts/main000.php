<!DOCTYPE html>
<html 	>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl.'/assets/img/icon.ico'?>">
	<?php //include Yii::app()->basePath . '/../themes/demo/include/inc-header.php'; ?>
	<?php include Yii::app()->basePath .'/../themes/demo/include/inc.php'; ?>



	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

</head>
<body>
<div class="wrapper">
	<div class="logo-header" data-background-color="dark">
  <div class="nav-toggle" >
    <button class="btn btn-toggle toggle-sidebar">
      <i class="icon-menu"></i>
    </button>
  </div>
  </div>

		<div class="sidebar sidebar-style-1" data-background-color="dark">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-dark">
						<li class="mx-3" >
							<a href="index.php?r=site/admin" class="btn btn-primary btn-md"><span class="btn-label mx-3"> <i class="fa fa-user"></i></span>ข้อมูลส่วนตัว</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="index.php?r=site/index" class="btn btn-warning btn-md"><span class="btn-label mx-3"> <i class="fa fa-hourglass-half"></i></span>ค่า OT</a>
						</li>
						<li class="mx-3 mt-4" >
							<a href="index.php?r=site/index" class="btn btn-success btn-md"><span class="btn-label mx-3"> <i class="fa fa-car"></i></span>ค่าเดินทาง</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
            <?php echo $content; ?>
					</div>
			</div>
		</div>
	</body>
</html>
