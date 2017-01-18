code to be added on HEAD section of every page
<!-- Google DFP -->
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>


<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/132061177/ELH_ros_1x1_Interstical', [1, 1], 'div-gpt-ad-1475157563267-0').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_ros_1x1_Background', [1, 1], 'div-gpt-ad-1475155964983-5').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- Fim do DFP -->

<!-- Cabeçalho das Ads do El Hombre sequenciados por Home, Internas, Mobile -->
<?php 
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");

// Versao Dekstop
if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
 wp_reset_query(); 
if (is_home() || is_front_page() == true) { ?>
<!-- ELH Mobile Home -->
<script>
  googletag.cmd.push(function() {
googletag.defineSlot('/132061177/ELH_mobile_home_320x100_Rectangule1',  [320, 50], 'div-gpt-ad-1482149881821-0').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_Mobile_Home_300x250_Arroba2', [300, 250], 'div-gpt-ad-1477929672838-0').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_Mobile_Home_300x250_Arroba3', [300, 250], 'div-gpt-ad-1477929723432-0').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_mobile_home_300x250_Arroba4', [300, 250], 'div-gpt-ad-1477929494191-13').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /132061177/ELH_ros_1x1_Interstical -->
<div id='div-gpt-ad-1475157563267-0' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475157563267-0'); });
</script>
</div>

<?php } elseif (in_category('sexo')) {?>

<script>
  googletag.cmd.push(function() {
       googletag.defineSlot('/132061177/ELH_mobile_18_300x250_Arroba2', [300, 250], 'div-gpt-ad-1482345705990-4').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_mobile_18_320x50_Rectangule1', [320, 50], 'div-gpt-ad-1482345705990-5').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /132061177/ELH_ros_1x1_Interstical -->
<div id='div-gpt-ad-1475157563267-0' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475157563267-0'); });
</script>
</div>

<?php } elseif (in_category('musas')) {?>

<script>
  googletag.cmd.push(function() {
       googletag.defineSlot('/132061177/ELH_mobile_18_300x250_Arroba2', [300, 250], 'div-gpt-ad-1482345705990-4').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_mobile_18_320x50_Rectangule1', [320, 50], 'div-gpt-ad-1482345705990-5').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /132061177/ELH_ros_1x1_Interstical -->
<div id='div-gpt-ad-1475157563267-0' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475157563267-0'); });
</script>
</div>

<?php } else {?>
<!-- ELH Mobile Interna -->
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/132061177/ELH_mobile_internas_320x100_Rectangule1', [320, 50], 'div-gpt-ad-1482150056663-0').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_mobile_internas_300x250_Arroba3', [300, 250], 'div-gpt-ad-1477929494191-12').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /132061177/ELH_ros_1x1_Interstical -->
<div id='div-gpt-ad-1475157563267-0' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475157563267-0'); });
</script>
</div>
<?php } } else { if (is_home() || is_front_page()) { ?>
<!-- ELH Home Padrao -->
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/132061177/ELH_home_300x600_HalfPage', [[120, 600], [300, 600]], 'div-gpt-ad-1477929494191-0').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_Home_950x250_Billboard1', [728, 90], 'div-gpt-ad-1477929494191-1').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_Home_950x250_Billboard2', [[728, 90], [950, 90], [300, 250], [950, 250]], 'div-gpt-ad-1477929494191-2').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_home_950x250_Billboard3', [[728, 90], [950, 90], [300, 250], [950, 250]], 'div-gpt-ad-1477929494191-3').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- Scripts de Ads -->
<script src="http://gonzalezzmaster.appspot.com/v3/clover.js?pmu=fdf8dc92;pmb=2005d87f;slot=.cb-entry-content%20p;slot_pos=3;id=1478797787" id="clover-1478797787" async=""></script>
<script type='text/javascript' src='//tag.imonomy.com/script/14567720072/preload.js' async></script>
<!-- Background DFP codigos dos blocs de anuncios -->
<div class="publicidade_desktop">
<!-- DFP Ros-->
<!-- /132061177/ELH_ros_1x1_Background -->
<div id='div-gpt-ad-1475155964983-5' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475155964983-5'); });
</script>
</div>
<div class="ad-outer ad-left">
<!-- /132061177/ELH_ros_back-left_120x600 -->
<div id='div-gpt-ad-1475594313618-1' style='height:600px; width:120px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475594313618-1'); });
</script>
</div></div>
<div class="ad-outer ad-right">

