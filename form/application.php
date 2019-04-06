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
<link rel="stylesheet" href="../css/set.css">
<link rel="stylesheet" href="../css/style.css">
<link href="../css/common.css" rel="stylesheet" type="text/css">
<script src="../js/jquery.min.js"></script>
<script src="../js/common2.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/main.js"></script>


<script type="text/javascript" src="../js/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/slick.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/slick-theme.css" media="screen" />

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
  $Path = "./"; include(dirname(__FILE__).'/../include/header.html'); 
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
    <p class="red">※印は、必須項目です。</p>
  </div>
  </div>

<h6 class="re-mi">1．お取引の選択</h6>
<!-- ↓これはフォームメール起動用タグです。↓ -->

	<script type="text/javascript"><!-- 
			
		var temp;
		
		//お問い合わせ未入力チェック関数
		function check_input(){
		
			var check_flag = 0;
			
			//ラジオボックスチェック（ご希望の取引）
			temp = 1;
			for (var i = 0; i <= 6; i++) {
				if (document.getElementById("contact_form")[i].checked){
					temp = 0;
					document.getElementById('alert_para1').style.display = 'none';
				}
			}
			if(temp == 1){ //未入力だった場合
				check_flag = 1;
				document.getElementById('alert_para1').style.display = 'block';
			}

			/*
			//ラジオボックスチェック（手形の支払期日）
			temp = 1;
			for (var i = 15; i <= 17; i++) {
				if (document.getElementById("contact_form")[i].checked){
					temp = 0;
					document.getElementById('alert_para7').style.display = 'none';
				}
			}
			if(temp == 1){ //未入力だった場合
				check_flag = 1;
				document.getElementById('alert_para7').style.display = 'block';
			}

			//ラジオボックスチェック（希望する連絡方法）
			temp = 1;
			for (var i = 27; i <= 28; i++) {
				if (document.getElementById("contact_form")[i].checked){
					temp = 0;
					document.getElementById('alert_contact_method').style.display = 'none';
				}
			}
			if(temp == 1){ //未入力だった場合
				check_flag = 1;
				document.getElementById('alert_contact_method').style.display = 'block';
			}
			*/

			//テキストフォームの未入力チェック
			var check_texts = new Array(
				'desired_loan_amount'
				,'business_name'
				,'representative_director'
				,'prefecture'
				,'municipality'
				,'phone_number'
				,'email'
				,'industry'
				);
			for(var i in check_texts){
				temp = document.getElementById(check_texts[i]).value;
				if(temp === '') {
					document.getElementById(check_texts[i]).style.backgroundColor = '#FFD1D1';
					check_flag = 1;
				}
				else {
					document.getElementById(check_texts[i]).style.backgroundColor = '#FFFFFF';
				}
			}

			//alert(check_flag);
			
			//最終確認
			if(check_flag == 1){ //未入力が存在する
				document.getElementById('alert_input').style.display = 'block';
				location.href = "#alert_input";
				return false;
			}else{
				document.getElementById('alert_input').style.display = 'none';
				document.contact_form.submit();
				return true;
			}
		}

	//--></script>
	
<p id="alert_input">
【未入力の必須項目があります。ご確認ください。】
</p>

<form method="post" action="confirm/check.php" name="contact_form" id="contact_form">
      <table class="billdiscount01">
          <tr>
            <th width="30%">ご希望の取引<span class="red">※</span></th>
            <td><input name="desired_transaction" type="radio" value="無担保融資" <?php echo getPopulateData('desired_transaction') == "無担保融資" ? 'checked=""' : ''; ?>>
                無担保融資
                  <input name="desired_transaction" type="radio" value="不動産担保融資" <?php echo getPopulateData('desired_transaction') == "不動産担保融資" ? 'checked=""' : ''; ?>>
                不動産担保融資
                <input name="desired_transaction" type="radio" value="株券担保融資" <?php echo getPopulateData('desired_transaction') == "株券担保融資" ? 'checked=""' : ''; ?>>
                株券担保融資
                <input name="desired_transaction" type="radio" value="動産担保融資" <?php echo getPopulateData('desired_transaction') == "動産担保融資" ? 'checked=""' : ''; ?>>
                動産担保融資<br>
                <input name="desired_transaction" type="radio" value="ファクタリング" <?php echo getPopulateData('desired_transaction') == "ファクタリング" ? 'checked=""' : ''; ?>>
                ファクタリング
                  <input name="desired_transaction" type="radio" value="ゴルフ会員権" <?php echo getPopulateData('desired_transaction') == "ゴルフ会員権" ? 'checked=""' : ''; ?>>
                ゴルフ会員権担保融資
                <input name="desired_transaction" type="radio" value="診療報酬担保融資" <?php echo getPopulateData('desired_transaction') == "診療報酬担保融資" ? 'checked=""' : ''; ?>>
                診療報酬担保融資
		            <p id="alert_para1" class="alert_hissu">
									※必ず一つ選択してください。
				  </p>
              <?php if(getErrorData('desired_transaction')): ?>
                <div class="alert_hissu forced-show">
                  <?php echo getErrorData('desired_transaction') ?>
                </div>
              <?php endif ?>
                </td>
          </tr>
      </table>
