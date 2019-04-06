<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="description" content="ご融資の事前審査はおよそ1時間で、概要を審査し融資見込みについてご連絡致します。
このフォームにより手形割引、小切手換金、無担保融資、不動産担保融資、株券担保融資、動産担保融資、ファクタリング、ゴルフ会員権、診療報酬担保融資、リースの申し込みが可能です。
" />
<meta name="keywords" content="取引申し込み,フォーム,手形割引,融資,ファクタリング,診療報酬担保融資" />
<title>株式会社クレイリッシュ - お申込み/見積依頼</title>
<link rel="stylesheet" href="../../css/set.css">
<link rel="stylesheet" href="../../css/style.css">
<link href="../../css/common.css" rel="stylesheet" type="text/css">
<script src="../../js/jquery.min.js"></script>
<script src="../../js/common2.js"></script>
<script type="text/javascript" src="../../js/smoothscroll.js"></script>
<script type="text/javascript" src="../../js/main.js"></script>


<script type="text/javascript" src="../../js/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/slick.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../../css/slick-theme.css" media="screen" />

<script type="text/javascript">

$(function(){
     
$(".footer_link p").click(function(){
    $(this).next("ul").slideToggle();
    $(this).children("span").toggleClass("open");
}); 
 
$(".footer_link dt").click(function(){
    $(this).next("dd").slideToggle();
    $(this).next("dd").siblings("dd").slideUp();
    $(this).toggleClass("open");    
    $(this).siblings("dt").removeClass("open");
});
 
});
</script>

</head>

<body>
<div id="wrapper-new">
<?php 
  include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");
  include($_SERVER['DOCUMENT_ROOT']."/claylish/configs/configs.php");
  $Path = "./"; include(dirname(__FILE__).'/../../include/header.html'); 
?>
          
          <div class="li_txt">
          <div class="outer">HOME　＞お取引の申込み

</div>
          </div>

    <div id="contents_top">
    <div class="head_img001">
      ご融資事前審査申込み
      </div>
    </div>

    
    <div class="contents_wrapper">
    <div class="contents-na">
   <div class="outer">
   <div id="left-wap">

<!-- ▼ここから本文▼ -->

<a name="p01"></a>
<div class="category">
<div class="txt-title">ご融資申込みフォーム</div>
<div class="kei_box"><div class="kei_box01"></div><div class="kei_box02"></div><div class="clear"></div></div>

<div class="txt-wap">
<div align="right"><span id="ss_gmo_img_wrapper_115-57_image_ja">
  <a href="https://jp.globalsign.com/" target="_blank" rel="nofollow">
  <img alt="SSL　GMOグローバルサインのサイトシール" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_115-57_ja.gif">
  </a>
  </span>
  <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_115-57_ja.js" defer></script>
</div>
</td>
</tr>
</table>
</div>

ご融資の事前審査は、およそ1時間程度で、概要を審査し融資見込みについてご連絡致します。また、このサービスにより、お客様の個人情報が外部に漏れることは一切ございませんので、安心してご利用いただけるようお願いいたします。お急ぎの場合にはお電話にてご連絡頂ければ幸いです。<br>
<div class="for-wap">
  <div>
    <p>各種ご融資については、下記フォームからお申込みが可能です。<br>
      営業時間内に追って担当者よりご連絡申し上げます。<br>
    </p>
  </div>
  </div>

<h6 class="re-mi">1．お取引の選択</h6>
<!-- ↓これはフォームメール起動用タグです。↓ -->
  

<form method="post" action="check_and_send.php" name="contact_form" id="contact_form">
      <table class="billdiscount01">
          <tr>
            <th width="30%">ご希望の取引<span class="red">※</span></th>
            <td>
              <?php echo sessionGet('old_application_email_data','desired_transaction'); ?>
            </td>
          </tr>
      </table>
<br>

<h6 class="re-mi">2. ご希望の融資概要</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">融資希望額<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_application_email_data','desired_loan_amount'); ?>
          </td>
        </tr>
        <tr>
          <th>融資希望日</th>
          <td>
            <?php echo sessionGet('old_application_email_data','desired_loan_date'); ?>
          </td>
        </tr>
    </table>
<br>

<h6 class="re-mi">3. お客様の事業内容について</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">商号・屋号<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_application_email_data','business_name'); ?>
          </td>
        </tr>
        <tr>
          <th>業種<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_application_email_data','industry'); ?>
          </td>
        </tr>
    </table>
<br>

<h6 class="re-mi">5. 代表者様又はあなた様について</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">代表取締役<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_application_email_data','representative_director'); ?>
          </td>
        </tr>
        <tr>
          <th>フリガナ</th>
          <td>
            <?php echo sessionGet('old_application_email_data','furigana'); ?>
          </td>
        </tr>
        <tr>
          <th>お申込み担当者名</th>
          <td>
            <?php echo sessionGet('old_application_email_data','name_of_in_charge'); ?>
          </td>
        </tr>
    </table>
<br>

<h6 class="re-mi">6. 事業所所在地について</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">都道府県<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_application_email_data','prefecture'); ?>
          </td>
        </tr>
        <tr>
          <th>市区町村<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_application_email_data','municipality'); ?>
          </td>
        </tr>
    </table>
    <br>

<h6 class="re-mi">7. ご連絡先について</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">お電話番号<span class="red">※</span>
          <td>
            <?php echo sessionGet('old_application_email_data','phone_number'); ?>
          </td>
        </tr>
        <tr>
          <th>メールアドレス<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_application_email_data','email'); ?>
          </td>
        </tr>
    </table>
<br>

<h6 class="re-mi">8. 弊社からお客様への連絡方法を選択して下さい。</h6>
      <table class="billdiscount01">
            <tr>
              <th width="30%">希望する連絡方法</th>
              <td bgcolor="#f5f5f5">
                <?php echo sessionGet('old_application_email_data','contact_method'); ?>
              </td>
            </tr>
        </table>
    <p align="center">
      <form action="check_and_send.php" method="POST">
        <input name="submit" type="submit" value="　確認画面へ進む　"> 
        <a href="<?php echo getPrevLink() ?>">Back</a>
      </form>  
    </p>
    <p align="center">&nbsp;</p>
</form>

  </div>
   </div></div>

</div>

<?php 
  unsetPopulatedData();
  unsetErrorData();
?>
<!-- △ここまで本文△ -->

</div>
</div>
    </div>
    </div>

    <?php $Path = "./"; include(dirname(__FILE__).'/../../include/footer.html'); ?>
         
  </div>
</body>
</html>