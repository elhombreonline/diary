 <?php  if (in_category(array('especiais','app-runtastic','doutor-grooming-by-dr-jones','doutor-grooming-by-dr-jones','melhor-ano-da-sua-vida','mens-market','preserv','lifestyle-by-dr-jones','easynvest','philips-body-grooming','25-blogs-de-moda-masculina','cuidados_pessoais','modamasculina','relogios','barba-brava','gillettenfl2017'))){} else {?>
<div style="left: 0px; top: 0px; position: fixed !important; height: 100% !important; width: 100% !important; display: block;">
 <script type="text/javascript">
var ws_unit = {
 "id":"908044",
 "sizes": [[1900,1020]]
};
</script>
<script type="text/javascript" src="//wfpscripts.webspectator.com/ws-ad.js"></script>
<script>
function insertAdParagraph(){
  var p = jQuery(".cb-itemprop p"), divs = [], n = 0, a = "", d = "", f = "", idoc = "";
  for (var i = 1; i <= jQuery(".cb-itemprop p").length; i++){
    n = parseInt(Math.random()*9999999);
    if(i%8 == 0){
      divs.push(n);
      jQuery(".cb-itemprop p").eq(i).append("<div class='publicidade_mobile' id='div-"+n+"' style='width:300px;text-align:center;margin:0 auto'></div>");
    }
  }
  for (var i = 0; i < divs.length; i++) {
    a = document.getElementById("div-"+divs[i]);
    if(a != null){
      d = '<scr'+'ipt src="https://www.googletagservices.com/tag/js/gpt.js"></scr'+'ipt><scr'+'ipt> googletag.pubads().definePassback("/132061177/ELH_ros_300x250_Retangulo", [300,250]).display();</scr'+'ipt>',
      f = document.createElement('iframe');
      f.id = "300x250-"+divs[i];
      f.async = "true";
      f.width = '300';
      f.height = '250';
      f.frameBorder = "no";
      f.scrolling = "no";
      f.marginWidth = "0";
      f.marginHeight = "0";
      f.vspace = "0";
      f.hspace = "0";
      f.src = "about:blank";
      f.style = "text-align: center";
      a.appendChild(f);
      idoc = (f.contentWindow) ? f.contentWindow.document : (f.contentDocument) ? f.contentDocument.document : f.contentDocument;
      idoc.open();
      idoc.write(d);
      idoc.close();
      f = d = a = idoc = "";
    }
  } 
};   
window.attachEvent ? window.attachEvent("onload", insertAdParagraph) : window.addEventListener("load", insertAdParagraph, false);
</script>  
<?php } ?>
</div>
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
<!-- Barra do IG-->
<div id="ig-barra2">
</div>
<style>
@media only screen and (min-width: 768px){ 
	#hdr-ig {
	top: 0 !important;
	width: 100%;
	z-index: 999!important;
	position: fixed!important;

}
}
#ig-barra2{
	display: none;
}
</style> 
<script type="text/javascript">
	(function(){
	function $iGDomReady(fn) {if (document.readyState != 'loading'){fn();} else {document.addEventListener('DOMContentLoaded', fn);}}
	
	var initFixHeader = function(){
	var ehMenu = document.querySelector(".cb-top-menu-wrap");
	var igMenu = document.getElementById('ig-barra2');
	if(!ehMenu || ! igMenu) return;

	var igMenuHeight = igMenu.offsetHeight;
	ehMenu.style.position='relative';
	igMenu.style.display = 'block';
	document.addEventListener("scroll", function iGhMenu() {
	var scrollTop = window.pageYOffset;
	if (scrollTop >= igMenuHeight){
	document.getElementById('ig-barra2').style.display = "none";
	ehMenu.style.position='fixed';
	}
	if (scrollTop <= igMenuHeight){
	ehMenu.style.position='relative';
	document.getElementById('ig-barra2').style.display = "block";
	}
	});
	};
	$iGDomReady(initFixHeader);
	})();
</script>
<!-- IG - Barra some -->
