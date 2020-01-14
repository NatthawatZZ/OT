<style >
  .nav-link{
    font-size: 16px;
  }
</style>

<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll" href="index.php" style="font-size:24px;"><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/logo1.png'?>"  height="48"></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link js-scroll " href="index.php"><?php echo $nav1 ;?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="index.php?r=TableMember/create"><?php echo $nav2 ;?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="index.php?r=site/login"><?php echo $nav3 ;?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
