<?php include Yii::app()->basePath . '/../themes/demo/include/inc-con.php'; ?>
<style >
  .btn-lg {
    border-radius: 18px;
  }
  .icon-plus{
      color: #1ACC27;
      font-size: 20px;
  }
  .icon-social-instagram{
      color: #EF6D81;
      font-size: 30px;
  }
  .icon-social-facebook{
      color: #2E74D1;
      font-size: 30px;
  }
  .time-input{
    margin-left: 100%;
  }
  .input--style-4{
    font-family: 'Kanit' ;
    border-radius: 18px;
    background-color: #ECEEF0;
  }
  .inputWithIcon i{
    position: absolute;
    left: 8;
    top: 10;
    padding: 9px 8px;
    color: #aaa;
    transition: 1xs;
  }
  ::placeholder{
    opacity: 0.5;
  }

</style>


  <div class="container">
  <div class="content">
    <div class="page-inner">
      <div class="card-body">
									<div class="row">
										<div class="col-4 col-md-4">
											<div class="nav flex-column nav-pills nav-success nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
												<a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
													<i class="icon-hourglass"></i>
													เบิกค่า OT พนักงาน
												</a>
												<a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
													<i class="icon-plane"></i>
													ค่าเดินทางยานพาหนะ
												</a>
											</div>
										</div>
                      <?php include Yii::app()->basePath . '/../themes/demo/include/content_ot.php'; ?>
									</div>
			</div>
    </div>
  </div>
</div>
