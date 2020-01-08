<style >
  ::placeholder{
    opacity: 50%;
  }
</style>
<?php  $nav1=""; ?>
<?php  $nav2=""; ?>
<?php  $nav3=""; ?>
<?php include Yii::app()->basePath .'/../themes/newdemo/include/inc-header.php'; ?>

<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc-css.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

                <body>
                	<div class="limiter">
                    <div id="home" class="intro route bg-image" style="background-image: url(<?php echo Yii::app()->theme->baseUrl.'/assets/img/intro-bg.jpg'?>)">
                      <div class="container-login100">
                      <div class="overlay-itro"></div>
                      <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                				<form class="login100-form validate-form flex-sb flex-w">
                					<span class="login100-form-title p-b-40">
                						เข้าสู่ระบบ
                					</span>
                					<div class="p-t-31 p-b-9">
                						<span class="txt1">
                							รหัสพนักงาน
                						</span>
                					</div>
                					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                						<input class="input100" type="text" name="username" placeholder="รหัสพนักงาน">
                						<span class="focus-input100"></span>
                					</div>

                					<div class="p-t-13 p-b-9">
                						<span class="txt1">
                							รหัสผ่าน
                						</span>


                					</div>
                					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                						<input class="input100" type="password" name="pass" placeholder="รหัสผ่าน">
                						<span class="focus-input100"></span>
                					</div>

                					<div class="container-login100-form-btn m-t-30">
                						<button class="login100-form-btn">
                						เข้าสู่ระบบ
                						</button>
                					</div>

                					<div class="w-full text-center p-t-55">
                            <a href="index.php?r=site/forgot" class="txt2 bo1 m-l-5">
                              ลืมหรัสผ่าน?
                            </a>
                						<span class="txt2">
                							&nbsp;&nbsp;
                						</span>
                						<a href="index.php?r=TableMember/index" class="txt2 bo1">
                							ลงทะเบียน
                						</a>
                					</div>
                				</form>
                			</div>
                		</div>
                  </div>
                	</div>


                	<div id="dropDownSelect1"></div>
