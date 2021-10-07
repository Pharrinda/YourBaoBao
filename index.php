<?php include("config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="google-site-verification" content="Bl0EBTyz1_t_J4X35icLDukS7Mqs3XfJIpgwqOiwv68" />
  <meta name="google-site-verification" content="dItdqD6Lr720n91RSFGF6UobRyxlpiZHSKeudcGK1Q4" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="facebook-domain-verification" content="2gi0co3vy21scu05jtgwtx53ety7rq" />
  <?php
  $url_request = explode ("/",$_SERVER['REQUEST_URI']);
  // $url_request_decode = urldecode($url_request[2]);

  // print_r($url_request_decode);

  if($url_request[1] == "content"){ //open if
    switch (urldecode($url_request[2])) {  // open switch
      case '9-YourBaobao.html':
        echo "<title>สั่งของจากจีนเว็บ 1688.com ภาษาไทย | เว็บ 1688 | ผ่าน Yourbaobao </title>";
        echo "\n";
        echo "<meta name='description' content='Yourbaobao | สั่งของจากเว็บชั้นนำของจีนง่ายๆ | สั่งของ 1688 | สั่งของจากจีน1688 | เว็บ 1688 | สะดวกรวดเร็ว หมดปัญหาอ่านภาษาจีนไม่ออก สั่งกับเราเลย!!!'>";
      break;
      case '25-จุดรับสินค้า.html':
        echo "<title>ชิปปิ้งจีน มาไทย พร้อมจุดรับส่งสินค้าและบริการ delivery ทั่วไทย | yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='สั่งสินค้าจากจีนกับ Yourbaobao ได้แล้วที่นี่ มารับของด้วยตัวเองที่จุดรับสินค้าเพื่อความรวดเร็ว หรือให้เราจัดส่งให้ แบบไหนก็สะดวก สั่งเลย!!!'>";
      break;
      case '23-วิธีการสั่งสินค้า.html':
        echo "<title>วิธีสั่งของจากจีน| ราคาถูก | สะดวกรวดเร็ว | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='สั่งซื้อสินค้าจีน นำเข้าสินค้าจีนง่ายๆ โดยเลือกดูขากเว็บซื้อของจีน | เว็บ taobao | สั่งของ 1688 | สั่งสินค้าผ่าน Yourbaobao'>";
      break;
      case '24-บริการของเราและวิธีคิดค่าบริการ.html':
        echo "<title>Yourbaobao | บริการของเราและวิธีคิดค่าบริการ | สะดวก ถูก รวดเร็ว</title>";
        echo "\n";
        echo "<meta name='description' content='บริการของเราครบวงจร สั่งง่ายจัดส่งไว คิดค่าบริการถูก สั่งของจากจีน | เว็บซื้อของจีน | Yourbaobao'>";
      break;
      case '24-ค่าบริการ.html':
        echo "<title>ค่าบริการ Service fees | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='ดูค่าบริการของเรา Yourbaobao | เว็บซื้อของจีน | แอพซื้อของจากจีน | สะดวก รวดเร็ว ไม่แพง'>";
      break;
      case '22-คำถามที่พบบ่อย.html':
        echo "<title>คำถามที่พบบ่อย เวลาสั่งซื้อของเว็บจีน | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='คำถามที่พบบ่อยเวลาสั่งซื้อของ พรีออเดอร์ของจากจีน Yourbaobao เรามีคำตอบให้ | ตอบทุกข้อสงสัย เวลาสั่งของจากเว็บจีน'>";
      break;
      case '21-ข้อตกลงและเงื่อนไขการใช้บริการ.html':
        echo "<title>ข้อตกลงและเงื่อนไขการใช้บริการ | นำเข้าสินค้าจากจีน | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='อ่านเงื่อนไขการให้บริการของเรา | เว็บสั่งของจีน | สั่งของจากเว็บชั้นนำของจีน | เว็บ 1688 | สั่งของ taobao | สั่งเลยกับ Yourbaoboa'>";
      break;
      case '18-อัตราแลกเปลี่ยน.html':
        echo "<title>อัตราแลกเปลี่ยน เว็บสั่งของจากจีน| Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='ดูอัตราแลกเปลี่ยน เว็บซื้อของจีน | นำเข้าสินค้าจีน |Yourbaobao '>";
      break;
      case '16-ระยะเวลา.html':
        echo "<title>สั่งของจากจีน ระยะเวลาสั่งซื้อสิน และจัดส่งสินค้า | ชิปปิ้งจีน | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='ระยะเวลาในการสั่งสินค้าจากจีนผ่าน เว็บ Yourbaobao สะดวก รวดเร็ว ครบวงจร | สั่งซื้อสินค้าจากจีน | ชิปปิ้งจีน'>";
      break;
      case '11-ติดต่อเรา.html':
        echo "<title>ติดต่อเรา Yourbaobao | เว็บซื้อของจีน | พร้อมให้บริการ</title>";
        echo "\n";
        echo "<meta name='description' content='ติดต่อเรา Yourbaobao ผ่าน call center | Line | Facebook | เว็บสั่งของจีน | พร้อมให้บริการลูกค้าทุกท่าน'>";
      break;
      default:
      echo "<title>สั่งสินค้าจากจีน นำเข้าสินค้าจากจีน สั่งสินค้าtaobao นำเข้าสินค้าalibaba นำเข้า พรีออเดอร์ จีน preorder จีน พรีออเดอร์สินค้าจากจีน shipping จีน ชิปปิ้งจีน ขายส่ง</title>" ;
      echo "\n";
      echo "<meta name='description' content='สั่งสินค้าจากจีน นำเข้าสินค้าจากจีน สั่งสินค้าtaobao นำเข้าสินค้าalibaba นำเข้า พรีออเดอร์ จีน preorder จีน พรีออเดอร์สินค้าจากจีน shipping จีน ชิปปิ้งจีน ขายส่ง'/>";
    break;
      }  // end switch
  } // end if

  if($url_request[1] == "Content"){ //open if
    switch (urldecode($url_request[2])) {  // open switch
      case '7-อ่านภาษาจีนไม่ออก จะซื้อของจาก Taobao ได้อย่างไร.html':
        echo "<title>สั่งของจากเว็บ taobao (เถาเป่า)แต่อ่านจีนไม่ออก |ให้ Yourbaobao ช่วยคุณ</title>";
        echo "\n";
        echo "<meta name='description' content='หมดปัญหาสั่งซื้อของจากเว็บจีนเถาเป่า tabao | แต่อ่านภาษาจีนไม่ออก เลือกสั่งสินค้าจากจีนผ่าน Yourbaobao ง่ายๆเพียงปลายนิ้วสัมผัส สั่งเลย!!!'>";
      break;
      case '9-ค้นหาสินค้าใน Taobao ด้วยรูปภาพ !! ฟังก์ชั่นที่มองไม่ค่อยเห็น แต่ประโยชน์มากเกินตัว.html':
        echo "<title>วิธีสั่งของจากจีนด้วยรูปภาพ | สำหรับเว็บ taobao | yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='สั่งซื้อง่ายขึ้นกว่าเดิมด้วยระบบค้นหาสินค้าด้วยรูปภาพ | มีปัญหาอ่านภาษาจีนไม่ออก สั่งซื้อกับเราเลยเพียงแค่กดค้นหาด้วยรูปภาพ | Yourbaobao'>";
      break;
      case '10-ทำไมเข้าเว็บ Taobao แล้วดูสินค้าไม่ได้ วิธีสมัครสมาชิก เถาเป่า เพื่อดูสินค้า.html':
        echo "<title>วิธีสมัครสมาชิก เถาเป่า เพื่อดูสินค้าจากเว็บ taobao | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='ทำไมเข้าเว็บ taobao แล้วดูสินค้าไม่ได้ | วิธีสมัคร เถาเป่า เพื่อดูสินค้าจากเว็บซื้อของจีน | Yourbaobao'>";
      break;
      case '11-ฟีเจอร์ใหม่!! บริการแจ้งเตือนสถานะสั่งซื้อ ผ่านไลน์.html':
        echo "<title>บริการแจ้งเตือนสถานะสั่งซื้อผ่าน ไลน์ | สั่งของจากจีน | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='ติดตามสถานะสั่งซื้อของจากจีน ผ่านไลน์ | สั่งง่าย สะดวก รวดเร็ว | Yourbaobao  '>";
      break;
      case '12-แอพสั่งของจากจีน สั่งซื้อสะดวก ง่ายๆ ด้วยภาษาไทย | Yourbaobao.html':
        echo "<title>แอพสั่งของจากจีน สั่งซื้อสะดวก ง่ายๆ ด้วยภาษาไทย | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content=' สั่งซื้อของจากจีนง่ายๆ ด้วยแอพซื้อของจากจีน สะดวกรวดเร็ว ด้วยการสั่งงานด้วยภาษาไทย ที่จะช่วยให้การสั่งซื้อสินค้าจากจีนของทุกคนง่าย และสะดวกมากขึ้น | Yourbaobao'>";
      break;
      case '13-สั่งเสื้อผ้าจากจีน ไม่ใช่เรื่องยากอีกต่อไป ใครๆก็สั่งได้ | Yourbaobao.html':
        echo "<title> สั่งเสื้อผ้าจากจีน ไม่ใช่เรื่องยากอีกต่อไป ใครๆก็สั่งได้ | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='สั่งซื้อเสื้อผ้าจากจีน ไม่ใช้เรื่องยากอีกต่อไป ไม่ว่าจะสั่งซื้อมาขาย หรือใช้เอง ก็เป็นเพียงแค่เรื่องง่ายๆ ที่ใครๆก็สามารถทำได้ วันนี้ Yourbaobao ขอนำเสนอบทความดีๆให้อ่านกัน!'>";
      break;

      case '14-แนะนำเว็บสั่งของจากจีน | ที่ให้เรทราคาที่ถูกที่สุดต้อง  yourbaobao.html':
        echo "<title>แนะนำเว็บสั่งของจากจีน | ที่ให้เรทราคาที่ถูกที่สุดต้อง yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='yourbaobao แนะนำวิธีการเลือกเว็บสั่งของจากจีนที่น่าเชื่อถือและช่วยให้คุณได้ของตามที่ต้องการได้แม้จะไม่รู้ภาษาจีน ดูรายละเอียดเพิ่มเติมได้ที่นี่เลย'>";
      break;
      case '15-พรีออเดอร์ของจากจีน | ควรมองหาอะไรบ้าง | yourbaobao.html':
        echo "<title>พรีออเดอร์ของจากจีน | ควรมองหาอะไรบ้าง | yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='การพรีออเดอร์ของจากประเทศจีน ทำอย่างไรให้ไม่โดนโกงพร้อมคำแนะนำและเทคนิคที่เหมาะสมต่อการเลือกสินค้า ดูรายละเอียดเพิ่มเติมได้ที่นี่'>";
      break;
      case '16-นำเข้าสินค้าจากจีนมาขาย | yourbaobao แนะนำ 7 ร้านเสื้อผ้ายอดนิยมใน taobao.html':
        echo "<title>นำเข้าสินค้าจากจีนมาขาย | yourbaobao แนะนำ 7 ร้านเสื้อผ้ายอดนิยมใน taobao</title>";
        echo "\n";
        echo "<meta name='description' content='yourbaobao พาแนะนำ 7ร้านเสื้อผ้ายอดนิยมในเถาเป่า ที่ได้รับความนิยมอย่างมากในช่วงนี้ที่พร้อมให้ทั้งราคาที่ถูกและดีไซน์ที่หลากหลาย ดูรายละเอียดเพิมเติมได้ที่นี่'>";
      break;
      case '17-วิธีการสั่งของจากเว็บ taobao และ 1688 ร้านไหนส่งของจริง ส่งไว ไว้ใจได้.html':
        echo "<title>วิธีดูร้านไหนส่งของจริงมีคุณภาพในเว็บ taobao 1688 ควรทำอย่างไร </title>";
        echo "\n";
        echo "<meta name='description' content='สั่งซื้อสินค้าจากจีน พรีออเดอร์จีน ไม่ใช่เรื่องยากอีกต่อไป เพราะสามารถติดต่อกับผู้ผลิตได้โดยตรง ผ่านเว็บสั่งของจากจีน ไม่ว่าจะเป็น เว็บ taobao หรือ เว็บ 1688'>";
      break;
      case '20-อยากนำเข้าสินค้าและสั่งซื้อจากเว็บจีน  แต่อ่านภาษาจีนไม่ออก เรามีตัวช่วย | yourbaobao.html':
        echo "<title>อยากนำเข้าสินค้าและสั่งซื้อจากเว็บจีน  แต่อ่านภาษาจีนไม่ออก เรามีตัวช่วย | yourbaobao        </title>";
        echo "\n";
        echo "<meta name='description' content='ปัจจุบันนี้การสั่งของ 1688 หรือ taobao เป็นที่แพร่หลายในไทยเป็นอย่างมาก แต่ปัญหาคืออ่านภาษาจีนไม่ออก จะสั่งสินค้าจากจีนยังไง ? มาหาคำตอบไปด้วยกัน คลิกเลย!!!
        '>";
      break;
      case '19-เทคนิคการเช็คค่าขนส่งในจีนจากเว็บ taobao และ 1688 ตรวจสอบอย่างไร ให้รู้ราคาคร่าว ๆ.html':
        echo "<title>รวมเทคนิคเช็คราคาขนส่งจากเว็บจีน ให้คุณได้ราคาที่ถูกกว่า | Yourbaobao        </title>";
        echo "\n";
        echo "<meta name='description' content='สั่งของจากจีนยังไงให้ถูกที่สุด ของแบบนี้เราต้องมีเทคนิค เพราะสั่งของจาก เว็บtaobao หรือ เว็บ1688 ย่อมมีค่าสั่งภายในประเทศ แล้วเราจะเช็คดูได้ยังไง หาคำตอบไปกับเราที่นี่'>";
      break;





      default:
      echo "<title>สั่งสินค้าจากจีน นำเข้าสินค้าจากจีน สั่งสินค้าtaobao นำเข้าสินค้าalibaba นำเข้า พรีออเดอร์ จีน preorder จีน พรีออเดอร์สินค้าจากจีน shipping จีน ชิปปิ้งจีน ขายส่ง</title>" ;
      echo "\n";
      echo "<meta name='description' content='สั่งสินค้าจากจีน นำเข้าสินค้าจากจีน สั่งสินค้าtaobao นำเข้าสินค้าalibaba นำเข้า พรีออเดอร์ จีน preorder จีน พรีออเดอร์สินค้าจากจีน shipping จีน ชิปปิ้งจีน ขายส่ง'/>";
    break;
      }  // end switch
  } // end if


  if ($url_request[1] == "products"){
    switch ($url_request[2]){
      case 'recommend':
        echo "<title>สินค้าที่ได้รับความนิยมจากเว็บซื้อของจีน | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='เลือกดูสินค้าที่ได้รับความนิยมมากมายผ่าน Yourbaobao ได้แล้ว | ชิปปิ้งจีน สินค้าส่งตรงจากเมืองจีน | สั่งของ 1688 | สั่งของ taobao'>";
      break;
      case 'bestseller':
        echo "<title>สินค้าขายดีจากเว็บซื้อของจีน | เว็บซือของจีน | Yourbaobao</title>";
        echo "\n";
        echo "<meta name='description' content='สินค้าขายดี จาก เว็บไซต์ชั้นนำของจีน | เว็บ 1688 | เว็บ taobao | สินค้าราคาถูกส่งตรงจากเมืองจีน สามารถเลือกซื้อของจากจีน ผ่าน Yourbaobao ได้เลย!!!'>";
      break;
      default:
      echo "<title>สั่งสินค้าจากจีน นำเข้าสินค้าจากจีน สั่งสินค้าtaobao นำเข้าสินค้าalibaba นำเข้า พรีออเดอร์ จีน preorder จีน พรีออเดอร์สินค้าจากจีน shipping จีน ชิปปิ้งจีน ขายส่ง</title>" ;
      echo "\n";
      echo "<meta name='description' content='สั่งสินค้าจากจีน นำเข้าสินค้าจากจีน สั่งสินค้าtaobao นำเข้าสินค้าalibaba นำเข้า พรีออเดอร์ จีน preorder จีน พรีออเดอร์สินค้าจากจีน shipping จีน ชิปปิ้งจีน ขายส่ง'/>";
    break;
  }  // end switch
} // end if

if ($url_request[1] == "myprofile"){
  switch ($url_request[2]){
    case 'topup':
      echo "<title>เช็คยอดเงินคงเหลือหรือเติมเงินเข้าบัญชี | Yourbaobao</title>";
      echo "\n";
      echo "<meta name='description' content='สามารถเช็คยอดเงินคงเหลือในบัญชี Yourbaobao หรือเติมเงินได้ที่นี่'>";
    break;
    default:
    echo "<title>สั่งสินค้าจากจีน นำเข้าสินค้าจากจีน สั่งสินค้าtaobao นำเข้าสินค้าalibaba นำเข้า พรีออเดอร์ จีน preorder จีน พรีออเดอร์สินค้าจากจีน shipping จีน ชิปปิ้งจีน ขายส่ง</title>" ;
    echo "\n";
    echo "<meta name='description' content='สั่งสินค้าจากจีน นำเข้าสินค้าจากจีน สั่งสินค้าtaobao นำเข้าสินค้าalibaba นำเข้า พรีออเดอร์ จีน preorder จีน พรีออเดอร์สินค้าจากจีน shipping จีน ชิปปิ้งจีน ขายส่ง'/>";
  break;
}  // end switch
} // end if

    switch ($url_request[1]) {
        case '':
        echo "<title>เว็บสั่งของจากจีน | นำเข้าสินค้าจากจีน | ซื้อของจากจีน ราคาถูก ในรูปแบบภาษาไทย  </title>";
        echo "\n";
        echo "<meta name='description' content='เว็บสั่งซื้อสินค้าจากจีน ซื้อของจากจีน สั่งง่าย ส่งไว  | นำเข้าสินค้าจากจีนทุกรูปแบบ | ราคาถูก ครบวงจร | ต้อง Yourbaobao.com'>";
        break;
        case 'showproduct':
          echo "<title>พรีออเดอร์สินค้าจากจีน สั่งสินค้าจากจีน | Yourbaobao ให้ราคาถูก</title>";
          echo "\n";
          echo "<meta name='description' content='สั่งซื้อสินค้าจากจีน พรีออเดอร์สินค้าจากจีนมากมายให้เลือกซื้อ จากเว็บไซต์ชั้นนำจากจีน  | เว็บ 1688 | เว็บ taobao | ส่งตรงถึงบ้านคุณ ได้ที่ Yourbaobao.com'>";
        break;
        case 'settingline.html':
          echo "<title>จัดการบัญชี Yourbaobao </title>";
          echo "\n";
          echo "<meta name='description' content='จัดการบัญชี แก้ไขข้อมูลส่วนตัว หรือปิดการแจ้งเตือน | Yourbaobao'>";
        break;
        case 'Rate.html':
          echo "<title>ดูอัตราแลกเปลี่ยนสกุลเงินหยวน | นำเข้าสินค้าจากจีน | Yourbaobao</title>";
          echo "\n";
          echo "<meta name='description' content='ดูอันตราแลกเปลี่ยนสกุลเงินหยวน เพื่อความสะดวกในการ สั่งซื้อของจากจีน | พรีออเดอร์ของจากจีน | สั่งสินค้าจีน | Yourbaobao'>";
        break;
        case 'Carts.html':
          echo "<title>ตะกร้าสินค้า Yourbaobao เช็คดูสินค้าก่อนสั่งซื้อ | ซื้อของจากจีน</title>";
          echo "\n";
          echo "<meta name='description' content='ตรวจเช็คราคาสินค้าบนตะกร้าก่อนสั่งซื้อ | สั่งสินค้าจากจีน | ซื้อของจากจีน | Yourbaobao'>";
        break;
      }
  ?>

  <meta name="keywords" content="สั่งสินค้าจากจีน , พรีออเดอร์ จีน , นำเข้าสินค้าจากจีน ,ชิปปิ้งจีน , shipping จีน , ขนส่งสินค้าจากจีน , preorder จีน , taobao , alibaba , 1688 , tmall , เรท และ ค่าขนส่ง ถูกที่สุด, 淘宝,淘寶,淘寶網,掏寶,掏保,網上購物,集運,淘宝全球,taobao" />
  <link rel="shortcut icon" href="<?php echo $pathweb;?>images/web_logo_icon.png?v=1004" type="image/x-icon" />
  <!--[if lt IE 9]>
  <script type="text/javascript" src="<?php echo $pathweb;?>js/css3-mediaqueries.js?v=1001"></script>
  <script type="text/javascript" src="<?php echo $pathweb;?>js/html5.js?v=1001"></script>
  <![endif]-->
  <!--[if lte IE 7]>
  <style type="text/css">
  html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->

<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>css/font.css?v=1002">
<!-- animate.css -->
<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>css/style2.css?v=1002">
<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>css/font-awesome.min.css?v=1001">
<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>css/bootstrap.min.css?v=1002" />
<!-- animate.css -->
<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>css/animate.min.css?v=1001">
<!-- Toastr style -->
<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>backoffice/css/plugins/toastr/toastr.min.css?v=1001">
<!-- datepicker -->
<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>css/bootstrap-datepicker.min.css?v=1001" />

<!-- Include SmartWizard CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>css/smart_wizard.css?v=1001" />

<!-- Optional SmartWizard theme -->
<link rel="stylesheet" type="text/css" href="<?php echo $pathweb;?>css/smart_wizard_theme_arrows.css?v=1001" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120891631-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-120891631-1');
</script>

<!-- Clarity code  -->
<script type="text/javascript">
(function(c,l,a,r,i,t,y){
c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
})(window, document, "clarity", "script", "628g03nrpb");
</script>

<!-- GTM -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LZ85PZ');</script>
<!-- End Google Tag Manager -->

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LZ85PZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


  <div id="webfull">
    <div class="container-fluid colorai line_ra">
      <div class="row">
        <div class="col-12 text-right p-1 mypro">
          <div id="google_translate_element" class="pull-left"></div>
          <?php
          if(login_memberid()>0){
            $uid = login_memberid();
            $sqlu="select uid,member_name,member_lname,member_email,member_wallet from ".$prefix."_member where uid='".$uid."' and member_status='1' ";
            $execu=mysqli_query($conn, $sqlu);
            if(mysqli_num_rows($execu)>0){
              $rowu = mysqli_fetch_assoc($execu);
              ?>
              <span>สวัสดี</span>
              <span>คุณ <strong><?php echo $rowu['member_name'];echo " ".$rowu['member_lname'];?> </strong></span>
              <a href="<?php echo $pathweb;?>myprofile.html" class="text-white">
                <i class="fa fa-user"></i>
                Myprofile
              </a>
              <span class="text-white"> | </span>
              <a href="<?php echo $pathweb;?>logout.html" class="text-white mr-2">
                logout
              </a>
              <?php
            }
          }else{
            ?>
            <a href="#" class="text-white" data-toggle="modal" data-target="#loginpopup">
              <i class="fa fa-lock"></i>
              login
            </a>
            <span class="text-white"> | </span>
            <a href="#" class="text-white mr-2" data-toggle="modal" data-target="#signinpopup">
              Register
            </a>
            <?php
          }
          ?>

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row py-2">
        <div class="col-12 pt-2 mb-3 col-md-12 col-lg-2 col-xl-2 text-center">
          <a href="<?php echo $pathweb;?>">
            <img src="<?php echo $pathweb;?>images/web_logo.png" alt="" width="180">
          </a>
        </div>
        <div class="col-12 pt-2 col-md-12 col-lg-7 col-xl-7 text-center">
          <a class="text-dark mt-4 d-inline-block mx-2" href="<?php echo $pathweb;?>content/23-วิธีการสั่งสินค้า.html">วิธีการสั่งสินค้า</a>
          <a class="text-dark mt-3 d-inline-block mx-2" href="<?php echo $pathweb;?>content/24-ค่าบริการ.html">ค่าบริการ</a>
          <a class="text-dark mt-3 d-inline-block mx-2" href="<?php echo $pathweb;?>content/25-จุดรับสินค้า.html">จุดรับสินค้า</a>
          <a class="text-dark mt-3 d-inline-block mx-2" href="<?php echo $pathweb;?>content/22-คำถามที่พบบ่อย.html">คำถามที่พบบ่อย</a>
          <a class="text-dark mt-3 d-inline-block mx-2" href="<?php echo $pathweb;?>Promotion.html">ข่าวสาร/โปรโมชั่น</a>

          <!-- <a class="text-dark mt-3 d-inline-block mx-2" href="<?php echo $pathweb;?>products/">เลือกสินค้า</a> -->
          <!-- <a class="text-dark mt-3 d-inline-block mx-2" href="#blogfaq">คำถามที่พบบ่อย</a> -->
          <a class="text-dark mt-3 d-inline-block mx-2" href="<?php echo $pathweb;?>content/11-ติดต่อเรา.html">ติดต่อเรา</a>

          <a class="text-dark mt-3 d-inline-block mx-2" href="<?php echo $pathweb;?>showproduct/">เลือกซื้อสินค้า</a>

          <a href="<?php echo $pathweb;?>Carts.html" class="text-white mt-3 d-inline-block" style="position: relative;s">
            <img src="<?php echo $pathweb;?>images/ps3_icon_cart.png" alt="" width="50">
            <?php
            if(GetCountTotalcart($rowu[uid])>0){
              ?>
              <span class="text-white" style="position: absolute;background: #f00;border-radius: 25px;padding: 1px 11px;right: -16px;top: -10px;"><?php echo GetCountTotalcart($rowu[uid]); ?></span>
              <?php
            }
            ?>
          </a>
        </div>
        <div class="col-12 col-md-12 col-lg-3 col-xl-3 text-center text-md-center text-lg-right">
          <a href="javascript:;" class="text-white mt-3 d-inline-block" onclick="document.getElementById('url').focus();">
            <img src="<?php echo $pathweb;?>images/ps3_icon_search.png" alt="" width="40">
          </a>

          <a href="<?php echo $pathweb;?>myprofile/topup/" class="text-white mt-3 d-inline-block">
            <img src="<?php echo $pathweb;?>images/ps3_icon_bill.png" alt="" width="40">
          </a>
          <a href="https://line.me/R/ti/p/%40srk3698h" target="_blank" class="text-white mt-3 d-inline-block">
            <img src="<?php echo $pathweb;?>images/ps3_icon_line.png" alt="" width="40">
          </a>
          <a href="https://www.facebook.com/yourbaobao/" target="_blank" class="text-white mt-3 d-inline-block">
            <img src="<?php echo $pathweb;?>images/ps3_icon_fb.png" alt="" width="40">
          </a>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row py-3 colorai">
        <div class="col-12 text-center">
          <form class="mb-1 fontweb" name="SaveFormLogin" id="SaveFormLogin_2" action="<?php echo $pathweb;?>php/SaveFormTaobao.php?method=show" method="post" enctype="multipart/form-data" target="com_m">
            <div class=" d-inline btnsearchpostb">
              <input type="text" class="w-50 ps3corner py-2 border" placeholder="วางลิงค์จากเว็บ taobao tmall" id="url" name="url" autocomplete="off">
              <div class="btnsearchpostlink">
                <button class="btn btn-default btnsearchtaobao btn-gardientbg btn-gardientbg-link text-white tagcursor submitloadings_search" type="submit"> &#62; </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php
    if($uid>0){
      ?>
      <?php
      $sqlw="select order_id from ".$prefix."_order where uid = '".$uid."'  ";
      $execw=mysqli_query($conn,$sqlw);
      $numw=mysqli_num_rows($execw);

      $sqlt="select a.ord_id from ".$prefix."_order_detail a left join ".$prefix."_order b on a.order_id=b.order_id where 1 and b.uid='".$uid."' and a.ord_status_th_receive='1' and a.ord_tracking_pass='0' order by a.ord_china_track_tothai_date asc ";
      $exect=mysqli_query($conn, $sqlt);
      $numt=mysqli_num_rows($exect);
      ?>
      <div class="container-fluid">
        <div class="d-md-flex bg-light">
          <div class="p-2 flex-fill bd-highlight text-center">
            <a href="<?php echo $pathweb; ?>myprofile/order/" class="text-dark"><span class="fa fa-list-ul"></span> บิลสั่งซื้อ <?php echo ($numw > 0 ? '<span class="text-danger">('.number_format($numw).')</span>' : '');?></a>
          </div>
          <div class="p-2 flex-fill bd-highlight text-center">
            <a href="<?php echo $pathweb;?>myprofile/listproduct/" class="text-dark"><span class="fa fa-truck"></span> ออกบิลขนส่ง ไทย-ไทย <?php echo ($numt > 0 ? '<span class="text-danger">('.number_format($numt).')</span>' : '');?></a>
          </div>
          <div class="p-2 flex-fill bd-highlight text-center">
            <a href="<?php echo $pathweb; ?>myprofile/topup/" class="text-dark">ยอดเงิน ฿<?php echo (GetLWalletMember($uid) > 0 ? '<span class="text-info">('.number_format(GetLWalletMember($uid),2).')</span>' : '0.00');?></a>
          </div>
          <div class="p-2 flex-fill bd-highlight text-center">
            <a href="<?php echo $pathweb; ?>myprofile/topup/" class="text-dark"><span class="fa fa-download"></span> เติมเงิน</a>
          </div>
          <div class="p-2 flex-fill bd-highlight text-center">
            <a href="<?php echo $pathweb; ?>myprofile/Withdrawals/" class="text-dark"><span class="fa fa-external-link"></span> ถอนเงิน</a>
          </div>
          <div class="p-2 flex-fill bd-highlight text-center">
            <a href="<?php echo $pathweb; ?>myprofile.html" class="text-dark"><span class="fa fa-user"></span> ข้อมูลส่วนตัว</a>
          </div>
          <div class="p-2 flex-fill bd-highlight text-center">
            <a href="<?php echo $pathweb; ?>myprofile/address.html" class="text-dark"><span class="fa fa-address-book-o"></span> ข้อมูลที่อยู่</a>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
    <?php
    if($_REQUEST['display']==""){
      include("inps3_home.php");
    }else{
      if($_REQUEST[content]==""){
        include("php/ps3_$_REQUEST[display].php");
      }else{
        include("$_REQUEST[content]");
      }
    }
    ?>


    <!-- Footer -->
    <footer id="footer" class="bg-dark py-4 ">
      <div class="container">
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-4 text-center">
        <ul class="nav">
                <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>showproduct/">พรีออเดอร์สินค้าจากจีน</a></li>
                <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>">นำเข้าสินค้าจากจีน </a></li>
                <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/23-วิธีการสั่งสินค้า.html">วิธีสั่งของจากจีน</a></li>
                <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/9-YourBaobao.html">สั่งของ 1688</a></li>
                <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/25-จุดรับสินค้า.html">ชิปปิ้งจีน</a></li>
                <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>Content/10-ทำไมเข้าเว็บ%20Taobao%20แล้วดูสินค้าไม่ได้%20วิธีสมัครสมาชิก%20เถาเป่า%20เพื่อดูสินค้า.html">สั่งของจากจีน taobao (เถาเป่า)</a></li>
                <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>Content/12-แอพสั่งของจากจีน%20สั่งซื้อสะดวก%20ง่ายๆ%20ด้วยภาษาไทย%20%7C%20Yourbaobao.html">แอพสั่งซื้อของจากจีน</a></li>
              </ul>
          </div>
          <div class="col-xs-6 col-md-3 column text-center">
            <!-- <h4 class="text-white">Follow Us</h4> -->
            <ul class="nav">
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/9-YourBaobao.html">YourBaobao</a></li>
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/23-วิธิการสั่งสินค้า.html">วิธิการสั่งสินค้า</a></li>
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/24-บริการของเราและวิธีคิดค่าบริการ.html">บริการของเราและวิธีคิดค่าบริการ</a></li>
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/18-อัตราแลกเปลี่ยน.html">อัตราแลกเปลี่ยน</a></li>
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/16-ระยะเวลา.html">ระยะเวลา</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-md-3 column text-center">
            <!-- <h4 class="text-white">Contact Us</h4> -->
            <ul class="nav">
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/21-ข้อตกลงและเงื่อนไขการใช้บริการ.html">ข้อตกลงและเงื่อนไขการใช้บริการ</a></li>
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/25-จุดรับสินค้า.html">จุดรับสินค้า</a></li>
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/22-คำถามที่พบบ่อย.html">คำถามที่พบบ่อย</a></li>
              <li class="d-block w-100"><a class="text-white" href="<?php echo $pathweb;?>content/11-ติดต่อเรา.html">ติดต่อเรา</a></li>
            </ul>
          </div>
          <!-- <div class="col-xs-6 col-md-3 column">

          </div> -->
        </div><!--/row-->
      </div>
     <p hidden> Organization</p>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Yourbaobao สั่งของจากจีน ราคาถูก",
  "url": "https://www.yourbaobao.com/",
  "logo": "https://www.yourbaobao.com/images/web_logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+66641028443",
    "contactType": "customer service"
  }
}
</script>

