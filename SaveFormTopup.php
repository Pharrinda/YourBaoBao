<?
include("../config/config.php");
require '../PHPMailer-master/PHPMailerAutoload.php';
if($_REQUEST['method']=="save"){
  $uid = encrypt_decrypt('decrypt',$_COOKIE['_htime']);
  if($uid=="" or $uid ==0){
    ?><script type="text/javascript">top.alert_error("1","กรุณาล็อกอินด้วยค่ะ", "1");top.window.location="<?php echo $pathweb;?>";top.clicktopup();</script><?
    exit();
  }
  if($_REQUEST['topup_type']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกช่องทางการชำระเงิน", "1");top.clicktopup();top.document.getElementById('topup_type').focus();</script><?
    exit();
  }
  if($_REQUEST['bank']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกบัญชีธนาคาร", "1");top.document.getElementById('bank').focus();top.clicktopup();</script><?
    exit();
  }
  if($_REQUEST['datetopup']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาวันที่โอนด้วยค่ะ", "1");top.document.getElementById('datetopup').focus();top.clicktopup();</script><?
    exit();
  }

  if($_REQUEST['timetopup_hou']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกชั่วโมงด้วยค่ะ", "1");top.document.getElementById('timetopup_hou').focus();top.clicktopup();</script><?
    exit();
  }
  if($_REQUEST['timetopup_hou']>23){
    ?><script type="text/javascript">top.alert_error("1","คุณเลือกชั่วโมงไม่ถูกต้องค่ะ", "1");top.document.getElementById('timetopup_hou').focus();top.clicktopup();</script><?
    exit();
  }
  if($_REQUEST['timetopup_min']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกนาทีด้วยค่ะ", "1");top.document.getElementById('timetopup_min').focus();top.clicktopup();</script><?
    exit();
  }
  if($_REQUEST['timetopup_min']>59){
    ?><script type="text/javascript">top.alert_error("1","คุณเลือกนาทีไม่ถูกต้องค่ะ", "1");top.document.getElementById('timetopup_hou').focus();top.clicktopup();</script><?
    exit();
  }
  if($_REQUEST['amount']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกจำนวนเงินด้วยค่ะ", "1");top.document.getElementById('amount-topup').focus();top.clicktopup();</script><?
    exit();
  }
  $filesname = $_FILES['filetopup']['name'];
  $files = $_FILES['filetopup']['tmp_name'];
  if($filesname==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาแนบไฟล์รูปภาพด้วยค่ะ", "1");top.document.getElementById('filetopup').focus();top.clicktopup();</script><?
    exit();
  }
  $dot = lastdot($filesname);
  /*
  if($dot!="jpg" and $dot!="png"){
    ?><script type="text/javascript">top.alert_error("1","กรุณาแนบไฟล์รูปภาพที่มีนามสกุล JPG หรือ PNG ด้วยค่ะ", "1");top.document.getElementById('filetopup').focus();top.clicktopup();</script><?
    exit();
  }
  */

  $_REQUEST['topup_type'] = mysqli_real_escape_string($conn, $_REQUEST['topup_type']);
  $_REQUEST['bank'] = mysqli_real_escape_string($conn, $_REQUEST['bank']);
  $_REQUEST['datetopup'] = mysqli_real_escape_string($conn, $_REQUEST['datetopup']);
  $_REQUEST['timetopup_hou'] = mysqli_real_escape_string($conn, $_REQUEST['timetopup_hou']);
  $_REQUEST['timetopup_min'] = mysqli_real_escape_string($conn, $_REQUEST['timetopup_min']);
  $_REQUEST['amount'] = mysqli_real_escape_string($conn, $_REQUEST['amount']);
  $_REQUEST['remark'] = mysqli_real_escape_string($conn, $_REQUEST['remark']);


  $r = strtoupper(alphanumeric_random_wms(10));
  $code="TU".$r;

  $date_u  = $_REQUEST['datetopup']." ".$_REQUEST['timetopup_hou'].":".$_REQUEST['timetopup_min'].":00";
  $datenow=date("Y-m-d H:i:s");

  $sql="insert into ".$prefix."_member_topup (topup_type, topup_code, uid, bank_id, topup_amont, topup_remark, topup_status, topup_date, topup_date_user, topup_by, topup_by_date) values ('".$_REQUEST['topup_type']."', '".$code."', '".$uid."', '".$_REQUEST['bank']."', '".$_REQUEST['amount']."', '".$_REQUEST['remark']."', '2', now(), '$date_u', '', '') ";
  $query = mysqli_query($conn,$sql);
  // exit();
  if($query){

    $lastid=mysqli_insert_id($conn);
    $rmdirs =ROOTPATH."data/topup/".$lastid;
    deleteDirectory($rmdirs);

    if (!is_dir(ROOTPATH."data")){
      @mkdir(ROOTPATH."data", 0755, true);
    }
    if (!is_dir(ROOTPATH."data/topup")){
      @mkdir(ROOTPATH."data/topup", 0755, true);
    }
    if (!is_dir(ROOTPATH."data/topup/".$lastid)){
      @mkdir(ROOTPATH."data/topup/".$lastid, 0755, true);
    }
    if (!is_dir(ROOTPATH."data/topup/".$lastid."/resize")){
      @mkdir(ROOTPATH."data/topup/".$lastid."/resize", 0755, true);
    }

    $base64 = file_get_contents($files);
    // $base64 = base64_encode($imagedata);

    list($type, $data) = explode(';', $base64);
    list(, $data)      = explode(',', $data);
    $data = base64_decode($data);
    list($type_data, $mime) = explode(':', $type);
    // echo $type;

    $path_namepic = "topup_".alphanumeric_random_wms(12);
    $path_mini = ROOTPATH."data/topup/$lastid/resize/$path_namepic.$dot";
    $wid=700;
    $water=2;
    // echo $data;
    imageresize($water, $base64, $path_mini, $wid);

    $sqluser = "select email,fullname from ".$prefix."_user where user_type!=1 and email != '' ";
    $execuser = mysqli_query($conn,$sqluser);
    if(mysqli_num_rows($execuser)>0){
      while ($datauser=mysqli_fetch_assoc($execuser)) {
        $inputEmail[] = $datauser['email'];
        $inputName[] = $datauser['fullname'];
      }
    }


    $MailFullEmail = $inputEmail;
    $MailFullName = $inputName;
    $MailSubject = "[".$site_name."] ".GetNameTMember($uid)." แจ้งชำระยอดเติมเงิน จำนวนเงิน ".$_REQUEST['amount']." บาท";
    $MailAltBody = "[".$site_name."] แจ้งรับชำระยอดเติมเงิน";
    $MailBody = '<table align="center" cellpadding="0" cellspacing="0" width="600">
      <tbody>
        <tr>
          <td align="center">
            <img src="http://'.$_SERVER['HTTP_HOST'].'/images/web_logo.png" border="0" width="250" class="CToWUd">
            <br>
          </td>
        </tr>
      </tbody>
    </table>
    <table align="center" cellpadding="15" cellspacing="0" width="600" style="background:#f8f8f8">
      <tbody>
        <tr>
          <td align="center">
            สวัสดีผู้ดูแลระบบ '.$site_name.'<br>
          </td>
        </tr>
        <tr>
          <td align="center">เมื่อวันที่ '.$datenow.' ได้มีแจ้งโอนเงินเข้ามาที่เว็บ '.$site_name.'  <br>
          </td>
        </tr>
        <tr>
          <td>  &nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            รบกวนช่วยตรวจสอบเลขที่โอน '.$code.'
            <br>
          </td>
        </tr>
        <tr>
          <td align="center">
            <a href="http://'.$_SERVER['HTTP_HOST'].'/backoffice/" title="" style="background:#347eb9;color:#fff;padding:10px 20px;text-align:center;border-radius:20px" target="_blank">กดเพื่อไปยังเว็บไซต์</a>
            <br>
          </td>
        </tr>
        <tr>
          <td> &nbsp;</td>
        </tr>
        <tr>
          <td align="center"> ถ้าคุณไม่ได้ต้องการอีเมล์ กรุณาติดต่อที่ <a href="mailto:yourbaobao@yourbaobao.com" target="_blank">yourbaobao@yourbaobao.com</a>
        </td>
      </tr>
      <tr>
        <td> ขอบคุณ. <br> ทีมงาน '.$site_name.'<br>
        </td>
      </tr>
    </tbody>
    </table>';

    // -------------------------------------
    $fname=GetNameTMember($uid);
    // linesendmsgwarehouse("คุณ ".$fname." เติมเงินเข้าระบบจำนวนเงิน ".$_REQUEST['amount']." บาท ");
    $line_api = 'https://notify-api.line.me/api/notify';
    // $access_token = 'QEcrJI7VUie0dtaAMtepJEv3UBCJIV9nYZqnSoOlTkG';//ทดสอบ
    $access_token = 'n480sGifOvgkHrL5YgKkNuMWXU3E5l7Ruwh3Azc3nFk';

    $message = "คุณ ".$fname." เติมเงินเข้าระบบจำนวนเงิน ".$_REQUEST['amount']." บาท ";
    // $link = "\r\n https://www.".$DOMAIN."/confirm/accept/".$lastid."/";
    $message .=$link;
    $image_thumbnail_url = 'https://dummyimage.com/1024x1024/f598f5/fff.jpg'; // max size 240x240px JPEG
    $image_fullsize_url = 'https://dummyimage.com/1024x1024/844334/fff.jpg'; //max size 1024x1024px JPEG
    $imageFile = $path_mini;
    $sticker_package_id = ''; // Package ID sticker
    $sticker_id = ''; // ID sticker

    if (function_exists('curl_file_create')) {
      $cFile = curl_file_create($imageFile );
    } else {
      $cFile = '@'.realpath($imageFile );
    }

    $message_data = array(
      'imageThumbnail' => $image_thumbnail_url,
      'imageFullsize' => $image_fullsize_url,
      'message' => $message,
      'imageFile' => $cFile ,
      'stickerPackageId' => $sticker_package_id,
      'stickerId' => $sticker_id
    );

    $result = send_notify_message($line_api, $access_token, $message_data);
    // ระงับไว้เพระว่า LINE เป็นคนกดลิงค์
    // -------------------------------------

    if(funcsendmail($MailFullEmail, $MailFullName, $MailSubject, $MailBody, $MailAltBody)!="1"){
      // echo "FAIL";
      $ss="FAIL";
      $sqlqa = "update ".$prefix."_member_topup set topup_sendmail = '$ss' where topup_id = '$lastid' ";
      $resultqa = mysqli_query($conn, $sqlqa);
    }else{
      $ss="SEND";
      $sqlqa = "update ".$prefix."_member_topup set topup_sendmail = '$ss' where topup_id = '$lastid' ";
      $resultqa = mysqli_query($conn, $sqlqa);
    }

    // exit();
    ?><script type="text/javascript">top.alert_error("3","ระบบได้รับข้อมูลแจ้งเติมเงินแล้ว กรุณารอเจ้าหน้าที่ตรวจสอบยอดเงิน", "1");top.window.location="<?php echo $pathweb;?>myprofile/topup/";</script><?
    exit();
  }else{
    $file = fopen('../log_save_error.txt','a+')  or die("Unable to open file!");
    $str .= $sql."\r\n";
    $str .= "php/SaveFormTopup.php "."\r\n";
    fwrite($file,$str);
    fclose($file);
    ?><script type="text/javascript">top.alert_error("1","ไม่สามารถบันทึกข้อมูลได้ค่ะ กรุณาบันทึกใหม่ในภายหลังค่ะ", "1");top.clicktopup();</script><?
    exit();
  }

  exit();
}
