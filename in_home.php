<div class="container">
  <div class="row">
    <div class="col-3 nopadding mt-4">
      <div class="row">
        <div class="col-6 text-center">
          <a href="#">
            <img src="images/home_body_icon_01.png" alt="" class="footer_icon_contact" width="100">
          </a>
        </div>
        <div class="col-6 text-center">
          <a href="#">
            <img src="images/home_body_icon_02.png" alt="" class="footer_icon_contact" width="100">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-6 text-center">
          <a href="#">
            <img src="images/home_body_icon_03.png" alt="" class="footer_icon_contact" width="100">
          </a>
        </div>
        <div class="col-6 text-center">
          <a href="#">
            <img src="images/home_body_icon_04.png" alt="" class="footer_icon_contact" width="100">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-6 text-center">
          <a href="#">
            <img src="images/home_body_icon_05.png" alt="" class="footer_icon_contact" width="100">
          </a>
        </div>
        <div class="col-6 text-center">
          <a href="#">
            <img src="images/home_body_icon_06.png" alt="" class="footer_icon_contact" width="100">
          </a>
        </div>
      </div>
    </div>
    <div class="col-9 nopadding">
      <div class="row">
        <div class="col-12 py-3">
          <div class="">
            <span style="width:20px;height:50px;float:left;background-color:#F00;"></span>
            <span class="h6 pull-left mt-3 ml-3">เว็บไซต์</span>
            <a href="#" class="pull-left">
              <img src="images/home_website_icon_01.png" alt="" class="zimg">
            </a>
            <a href="#" class="pull-left">
              <img src="images/home_website_icon_02.png" alt="" class="zimg">
            </a>
            <a href="#" class="pull-left">
              <img src="images/home_website_icon_03.png" alt="" class="zimg">
            </a>
            <a href="#" class="pull-left">
              <img src="images/home_website_icon_04.png" alt="" class="zimg">
            </a>
            <a href="#" class="pull-left">
              <img src="images/home_website_icon_05.png" alt="" class="zimg">
            </a>
            <a href="#" class="pull-left">
              <img src="images/home_website_icon_06.png" alt="" class="zimg">
            </a>
            <a href="#" class="pull-left">
              <img src="images/home_website_icon_07.png" alt="" class="zimg">
            </a>
          </div>
          <div class="">
            <img src="<?php echo $pathweb;?>images/home_recommend.png" alt="" class="zimg">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-web mt-2">
  <div class="container">
    <div class="row home_bg_title pb-3 pt-5">
      <div class="col-12">
        <div class="home_bg_title_child text-center p-2">
          <span class="color-web">หมวดสินค้า</span>
        </div>
        <div class="d-block text-center">
          <a href="#">
            <img src="images/home_footer_icon_01.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_02.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_03.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_04.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_01.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_02.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_03.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_04.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_01.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_02.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_03.png" alt="" class="footer_icon_contact" width="80">
          </a>
          <a href="#">
            <img src="images/home_footer_icon_04.png" alt="" class="footer_icon_contact" width="80">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-bar mt-5">
  <div class="container">
    <div class="row home_bg_title py-3">
      <div class="col-12 text-right">
        <div class="home_bg_title_child2 text-center px-2 py-3 text-white bg-web">
          <h4 class="text-white mb-0">สินค้าที่ได้รับความนิยม</h4>
        </div>
        <a href="#" class="py-3 px-4 bg-web text-white">ทั้งหมด <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>
