<?php  $nav1=""; ?>
<?php  $nav2=""; ?>
<?php  $nav3=""; ?>
<?php include Yii::app()->basePath .'/../themes/newdemo/include/inc-header.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc-css.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <style >
      ::placeholder{
        opacity: 50%;
       }
    </style>
                <body>
                	<div class="limiter">
                    <div id="home" class="intro route bg-image" style="background-image: url(<?php echo Yii::app()->theme->baseUrl.'/assets/img/intro-bg.jpg'?>)">
                      <div class="container-login100">
                      <div class="overlay-itro"></div>
                      <div class="wrap-login100 p-l-80 p-r-80 p-t-20 p-b-20">
                				<form class="login100-form validate-form flex-sb flex-w">
                					<span class="login100-form-title p-b-53">
                						ลงทะเบียน
                					</span>
                            <div class="form-row">
                            <div class="col-12">
                          <div class="p-t-0 p-b-9">
                            <span class="txt1">
                              รหัสพนักงาน
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="username" placeholder="รหัสพนักงาน">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                          <div class="col-4">
                					<div class="p-t-5 p-b-9 ">
                            <span class="txt1">
                              คำนำหน้า
                            </span>
                            <div class="wrap-input100 validate-input" data-validate = "Username is required">
                              <input class="input100" type="text" name="username" placeholder="คำนำหน้า">
                              <span class="focus-input100"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-8">
                        <div class="p-t-5 p-b-9 ">
                          <span class="txt1">
                            ชื่อ-นามสกุล
                          </span>
                          <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="username" placeholder="ชื่อ-นามสกุล">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                      </div>
                        <div class="col-12">
                          <div class="p-t-10 p-b-9">
                            <span class="txt1">
                              เลขบัตรประจำตัวประชาชน
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="username" placeholder="เลขบัตรประจำตัวประชาชน" min="13">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="p-t-10 p-b-9">
                            <span class="txt1">
                              หมายเลขโทรศัพท์
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="tel" name="username" placeholder="เบอร์โทร" min="9" max="10">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="p-t-10 p-b-9">
                            <span class="txt1">
                              Email
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Email is required">
                            <input class="input100" type="email" name="username" placeholder="Email">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                        <div class="col-12">
                					<div class="p-t-13 p-b-9">
                						<span class="txt1">
                							Password
                						</span>
                					</div>
                					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                						<input class="input100" type="password" name="pass" placeholder="Password">
                						<span class="focus-input100"></span>
                					</div>
                        </div>
                        <div class="col-12">
                          <div class="p-t-10 p-b-9">
                            <span class="txt1">
                            ตำแหน่ง
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Department is required">
                            <select class="input100" >
                              <option  disabled selected >Department / ตำแหน่ง</option>
                                <option>Event Marketing Director</option>
                                <option>Human Resources Manager</option>
                                <option>Creative Event Marketing Manager</option>
                                <option>Creative and Graphic Design</option>
                                <option>Creative and Graphic Designer</option>
                                <option>Project Manager</option>
                                <option>Senior System Analyst</option>
                                <option>Systems Analyst</option>
                                <option>Senior Programer</option>
                                <option>Programer</option>
                                <option>Web Developer</option>
                              </select>
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                              </div>
                					<div class="container-login100-form-btn m-t-17">
                						<button class="login100-form-btn">
                						ลงทะเบียน
                						</button>
                					</div>

                					<div class="w-full text-center p-t-55">
                						<a href="index.php?r=site/login" class="txt2 bo1">
                							เข้าสู่ระบบ
                						</a>
                					</div>
                				</form>
                			</div>
                		</div>
                  </div>
                	</div>
                	<div id="dropDownSelect1"></div>