<!-- /132061177/ELH_ros_back-right_120x600 -->
<div id='div-gpt-ad-1475594313618-2' style='height:600px; width:120px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475594313618-2'); });
</script>
</div>
</div>

</div>
<!-- /132061177/ELH_ros_1x1_Interstical -->
<div id='div-gpt-ad-1475157563267-0' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475157563267-0'); });
</script>
</div>

<?php } elseif (in_category('sexo')) {?>
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/132061177/ELH_desktop_18_300x250_Arroba1', [300, 250], 'div-gpt-ad-1482345705990-0').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_desktop_18_300x250_Arroba2', [300, 250], 'div-gpt-ad-1482345705990-1').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_desktop_18_300x600_HalfPage', [300, 600], 'div-gpt-ad-1482345705990-2').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_desktop_18_950x250_Billboard1', [[728, 90], [950, 250]], 'div-gpt-ad-1482345705990-3').addService(googletag.pubads());
       googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- Background DFP codigos dos blocs de anuncios -->
<div class="publicidade_desktop">
<!-- DFP Ros-->
<!-- /132061177/ELH_ros_1x1_Background -->
<div id='div-gpt-ad-1475155964983-5' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475155964983-5'); });
</script>
</div>
<div class="ad-outer ad-left">
<!-- /132061177/ELH_ros_back-left_120x600 -->
<div id='div-gpt-ad-1475594313618-1' style='height:600px; width:120px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475594313618-1'); });
</script>
</div></div>
<div class="ad-outer ad-right">

<!-- /132061177/ELH_ros_back-right_120x600 -->
<div id='div-gpt-ad-1475594313618-2' style='height:600px; width:120px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475594313618-2'); });
</script>
</div>
</div>

</div>
<!-- /132061177/ELH_ros_1x1_Interstical -->
<div id='div-gpt-ad-1475157563267-0' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475157563267-0'); });
</script>
</div>


<?php } elseif (in_category('musas')) {?>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/132061177/ELH_desktop_18_300x250_Arroba1', [300, 250], 'div-gpt-ad-1482345705990-0').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_desktop_18_300x250_Arroba2', [300, 250], 'div-gpt-ad-1482345705990-1').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_desktop_18_300x600_HalfPage', [300, 600], 'div-gpt-ad-1482345705990-2').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_desktop_18_950x250_Billboard1', [[728, 90], [950, 250]], 'div-gpt-ad-1482345705990-3').addService(googletag.pubads());
       googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- Background DFP codigos dos blocs de anuncios -->
<div class="publicidade_desktop">
<!-- DFP Ros-->
<!-- /132061177/ELH_ros_1x1_Background -->
<div id='div-gpt-ad-1475155964983-5' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475155964983-5'); });
</script>
</div>
<div class="ad-outer ad-left">
<!-- /132061177/ELH_ros_back-left_120x600 -->
<div id='div-gpt-ad-1475594313618-1' style='height:600px; width:120px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475594313618-1'); });
</script>
</div></div>
<div class="ad-outer ad-right">

<!-- /132061177/ELH_ros_back-right_120x600 -->
<div id='div-gpt-ad-1475594313618-2' style='height:600px; width:120px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475594313618-2'); });
</script>
</div>
</div>

</div>
<!-- /132061177/ELH_ros_1x1_Interstical -->
<div id='div-gpt-ad-1475157563267-0' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475157563267-0'); });
</script>
</div>

