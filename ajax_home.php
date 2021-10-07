<?php
if($_REQUEST[method]=="home1"){
  ?>
  <?php
  $sqltao="select * from ".$prefix."_member_searchtaobao where list_status = '0' and list_img!='' and list_img !='{' order by rand() limit 12 ";
  $exectao=mysqli_query($conn, $sqltao);
  $numotao = mysqli_num_rows($exectao);
  if($numotao>0){
  ?>
  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo $pathweb;?>images/ps3_hometitleProduct01.png" alt="" width="300">
      </div>
      <div class="col-md-6 text-right">
        <a target="_self" href="<?php echo $pathweb; ?>showproduct/">
          <img src="<?php echo $pathweb;?>images/ps3_btnmoreHome.png" alt="" width="150">
        </a>
      </div>
    </div>
    <div class="row mt-3 px-4">
      <?php
      while ($datatao=mysqli_fetch_assoc($exectao)) {
        $linktao="";
        $linktao=$pathweb."taobao/".$datatao['itemId']."/?url=https://item.taobao.com/item.htm?id=".$datatao['itemId'];
      ?>
      <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3">
        <a target="_self" class="home_item_big border border-bottom-0 d-block" href="<?php echo $linktao;?>">
          <img src="<?php echo $datatao['list_img'];?>" alt="" class="img-fluid">
        </a>
        <div class="home_item_price text-center text-secondary border border-top-0 border-bottom-0 p-1">

          <a href="<?php echo $linktao;?>" target="_self" class="txt_link_overflow">
            <?php echo mbStringwithDot($datatao['list_title'],20);?>
          </a>
        </div>
        <div class="border border-top-0 p-1">
          <div class="row">
            <div class="col-8">
              <div class="text-warning font-weight-bold">
                ¥ <?php echo $datatao['list_price'];?>
              </div>
            </div>
            <div class="col-4 text-right mb-1">
              <a href="<?php echo $linktao;?>" class="" target="_self">
                <img src="<?php echo $pathweb;?>images/ps3_btnshopping.png" alt="" width="30">
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
  <?php
  }
  ?>
  <?php
  exit();
}
?>

<?php
if($_REQUEST[method]=="home2"){
$sqltao="select * from ".$prefix."_member_searchtaobao where list_status = '0' and list_img!='' and list_img !='{' order by rand() limit 12 ";
$exectao=mysqli_query($conn, $sqltao);
$numotao = mysqli_num_rows($exectao);
if($numotao>0){


?>
<div class="container-fluid bg-web4 mt-5">
  <div class="row">
    <div class="col-md-6">
      <img src="<?php echo $pathweb;?>images/ps3_hometitleProduct02.png" alt="" width="300">
    </div>
    <div class="col-md-6 text-right">
      <a href="javascript:;">
        <img src="<?php echo $pathweb;?>images/ps3_btnmoreHome.png" alt="" width="150">
      </a>
    </div>
  </div>
  <div class="row mt-3 px-4">
    <?php
    while ($datatao=mysqli_fetch_assoc($exectao)) {
      $linktao="";
      $linktao=$pathweb."taobao/".$datatao['itemId']."/?url=https://item.taobao.com/item.htm?id=".$datatao['itemId'];
    ?>
    <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3">
      <a class="home_item_big border border-bottom-0 d-block" href="<?php echo $linktao;?>">
        <img src="<?php echo $datatao['list_img'];?>" alt="" class="img-fluid">
      </a>
      <div class="home_item_price text-center text-secondary border border-top-0 border-bottom-0 p-1">
        <a href="<?php echo $linktao;?>" class="txt_link_overflow" target="_self">
          <?php echo mbStringwithDot($datatao['list_title'],20);?>
        </a>
      </div>
      <div class="border border-top-0 p-1">
        <div class="row">
          <div class="col-8">
            <div class="text-warning font-weight-bold">
              ¥ <?php echo $datatao['list_price'];?>
            </div>
          </div>
          <div class="col-4 text-right mb-1">
            <a href="<?php echo $linktao;?>" class="" target="_self">
              <img src="<?php echo $pathweb;?>images/ps3_btnshopping.png" alt="" width="30">
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
<?php
}
}
?>