<?php
$sqltao="select * from ".$prefix."_member_searchtaobao where list_status = '0' order by rand() limit 8 ";
$exectao=mysqli_query($conn, $sqltao);
$numotao = mysqli_num_rows($exectao);
if($numotao>0){


?>
<div class="container mt-3">
  <div class="row">
    <?php
    while ($datatao=mysqli_fetch_assoc($exectao)) {
    ?>
    <div class="col-3">
      <a class="home_item_big" href="<?php echo $datatao['list_img'];?>">
        <img src="<?php echo $datatao['list_img'];?>" alt="" class="img-fluid">
      </a>
      <div class="home_item_price text-center color-web">
        ¥ <?php echo $datatao['list_price'];?>.-
      </div>
      <div class="bg-secondary">
        <div class="w-75 d-inline-block text-center bg-web text-white p-2">
          ซื้อสินค้า
        </div>
        <div class="d-inline-block pull-right mt-1 p-2 mr-2">
          <span class="h5">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
          </span>
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
$sqltao="select * from ".$prefix."_member_searchtaobao where list_status = '0' order by rand() limit 8 ";
$exectao=mysqli_query($conn, $sqltao);
$numotao = mysqli_num_rows($exectao);
if($numotao>0){


?>
<div class="container-fluid bg-bar mt-5">
  <div class="container">
    <div class="row home_bg_title py-3">
      <div class="col-12 text-right">
        <div class="home_bg_title_child2 text-center px-2 py-3 text-white bg-web">
          <h4 class="text-white mb-0">สินค้าที่ขายดี</h4>
        </div>
        <a href="#" class="py-3 px-4 bg-web text-white">ทั้งหมด <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="row">
    <?php
    while ($datatao=mysqli_fetch_assoc($exectao)) {
    ?>
    <div class="col-3">
      <a class="home_item_big" href="<?php echo $datatao['list_img'];?>">
        <img src="<?php echo $datatao['list_img'];?>" alt="" class="img-fluid">
      </a>
      <div class="home_item_price text-center color-web">
        ¥ <?php echo $datatao['list_price'];?>.-
      </div>
      <div class="bg-secondary">
        <div class="w-75 d-inline-block text-center bg-web text-white p-2">
          ซื้อสินค้า
        </div>
        <div class="d-inline-block pull-right mt-1 p-2 mr-2">
          <span class="h5">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
          </span>
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
<!-- end section items -->
<form class="mb-4" name="SaveFormLogin_bottom" id="SaveFormLogin_bottom" action="<?php echo $pathweb;?>php/SaveFormTaobao.php?method=show" method="post" enctype="multipart/form-data" target="com_m">
  <div class="container-fluid home_bg_search02 my-5">
    <div class="row">
      <form class="mb-4" name="SaveFormLogini" id="SaveFormLogini" action="<?php echo $pathweb;?>php/SaveFormTaobao.php?method=show" method="post" enctype="multipart/form-data" target="com_m">
      <div class="col-12 text-center text-white py-5">
        <h2>THE BEST OF <span class="color-web">PREORDER</span> CHAINA</h2>
        <h3>GOOD SHOP IN THAILAND</h3>
        <div class="d-inline-block w-50 mt-2">
          <div class="areaserach px-4">
            <input type="text" name="url" value="" class="bordercircle inputserach w-100 tagcursor" placeholder="http://www.xxxx.com/xxxx">
            <button type="submit" name="button" class="btn-url bg-web text-white tagcursor"><i class="fa fa-search" aria-hidden="true"></i></button>

          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</form>
<!-- end section search url -->
<div class="container-fluid bg-bar mt-5">
  <div class="container">
    <div class="row home_bg_title py-3">
      <div class="col-12 text-center">
        <div class="home_bg_title_child3 text-center px-2 py-3 text-white bg-web d-inline-block">
          <p class="text-white mb-0">ข่าวสารและโปรโมทชั่น</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container my-4">
  <div class="row">
    <div class="col-3">
      <div class="bg-shadow">
        <a href="#" class="d-block">
          <img src="images/home_newspromotion.jpg" alt="" class="img-fluid">
        </a>
        <a href="#" class="text-center d-block bg-web py-3 text-white h4">BLACK FRIDAY</a>
      </div>
    </div>
    <div class="col-3">
      <div class="bg-shadow">
        <a href="#" class="d-block">
          <img src="images/home_newspromotion.jpg" alt="" class="img-fluid">
        </a>
        <a href="#" class="text-center d-block bg-web py-3 text-white h4">BIG SALE</a>
      </div>
    </div>
    <div class="col-3">
      <div class="bg-shadow">
        <a href="#" class="d-block">
          <img src="images/home_newspromotion.jpg" alt="" class="img-fluid">
        </a>
        <a href="#" class="text-center d-block bg-web py-3 text-white h4">VINTGE SAVE PRICE</a>
      </div>
    </div>
    <div class="col-3">
      <div class="bg-shadow">
        <a href="#" class="d-block">
          <img src="images/home_newspromotion.jpg" alt="" class="img-fluid">
        </a>
        <a href="#" class="text-center d-block bg-web py-3 text-white h4">BLACK FRIDAY</a>
      </div>
    </div>
  </div>
</div>
<!-- end section search url -->