<?php } elseif (in_category('especiais')) {?>
<!-- Especial sem segmentaca -->

<?php } elseif (in_category('app-runtastic')){?>
<?php } elseif (in_category('lifestyle-by-dr-jones')){?>
<h1> </h1>
<style>
.OUTBRAIN {display:none;}
#div-gpt-ad-1477929494191-4 {display: none;}
#execphp-72 {display:none;}
#header-ig {top: -257px !important; z-index: 9999 !important;}
#background-drjones {top: 0px;}
.cb-module-title {display: none !important;}
.cb-author {display: none;}
</style>
<script type="text/javascript">               
var body = window.top.document.getElementsByTagName('body')[0];
body.style.backgroundImage = 'url(http://www.elhombre.com.br/wp-content/uploads/2016/11/ELH_Drjones_backgrond_12_06.jpg)';
body.style.backgroundPosition="50% 0%"; 
body.style.backgroundAttachment = "fixed";
body.style.backgroundRepeat = "no-repeat no-repeat";
body.style.paddingTop = "197px";
var a = document.createElement('A');
a.href = 'https://www.drjones.com.br';
a.target="_blank";
a.id="cb-bg-to";
a.rel="nofollow";
body.appendChild(a);
</script>

<?php } elseif (in_category('barba-brava')){?>
<h1> </h1>
<style>
.OUTBRAIN {display:none;}
#div-gpt-ad-1477929494191-4 {display: none;}
#execphp-72 {display:none;}
#header-ig {top: -257px !important; z-index: 9999 !important;}
.cb-module-title {display: none !important;}
.cb-author {display: none;}
</style>
<script type="text/javascript">               
var body = window.top.document.getElementsByTagName('body')[0];
body.style.backgroundImage = 'url(http://www.elhombre.com.br/wp-content/uploads/2016/10/WallpaperBarbaBrava.jpg)';
body.style.backgroundPosition="50% 0%"; 
body.style.backgroundAttachment = "fixed";
body.style.backgroundRepeat = "no-repeat no-repeat";
body.style.paddingTop = "197px";
var a = document.createElement('A');
a.href = 'http://www.barbabrava.com.br';
a.target="_blank";
a.id="cb-bg-to";
a.rel="nofollow";
body.appendChild(a);
</script>
<?php } elseif (in_category('di-pollini')){?>
<?php } elseif (in_category('dr-jones')){?>
<!-- Especial sem segmentaca -->


<?php } elseif (in_category('fitness-care')){?>
<!-- Especial sem segmentaca -->

<?php } elseif (in_category('melhor-ano-da-sua-vida')){?>
<!-- Especial sem segmentaca -->

<?php } elseif (in_category('lifestyle-by-dr-jones')){?>
<!-- Especial sem segmentaca -->
<?php } elseif (in_category('lush-motel')){?>
<?php } elseif (in_category('mens-market')){?>
<?php } elseif (in_category('onix-jeans')){?>
<?php } elseif (in_category('preserv')){?>
<?php } elseif (in_category('ricardo-almeida')){?>
<?php } elseif (in_category('reserva51')){?>
<?php } elseif (in_category('shop4men')){?>
<?php } elseif (in_category('tie')){?>
<?php } else { ?>
  <!-- ELH internas Desktop -->
<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/132061177/ELH_internas_950x250_Billboard1', [[728, 90], [950, 90], [950, 250]], 'div-gpt-ad-1477929494191-4').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_internas_300x250_Arroba1', [300, 250], 'div-gpt-ad-1477929494191-5').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_internas_300x250_Arroba2', [300, 250], 'div-gpt-ad-1477929494191-6').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_internas_300x600_HalfPage', [[300, 250], [300, 600]], 'div-gpt-ad-1477929494191-7').addService(googletag.pubads());
    googletag.defineSlot('/132061177/ELH_internas_728x90_SuperBanner1', [728, 90], 'div-gpt-ad-1477929494191-8').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().enableSyncRendering();
    googletag.enableServices();
  });