<p hidden >LocalBusiness</p>
<script type="application/ld+json">

{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "yourbaobao (สั่งของจากจีน ราคาถูก)",
  "description":"เว็บสั่งของจากจีน สั่งสินค้าจากจีน สะดวก สั่งง่าย ส่งไว เป็นเว็บสั่งสินค้าจาก Taobao,Tmall,1688เว็บสั่งสินค้าจีนเจ้าดัง พร้อมจัดส่งจากจีนถึงไทยมี โกดังหลายแห่งที่จีนและไทย สามารถมารับสินค้าด้วยตนเองทีโกดังไทยและยังมีบริการจัดส่งถึงบ้าน มีบริการดูแลสินค้าระหว่างจัดส่งพร้อมระบบTracking ตรวจสอบสินค้าได้ทุกเมื่อ มีการช่วยหาสินค้าเพื่อให้คุณลูกค้าได้สินค้าที่ต้องการในราคาที่ถูกที่สุด พร้อมบริการอื่นอีกมากมาย",
  "image": "https://www.yourbaobao.com/images/web_logo.png",
  "@id": "https://www.yourbaobao.com/images/web_logo.png",
  "url": "https://www.yourbaobao.com/",
  "telephone": "0641028443",
  "priceRange": "$$-$$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1376 Phet Kasem 81 Rd, Nong Khaem, Bangkok 10160",
    "addressLocality": "Bangkok",
    "postalCode": "10160",
    "addressCountry": "TH"
  },