<br>

<h6 class="re-mi">2. ご希望の融資概要</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">融資希望額<span class="red">※</span></th>
          <td>
            <input name="desired_loan_amount" id="desired_loan_amount" type="text" size="25" value="<?php echo getPopulateData('desired_loan_amount') ?>"> 万円
            <?php if(getErrorData('desired_loan_amount')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('desired_loan_amount') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
        <tr>
          <th>融資希望日</th>
          <td>
            <input name="desired_loan_date" type="text" value="  平成　年　月　日" size="30" value="<?php echo getPopulateData('desired_loan_date') ?>">
            <?php if(getErrorData('desired_loan_date')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('desired_loan_date') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
    </table>
<br>

<h6 class="re-mi">3. お客様の事業内容について</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">商号・屋号<span class="red">※</span></th>
          <td>
            <input name="business_name" id="business_name" type="text" size="30" value="<?php echo getPopulateData('business_name') ?>">
            <?php if(getErrorData('business_name')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('business_name') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
        <tr>
          <th>業種<span class="red">※</span></th>
          <td>
            <input name="industry" id="industry" type="text" size="30" value="<?php echo getPopulateData('industry') ?>">
            <?php if(getErrorData('industry')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('industry') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
    </table>
<br>

<h6 class="re-mi">5. 代表者様又はあなた様について</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">代表取締役<span class="red">※</span></th>
          <td>
            <input name="representative_director" id="representative_director" type="text" size="30" value="<?php echo getPopulateData('representative_director') ?>">
            <?php if(getErrorData('representative_director')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('representative_director') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
        <tr>
          <th>フリガナ</th>
          <td>
            <input name="furigana" id="furigana" type="text" size="30" maxlength="30" value="<?php echo getPopulateData('furigana') ?>">
            <?php if(getErrorData('furigana')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('furigana') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
        <tr>
          <th>お申込み担当者名</th>
          <td>
            <input name="name_of_in_charge" id="name_of_in_charge" type="text" size="30" maxlength="30" value="<?php echo getPopulateData('name_of_in_charge') ?>">
            （代表者様の場合は入力不要）
            <?php if(getErrorData('name_of_in_charge')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('name_of_in_charge') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
    </table>
<br>

<h6 class="re-mi">6. 事業所所在地について</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">都道府県<span class="red">※</span></th>
          <td>
            <input name="prefecture" id="prefecture" type="text" size="30" maxlength="30" value="<?php echo getPopulateData('prefecture') ?>">
            <?php if(getErrorData('prefecture')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('prefecture') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
        <tr>
          <th>市区町村<span class="red">※</span></th>
          <td>
            <input name="municipality" id="municipality" type="text" size="30" maxlength="30" value="<?php echo getPopulateData('municipality') ?>">
            <?php if(getErrorData('municipality')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('municipality') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
    </table>
    <br>

<h6 class="re-mi">7. ご連絡先について</h6>
      <table class="billdiscount01">
        <tr>
          <th width="30%">お電話番号<span class="red">※</span>
          <td>
            <input name="phone_number" id="phone_number" type="text" size="30" maxlength="30" value="<?php echo getPopulateData('phone_number') ?>">
            <?php if(getErrorData('phone_number')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('phone_number') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
        <tr>
          <th>メールアドレス<span class="red">※</span></th>
          <td>
            <input name="email" id="email" type="text" size="40" value="<?php echo getPopulateData('email') ?>">
            <?php if(getErrorData('email')): ?>
              <div class="alert_hissu forced-show">
                <?php echo getErrorData('email') ?>
              </div>
            <?php endif ?>
          </td>
        </tr>
    </table>
<br>

<h6 class="re-mi">8. 弊社からお客様への連絡方法を選択して下さい。</h6>
      <table class="billdiscount01">
            <tr>
              <th width="30%">希望する連絡方法</th>
              <td bgcolor="#f5f5f5"><input type="radio" name="contact_method" value="電　話" id="contact_method" <?php echo getPopulateData('contact_method') == "電　話" ? 'checked=""' : ''; ?>>
                TEL　　
                  <input type="radio" name="contact_method" value="メール" id="contact_method" <?php echo getPopulateData('contact_method') == "メール" ? 'checked=""' : ''; ?>>
                E-mail
		            <p id="alert_contact_method" class="alert_hissu">
									※必ず一つ選択してください。
				       </p>
                <?php if(getErrorData('contact_method')): ?>
                  <div class="alert_hissu forced-show">
                    <?php echo getErrorData('contact_method') ?>
                  </div>
                <?php endif ?>
              </td>
            </tr>
        </table>
    <p align="center">
			<button type="submit">　確認画面へ進む　</button>
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

    <?php $Path = "./"; include(dirname(__FILE__).'/../include/footer.html'); ?>
         
	</div>
</body>
</html>