</script>
<!-- Background DFP codigos dos blocs de anuncios -->
<div class="publicidade_desktop">
<!-- DFP Ros-->
<!-- /132061177/ELH_ros_1x1_Background -->
<div id='div-gpt-ad-1475155964983-5' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475155964983-5'); });
</script>
</div>
<div class="ad-outer ad-left">
</div>
<div class="ad-outer ad-right">
</div>
</div>
<!-- /132061177/ELH_ros_1x1_Interstical -->
<div id='div-gpt-ad-1475157563267-0' style='height:1px; width:1px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1475157563267-0'); });
</script>
</div>
 <?php } } ?>
<!-- Fim sequencia DFP -->
<?php  if (in_category('lifestyle-by-dr-jones')){
} else {?>
<?php } ?>
<!-- Tag Analytics -->
<script async src="https://cdn.onthe.io/io.js/LO0ExZ1bxkta"></script>
<!-- TailTarget Tag Manager TT-11475-8/CT-572 -->
<script>
    (function(i) {
    var ts = document.createElement('script');
    ts.type = 'text/javascript';
    ts.async = true;
    ts.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'tags.t.tailtarget.com/t3m.js?i=' + i;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ts, s);
    })('TT-11475-8/CT-572');
</script>
<!-- End TailTarget Tag Manager -->
<script id="navegg" type="text/javascript" src="https://tag.navdmp.com/tm39271.js" ></script>





Added just after the <body> tag

<!--Background Ativo E apenas o Fundo Clicavel-->
<script type="text/javascript">document.getElementsByTagName('body')[0].className+=' cb-sticky-sb-on cb-bg-to-on'</script>
<style>
@media only screen and (min-width: 768px){
#cb-container {width: 990px; margin: 0 auto; background-color: white;}
}
</style>
<!-- Background estilo esquerdo e direito -->
<style>
.ad-outer.ad-left {
    left: 50%;
    margin-left: -615px;
    position: fixed;
}
.ad-outer.ad-right {
    right: 50%;
    margin-right: -615px;
    position: fixed;
}

.ad-outer {
    top: 30px;
}
</style>



POST Content
<style>
                      /* Disqus para os posts (single) */
@media only screen and (max-width: 767px) {
.load_disqus{
font-size: 9px;
  letter-spacing: 0px;
}
}
.load_disqus {-webkit-transition: all 0.35s;
  -transition: all 0.35s;
  transition: all 0.35s;
  display: inline-block;
  height: 60px;
  width: 50%;
  color: #161616;
  letter-spacing: 2px;
  border: 2px solid #161616;
  font-size: 18px;
  text-transform: uppercase;
  background: transparent;
}

.load_disqus a {-webkit-transition: all 0.35s;
  -transition: all 0.35s;
  transition: all 0.35s;
  display: inline-block;
  height: 60px;
  line-height: 60px;
  width: 50%;
  color: #161616;
  letter-spacing: 2px;
  border: 2px solid #161616;
  font-size: 18px;
  text-transform: uppercase;
  background: transparent;}


  .load_disqus:hover{  background: #161616;
  color: #fff;}</style>

<?php  if (in_category(array('lifestyle-by-dr-jones','easynvest'))){
} else {?>
<script type="text/javascript">
window._ttf = window._ttf || [];
_ttf.push({
       pid          : 60040
       ,lang        : "pt"
       ,slot        : '[itemprop="articleBody"] p'
       ,format      : "inread"
       ,minSlot     : 3
       ,css         : "margin: 14px 0px;"
});

(function (d) {
        var js, s = d.getElementsByTagName('script')[0];
        js = d.createElement('script');
        js.async = true;
        js.src = '//cdn.teads.tv/media/format.js';
        s.parentNode.insertBefore(js, s);
})(window.document);
</script>

<?php } ?>