"geo": {
    "@type": "GeoCoordinates",
    "latitude": 13.6770337,
    "longitude": 100.65600719999998
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "08:00",
    "closes": "17:00"
  } 
}
</script>

    </footer>
    <div class="">
      <div class="" style="height:2px; background-color:#111;">

      </div>
    </div>
    <div class="text-center bg-dark py-4 text-white">
      <h3>Call Center</h3>
      0641028443<br>
      0917057546<br>
      (บริการจันทร์ ถึง ศุกร์ A259:A268 8.00 ถึง 17.00 น.)
    </div>
    <div class="">
      <div class="" style="height:2px; background-color:#111;">

      </div>
    </div>
    <div class="container-fluid">
      <div class="row bg-dark text-white py-4">
        <div class="col-md-12 text-center">
          <a href="<?php echo $pathweb;?>" class="mb-3 d-block">
            <img src="<?php echo $pathweb;?>images/web_logo.png" alt="" width="180">
          </a>
          <div class="">
            เลขที่ 49/38 หมู่ที่ 3 ตำบลคูคต
          </div>
          <div class="mb-3 d-block">
            อำเภอลำลูกกา จังหวัดปทุมธานี 12130,
          </div>
          <div class="">
            <a href="https://www.trustmarkthai.com/callbackData/popup.php?data=4e62995-32-5-c7f7f08fbe486382b82e35dd779133876fa9aa" target="_blank">
              <img src="<?php echo $pathweb; ?>images/dbd_ver.jpg" alt="" width="150">
            </a>

          </div>
          <div class="mt-2">
            ติดต่อสอบถาม
          </div>
          <div class="mb-3 d-block">
            <a href="<?php echo $pathweb;?>Carts.html" class="text-white mt-3 d-inline-block">
              <img src="<?php echo $pathweb;?>images/ps3_icon_cart.png" alt="" width="40">
            </a>
            <a href="<?php echo $pathweb; ?>myprofile/topup/" class="text-white mt-3 d-inline-block">
              <img src="<?php echo $pathweb;?>images/ps3_icon_bill.png" alt="" width="40">
            </a>
            <a href="https://line.me/R/ti/p/%40srk3698h" target="_blank" class="text-white mt-3 d-inline-block" title="พูดคุยกันทาง line">
              <img src="<?php echo $pathweb;?>images/ps3_icon_line.png" alt="" width="40">
            </a>
            <a href="https://www.facebook.com/yourbaobao/" target="_blank" class="text-white mt-3 d-inline-block" title="พูดคุยกันทาง facebook">
              <img src="<?php echo $pathweb;?>images/ps3_icon_fb.png" alt="" width="40">
            </a>
          </div>
          <div class="d-block">
            @<?php echo date("Y"); ?> All right reserved. Copyright <?php echo $site_name; ?>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- add social contact -->
	<script type="text/javascript">
        (function () {
            var options = {
                line: "//line.me/R/ti/p/%40srk3698h", // Facebook page ID
                call: "091-705-7546" , // Call phone number
                call_to_action: "Contact Us", // Call to action
                position: "left", // Position may be 'right' or 'left'
                button_color: "#CE380F",
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>



  <?php include("in_modal.php"); ?>
  <?php include("in_script3.php"); ?>
  <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'th',
      includedLanguages: "zh-CN,th,en",
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      multilanguagePage: true,
      gaTrack: true,
      gaId: 'UA-120891631-1'
    }, 'google_translate_element');
  }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <iframe id="com_m" name="com_m" width="0" height="0" frameborder="0" scrolling="no"></iframe>

</body>
</html>
