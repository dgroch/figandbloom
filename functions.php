<?php

function add_this_script_footer(){ ?>


<!-- Postcode Validator -->
<script>
var postcodes = [3000, 3000, 3001, 3002, 3003, 3003, 3005, 3006, 3008, 3010, 3011, 3012, 3013, 3015, 3016, 3018, 3019, 3020, 3025, 3026, 3027, 3028, 3031, 3032, 3033, 3034, 3036, 3039, 3040, 3041, 3042, 3043, 3044, 3045, 3046, 3047, 3048, 3049, 3050, 3051, 3052, 3053, 3054, 3055, 3056, 3057, 3058, 3060, 3065, 3066, 3067, 3068, 3070, 3071, 3072, 3073, 3074, 3075, 3078, 3079, 3081, 3083, 3084, 3085, 3086, 3087, 3088, 3093, 3094, 3101, 3102, 3103, 3104, 3105, 3106, 3107, 3108, 3109, 3111, 3121, 3122, 3123, 3124, 3125, 3126, 3127, 3128, 3130, 3141, 3142, 3143, 3144, 3145, 3146, 3147, 3148, 3149, 3161, 3162, 3163, 3165, 3166, 3167, 3168, 3181, 3182, 3183, 3184, 3185, 3186, 3187, 3188, 3189, 3190, 3191, 3192, 3193, 3194, 3195];

function clearPostcodeResults() {
  jQuery('.results').hide();
  jQuery('.postcode-error').hide();
  jQuery('.affirmative').hide();
  jQuery('.negative').hide();
  jQuery('.input--postcode').removeClass('warning-border');
  jQuery('.postcode-error h5').removeClass('warning-text');
}

jQuery('.input--postcode').click(function(){
  clearPostcodeResults();
})

jQuery('.button').click(function(){
  clearPostcodeResults();
  var input = jQuery('.input--postcode').val();
  var string = /[a-zA-Z]/;
  var containsLetters = string.test(input);
  var postcode = parseInt(input);
  var empty = input === '';
  var tooShort = (postcode / 1000) < 1;
  if (empty || tooShort || containsLetters) {
    jQuery('.results').show();
    jQuery('.input--postcode').addClass('warning-border');
    jQuery('.postcode-error h5').addClass('warning-text');
    jQuery('.postcode-error').show();
    console.log('error');
    return;
  }

  var validPostcode = postcodes.indexOf(postcode) >= 0 ? true : false;
  if (validPostcode) {
    jQuery('.results').show();
    jQuery('.affirmative').show();
  } else {
    jQuery('.results').show();
    jQuery('.negative').show();
  }
})
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '107885032879373');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=107885032879373&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Begin Inspectlet Embed Code -->
<script type="text/javascript" id="inspectletjs">
window.__insp = window.__insp || [];
__insp.push(['wid', 1349684301]);
(function() {
function ldinsp(){if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
setTimeout(ldinsp, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp();
})();
</script>
<!-- end Inspectlet code -->

<!-- Begin Olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('7166-990-10-7176');/*]]>*/</script><noscript><a href="https://www.olark.com/site/7166-990-10-7176/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->

<?php } 

add_action('wp_footer', 'add_this_script_footer'); ?>
