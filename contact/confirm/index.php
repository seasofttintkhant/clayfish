<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="description" content="クレイリッシュに関するすべてのお問い合せをこの窓口にてお受けいたします。ご意見ご要望、苦情、ご相談、お問い合わせなどお気軽にご連絡下さい。このフォームに必要事項をご記入の上、ご送信下さい。追って担当者よりご連絡申し上げます。" />
<meta name="keywords" content="お客様窓口,クレイリッシュ" />
<title>株式会社クレイリッシュ - お客様窓口</title>
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
<!--  LOG corp Web Analitics & Live Chat  START -->
<script  type="text/javascript">
//<![CDATA[
function logCorpAScript_full(){
  HTTP_MSN_MEMBER_NAME="";/*member name*/
  var prtc=(document.location.protocol=="https:")?"https://":"http://";
  var hst=prtc+"suite.log-marketing.jp";
  var rnd="r"+(new  Date().getTime()*Math.random()*9);
  this.ch=function(){
    if(document.getElementsByTagName("head")[0]){this.dls();}else{window.setTimeout(logCorpAnalysis_full.ch,30)}
  }
  this.dls=function(){
    var  h=document.getElementsByTagName("head")[0];
    var  s=document.createElement("script");s.type="text/jav"+"ascript";try{s.defer=true;}catch(e){};try{s.async=true;}catch(e){};
    if(h){s.src=hst+"/HTTP_MSN/UsrConfig/claylish/js/ASP_Conf.js?s="+rnd;h.appendChild(s);}
  }
  this.init= function(){
    document.write('<img src="'+hst+'/sr.gif?d='+rnd+'"  style="width:1px;height:1px;position:absolute;" alt="" onload="logCorpAnalysis_full.ch()" />');
  }
}
if(typeof logCorpAnalysis_full=="undefined"){ var logCorpAnalysis_full=new logCorpAScript_full();logCorpAnalysis_full.init();}
//]]>
</script>
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
  if(sessionGet("is_method_post") != true){
    header('Location: ../');
  }
  ("is_method_post");
  $Path = "./"; include(dirname(__FILE__).'/../../include/header.html'); 
?>
          
          <div class="li_txt">
          <div class="outer">HOME　＞お客様窓口</div>
          </div>

    <div id="contents_top">
    <div class="head_img001">
      お客様窓口
      </div>
    </div>

    
    <div class="contents_wrapper">
    <div class="contents-na">
   <div class="outer">
   <div id="left-wap">

<!-- ▼ここから本文▼ -->

<a name="p01"></a>
<div class="category">
<div class="txt-title">お客様フォーム</div>
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
<div class="txt-wap">
クレイリッシュに関するすべてのお問い合せを下記のフォームにてお受けいたします。<br>
融資のお問合せはもちろん、資料請求やご不明な点、弊社に対する要望・苦情等、お気軽にお知らせ下さい。<br>
下記フォームに必要事項をご記入の上、ご送信下さい。追って担当者よりご連絡申し上げます。<br>
</div>
<!-- ↓これはフォームメール起動用タグです。↓ -->
<style type="text/css">
<!--
  #alert_input {
    color: red;
    font-size: 120%;
    font-weight: bold;
    padding: 10px;
    display: none;
  }
  .alert_hissu {
    color: red;
    font-weight: bold;
    padding: 5px;
    display: none;
  }
//-->
</style>

  <script type="text/javascript"><!-- 
      
    var temp;
    
    //お問い合わせ未入力チェック関数
    function check_input(){
    
      var check_flag = 0;
      
        //ボックスチェック（件名）
        temp = 1;
        for (var i = 0; i <= 3; i++) {
          if (document.getElementsByName("data3")[i].checked){
            temp = 0;
            document.getElementById('alert_data3').style.display = 'none';
          }
        }
        if(temp == 1){ //未入力だった場合
          check_flag = 1;
          document.getElementById('alert_data3').style.display = 'block';
        }

      //テキストフォームの未入力チェック
      var check_texts = new Array(
        'data1'
        ,'data2'
        ,'data4'
        ,'data5'
        ,'data6'
        ,'data7'
        ,'data8'
        ,'data9'
        ,'data10'
        ,'data11'
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
        return true;
      }
    }

  //--></script>
<div class="txt-wap">
<p id="alert_input" style="padding:10px 0;">
【未入力の必須項目があります。ご確認ください。】
</p>
      <table class="billdiscount01">
      <tbody>
        <tr>
          <th>お名前<span class="red">※</span></th>
          <td><?php echo sessionGet('old_contact_email_data','name'); ?></td>
        </tr>
        <tr>
          <th>ふりがな<span class="red">※</span></th>
          <td><?php echo sessionGet('old_contact_email_data','kana_name'); ?></td>
        </tr>
        <tr>
          <th>件名<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_contact_email_data','subject'); ?>
          </td>
        </tr>
        <tr>
          <th>会社名<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_contact_email_data','company_name'); ?>
          </td>
        </tr>
        <tr>
          
        </tr>
        <tr>
          <th>ご住所<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_contact_email_data','prefecture'); ?>
          </td>
        </tr>
        <tr>
          <th>市区町村<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_contact_email_data','municipalicty'); ?>
          </td>
        </tr>
        <tr>
          <th>連絡先電話番号<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_contact_email_data','phone_number'); ?>
          </td>
        </tr>
        <tr>
          
        </tr>
        <tr>
          <th>メールアドレス<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_contact_email_data','email'); ?>
          </td>
        </tr>
        <tr>
          <th>お問い合わせ内容<span class="red">※</span></th>
          <td>
            <?php echo sessionGet('old_contact_email_data','content'); ?>
          </td>
        </tr>
      </tbody>
    </table>
    <p align="center">
        <form action="check_and_send.php" method="POST">
          <input name="submit" type="submit" value="　内容の確認　"> 
          <a href="<?php echo getPrevLink() ?>">Back</a>
        </form>   
    </p>
    </div>
<p>&nbsp;</p>
<p><img src="../../images/kuremu.png"></p>
</div>
</div>
<!-- △ここまで本文△ -->

</div>
</div>
    </div>
    </div>

    <?php $Path = "./"; include(dirname(__FILE__).'/../../include/footer.html'); ?>
         
  </div>
</body>
</html>