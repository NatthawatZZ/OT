<?php include Yii::app()->basePath . '/../themes/demo/include/inc.php'; ?>


<div class="col-7 col-md-8">
  <div class="tab-content" id="v-pills-with-icon-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
      <div class="wrapper wrapper--w100" >
          <div class="card card-">
              <div class="card-body">
                  <h2 class="title">เบิกค่า OT พนักงาน</h2>
                  <form method="POST">
                    <div class="col-6">
                    <div class="input-group">
                        <input class="input--style-4" type="text" placeholder="10/10/2020">
                    </div>
                  </div>
                    <div class="col-8">
                        <div class="input-group">
                            <label class="label">ขอเบิกค่า</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">ทำงานล่วงเวลา
                                    <input type="radio" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">ทำงานวันหยุด
                                    <input type="radio" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">ทำงานล่วงเวลาในวันหยุด
                                    <input type="radio" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">ค่าคอมมิชชั่น_
                                    <input type="radio" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div><br>
                      <div class="row row-space">
                          <div class="col-3">
                              <div class="input-group">
                                  <label class="label">เมื่อวันที่</label>
                                  <div class="input-group-icon inputWithIcon">
                                      <input class="input--style-4 js-datepicker" type="text">
                                      <i class="icon-calendar input-icon js-btn-calendar"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="col-3">
                              <div class="input-group">
                                  <label class="label">ตั้งแต่เวลา</label>
                                  <div class="input-group-icon">
                                      <input class="input--style-4 " type="text" placeholder="00:00 น.">

                                  </div>
                              </div>
                          </div>
                          <div class="col-1">
                            <button type="button" name="button">
                            <i class="icon-plus"></i></button>
                          </div>
                      </div>
                      <div class="row row-space">
                          <div class="col-8">
                              <div class="input-group">
                                  <label class="label">งานที่ได้รับมอบหมาย</label>
                                <textarea  class="input--style-4" rows="5" cols="50"></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="row row-space">
                          <div class="col-4">
                              <div class="input-group">
                                  <label class="label">ขอเบิกค่าตอบแทนเป็นเงิน</label>
                              <input class="input--style-4" type="text" placeholder="1,000 บาท">
                              </div>
                          </div>
                      </div>
                      <div class="p-t-15" align="right">
                          <button class="btn btn--radius-2 btn--blue btn-lg w-50" type="submit">ส่ง</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
     </div>
    <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
      <div class="wrapper wrapper--w100" >
          <div class="card card-">
              <div class="card-body">
                  <h2 class="title">ค่าเดินทางยานพาหนะ และค่าอื่นๆ</h2>
                  <form method="POST">

                  <div class="row row-space">
                    <div class="col-4">
                    <div class="input-group">
                        <input class="input--style-4" type="text" placeholder="10/10/2020">
                    </div>
                  </div>
                      <div class="col-4">
                          <div class="input-group">
                              <label class="label">เมื่อวันที่</label>
                              <div class="input-group-icon inputWithIcon">
                                  <input class="input--style-4 js-datepicker" type="text">
                                  <i class="icon-calendar input-icon js-btn-calendar"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">ค่าเดินทางยานพาหนะ
                                    <input type="radio" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">ค่าอื่นๆ(ระบุ)
                                    <input type="radio" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div><br>

                      <div class="row row-space">
                          <div class="col-8">
                              <div class="input-group">
                                  <label class="label">วัตถุประสงค์</label>
                                <textarea  class="input--style-4" rows="5" cols="50"></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="row row-space">
                          <div class="col-4">
                              <div class="input-group">
                                  <label class="label">ขอเบิกค่าใช้จ่ายในการเดินทาง เป็นเงิน</label>
                              <input class="input--style-4" type="text" placeholder="1,000 บาท">
                              </div>
                          </div>
                      </div>
                      <div class="p-t-15" align="right">
                          <button class="btn btn--radius-2 btn--blue btn-lg w-50" type="submit">ส่ง</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
