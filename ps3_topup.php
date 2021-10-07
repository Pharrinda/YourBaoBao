<?php
if(login_memberid()==0){
  ?><script type="text/javascript">alert("กรุณาล็อกอินก่อนค่ะ");window.location="<?php echo $pathweb;?>"</script><?
  exit();
}
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
      <div class="px-4 bg-shadow">
        <div class="row">
          <?php
          $uid = encrypt_decrypt('decrypt',$_COOKIE['_htime']);
          $sqlu="select uid,member_name,member_lname,member_email,member_wallet from ".$prefix."_member where uid='".$uid."' and member_status='1' ";
          $execu=mysqli_query($conn, $sqlu);
          if(mysqli_num_rows($execu)>0){
            $rowu = mysqli_fetch_assoc($execu);
            ?>
            <div class="col-12 px-3 py-3">
              <div class="col-12">
                <div class="row mb-3">
                  <div class="col-6">
                    <h3 class="d-inline-block"><i class="fa fa-money" aria-hidden="true"></i> ยอดเงินคงเหลือ</h3>
                    <span class="d-inline-block h4 text-success">(฿<?php echo number_format($rowu['member_wallet'],2);?>)</span>
                    <div class="">
                      <small class="text-info">กรุณาโอนเงินเข้าบัญชีบริษัท ยัวร์เบ่าเบา จำกัด ตามจำนวนเงินที่ต้องการ และ ทำรายการแจ้งเดิมเงิน</small>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <button type="button" name="add_live" class="btn btn-primary tagcursor" data-toggle="modal" data-target="#ModalAdress-01"> <i class="fa fa-plus-circle" aria-hidden="true"></i> แจ้งเติมเงิน</button>
                    <button type="button" name="add_live" class="btn btn-light tagcursor" data-toggle="modal" data-target="#Modalbank-01"><i class="fa fa-university" aria-hidden="true"></i> บัญชีธนาคารสำหรับโอนเงิน</button>

                    <div class="text-danger">
                      ข้อแนะนำ: ควรเติมเงินตามจำนวนที่ต้องการชำระ เนื่องจากการถอนเงินอาจใช้เวลา 2-3 วันทำการ
                    </div>

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="Modalbank-01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-university" aria-hidden="true"></i> บัญชีธนาคารสำหรับโอนเงิน</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?php
                            $sqlbank="select * from ".$prefix."_bank_account where bank_status = '1' order by account_name asc ";
                            $execbank=mysqli_query($conn, $sqlbank);
                            if(mysqli_num_rows($execbank)>0){
                              ?>
                              <ul class="list-group">
                                <?php
                                while($databank = mysqli_fetch_assoc($execbank)){
                                  ?>
                                  <li class="list-group-item text-left bg-info mb-2 text-white">
                                    <p>ธนาคาร : <?php echo $databank['bank_name'];?></p>
                                    <p>สาขา : <?php echo $databank['bank_address'];?></p>
                                    <p>ชื่อบัญชี : <?php echo $databank['account_name'];?></p>
                                    <p>เลขที่บัญชี : <?php echo $databank['bank_account'];?></p>
                                    <!-- <p>*หมายเหตุ : สำหรับลูกค้าบริษัทฯหรือนิติบุคคล</p> -->
                                  </li>
                                  <?php
                                }
                                ?>
                              </ul>
                              <?php
                            }
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="ModalAdress-01" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">แจ้งเติมเงิน</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form class="mb-4" name="SaveFormAddress" id="SaveFormAddress" action="<?php echo $pathweb;?>php/SaveFormTopup.php?method=save" method="post" enctype="multipart/form-data" target="com_m">
                            <div class="modal-body text-left">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-12 control-label font-14"><i class="glyphicon glyphicon-cog"></i> ประเภทเติมเงิน<span class="text-danger">*</span> :</label>
                                <div class="col-sm-12">
                                  <select class="form-control text-yellow" name="topup_type" id="topup_type">
                                    <option value=""> - กรุณาเลือกช่องทางการชำระเงิน - </option>
                                    <option value="1" selected>โอนเงินเข้าบัญชีธนาคาร </option>
                                    <!-- <option value="2">เงินสด </option>
                                    <option value="3">เช็ค </option>
                                    <option value="4">บัตรเครดิต </option>
                                    <option value="5">อื่นๆ </option> -->
                                  </select>
                                </div>
                              </div> 
                              <div class="form-group">
                                <label for="bank" class="col-sm-12 control-label font-14"><i class="glyphicon glyphicon-import"></i> เข้าบัญชีธนาคาร<span class="text-danger">*</span> :</label>
                                <div class="col-sm-12">
                                  <select class="form-control text-yellow" name="bank" id="bank">
                                    <option value=""> - กรุณาเลือกบัญชีธนาคาร - </option>
                                    <?
                                    $sqlam = "select * from ".$prefix."_bank_account where bank_status='1'  order by account_name ASC";
                                    $queryam = mysqli_query($conn,$sqlam);
                                    while($dataam = mysqli_fetch_assoc($queryam)){
                                      ?>
                                      <option value="<?=$dataam['bacc_id']?>" selected><?=$dataam['account_name']?> <?=$dataam['bank_name']?> [<?=$dataam['bank_account']?>]</option>
                                      <?php
                                    }
                                    ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="date" class="col-sm-12 control-label font-14"><i class="glyphicon glyphicon-calendar"></i> วันที่โอน<span class="text-danger">*</span> :</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control datepicker form-datepicker text-yellow hasDatepicker" name="datetopup" id="datetopup" value="<?php echo date('Y-m-d'); ?>" placeholder="0000-00-00 (ป-ด-ว)" readonly="readonly" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="date" class="col-sm-12 control-label font-14"><i class="glyphicon glyphicon-time"></i> เวลาโอน<span class="text-danger">*</span> :</label>
                                <div class="row">
                                  <div class="col-sm-6 pl-4">
                                    <select class="form-control" name="timetopup_hou" id="timetopup_hou">
                                      <option value="" selected>เลือกชั่วโมง</option>
                                      <?php
                                      for ($i=0; $i < 24; $i++) {
                                        $invID = str_pad(($i), 2, '0', STR_PAD_LEFT);
                                        ?>
                                        <option value="<?php echo $invID; ?>"<?php if($invID==date("h")){ ?> selected<?php }?>><?php echo $invID; ?></option>
                                        <?php
                                      }
                                      ?>
                                    </select>
                                  </div>
                                  <div class="col-sm-6 pr-4">
                                    <select class="form-control" name="timetopup_min" id="timetopup_min">
                                      <option value="" selected>เลือกนาที</option>
                                      <?php
                                      for ($i=0; $i < 60; $i++) {
                                        $invID = str_pad(($i), 2, '0', STR_PAD_LEFT);
                                        ?>
                                        <option value="<?php echo $invID; ?>"<?php if($invID==date("i")){ ?> selected<?php }?>><?php echo $invID; ?></option>
                                        <?php
                                      }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="date" class="col-sm-12 control-label font-14"><strong>฿</strong> จำนวนเงิน<span class="text-danger">*</span> :</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control text-yellow" name="amount" id="amount-topup" placeholder="บาท" onkeypress="return chkNumber(this)">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="date" class="col-sm-12 control-label font-14"><i class="glyphicon glyphicon-asterisk"></i> หมายเหตุ :</label>
                                <div class="col-sm-12">
                                  <textarea class="form-control text-yellow" name="remark" id="remark" rows="2"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="date" class="col-sm-12 control-label font-14"><strong><i class="glyphicon glyphicon-camera"></i></strong> แนบไฟล์รูปภาพ :</label>
                                <div class="col-sm-12">
                                  <input type="file" class="form-control mg-0 pd-0 text-yellow" name="filetopup" id="filetopup" accept="image/*">
                                </div>
                              </div>
                              <div class="form-group mg-top-30">
                                <div class="col-sm-offset-3 col-sm-5">
                                </div>
                              </div>
                              <div class="text-danger">
                                ข้อแนะนำ: ควรเติมเงินตามจำนวนที่ต้องการชำระ เนื่องจากการถอนเงินอาจใช้เวลา 2-3 วันทำการ
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-outline-primary tagcursor posttopuploadings" role="button"><i class="fa fa-location-arrow"></i> แจ้งเติมเงิน</button>
                              <!-- <button type="submit" class="btn btn-outline-primary" name="submitAddress">แจ้งเติมเงิน</button> -->
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
        <?php
        $sqla="select * from ".$prefix."_member_topup a left join ".$prefix."_member b on a.uid=b.uid where b.member_status='1' and b.uid='$uid' order by a.topup_id desc ";
        $execa=mysqli_query($conn, $sqla);
        if(mysqli_num_rows($execa)>0){
          ?>
          <div class="table-responsive">
            <table class="table table-striped mg-0">
              <tbody>
                <tr class=" bg-web text-white">
                  <th class="text-center">รหัสอ้างอิง</th>
                  <th class="text-left">ประเภทเติมเงิน</th>
                  <th class="text-center">จำนวน</th>
                  <th class="text-center" style="width:100px;">สถานะ</th>

                  <th class="text-center" width="150">วันที่แจ้งเติมเงิน</th>
                  <th class="text-center" width="150">แก้ไขล่าสุด</th>
                  <th class="text-center">เปิดดู</th>
                </tr>
                <?php
                while ($rowaa = mysqli_fetch_assoc($execa)) {
                  foreach (glob(ROOTPATH."data/topup/".$rowaa['topup_id']."/resize/*.*") as $sm1) {
                    break;
                  }
                  // echo $sm1;
                  $sm1 = ereg_replace(ROOTPATH,"",$sm1);
                  $addresscode = encrypt_decrypt('encrypt',$rowaa['topup_id']);
                  if($rowaa['topup_type']=="1"){
                    $statustype = '<span class="text-">โอนเงิน</span>';
                  }
                  if($rowaa['topup_type']=="2"){
                    $statustype = '<span class="text-">เงินสด</span>';
                  }
                  if($rowaa['topup_type']=="3"){
                    $statustype = '<span class="text-">เช็ค</span>';
                  }
                  if($rowaa['topup_type']=="4"){
                    $statustype = '<span class="text-">บัตรเครดิต</span>';
                  }
                  if($rowaa['topup_type']=="5"){
                    $statustype = '<span class="text-">อื่นๆ</span>';
                  }

                  if($rowaa['topup_status']=="1"){
                    $status = '<span class="text-success">ถูกต้อง</span>';
                  }
                  if($rowaa['topup_status']=="2"){
                    $status = '<span class="text-warning">รออนุมัติ</span>';
                  }
                  if($rowaa['topup_status']=="3"){
                    $status = '<span class="text-danger">ข้อมูลไม่ถูกต้อง</span>';
                  }
                  // $imagedata = file_get_contents($files);
                  // $base64 = base64_encode($imagedata);
                  if($rowaa['topup_status']=="1"){
                    $totaltopup+=$rowaa[topup_amont];
                  }
                  ?>
                  <tr>
                    <td class="text-middle text-center">
                      <a href="#" class="text-info" data-toggle="modal" data-target="#detail-58123">
                        <small><?php echo $rowaa['topup_code']; ?></small>

                      </a>
                    </td>
                    <td class="text-left text-middle">
                      <?php echo $statustype; ?>
                    </td>
                    <td class="text-right text-red text-middle">
                      <?php echo number_format($rowaa['topup_amont'],2); ?>
                    </td>
                    <td class="text-center text-middle"><?php echo $status; ?></td>
                    <td class="text-center text-middle"><?php echo $rowaa['topup_date']; ?></td>
                    <td class="text-center text-middle"><?php echo $rowaa['topup_by_date']; ?></td>
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
              <tfoot>
                <tr class="bg-web text-white">
                  <td></td>
                  <td>ยอดรวม</td>
                  <td class="text-right">
                    <?php echo number_format($totaltopup,2); ?>
                  </td>
                  <td colspan="4"></td>
                </tr>
              </tfoot>
            </table>
          </div>
          <?php
        }else{
          ?>
          <div class="text-center my-3 d-block mb-5 pb-5">
            ไม่พบข้อมูล
          </div>
          <?php
        }
        ?>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript">

</script>
