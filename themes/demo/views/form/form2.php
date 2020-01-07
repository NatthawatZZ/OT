
<div class="container-fluid">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">OT Bangkok Web Solutions</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="#">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">แบบคำขออนุมัติ</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">แบบคำขออนุมัติค่าทำงานล่วงเวลา (OT)</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">แบบคำขออนุมัติค่าทำงานล่วงเวลา (OT)</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-8 col-lg-4">
                  <div class="form-group">
                    <label for="name">ชื่อ - นามสกุล</label>
                    <input type="text" class="form-control" id="name" placeholder="ชื่อ-นามสกุล">
                    <small id="emailHelp2" class="form-text text-muted">กรุณากรอกคำนำหน้าด้วยครับ</small>
                  </div>
                  <div class="form-check">
                    <label>ขอเบิก</label><br/>
                    <label class="form-radio-label">
                      <input class="form-radio-input control" type="radio" name="optionsRadios" value=""  checked="">
                      <span class="form-radio-sign">ค่าทำงานล่วงเวลา</span>
                    </label>
                    <label class="form-radio-label ml-3">
                      <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                      <span class="form-radio-sign">ค่าทำงานในวันหยุด</span>
                    </label><br><br>
                    <label class="form-radio-label ml-3">
                      <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                      <span class="form-radio-sign">ค่าทำงานล่วงเวลาในวันหยุด</span>
                    </label>
                    <label class="form-radio-label ml-3">
                      <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                      <span class="form-radio-sign">ค่าคอมมิชชั่น</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label">
                        เมื่อวันที่
                    </label>
                  </div>
                    <div class="form-group">
                      <?php
                      $this->widget(
                        'booster.widgets.TbDatePicker',
                        array(
                            'name' => 'some_date',
                            'options' => array(
                                'language' => 'th',
                            )
                        )
                      );
                       ?>
                    </div>

                  <div class="form-group">
                    <label class="control-label">
                      ตั้งแต่เวลา
                    </label>
                  </div>
                <div class="form-group">
                  <input type="time" class="form-control" >

                </div>

                  <div class="form-group">
                    <label for="comment">งานที่ได้รับมอบหมาย</label>
                    <textarea class="form-control"  rows="5"></textarea>
                  </div>
                    <div class="form-group">
                      <label>จำนวนเงิน</label>
                    <input  data-suffix="฿" type="number" value="500" min="0" max="10000" step="10" class="form-control"/>
                    </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button type="submit"class="btn btn-success" id="alert_demo_4">ยืนยัน</button>
              <button class="btn btn-danger" id="alert_demo_8">ยกเลิก</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
