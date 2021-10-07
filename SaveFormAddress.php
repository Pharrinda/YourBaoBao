<? 
include("../config/config.php");
if($_REQUEST['method']=="save"){
  $uid = encrypt_decrypt('decrypt',$_COOKIE['_htime']);
  if($uid=="" or $uid ==0){
    ?><script type="text/javascript">top.alert_error("1","กรุณาล็อกอินด้วยค่ะ", "1");top.window.location="<?php echo $pathweb;?>"</script><?
    exit();
  }
  if($_REQUEST['add_name']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกชื่อด้วยค่ะ", "1");top.document.getElementById('add_name').focus();</script><?
    exit();
  }
  if($_REQUEST['add_email']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกอีเมล์ด้วยค่ะ", "1");top.document.getElementById('add_email').focus();</script><?
    exit();
  }
  if(!checkemail($_REQUEST['add_email'])){
    ?><script type="text/javascript">top.alert_error("1","รูปแบอีเมล์ไม่ถูกต้องค่ะ", "1");top.document.getElementById('add_email').focus();</script><?
    exit();
  }
  if($_REQUEST['mobile']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกเบอร์โทรศัพท์ด้วยค่ะ", "1");top.document.getElementById('mobile').focus();</script><?
    exit();
  }

  if($_REQUEST['add_province']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกจังหวัดด้วยค่ะ", "1");top.document.getElementById('add_province').focus();</script><?
    exit();
  }
  if($_REQUEST['add_Ampure']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกอำเภอด้วยค่ะ", "1");top.document.getElementById('add_Ampure').focus();</script><?
    exit();
  }
  if($_REQUEST['add_Tumbun']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกตำบลด้วยค่ะ", "1");top.document.getElementById('add_Tumbun').focus();</script><?
    exit();
  }
  if($_REQUEST['postcode']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกรหัสไปรษณีย์ด้วยค่ะ", "1");top.document.getElementById('postcode').focus();</script><?
    exit();
  }

  $_REQUEST['add_name'] = mysqli_real_escape_string($conn, $_REQUEST['add_name']);
  $_REQUEST['add_email'] = mysqli_real_escape_string($conn, $_REQUEST['add_email']);
  $_REQUEST['mobile'] = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
  $_REQUEST['room'] = mysqli_real_escape_string($conn, $_REQUEST['room']);
  $_REQUEST['floor'] = mysqli_real_escape_string($conn, $_REQUEST['floor']);
  $_REQUEST['build'] = mysqli_real_escape_string($conn, $_REQUEST['build']);
  $_REQUEST['numadd'] = mysqli_real_escape_string($conn, $_REQUEST['numadd']);
  $_REQUEST['moo'] = mysqli_real_escape_string($conn, $_REQUEST['moo']);
  $_REQUEST['homename'] = mysqli_real_escape_string($conn, $_REQUEST['homename']);
  $_REQUEST['soy'] = mysqli_real_escape_string($conn, $_REQUEST['soy']);
  $_REQUEST['rode'] = mysqli_real_escape_string($conn, $_REQUEST['rode']);
  $_REQUEST['add_province'] = mysqli_real_escape_string($conn, $_REQUEST['add_province']);
  $_REQUEST['add_Ampure'] = mysqli_real_escape_string($conn, $_REQUEST['add_Ampure']);
  $_REQUEST['add_Tumbun'] = mysqli_real_escape_string($conn, $_REQUEST['add_Tumbun']);
  $_REQUEST['postcode'] = mysqli_real_escape_string($conn, $_REQUEST['postcode']);
  $_REQUEST['remark'] = mysqli_real_escape_string($conn, $_REQUEST['remark']);


  $sql="insert into ".$prefix."_member_address (uid, add_contact, room, floor, build, numadd, moo, homename, soy, rode, province_id, amphur_id, tum_id, apost, tel, mobile, fax, email, add_date, remark) values ('".$uid."', '".$_REQUEST['add_name']."', '".$_REQUEST['room']."', '".$_REQUEST['floor']."', '".$_REQUEST['build']."', '".$_REQUEST['numadd']."', '".$_REQUEST['moo']."', '".$_REQUEST['homename']."', '".$_REQUEST['soy']."', '".$_REQUEST['rode']."', '".$_REQUEST['add_province']."', '".$_REQUEST['add_Ampure']."', '".$_REQUEST['add_Tumbun']."', '".$_REQUEST['postcode']."', '', '".$_REQUEST['mobile']."', '', '".$_REQUEST['add_email']."', now(), '".$_REQUEST['remark']."') ";
  $query = mysqli_query($conn,$sql);
  // exit();
  if($query){
    ?><script type="text/javascript">top.alert_error("3","ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ", "1");top.window.location="<?php echo $pathweb;?>myprofile/address.html";</script><?
    exit();
  }else{
    $file = fopen('../log_save_error.txt','a+')  or die("Unable to open file!");
    $str .= $sql."\r\n";
    $str .= "php/SaveFormAddress.php "."\r\n";
    fwrite($file,$str);
    fclose($file);
    ?><script type="text/javascript">top.alert_error("1","ไม่สามารถบันทึกข้อมูลได้ค่ะ กรุณาบันทึกใหม่ในภายหลังค่ะ", "1");</script><?
    exit();
  }

  exit();
}
if($_REQUEST['method']=="update"){
  $uid = encrypt_decrypt('decrypt',$_COOKIE['_htime']);
  if($uid=="" or $uid ==0){
    ?><script type="text/javascript">top.alert_error("1","กรุณาล็อกอินด้วยค่ะ", "1");top.window.location="<?php echo $pathweb;?>"</script><?
    exit();
  }
  if($_REQUEST['add_name']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกชื่อด้วยค่ะ", "1");top.document.getElementById('add_name').focus();</script><?
    exit();
  }
  if($_REQUEST['add_email']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกอีเมล์ด้วยค่ะ", "1");top.document.getElementById('add_email').focus();</script><?
    exit();
  }
  if(!checkemail($_REQUEST['add_email'])){
    ?><script type="text/javascript">top.alert_error("1","รูปแบอีเมล์ไม่ถูกต้องค่ะ", "1");top.document.getElementById('add_email').focus();</script><?
    exit();
  }
  if($_REQUEST['mobile']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกเบอร์โทรศัพท์ด้วยค่ะ", "1");top.document.getElementById('mobile').focus();</script><?
    exit();
  }

  if($_REQUEST['add_province']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกจังหวัดด้วยค่ะ", "1");top.document.getElementById('add_province').focus();</script><?
    exit();
  }
  if($_REQUEST['add_Ampure']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกอำเภอด้วยค่ะ", "1");top.document.getElementById('add_Ampure').focus();</script><?
    exit();
  }
  if($_REQUEST['add_Tumbun']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกตำบลด้วยค่ะ", "1");top.document.getElementById('add_Tumbun').focus();</script><?
    exit();
  }
  if($_REQUEST['postcode']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกรหัสไปรษณีย์ด้วยค่ะ", "1");top.document.getElementById('postcode').focus();</script><?
    exit();
  }

  $_REQUEST['add_name'] = mysqli_real_escape_string($conn, $_REQUEST['add_name']);
  $_REQUEST['add_email'] = mysqli_real_escape_string($conn, $_REQUEST['add_email']);
  $_REQUEST['mobile'] = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
  $_REQUEST['room'] = mysqli_real_escape_string($conn, $_REQUEST['room']);
  $_REQUEST['floor'] = mysqli_real_escape_string($conn, $_REQUEST['floor']);
  $_REQUEST['build'] = mysqli_real_escape_string($conn, $_REQUEST['build']);
  $_REQUEST['numadd'] = mysqli_real_escape_string($conn, $_REQUEST['numadd']);
  $_REQUEST['moo'] = mysqli_real_escape_string($conn, $_REQUEST['moo']);
  $_REQUEST['homename'] = mysqli_real_escape_string($conn, $_REQUEST['homename']);
  $_REQUEST['soy'] = mysqli_real_escape_string($conn, $_REQUEST['soy']);
  $_REQUEST['rode'] = mysqli_real_escape_string($conn, $_REQUEST['rode']);
  $_REQUEST['add_province'] = mysqli_real_escape_string($conn, $_REQUEST['add_province']);
  $_REQUEST['add_Ampure'] = mysqli_real_escape_string($conn, $_REQUEST['add_Ampure']);
  $_REQUEST['add_Tumbun'] = mysqli_real_escape_string($conn, $_REQUEST['add_Tumbun']);
  $_REQUEST['postcode'] = mysqli_real_escape_string($conn, $_REQUEST['postcode']);


  $ids = encrypt_decrypt('decrypt',$_REQUEST['add_id']);

  $sqlx="select uid from ".$prefix."_member_address where uid = '$uid' and add_id='".$ids."' ";

  $query = mysqli_query($conn,$sqlx);
  if(mysqli_num_rows($query)>0){

    $sql="insert into ".$prefix."_member_address (uid, add_contact, room, floor, build, numadd, moo, homename, soy, rode, province_id, amphur_id, tum_id, apost, tel, mobile, fax, email, add_date ) values ('".$uid."', '".$_REQUEST['add_name']."', '".$_REQUEST['room']."', '".$_REQUEST['floor']."', '".$_REQUEST['build']."', '".$_REQUEST['numadd']."', '".$_REQUEST['moo']."', '".$_REQUEST['homename']."', '".$_REQUEST['soy']."', '".$_REQUEST['rode']."', '".$_REQUEST['add_province']."', '".$_REQUEST['add_Ampure']."', '".$_REQUEST['add_Tumbun']."', '".$_REQUEST['postcode']."', '', '".$_REQUEST['mobile']."', '', '".$_REQUEST['add_email']."', now()) ";

    $sql="update ".$prefix."_member_address set
    add_contact='".$_REQUEST['add_name']."',
    room='".$_REQUEST['room']."',
    floor='".$_REQUEST['floor']."',
    build='".$_REQUEST['build']."',
    numadd='".$_REQUEST['numadd']."',
    moo='".$_REQUEST['moo']."',
    homename='".$_REQUEST['homename']."',
    soy='".$_REQUEST['soy']."',
    rode='".$_REQUEST['rode']."',
    province_id='".$_REQUEST['add_province']."',
    amphur_id='".$_REQUEST['add_Ampure']."',
    tum_id='".$_REQUEST['add_Tumbun']."',
    apost='".$_REQUEST['postcode']."',
    mobile='".$_REQUEST['mobile']."',
    email='".$_REQUEST['add_email']."'
    where  add_id='".$ids."' ";
    $query = mysqli_query($conn,$sql);
    // exit();
    if($query){
      ?><script type="text/javascript">top.alert_error("3","ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ", "1");top.window.location="<?php echo $pathweb;?>myprofile/address.html";</script><?
      exit();
    }else{
      $file = fopen('../log_save_error.txt','a+')  or die("Unable to open file!");
      $str .= $sql."\r\n";
      $str .= "php/SaveFormAddress.php "."\r\n";
      fwrite($file,$str);
      fclose($file);
      ?><script type="text/javascript">top.alert_error("1","ไม่สามารถบันทึกข้อมูลได้ค่ะ กรุณาบันทึกใหม่ในภายหลังค่ะ", "1");</script><?
      exit();
    }
  }else{
    ?><script type="text/javascript">top.alert_error("1","ไม่พบที่อยู่ที่ต้องการค่ะ", "1");top.window.location="<?php echo $pathweb;?>"</script><?
  }
  exit();
}
if($_REQUEST['method']=="banksave"){
  $uid = encrypt_decrypt('decrypt',$_COOKIE['_htime']);
  if($uid=="" or $uid ==0){
    ?><script type="text/javascript">top.alert_error("1","กรุณาล็อกอินด้วยค่ะ", "1");top.window.location="<?php echo $pathweb;?>"</script><?
    exit();
  }
  $sql="select bacc_id from ".$prefix."_member_bank where uid = '".$uid."'  ";
  $query = mysqli_query($conn,$sql);
  if(mysqli_num_rows($query)==0){
    $sqlx="insert into ".$prefix."_member_bank (uid, account_name, bank_name, bank_address, bank_type, bank_account, bank_status, bank_date) values ('".$uid."', '".$_REQUEST['name']."', '".$_REQUEST['bank_name']."', '".$_REQUEST['bank_branch']."', '".$_REQUEST['build']."', '".$_REQUEST['bank_code']."', '1', now()) ";
    $queryx = mysqli_query($conn,$sqlx);
    // exit();
    if($queryx){
      ?><script type="text/javascript">top.alert_error("3","ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ", "1");top.window.location="<?php echo $pathweb;?>myprofile/Withdrawals/";</script><?
      exit();
    }else{
      $file = fopen('../log_save_error.txt','a+')  or die("Unable to open file!");
      $str .= $sql."\r\n";
      $str .= "php/SaveFormbank.php "."\r\n";
      fwrite($file,$str);
      fclose($file);
      ?><script type="text/javascript">top.alert_error("1","ไม่สามารถบันทึกข้อมูลได้ค่ะ กรุณาบันทึกใหม่ในภายหลังค่ะ", "1");</script><?
      exit();
    }
  }else{
    $sql="update ".$prefix."_member_bank set account_name='".$_REQUEST['name']."', bank_name='".$_REQUEST['bank_name']."', bank_address='".$_REQUEST['bank_branch']."', bank_account='".$_REQUEST['bank_code']."'
    where  uid='".$uid."' ";
    $query = mysqli_query($conn,$sql);
    // exit();
    if($query){
      ?><script type="text/javascript">top.alert_error("3","ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ", "1");top.window.location="<?php echo $pathweb;?>myprofile/Withdrawals/";</script><?
    }else{
      $file = fopen('../log_save_error.txt','a+')  or die("Unable to open file!");
      $str .= $sql."\r\n";
      $str .= "php/SaveFormbank.php "."\r\n";
      fwrite($file,$str);
      fclose($file);
      ?><script type="text/javascript">top.alert_error("1","ไม่สามารถบันทึกข้อมูลได้ค่ะ กรุณาบันทึกใหม่ในภายหลังค่ะ", "1");</script><?
      exit();
    }
  }
  exit();
}
if($_REQUEST['method']=="widr"){
  $uid = encrypt_decrypt('decrypt',$_COOKIE['_htime']);
  if($uid=="" or $uid ==0){
    ?><script type="text/javascript">top.alert_error("1","กรุณาล็อกอินด้วยค่ะ", "1");top.window.location="<?php echo $pathweb;?>"</script><?
    exit();
  }

  if($_REQUEST['paymentMethod']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณาเลือกบัญชีด้วยค่ะ", "1");top.clickbuyimgbackCart();</script><?
    exit();
  }

  if($_REQUEST['amount']=="" or $_REQUEST['amount']==0){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกจำนวนเงินด้วยค่ะ", "1");top.clickbuyimgbackCart();top.document.getElementById('amount').focus();</script><?
    exit();
  }
  if($_REQUEST['password']==""){
    ?><script type="text/javascript">top.alert_error("1","กรุณากรอกรหัสผ่านด้วยค่ะ", "1");top.clickbuyimgbackCart();top.document.getElementById('password').focus();</script><?
    exit();
  }
  $balanceM = GetLWalletMember($uid);
  if($_REQUEST['amount']> $balanceM){
    ?><script type="text/javascript">top.alert_error("1","ยอดเงินไม่พอถอน กรุณากรอกใหม่", "1");top.clickbuyimgbackCart();top.document.getElementById('amount').focus();</script><?
    exit();
  }
  // exit();

  $pmem = GetLPMember($uid);
  $_REQUEST['password'] = mysqli_real_escape_string($conn, $_REQUEST['password']);
  if($_REQUEST['password']!= $pmem){
    ?><script type="text/javascript">top.alert_error("1","รหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่", "1");top.clickbuyimgbackCart();top.document.getElementById('password').focus();</script><?
    exit();
  }

  $_REQUEST['paymentMethod'] = mysqli_real_escape_string($conn, $_REQUEST['paymentMethod']);
  $_REQUEST['amount'] = mysqli_real_escape_string($conn, $_REQUEST['amount']);
  $_REQUEST['amount'] = ereg_replace(",","",$_REQUEST['amount']);

  $r = strtoupper(alphanumeric_random_wms(10));
  $code="WD".$r;

  $date_u  = $_REQUEST['datetopup']." ".$_REQUEST['timetopup'];
  $datenow=date("Y-m-d H:i:s");

  $sql="insert into ".$prefix."_member_withdrawal (topup_type, topup_code, uid, bank_id, topup_amont, topup_status, topup_date, topup_date_user, topup_by, topup_by_date)
  values
  ('2', '".$code."', '".$uid."', '".$_REQUEST['paymentMethod']."', '".$_REQUEST['amount']."', '2', now(), '', '', '') ";
  // exit();
  $query = mysqli_query($conn,$sql);
  // exit();
  if($query){
    $fname=GetNameTMember($uid);
    linesendmsgwarehouse("คุณ ".$fname." ได้ขอแจ้งถอนเงินจำนวน ".$_REQUEST['amount']." บาท");
    $lastid=mysqli_insert_id($conn);
    ?><script type="text/javascript">top.alert_error("3","ระบบได้บันทึกข้อมูลเรียบร้อยแล้วค่ะ รอ admin ตอบกลับ", "1");setTimeout(function() {top.window.location="<?php echo $pathweb;?>myprofile/Withdrawals/";}, 1000);</script><?
    exit();
  }else{
    $file = fopen('../log_save_error.txt','a+')  or die("Unable to open file!");
    $str .= $sql."\r\n";
    $str .= "php/SaveFormwithdrawal.php "."\r\n";
    fwrite($file,$str);
    fclose($file);
    ?><script type="text/javascript">top.alert_error("1","ไม่สามารถบันทึกข้อมูลได้ค่ะ กรุณาบันทึกใหม่ในภายหลังค่ะ", "1");top.clickbuyimgbackCart();</script><?
    exit();
  }

  exit();
}
?>
