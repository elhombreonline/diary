<div style="left: 0px; top: 0px; position: fixed !important; height: 100% !important; width: 100% !important; display: block;">
 <script type="text/javascript">
var ws_unit = {
 "id":"908044",
 "sizes": [[1900,1020]]
};
</script>
<script type="text/javascript" src="//wfpscripts.webspectator.com/ws-ad.js"></script>
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
<script type="text/javascript" src="http://js.statig.com.br/barraiG/parceiros/barra_parceiros.js"></script>
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
