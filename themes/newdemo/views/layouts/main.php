<style >
  .container-fluid{
    font-family: 'Kanit';
  }
	a{
		color:#000;
	}
  .col-md-8{
    margin-top: 7%;
  }
</style>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container-fluid">
  		<div class="navbar-header">
  			<a class="navbar-brand" href="#"><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/logo1.png'?>"  height="32"></a>
  		</div>
  		<div id="navbar" class="navbar-collapse collapse">
  			<ul class="nav navbar-nav navbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <?php echo Yii::app()->user->name ;?>
                  <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <div class="text-center">
              <a class="dropdown-item " href="index.php?r=/site/logout">Logout</a>
              </div>
            </div>
          </li>
  			</ul>
  		</div>
  	</div>
  </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
					<br><br><br><br>
          <ul class="nav nav-sidebar">
            <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/stopwatch.png'?>"  height="24">&nbsp;แบบคำขอเบิกค่าOT</a></li>
            <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/cabriolet.png'?>"  height="24">&nbsp;แบบคำขอเบิกค่าเดินทาง</a></li>
            <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/report.png'?>"  height="24">&nbsp;รายงาน</a></li>
          </ul>
        </div>
        <div class="col-md-8 ">

              <?php echo $content; ?>
        </div>
      </div>

    </div>
</body>
