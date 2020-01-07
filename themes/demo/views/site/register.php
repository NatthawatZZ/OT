<?php include Yii::app()->basePath . '/../themes/demo/include/inc-Lia.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<style >
  .inputWithIcon input{
    padding-left: 40px;
    font-family: 'Kanit' ;
    font-size: 28px;
    border-radius: 18px;
    background-color: #ECEEF0;
  }
  .inputWithIcon select{
    padding-left: 40px;
    font-family: 'Kanit' ;
    font-size: 28px;
    border-radius: 18px;
      background-color: #ECEEF0;
  }
  .inputWithIcon{
    position: relative;
  }
  .inputWithIcon i{
    position: absolute;
    left: 8;
    top: 8px;
    padding: 9px 8px;
    color: #aaa;
    transition: 1xs;
  }
  .btn{
    font-size: 30px;
  }

  .login-form-bg {
    margin-top: 15%;
  }
  hr.new5 {
  border: 5px solid blue;
  border-radius: 5px;
  width: 70%;
}
.selectpo{
  color: gray;
}
</style>
    <div class="login-form-bg ">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="form-input-content">
                              <h1 class="text-center"><b>CREATE NEW ACCOUNT</b></h1><hr class="new5">
                                <form class="mt-5 mb-5 login-input">
                                  <div class="form-row">
                                      <div class="col">
                                    <div class="inputWithIcon">
                                        <input type="text" class="form-control" placeholder="Name / ชื่อ" required>
                                    </div>
                                      </div>
                                      <br>
                                        <div class="col">
                                    <div class="inputWithIcon">
                                      <input type="text" class="form-control" placeholder="Surename / นามสกุล" required>
                                    </div><br>
                                  </div>
                                  </div>

                                <div class="inputWithIcon">
                                  <input type="email" class="form-control" placeholder="Email / อีเมลล์" required>
                                </div><br>


                                <div class="inputWithIcon">
                                  <input type="password" class="form-control" placeholder="Password / รหัสผ่าน" required>
                                </div><br>
                                <div class="inputWithIcon">
                                  <select class="form-control selectpo" >
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
                                </div><br>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg w-100"><b>Sign up</b></button>
                                </div>
                              </div>

                                    </div>

                                </form>

                            </div>
                    </div>
                </div>
