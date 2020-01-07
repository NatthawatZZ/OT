<?php include Yii::app()->basePath . '/../themes/demo/include/inc-Lia.php'; ?>
<style >
  .inputWithIcon input{
    padding-left: 40px;
    font-family: 'Kanit' ;
    font-size: 28px;
    background-color: #ECEEF0;
    border-radius: 18px;
  }
  .inputWithIcon{
    position: relative;
  }
  .inputWithIcon i{
    position: absolute;
    left: 4;
    top: 8px;
    padding: 9px 8px;
    color: #aaa;
    font-size: 20px;
    transition: 1xs;
  }
  .inputWithIcon input:focus + i{
    color:dodgerBlue;
  }
  .btn{
    font-size: 28px;
  }
  .pright{
    margin-left: 30%;
    font-family: 'Kanit' ;
    font-size: 18px;
    color: #aaa;
  }
  .login-form-bg {
    margin-top: 15%;
  }
  hr.new5 {
  border: 5px solid blue;
  border-radius: 5px;
  width: 100px;
}
</style>
    <div class="login-form-bg ">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="form-input-content">
                              <h1 class="text-center"><b>SIGN IN</b></h1><hr class="new5">
                                <form class="mt-5 mb-5 login-input">
                                    <div class="inputWithIcon">
                                        <input type="text" class="form-control" placeholder="Email / Username" required>
                                        <i class="icon-user" align-hidden="true"></i>
                                    </div><br>
                                    <div class="inputWithIcon">
                                      <input type="password" class="form-control" placeholder="Password" required>
                                      <i class="icon-lock" align-hidden="true"></i>
                                </div><br>
                                <div class="text-center">
                                    <a href="index.php?r=site/index"><button class="btn btn-primary btn-lg w-100"><b>Sign in</b></button></a>
                                </div>
                            <br><p class="pright"><a href="#"><strong>ลืมรหัสผ่าน</strong></a><strong>New member? </strong><a href="index.php?r=site/register"><strong>ลงทะเบียน</strong></a></p>
                                    </div>
                                </form>

                            </div>
                    </div>
                </div>
