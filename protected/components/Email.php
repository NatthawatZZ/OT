<?php
class Email {
/*
* แบบส่งผ่านด้วยบัญชี gmail
* และตั้งค่า SMTP
*
* GMAIL
* - smtp.gmail.com Port 465
* POP3: pop.gmail.com Port 995 เปิด SSL﻿
*
* HOTMAIL
* - smtp.live.com Port 25 หรือ 587 เปิด SSL﻿
* POP3: pop3.live.com Port 995
*
* YAHOO
* - smtp.mail.yahoo.com Port 465
* POP3: pop3.mail.yahoo.com Port 995
*
* AOL
* - smtp.aol.com Port 587
* POP3: pop.aol.com Port 110 เปิด SSL
*
*/
  // public static function sendMail($ct_name,$ct_lastname,$ct_tell,$ct_mail,$ct_sub,$ct_dec){
    public static function sendMail($ct_psn_id,$ct_mb_title,$ct_mb_name,$ct_mb_idcard,$ct_mb_mobile,$ct_mb_email,$ct_pst_id,
    $ct_created_date,$ct_created_by,$ct_update_date,$ct_update_by,$ct_active){

      // Yii::import('application.extensions.phpmailer.JPhpMailer');
      Yii::import('application.extensions.mailer.EMailer');
      Yii::import('application.models.CSetting');
      $mail = new EMailer();


        //กำหนด
        $from_name ='admin';
        $from_email = $ct_mb_email;
      //  $subject = $ct_sub;
        $message = '
        <body>

            <h1> คุณได้ทำการลงทะเบียนใช้งานระบบ OT สำเร็จ </h1>
            
          
        </body>
        ';

        // <h2>รหัสพนักงาน '.$ct_psn_id.'<br></h2>
        //     <h3>ชื่อ '.$ct_mb_title.' '.$ct_mb_name.'<br></h3>
        //     <h3>ตำแหน่ง '.$ct_pst_id.'<br></h3>
        //     <h3>อีเมล '.$ct_mb_email.'<br></h3>
        //     <h3>เลขบัตรประชาชน '.$ct_mb_idcard.'<br></h3>
        //     <h3>หมายเลขโทรศัพท์ '.$ct_mb_mobile.'<br></h3>

        $mail->ClearAddresses();
        // กำหนดการใช้งาน SMTP
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPKeepAlive = true;
        $mail->Mailer = "smtp";
        // $mail->SMTPDebug = 2;

        //บัญชีอื่นๆ
        $mail->Host = 'smtp.gmail.com'; // Host Yourname
        $mail->Port = '465';
        $mail->Username = 'leodonut28@gmail.com';
        $mail->Password = 'gtaromun1';

        // รูปแบบ Mail
        $mail->CharSet = 'utf-8';
        $mail->SetFrom($ct_mb_email, $ct_mb_name);
        $mail->AddAddress($ct_mb_email, $ct_mb_name);
        $mail->AddAddress($from_email, $from_name);
        $mail->Subject = 'ระบบ OT บริษัท';
        $mail->Body = $message;
        $mail->IsHTML(true);
        // $mail->MsgHTML($message);

        if($mail->Send()){

        }else{
            // var_dump($mail->ErrorInfo);
        }
    }
}
?>
