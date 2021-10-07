<?php
if(login_memberid()==0){
  ?><script type="text/javascript">alert("กรุณาล็อกอินก่อนค่ะ");window.location="<?php echo $pathweb;?>"</script><?
  exit();
}
?>
<?php
$uid = encrypt_decrypt('decrypt',$_COOKIE['_htime']);
$balanceM = GetLWalletMember($uid);
$sqlx="SELECT * FROM ".$prefix."_member_bank WHERE uid='".$uid."' and bank_status='1' ";
$execx=mysqli_query($conn,$sqlx);
$numbank=mysqli_num_rows($execx);
if($numbank>0){
  $bakkd= "1";
}else{
  // ยังไม่มีธนาคาร
  $bakkd= "2";
}
// echo $bakkd;
?>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <h3>ข้อมูลส่วนตัว</h3>
    </div>
  </div>
  <div class="row mb-5">
    <div class="col-md-3 showcontentdetail px-3">
      <div class="row bg-shadow">
        <div class="col-12 bg-info w-100 gardientbg" style="height:10px;"></div>
        <div class="col-md-12 py-4 px-5">
          <?php include("in_menumember.php"); ?>
        </div>
      </div>
    </div>

    <div class="col-md-9 px-3">
      <div class="col-12 bg-info w-100 gardientbg" style="height:10px;"></div>

      <div class="row mb-3">
        <div class="col-6">
          <h3 class="mt-4 d-inline-block">แจ้งถอนเงิน </h3>
          คงเหลือ <h5 class="text-danger d-inline-block"> <?php echo number_format($balanceM,2); ?></h5> บาท
          <button type="button" name="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#Modalbank-02">แก้ไขบัญชี</button>
        </div>
        <div class="col-6 text-right mt-3">
          <button type="button" name="add_live" class="btn btn-info  tagcursor" onclick="withdrawalbank(<?php echo $bakkd;?>)">แจ้งถอนเงิน <i class="fa fa-mail-forward"></i></button>
          <div class="modal fade" id="ModalAdress-02" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLongTitle">แจ้งถอนเงิน</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form class="mb-4" name="SaveFormAddress" id="SaveFormAddress" action="<?php echo $pathweb;?>php/SaveFormAddress.php?method=widr" method="post" enctype="multipart/form-data" target="com_m">
                <div class="modal-body">
                  <div class="row main">
                    <div class="col-12">
                      <?php
                      $sqlxc="select * from ".$prefix."_member_bank where uid = '".$uid."' and bank_status='1' ";
                      $queryxc = mysqli_query($conn,$sqlxc);
                      $numxc = mysqli_num_rows($queryxc);
                      if($numxc>0){
                        ?>
                        <h5 class="d-flex justify-content-between align-items-center mb-3">
                          <span class="text-muted">เลือกบัญชีธนาคาร</span>
                          <span class="badge badge-info badge-pill"><?php echo number_format($numxc);?></span>
                        </h5>
                        <ul class="list-group mb-3">
                        <?php
                        while ($dataxc=mysqli_fetch_assoc($queryxc)) {
                          ?>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="">
                              <input type="radio" name="paymentMethod" id="bank_<?php echo $dataxc['bacc_id'];?>" value="<?php echo $dataxc['bacc_id'];?>">
                              <label class="custom-control-labelx" for="bank_<?php echo $dataxc['bacc_id'];?>"><?php echo $dataxc['account_name'];?>[<?php echo $dataxc['bank_account'];?>]</label>
                            </div>
                          </li>
                          <?php
                        }
                      ?>
                      </ul>
                      <!-- <hr> -->
                      <div class="row">
                        <div class="col-md-4 text-right">
                          <strong>จำนวนเงิน</strong>
                        </div>
                        <div class="col-md-6 text-center">
                          <input type="text" class="form-control text-center bg-yellow" name="amount" id="amount" value="<?php echo number_format($balanceM,2);?>" max="<?php echo $balanceM; ?>" placeholder="<?php echo number_format($balanceM,2);?>" onkeypress="return chkNumber(this)">
                        </div>
                        <div class="col-md-2 text-left">
                          <strong>บาท</strong>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-4 text-right">
                          <strong>กรอกรหัสผ่าน</strong>
                        </div>
                        <div class="col-md-6 text-center">
                          <input type="password" class="form-control text-center bg-yellow" name="password" id="password" placeholder="">
                          <br>
                          <span class="text-warning">รหัสผ่านที่ใช้ในการล็อกอิน</span>
                        </div>

                      </div>
                      <?php
                    }else{
                      ?>
                      <button type="button" name="button">กรุณาเพิ่มบัญชีธนาคาก่อนค่ะ</button>
                      <?php
                    }
                      ?>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                  <button type="submit" class="btn btn-primary postCartloadings" name="submitAddress">ถอนเงิน</button>
                </div>
                </form>
              </div>
            </div>
          </div>


          <div class="modal fade" id="Modalbank-02" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มบัญชีธนาคาร</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                $sqlxx="SELECT * FROM ".$prefix."_member_bank WHERE uid='".$uid."' and bank_status='1' ";
                $execxx=mysqli_query($conn,$sqlxx);
                $dataxx=mysqli_fetch_assoc($execxx);

                // print_r($dataxx);
                ?>
                <form class="mb-4" name="SaveFormAddress" id="SaveFormAddress" action="<?php echo $pathweb;?>php/SaveFormAddress.php?method=banksave" method="post" enctype="multipart/form-data" target="com_m">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-1 control-label"></label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon bg-div-purple" style="width:110px;"> ชื่อธนาคาร : </span>
                        <select name="bank_name" class="form-control bg-yellow" id="bank">
                          <option value=""<?php if($dataxx['bank_name']==""){ ?>selected<?php }?>> กรุณาเลือกธนาคาร</option>
                          <option value="1"<?php if($dataxx['bank_name']=="1"){ ?>selected<?php }?>>ธนาคารกรุงเทพ (BBL)</option>
                          <option value="2"<?php if($dataxx['bank_name']=="2"){ ?>selected<?php }?>>ธนาคารกรุงศรีอยุธยา (BAY)</option>
                          <option value="3"<?php if($dataxx['bank_name']=="3"){ ?>selected<?php }?>>ธนาคารไทยพาณิชย์ (SCB)</option>
                          <option value="4"<?php if($dataxx['bank_name']=="4"){ ?>selected<?php }?>>ธนาคารทหารไทย (TMB)</option>
                          <option value="5"<?php if($dataxx['bank_name']=="5"){ ?>selected<?php }?>>ธนาคารกสิกรไทย (KBANK)</option>
                          <option value="6"<?php if($dataxx['bank_name']=="6"){ ?>selected<?php }?>>ธนาคารกรุงไทย (KTB)</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-1 control-label"></label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon bg-div-purple" style="width:110px;"> สาขา : </span>
                        <input type="text" class="form-control bg-yellow" name="bank_branch" id="branch" placeholder="สาขา" value="<?php echo $dataxx['bank_address']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-1 control-label"></label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon bg-div-purple" style="width:110px;"> เลขที่บัญชี : </span>
                        <input type="text" class="form-control bg-yellow" name="bank_code" id="code" placeholder="เลขที่บัญชี" value="<?php echo $dataxx['bank_account']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-1 control-label"></label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon bg-div-purple" style="width:110px;"> ชือบัญชี : </span>
                        <input type="text" class="form-control bg-yellow" name="name" id="name" placeholder="ชือบัญชี" value="<?php echo $dataxx['account_name']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" name="submitAddress">บันทึก</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                </div>
                </form>
              </div>
            </div>
          </div>


        </div>
      </div>
      <?php
      $sqla="select * from ".$prefix."_member_withdrawal a left join ".$prefix."_member b on a.uid=b.uid where b.member_status='1' and b.uid='$uid' order by a.topup_date desc ";
      $execa=mysqli_query($conn, $sqla);
      if(mysqli_num_rows($execa)>0){
        ?>
        <div class="table-responsive">
          <table class="table table-striped mg-0">
            <tbody>
              <tr class=" bg-web text-white">
              <th class="text-center">รหัสอ้างอิง</th>
              <th class="text-left">ธนาคาร</th>
              <th class="text-center">จำนวน</th>
              <th class="text-center">สถานะ</th>

              <!-- <th class="text-center" width="150">วันที่แจ้งถอนเงิน</th> -->
              <th class="text-center" width="150">แก้ไขล่าสุด</th>
              <th class="text-center">เปิดดู</th>
            </tr>
          <?php
          while ($rowaa = mysqli_fetch_assoc($execa)) {
            foreach (glob(ROOTPATH."data/withdraw/".$rowaa['topup_id']."/preview/*.*") as $sm1) {
              break;
            }
            // echo $sm1;
            $sm1 = ereg_replace(ROOTPATH,"",$sm1);
            $addresscode = encrypt_decrypt('encrypt',$rowaa['topup_id']);

            $sqlbank="select * from ".$prefix."_member_bank where bank_status = '1' and bacc_id='".$rowaa['bank_id']."' ";
            $execbank=mysqli_query($conn, $sqlbank);
            if(mysqli_num_rows($execbank)>0){
              $databank = mysqli_fetch_assoc($execbank);
              if($databank['bank_name']=="1"){
                $statustype = '<span >ธนาคารกรุงเทพ (BBL)</span>';
              }
              if($databank['bank_name']=="2"){
                $statustype = '<span >ธนาคารกรุงศรีอยุธยา (BAY)</span>';
              }
              if($databank['bank_name']=="3"){
                $statustype = '<span >ธนาคารไทยพาณิชย์ (SCB)</span>';
              }
              if($databank['bank_name']=="4"){
                $statustype = '<span >ธนาคารทหารไทย (TMB)</span>';
              }
              if($databank['bank_name']=="5"){
                $statustype = '<span >ธนาคารกสิกรไทย (KBANK)</span>';
              }
              if($databank['bank_name']=="6"){
                $statustype = '<span >ธนาคารกรุงไทย (KTB)</span>';
              }
            }



            if($rowaa['topup_status']=="1"){
              $status = '<span class="text-success">โอนแล้ว</span>';
            }
            if($rowaa['topup_status']=="2"){
              $status = '<span class="text-warning">รออนุมัติ</span>';
            }
            if($rowaa['topup_status']=="3"){
              $status = '<span class="text-success">ข้อมูลไม่ถูกต้อง</span>';
            }
            // $imagedata = file_get_contents($files);
            // $base64 = base64_encode($imagedata);
            ?>

            <tr>
              <td class="text-middle text-center">
                <a href="#" class="" data-toggle="modal" data-target="#detail-58123">
                  <small class="text-info"><?php echo $rowaa['topup_code']; ?></small>
                  <br>
                  <small><?php echo $rowaa['topup_date']; ?></small>
                </a>
              </td>
              <td class="text-left text-middle">
                <?php echo $statustype; ?>
              </td>
              <td class="text-right text-red text-middle">
                <?php $rowaa['topup_amont'] = ereg_replace(",","",$rowaa['topup_amont']); ?>
                <?php echo number_format($rowaa['topup_amont'],2); ?>
              </td>
              <td class="text-center text-middle"><?php echo $status; ?></td>
              <!-- <td class="text-center text-middle"><?php echo $rowaa['topup_date']; ?></td> -->
              <td class="text-center text-middle">
                <?php
                if($rowaa['topup_by_date']=="0000-00-00 00:00:00"){
                  echo "-";
                }else{
                  echo $rowaa['topup_by_date'];
                }
                ?>
              </td>
              <td class="text-center text-middle">
                <?php
                if($sm1!=""){
                  ?>
                  <a target="_blank"class="text-info" title="เปิดดู" href="<?php echo $pathweb;?><?php echo $sm1;?>"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                  <?php
                }
                ?>
              </td>
            </tr>
            <?php
            $sm1="";
          }
          ?>
        </tbody>
      </table>
      </div>
      <?php
    }else{
      ?>
      <div class="text-center p-5 border">
        ไม่พบการถอน
      </div>
      <?php
    }
      ?>
    </div>
  </div>
</div>
