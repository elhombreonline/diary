TOP ROS HEADER

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
<div class="publicidade_mobile">
<style> @media screen and (max-width: 600px) {#cb-content {display: none;}} </style>
<!-- /132061177/ELH_mobile_home_320x100_Rectangule1 -->
<div id='div-gpt-ad-1482149881821-0' style='height:50px; width:320px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1482149881821-0'); });
</script>
</div>
</div>
<?php } elseif (in_category(array('especiais','app-runtastic','doutor-grooming-by-dr-jones','doutor-grooming-by-dr-jones','melhor-ano-da-sua-vida','mens-market','preserv','lifestyle-by-dr-jones','easynvest','philips-body-grooming','25-blogs-de-moda-masculina','cuidados_pessoais','modamasculina','relogios','barba-brava','gillettenfl2017'))) {?>

<?php } elseif (in_category('sexo')) {?>
<div class="publicidade_mobile">
<style> @media screen and (max-width: 600px) {.cb-category-top {display: none;}} </style>

<!-- /132061177/ELH_mobile_18_320x50_Rectangule1 -->
<div id='div-gpt-ad-1482345705990-5' style='height:50px; width:320px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1482345705990-5'); });
</script>
</div>
</div>
<?php } elseif (in_category('musas')) {?>
<div class="publicidade_mobile">
<style> @media screen and (max-width: 600px) {.cb-category-top {display: none;}} </style>

<!-- /132061177/ELH_mobile_18_320x50_Rectangule1 -->
<div id='div-gpt-ad-1482345705990-5' style='height:50px; width:320px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1482345705990-5'); });
</script>
</div>
</div>

<?php } else {?>
<!-- ELH Mobile Interna -->
<div class="publicidade_mobile">
<!-- /132061177/ELH_mobile_internas_320x100_Rectangule1 -->
<style> @media screen and (max-width: 600px) {.cb-category-top {display: none;}} </style>
<div id='div-gpt-ad-1482150056663-0' style='height:50px; width:320px; margin-top: 2px; margin-bottom: 2px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1482150056663-0'); });
</script>
</div>
</div>
<?php } } else { if (is_home() || is_front_page()) { ?>

<!-- ELH Home Padrao -->
<div class="publicidade_desktop">
<!-- /132061177/ELH_Home_950x250_Billboard1 -->
<div id='div-gpt-ad-1477929494191-1' style="height:90px; width:728px; margin:0 auto;">
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1477929494191-1'); });
</script>
</div>
</div>
<?php } elseif (in_category('sexo')) {?>

<!-- /132061177/ELH_desktop_18_950x250_Billboard1 -->
<div id='div-gpt-ad-1482345705990-3' style="height:90px; width:728px; margin: 0 auto; ">
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1482345705990-3'); });
</script>
</div>
<?php } elseif (in_category('musas')) {?>
<!-- /132061177/ELH_desktop_18_950x250_Billboard1 -->
<div id='div-gpt-ad-1482345705990-3' style="height:90px; width:728px; margin: 0 auto; ">
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1482345705990-3'); });
</script>
</div>

<?php } elseif (is_category('especiais')) {?>
<div class="publicidade_desktop">

</div>
<?php } elseif (in_category('jaguar')){?>

<?php } elseif (in_category('philips-body-grooming')){?>
<?php } elseif (in_category('app-runtastic')){?>
<div class="publicidade_desktop" style=" width:728px; height: 90px; margin: 0 auto;">
     <a href="http://elhomb.re/1Tf2zse"> <img src="http://www.elhombre.com.br/wp-content/uploads/2016/09/elh_appruntastic_728x90.jpg"></a>
</div>
<?php } elseif (in_category('bangood')){?>
<?php } elseif (in_category('di-pollini')){?>
<div class="publicidade_desktop" style=" width:728px; height: 90px; margin: 0 auto;">
     <a href="http://www.dipollini.com.br/?utm_source=elhombre&amp;utm_medium=midia&amp;utm_campaign=elhombre"> <img src="http://www.elhombre.com.br/wp-content/uploads/2015/11/DP-super.jpg"></a>
</div>
<?php } elseif (in_category('dr-jones')){?>
<!-- Especial sem segmentaca -->
<a href="https://goo.gl/3N58Ex" target="_blank"><img class="alignnone size-full wp-image-100154" src="http://www.elhombre.com.br/wp-content/uploads/2016/03/jones.jpg" alt="jones" width="728" height="90" /></a>

<?php } elseif (in_category('fitness-care')){?>
<!-- Especial sem segmentaca -->
<a href="http://www.runtastic.com/pt/results"> 
<img src="http://www.elhombre.com.br/wp-content/uploads/2015/11/Lush-Banner-ElHombre-728x90-2015.11.19-GIF-3.gif">
</a>


<?php } elseif (in_category('melhor-ano-da-sua-vida')){?>
<!-- Especial sem segmentaca -->
<?php } elseif (in_category('grooming')){?>
    <div class="publicidade_desktop">
<!-- /132061177/ELH_internas_950x250_Billboard1 -->
<div id='div-gpt-ad-1477929494191-4' style="height:90px; width:728px; margin: 0 auto; ">
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1477929494191-4'); });
</script>
</div>
</div>
    <?php } elseif (in_category('lifestyle')){?>
      <div class="publicidade_desktop">
<!-- /132061177/ELH_internas_950x250_Billboard1 -->
<div id='div-gpt-ad-1477929494191-4' style="height:90px; width:728px; margin: 0 auto; ">
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1477929494191-4'); });
</script>
</div>
</div>

<?php } elseif (in_category('modamasculina')){?>
<?php } elseif (in_category('lifestyle-by-dr-jones')){?>

<?php } elseif (in_category('lush-motel')){?>
<div class="publicidade_desktop" style=" width:728px; height: 90px; margin: 0 auto;">
<a href="http://elhomb.re/1Tf2zse"> <img src="http://www.elhombre.com.br/wp-content/uploads/2016/09/elh_appruntastic_728x90.jpg"></a>
</div>

<?php } elseif (in_category('mens-market')){?>
<?php } elseif (in_category('onix-jeans')){?>
<?php } elseif (in_category('preserv')){?>
<?php } elseif (in_category('ricardo-almeida')){?>
<?php } elseif (in_category('reserva51')){?>
<?php } elseif (in_category('shop4men')){?>
<?php } elseif (in_category('tie')){?>
<?php } else { ?>
<!-- Interna Dekstop -->
<div class="publicidade_desktop">
<!-- /132061177/ELH_internas_950x250_Billboard1 -->
<div id='div-gpt-ad-1477929494191-4' style="height:90px; width:728px; margin: 0 auto; ">
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1477929494191-4'); });
</script>
</div>
</div>

<?php } } ?>

 <!-- Fim sequencia  -->
