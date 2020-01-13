<?php  $act = "active"; ?>
<style >
  .btn-primary{
    background-color: #4169E1;
    border-color: none;
  }
  .btn-primary:hover{
    background-color: 	#0000FF;
    border-color: none;
  }
</style>
<div class="text-center">
      <h2>ใบเบิกค่าทำงานล่วงเวลา/ค่าคอมมิชชั่น</h2>
</div>
<div class="container-fluid">
  <div class="content">
    <div class="well">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <div class="card" >
            <div class="card-body">
              <div class="row">
                <div class="col-md-8 ">
                  <div class="form-group">
                    <h4><?php echo Yii::app()->user->name ;?></h4>
                  </div>
                  <div class="form-group">
                  <p><?php echo date('d-m-Y');?></p>
                  </div>
                  <div class="form-check">
                    <label>ขอเบิกค่า</label><br/>
                    <label class="form-radio-label">
                      <input class="form-radio-input control" type="radio" name="optionsRadios" value=""  checked="">
                      <span class="form-radio-sign">ค่าทำงานล่วงเวลา</span>
                    </label>
                    <label class="form-radio-label ml-3">
                      <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                      <span class="form-radio-sign">ค่าทำงานในวันหยุด</span>
                    </label>
                    <label class="form-radio-label ml-3">
                      <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                      <span class="form-radio-sign">ค่าทำงานล่วงเวลาในวันหยุด</span>
                    </label><br>
                    <label class="form-radio-label ml-3">
                      <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                      <span class="form-radio-sign">ค่าคอมมิชชั่น</span>
                      <input type="text" placeholder="ระบุค่าคอมมิชชั่น">
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label">
                      เมื่อวันที่
                    </label>
                    <?php
                    $this->widget(
                      'booster.widgets.TbDatePicker',
                      array(
                          'name' => 'some_date',
                            'options' => array(
                              'language' => 'th',
				                         'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                          )
                      )
                    );
                     ?>
                  </div>
                  <div class="form-group">
                    <label class="control-label">ตั้งแต่เวลา</label><br>
                    <?php $this->widget(
                         'booster.widgets.TbTimePicker',
                         array(
                             'name' => 'begin',
                             'value' => '00:00 น.',
                             'noAppend' => true, // mandatory
                             'options' => array(
                                 'disableFocus' => true, // mandatory
                                 'showMeridian' => false // irrelevant
                             ),
                             'wrapperHtmlOptions' => array('class' => 'col-md-3'),
                         )
                      ); ?>
                  </div><br>
                  <div class="form-group">
                    <label class="control-label">ถึง</label><br>
                    <?php $this->widget(
                         'booster.widgets.TbTimePicker',
                         array(
                             'name' => 'end',
                             'value' => '00:00 น.',
                             'noAppend' => true, // mandatory
                             'options' => array(
                                 'disableFocus' => true, // mandatory
                                 'showMeridian' => false // irrelevant
                             ),
                             'wrapperHtmlOptions' => array('class' => 'col-md-3'),
                         )
                      ); ?>
                  </div><br><br>
                  <div class="form-group">
                    <label for="comment">งานที่ได้รับมอบหมาย</label>&nbsp;
                    <input type="text" placeholder="ระบุ...">
                  </div>
                  <div class="form-group">
                    <label for="comment">ขอเบิกค่าตอบแทนเป็นเงินทั้งสิ้น</label>&nbsp;
                    <input type="text" value="0.00" disabled>
                    <label for="comment">บาท</label>&nbsp;
                  </div>
              
                </div>
              </div>
            </div><br>
            <div class="text-center">
              <div class="card-action">
                <button type="submit"class="btn btn-primary" id="alert_demo_4">บันทึก</button>
                <button class="btn btn-danger" id="alert_demo_8">ยกเลิก</button>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>
</div>
</div>
