<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc-css.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <style >
      body{
      font-family: 'Kanit';
          }
      ::placeholder{
        opacity: 50%;
      }
      button{
        font-family: 'Kanit'
      }
    </style>
                <body>
                	<div class="limiter">
                    <div id="home" class="intro route bg-image" style="background-image: url(<?php echo Yii::app()->theme->baseUrl.'/assets/img/intro-bg.jpg'?>)">
                      <div class="container-login100">
                      <div class="overlay-itro"></div>
                      <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                				<form class="login100-form validate-form flex-sb flex-w">
                					<span class="login100-form-title p-b-53">
                						ลืมรหัสผ่าน
                					</span>
                					<div class="p-t-3 p-b-9">
                						<span class="txt1">
                						    Email
                						</span>
                					</div>
                					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                						<input class="input100" type="email" name="username" placeholder="Email">
                						<span class="focus-input100"></span>
                					</div>

                					<!-- <div class="p-t-13 p-b-9">
                						<span class="txt1">
                							Password
                						</span>


                					</div>
                					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                						<input class="input100" type="password" name="pass" placeholder="Password">
                						<span class="focus-input100"></span>
                					</div> -->

                					<div class="container-login100-form-btn m-t-30">
                						<button class="login100-form-btn">
                						ส่ง
                						</button>
                					</div>
                				</form>
                			</div>
                		</div>
                  </div>
                	</div>


                	<div id="dropDownSelect1"></div>
