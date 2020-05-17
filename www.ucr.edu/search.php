<!doctype html>
<html  lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# " class="no-js">
<head>
  <meta charset="utf-8" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"07d404edfe",applicationID:"99508828"};window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var i=n[t]={exports:{}};e[t][0].call(i.exports,function(n){var i=e[t][1][n];return r(i||n)},i,i.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<t.length;i++)r(t[i]);return r}({1:[function(e,n,t){function r(){}function i(e,n,t){return function(){return o(e,[u.now()].concat(f(arguments)),n?null:this,t),n?void 0:this}}var o=e("handle"),a=e(4),f=e(5),c=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",d=l+"ixn-";a(p,function(e,n){s[n]=i(l+n,!0,"api")}),s.addPageAction=i(l+"addPageAction",!0),s.setCurrentRouteName=i(l+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,i="function"==typeof n;return o(d+"tracer",[u.now(),e,t],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],t),i)try{return n.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],t),e}finally{c.emit("fn-end",[u.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=i(d+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){var t=e.getEntries();t.forEach(function(e){"first-paint"===e.name?c("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&c("timing",["fcp",Math.floor(e.startTime)])})}function i(e,n){var t=e.getEntries();t.length>0&&c("lcp",[t[t.length-1]])}function o(e){if(e instanceof s&&!l){var n,t=Math.round(e.timeStamp);n=t>1e12?Date.now()-t:u.now()-t,l=!0,c("timing",["fi",t,{type:e.type,fid:n}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var a,f,c=e("handle"),u=e("loader"),s=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){a=new PerformanceObserver(r),f=new PerformanceObserver(i);try{a.observe({entryTypes:["paint"]}),f.observe({entryTypes:["largest-contentful-paint"]})}catch(p){}}if("addEventListener"in document){var l=!1,d=["click","keydown","mousedown","pointerdown","touchstart"];d.forEach(function(e){document.addEventListener(e,o,!1)})}}},{}],3:[function(e,n,t){function r(e,n){if(!i)return!1;if(e!==i)return!1;if(!n)return!0;if(!o)return!1;for(var t=o.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}n.exports={agent:i,version:o,match:r}},{}],4:[function(e,n,t){function r(e,n){var t=[],r="",o=0;for(r in e)i.call(e,r)&&(t[o]=n(r,e[r]),o+=1);return t}var i=Object.prototype.hasOwnProperty;n.exports=r},{}],5:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,i=t-n||0,o=Array(i<0?0:i);++r<i;)o[r]=e[n+r];return o}n.exports=r},{}],6:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function i(e){function n(e){return e&&e instanceof r?e:e?c(e,f,o):o()}function t(t,r,i,o){if(!l.aborted||o){e&&e(t,r,i);for(var a=n(i),f=v(t),c=f.length,u=0;u<c;u++)f[u].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function d(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||i(t)}function w(e,n){u(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:d,addEventListener:d,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(l.aborted=!0,s=l.backlog={})}var f="nr@context",c=e("gos"),u=e(4),s={},p={},l=n.exports=i();l.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(i.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[n]=r,r}var i=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){i.buffer([e],r),i.emit(e,n,t)}var i=e("ee").get("handle");n.exports=r,r.ee=i},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=E.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();u(y,function(n,t){e[n]||(e[n]=t)}),c("mark",["onload",a()+E.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function i(){"complete"===d.readyState&&o()}function o(){c("mark",["domContent",a()+E.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(f=Math.max((new Date).getTime(),f))-E.offset}var f=(new Date).getTime(),c=e("handle"),u=e(4),s=e("ee"),p=e(3),l=window,d=l.document,m="addEventListener",v="attachEvent",g=l.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:g,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1167.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),E=n.exports={offset:f,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),e(2),d[m]?(d[m]("DOMContentLoaded",o,!1),l[m]("load",r,!1)):(d[v]("onreadystatechange",i),l[v]("onload",r)),c("mark",["firstbyte",f],null,"api");var x=0,O=e(6)},{}],"wrap-function":[function(e,n,t){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(5),a="nr@original",f=Object.prototype.hasOwnProperty,c=!1;n.exports=function(e,n){function t(e,n,t,i){function nrWrapper(){var r,a,f,c;try{a=this,r=o(arguments),f="function"==typeof t?t(r,a):t||{}}catch(u){l([u,"",[r,a,i],f])}s(n+"start",[r,a,i],f);try{return c=e.apply(a,r)}catch(p){throw s(n+"err",[r,a,p],f),p}finally{s(n+"end",[r,a,c],f)}}return r(e)?e:(n||(n=""),nrWrapper[a]=e,p(e,nrWrapper),nrWrapper)}function u(e,n,i,o){i||(i="");var a,f,c,u="-"===i.charAt(0);for(c=0;c<n.length;c++)f=n[c],a=e[f],r(a)||(e[f]=t(a,u?f+i:i,o,f))}function s(t,r,i){if(!c||n){var o=c;c=!0;try{e.emit(t,r,i,n)}catch(a){l([a,t,r,i])}c=o}}function p(e,n){if(Object.defineProperty&&Object.keys)try{var t=Object.keys(e);return t.forEach(function(t){Object.defineProperty(n,t,{get:function(){return e[t]},set:function(n){return e[t]=n,n}})}),n}catch(r){l([r])}for(var i in e)f.call(e,i)&&(n[i]=e[i]);return n}function l(n){try{e.emit("internal-error",n)}catch(t){}}return e||(e=i),t.inPlace=u,t.flag=a,t}},{}]},{},["loader"]);</script>
<script>window.dataLayer = window.dataLayer || []; window.dataLayer.push({"drupalLanguage":"en","drupalCountry":"US","siteName":"University of California, Riverside","entityCreated":"1522111872","entityLangcode":"en","entityStatus":"1","entityUid":"10","entityUuid":"150549e1-686e-40ec-8370-5ac20e4d7db5","entityVid":"2201","entityName":"michaelr","entityType":"node","entityBundle":"gcs","entityId":"1431","entityTitle":"Search Results","userUid":0});</script>
<script>(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","https://www.google-analytics.com/analytics.js","ga");ga("create", "UA-0000000-0", {"cookieDomain":"auto"});ga("set", "anonymizeIp", true);ga("send", "pageview");</script>
<link rel="canonical" href="https://www.ucr.edu/search-results" />
<meta name="google-site-verification" content="EbFhav1iFMt8r3Z2Eu-hzZwG4wG4a0kjkNqDasBr5UE" />
<meta name="Generator" content="Drupal 8 (https://www.drupal.org)" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/profiles/custom/umbrella_acsf/themes/custom/ucr_umbrella/favicon.ico" type="" />
<link rel="revision" href="https://www.ucr.edu/search-results" />
<script src="/sites/g/files/rcwecm986/files/google_tag/primary/google_tag.script.js?q9yzhs" defer></script>

  <title>Search Results | University of California, Riverside</title>
  <link rel="stylesheet" media="all" href="/sites/g/files/rcwecm986/files/css/css_UBernJWRX80nGl1Gki-DsCXxPEDVZwOgV7H9PQ1s-Fc.css?q9yzhs" />
<link rel="stylesheet" media="all" href="/sites/g/files/rcwecm986/files/css/css_dOFD3J8JWXANj0rOyRMC9AV-9CatrXNlpr5Wrbq64QE.css?q9yzhs" />

  
<!--[if lte IE 8]>
<script src="/sites/g/files/rcwecm986/files/js/js_VtafjXmRvoUgAzqzYTA3Wrjkx9wcWhjP0G4ZnnqRamA.js"></script>
<![endif]-->
<script src="/core/assets/vendor/modernizr/modernizr.min.js?v=3.3.1"></script>

</head>
<body class="layout path-node node--type-gcs">
  <noscript aria-hidden="true"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJC62T6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
    <header>
    <div class="grid-container full">
                    <div class="grid-x">
    <div class="cell text-center">
        <div class="block--basic ucr-custom-block" id="block-testalert" data-block-plugin-id="block_content:96e3da54-17c1-4ffc-8c14-be004dd0dd3c">
  
    
          <div class="field field--name-body field--type-text-with-summary field--label-hidden field__items">
                <div class="field__item">
        <p> </p>
<div class="callout info" data-closable="">
<div><strong>COVID-19</strong> <b><a href="https://ehs.ucr.edu/coronavirus">information, guidance, and resources</a> for the UC Riverside community. Additional health guidance available on the CDC's COVID-19 <a href="https://www.cdc.gov/coronavirus/2019-ncov/index.html">site</a>. </b></div>
<p><button aria-label="Dismiss alert" class="close-button" data-close="" type="button"><span aria-hidden="true">×</span></button></p>
</div>

            </div>
          </div>

  </div>

    </div>
</div>

                <div class="grid-x">
            <div class="cell small-order-2 medium-order-1 audience-container">
    <div class="grid-container">
        <div class="grid-x align-middle">
             <nav role="navigation" aria-labelledby="block-audiencemenuleftside-menu" id="block-audiencemenuleftside" data-block-plugin-id="menu_block:audience-menu-left-side" class="general-menu">
                        
    <h2 class="visually-hidden" id="block-audiencemenuleftside-menu">Audience Menu Left Side</h2>
    

                
        <ul class="menu">
                    <li><a href="/alpha" target="_self" data-drupal-link-system-path="node/93">A to Z Listing</a>
                        </li>
                    <li><a href="https://campusmap.ucr.edu/" target="_self">Campus Map</a>
                        </li>
                    <li><a href="http://profiles.ucr.edu" target="_blank">Find People</a>
                        </li>
                    <li><a href="https://news.ucr.edu" target="_self">News</a>
                        </li>
            </ul>
  


    </nav>
<div id="block-ucriversideaudiencesearchblock-3" data-block-plugin-id="ucr_global_audience_search">
    
        
            <section class="google-search" role="search">
            <form id="audience-search-form" action="https://www.ucr.edu/search.php">
                <label class="show-for-sr" for="audience-search">Search for:</label>
                <input type="text" maxlength="255" id="audience-search" name="q" value="" placeholder=" " />
                <button type="submit" class="button show-for-small-only" value="">Search</button>
            </form>
        </section>
    </div>
<nav role="navigation" aria-labelledby="block-quicklinks-menu" id="block-quicklinks" data-block-plugin-id="menu_block:quick-links" class="general-menu">
            
    <h2 id="block-quicklinks-menu">Quick Links</h2>
    

                
        <ul class="vertical menu">
                    <li><a href="/about/visitors" target="_self" data-drupal-link-system-path="node/15">Visit</a>
                        </li>
                    <li><a href="http://events.ucr.edu" target="_self">Events</a>
                        </li>
                    <li><a href="https://giving.ucr.edu/give-now" target="_self">Make a Gift</a>
                        </li>
                    <li><a href="http://campusmap.ucr.edu/" target="_self">Campus Map</a>
                        </li>
                    <li><a href="http://jobs.ucr.edu" target="_self">Jobs</a>
                        </li>
                    <li><a href="http://library.ucr.edu" target="_self">Library</a>
                        </li>
                    <li><a href="http://transportation.ucr.edu/" target="_self">Parking and Transportation</a>
                        </li>
                    <li><a href="/apply" target="_self" data-drupal-link-system-path="node/29">Apply</a>
                        </li>
            </ul>
  


    </nav>
             <div class="cell shrink hide-for-large mobile-menu-expander-wrapper" data-responsive-toggle="main-menu-container" data-hide-for="large">
                <button class="mdi mdi-menu button mobile-menu-expander" type="button" data-toggle="main-menu-container">
                </button>
            </div>
        </div>
    </div>
</div>

            <div class="cell small-order-1 medium-order-2 masthead-container">
    <div class="grid-container">
        <div class="grid-x align-middle">
                 <div class="cell shrink">
        <a class="masthead-logo" href="/">
            <span class="show-for-sr">UC Riverside</span>
        </a>
    </div>
    <div class="cell auto">
        <h1 class="masthead-title">
            <a href="/"> University of California, Riverside </a>
        </h1>
    </div>
    <div class="cell auto show-for-medium">
        <p class="slogan">University of California, Riverside</p>
    </div>
         </div>
    </div>
</div>

            
<div class="cell small-order-3 medium-order-3 main-nav-bar">
    <div class="main-menu-outer-container">
      <div class="grid-container" id="main-menu-container" data-animate="slide-in-right slide-out-right">
          <div class="grid-x">
               <div class="cell" id="block-ucr-umbrella-main-menu" data-block-plugin-id="system_menu_block:main">
    
    
            
    
    <ul id="main-menu">
    	
	        	            	                <li>
	            	            <a href="/about" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/6">About</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/about" target="_self" data-drupal-link-system-path="node/6">About Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/about/ranks-and-facts" target="_self" data-drupal-link-system-path="node/11">Rankings and Facts</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/about/impact" target="_self" data-drupal-link-system-path="node/12">Impacts</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/about/history" target="_self" data-drupal-link-system-path="node/14">History</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/about/visitors" target="_self" data-drupal-link-system-path="node/15">Visitors</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/about/international" target="_self" data-drupal-link-system-path="node/17">International</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <a href="/academics" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/7">Academics</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/academics" target="_self" data-drupal-link-system-path="node/7">Academics Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/academics/undergraduate-majors" target="_self" data-drupal-link-system-path="node/22">Undergraduate Majors</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="https://graduate.ucr.edu/graduate-programs-overview" target="_blank">Graduate Programs</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/academics/index.html" target="_blank">Colleges and Schools</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://www.extension.ucr.edu" target="_blank">UCR Extension</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <a href="/admissions" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/8">Admissions</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/admissions" target="_self" data-drupal-link-system-path="node/8">Admissions Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Undergraduate Admissions</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="https://graduate.ucr.edu/admissions" target="_blank">Graduate Admissions</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/international/index.html" target="_blank">International Admissions</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/transfer/" target="_blank">Transfer Admissions</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/cost/index.html" target="_blank">Cost</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/military-veterans.html">Veteran Admissions</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <a href="/research" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/9">Research</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/research" target="_self" data-drupal-link-system-path="node/9">Research Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/research/undergrad-research" target="_self" data-drupal-link-system-path="node/30">Undergraduate Research</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://graduate.ucr.edu/" target="_blank">Graduate Research</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/research/centers" target="_self" data-drupal-link-system-path="node/33">Centers and Facilities</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="https://library.ucr.edu/" target="_blank">Library</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <a href="/campus-life" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/10">Campus Life</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/campus-life" target="_self" data-drupal-link-system-path="node/10">Campus Life Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://events.ucr.edu" target="_blank">Events</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://campusmap.ucr.edu/" target="_blank">Map</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/campus-life/arts-and-culture" target="_self" data-drupal-link-system-path="node/42">Arts and Culture</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/campus-life/athletics-and-recreation" target="_self" data-drupal-link-system-path="node/43">Athletics and Recreation</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/campus-life/health-and-safety" target="_self" data-drupal-link-system-path="node/44">Health and Safety</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://gardens.ucr.edu/" target="_blank">Botanic Gardens</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://housing.ucr.edu/" target="_blank">Housing</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://dining.ucr.edu" target="_blank">Dining</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/about/visitors" target="_self" data-drupal-link-system-path="node/15">About Riverside</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="find-info-link">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    


    </div>
<nav role="navigation" aria-labelledby="block-audiencemenuleftside-2-menu" id="block-audiencemenuleftside-2" data-block-plugin-id="menu_block:audience-menu-left-side" class="general-menu">
                        
    <h2 class="visually-hidden" id="block-audiencemenuleftside-2-menu">Audience Menu Left Side Mobile</h2>
    

                
        <ul class="menu">
                    <li><a href="/alpha" target="_self" data-drupal-link-system-path="node/93">A to Z Listing</a>
                        </li>
                    <li><a href="https://campusmap.ucr.edu/" target="_self">Campus Map</a>
                        </li>
                    <li><a href="http://profiles.ucr.edu" target="_blank">Find People</a>
                        </li>
                    <li><a href="https://news.ucr.edu" target="_self">News</a>
                        </li>
            </ul>
  


    </nav>
<nav role="navigation" aria-labelledby="block-quicklinks-2-menu" id="block-quicklinks-2" data-block-plugin-id="menu_block:quick-links" class="general-menu">
            
    <h2 id="block-quicklinks-2-menu">Quick Links Mobile</h2>
    

                
        <ul class="vertical menu">
                    <li><a href="/about/visitors" target="_self" data-drupal-link-system-path="node/15">Visit</a>
                        </li>
                    <li><a href="http://events.ucr.edu" target="_self">Events</a>
                        </li>
                    <li><a href="https://giving.ucr.edu/give-now" target="_self">Make a Gift</a>
                        </li>
                    <li><a href="http://campusmap.ucr.edu/" target="_self">Campus Map</a>
                        </li>
                    <li><a href="http://jobs.ucr.edu" target="_self">Jobs</a>
                        </li>
                    <li><a href="http://library.ucr.edu" target="_self">Library</a>
                        </li>
                    <li><a href="http://transportation.ucr.edu/" target="_self">Parking and Transportation</a>
                        </li>
                    <li><a href="/apply" target="_self" data-drupal-link-system-path="node/29">Apply</a>
                        </li>
            </ul>
  


    </nav>
<nav role="navigation" aria-labelledby="block-mainnavigation-4-menu" id="block-mainnavigation-4" class="mobile-menu general-menu" data-block-plugin-id="menu_block:main">
                        
    <h2 class="visually-hidden" id="block-mainnavigation-4-menu">Main navigation (Mobile)</h2>
    

                
    
    <ul id="main-menu">
    	
	        	            	                <li>
	            	            <a href="/about" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/6">About</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/about" target="_self" data-drupal-link-system-path="node/6">About Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/about/ranks-and-facts" target="_self" data-drupal-link-system-path="node/11">Rankings and Facts</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/about/impact" target="_self" data-drupal-link-system-path="node/12">Impacts</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/about/history" target="_self" data-drupal-link-system-path="node/14">History</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/about/visitors" target="_self" data-drupal-link-system-path="node/15">Visitors</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/about/international" target="_self" data-drupal-link-system-path="node/17">International</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <a href="/academics" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/7">Academics</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/academics" target="_self" data-drupal-link-system-path="node/7">Academics Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/academics/undergraduate-majors" target="_self" data-drupal-link-system-path="node/22">Undergraduate Majors</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="https://graduate.ucr.edu/graduate-programs-overview" target="_blank">Graduate Programs</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/academics/index.html" target="_blank">Colleges and Schools</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://www.extension.ucr.edu" target="_blank">UCR Extension</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <a href="/admissions" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/8">Admissions</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/admissions" target="_self" data-drupal-link-system-path="node/8">Admissions Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Undergraduate Admissions</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="https://graduate.ucr.edu/admissions" target="_blank">Graduate Admissions</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/international/index.html" target="_blank">International Admissions</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/transfer/" target="_blank">Transfer Admissions</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/cost/index.html" target="_blank">Cost</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/military-veterans.html">Veteran Admissions</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <a href="/research" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/9">Research</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/research" target="_self" data-drupal-link-system-path="node/9">Research Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/research/undergrad-research" target="_self" data-drupal-link-system-path="node/30">Undergraduate Research</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://graduate.ucr.edu/" target="_blank">Graduate Research</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/research/centers" target="_self" data-drupal-link-system-path="node/33">Centers and Facilities</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="https://library.ucr.edu/" target="_blank">Library</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <a href="/campus-life" target="_self" class="drop-down-arrow" data-drupal-link-system-path="node/10">Campus Life</a>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <span target="_self">Column 1</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/campus-life" target="_self" data-drupal-link-system-path="node/10">Campus Life Overview</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://events.ucr.edu" target="_blank">Events</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://campusmap.ucr.edu/" target="_blank">Map</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 2</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="/campus-life/arts-and-culture" target="_self" data-drupal-link-system-path="node/42">Arts and Culture</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/campus-life/athletics-and-recreation" target="_self" data-drupal-link-system-path="node/43">Athletics and Recreation</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/campus-life/health-and-safety" target="_self" data-drupal-link-system-path="node/44">Health and Safety</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self">Column 3</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://gardens.ucr.edu/" target="_blank">Botanic Gardens</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://housing.ucr.edu/" target="_blank">Housing</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://dining.ucr.edu" target="_blank">Dining</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/about/visitors" target="_self" data-drupal-link-system-path="node/15">About Riverside</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="decorated-column-header">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	            	                <li>
	            	            <span target="_self" class="find-info-link">Find Information For...</span>
	            	                    
        <div>
    		    <ul class="accessible-megamenu-panel-group">
	    	        	
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu" target="_blank">Prospective Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/current-students" target="_self" data-drupal-link-system-path="node/53">Current Students</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/faculty" target="_self" data-drupal-link-system-path="node/90">Faculty</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="/staff" target="_self" data-drupal-link-system-path="node/94">Staff</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://admissions.ucr.edu/admissions/parents.html" target="_blank">Parents</a>
	            	            </li>
	        	            	                <li>
	            	            <a href="http://alumni.ucr.edu" target="_blank">Alumni</a>
	            	            </li>
	        	    </ul>
    </div>
    
	            	            </li>
	        	    </ul>
    </div>
    


    </nav>
<div id="block-ucriversideaudiencesearchblock-4" data-block-plugin-id="ucr_global_audience_search">
    
        
            <section class="google-search" role="search">
            <form id="audience-search-form" action="https://www.ucr.edu/search.php">
                <label class="show-for-sr" for="audience-search">Search for:</label>
                <input type="text" maxlength="255" id="audience-search" name="q" value="" placeholder=" " />
                <button type="submit" class="button show-for-small-only" value="">Search</button>
            </form>
        </section>
    </div>
           </div>
      </div>
    </div>
</div>

        </div>
    </div>
</header>
<div id="content-container">
            
        <div class="grid-container primary-content-area">
                <div class="grid-x grid-padding-x">
                <div class="cell">
        <div data-drupal-messages-fallback class="hidden"></div>

    </div>

            
        </div>
                <div class="grid-x grid-padding-x">
                <div class="cell">
        <div id="block-breadcrumbs" data-block-plugin-id="system_breadcrumb_block">
    
        
              <nav role="navigation" class="breadcrumb_container" aria-labelledby="system-breadcrumb">
    <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
    <ul class="breadcrumbs">
          <li>
                            <a href="/" class="mdi mdi-home breadcrumb_home"></a>
                          </li>
          <li>
                <span>Search Results</span>
              </li>
        </ul>
  </nav>

    </div>

    </div>

        </div>
        <div class="grid-x grid-padding-x">
                        <div class="cell large-auto small-order-3 medium-order-3 large-order-2 pca-content">
                  <div>
    <div id="block-ucr-umbrella-content" data-block-plugin-id="system_main_block">
  
    
      <div class="ucr-google-custom-search-results">
    <script>
      (function() {
        var cx = '017633926441124687147:azydlcc9kek';
        var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//www.google.com/cse/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    <style type="text/css">
        .gsc-control-cse table, tbody, td, th { border: none !important; margin: 0 !important; padding: 0 !important; }
        .gsc-result-info-container { padding: 0 !important; }
        .gsc-result-info { background-color: #efefef; margin: 0 !important; padding: 14px !important; }
        .gsc-table-result td { padding:8px !important }
        .gsc-results { width: 100% !important; }
        .cse .gsc-webResult.gsc-result, .gsc-webResult.gsc-result, .gsc-imageResult-column, .gsc-imageResult-classic { padding: 0 !important; border: none !important; margin-bottom: 0 !important; }
        .gsc-webResult.gsc-result, .gsc-results .gsc-imageResult { border-color: transparent !important; background-color: transparent !important; border-bottom: 2px solid #329AF0 !important; padding: 1rem 0 !important; }
        .gsc-cursor-box { padding-top: 10px; }
    </style>
    <div id="search_results">
        <h2 class="separator-line-before">Search Results from ucr.edu</h2>
        <gcse:searchresults-only></gcse:searchresults-only>
    </div>
</div>
  </div>

  </div>

            </div>
                    </div>
    </div>
</div>
<footer>
    <div class="grid-container">
                    <div class="grid-x grid-padding-x align-center">
        <div class="cell footer-google-search" id="block-ucriversidefootersearchblock-2" data-block-plugin-id="ucr_global_footer_search">
    
    
            <section class="google-search">
            <form action="https://www.ucr.edu/search.php">
                <label class="show-for-sr" for="footer-search">Search for:</label>
                <input type="text" maxlength="255" id="footer-search" name="q" value="" placeholder=" " />
            </form>
        </section>
    </div>
    </div>

                <div class="grid-x grid-padding-x footer-columns">
                        <div class="cell medium-auto">
      
  
      <section class="footer-item ucr-footer-info">
        <span class="footer-logo"><span class="show-for-sr">University of California, Riverside</span></span>
        <address>
         <p>900 University Ave.<br />
            Riverside, CA 92521</p>
        <p>Tel: (951) 827-1012</p>
        </address>
                <ul class="footer-links">
            <li><a href="https://library.ucr.edu/" target="_blank">UCR Library</a></li>
            <li><a href="https://campusstatus.ucr.edu/" target="_blank">Campus Status</a></li>
            <li><a href="https://ucr.bncollege.com/shop/ucr/home" target="_blank">Campus Store</a></li>
            <li><a href="https://jobs.ucr.edu" target="_blank">Career Opportunities</a></li>
            <li><a href="https://diversity.ucr.edu/" target="_blank">Diversity</a></li>
            <li><a href="https://campusmap.ucr.edu/" target="_blank">Maps and Directions</a></li>
            <li><a href="https://www.ucr.edu/about/visitors" target="_blank">Visit UCR</a></li>
        </ul>
            </section>


</div>

                                        <div class="cell medium-auto">
            <section class="footer-item footer-dept-info" id="block-ucriversidefooterdeptinformationblock-2" data-block-plugin-id="ucr_global_footer_dept_info">
        
        
                                                                                    
                
    
    

                        
                
    
    

    <h3>University Communications</h3>
    <address class="address_2">
       <p> <a href="http://campusmap.ucr.edu/?loc=HINHL" target="_blank">            1156 Hinderaker Hall
                                    </a></p>
    		<p> tel: (951) 827-1012<br />                        email: <a href="mailto:webmaster@ucr.edu">webmaster@ucr.edu</a>                </p>

        </address>
        <p>
        <a class="link-img link-img-location" href="http://campusmap.ucr.edu/?loc=HINHL" target="_blank"> Find Us<br /><br />
            <img src="/themes/custom/ucr_default/images/googlemap.png" alt=""></a>
    </p>
    
    </section>
    
    
        <section class="footer-item" class="UcrGlobalFooterFollowUsBlock">
   <p class="social-title">Follow US:</p> 
   <div class="social-link">
                    <a href="https://www.facebook.com/UCRiverside/" target="_blank" class="button mdi mdi-facebook" title="Facebook"><span class="show-for-sr">Facebook</span></a>
                    <a href="https://twitter.com/UCRiverside" target="_blank" class="button mdi mdi-twitter" title="Twitter"><span class="show-for-sr">Twitter</span></a>
                    <a href="https://www.youtube.com/UCRiverside" target="_blank" class="button mdi mdi-youtube-play" title="YouTube"><span class="show-for-sr">YouTube</span></a>
                    <a href="https://www.instagram.com/ucriversideofficial/" target="_blank" class="button mdi mdi-instagram" title="Instagram"><span class="show-for-sr">Instagram</span></a>
                    <a href="https://www.linkedin.com/school/university-of-california-riverside/" target="_blank" class="button mdi mdi-linkedin" title="LinkedIn"><span class="show-for-sr">LinkedIn</span></a>
            </div>
</section>
    

    </div>

                                        <div class="cell medium-auto">
        <nav role="navigation" aria-labelledby="block-ucriversiderelatedlinks-2-menu" id="block-ucriversiderelatedlinks-2" data-block-plugin-id="menu_block:ucr-related-links-menu" class="general-menu">
            
    <h2 id="block-ucriversiderelatedlinks-2-menu">UC Riverside Related Links</h2>
    

                
        <ul class="vertical menu">
                    <li><a href="http://admissions.ucr.edu" target="_self">UCR Admissions</a>
                        </li>
                    <li><a href="http://admissions.ucr.edu/academics/index.html" target="_self">Colleges and Schools</a>
                        </li>
                    <li><a href="http://graduate.ucr.edu" target="_self">Graduate Division</a>
                        </li>
                    <li><a href="https://giving.ucr.edu" target="_self">Support UCR</a>
                        </li>
                    <li><a href="http://careers.ucr.edu/" target="_self">UCR Career Center</a>
                        </li>
                    <li><a href="https://www.ucrhealth.org/home/" target="_self">UCR Health</a>
                        </li>
                    <li><a href="http://jobs.ucr.edu" target="_self">UCR Jobs</a>
                        </li>
                    <li><a href="https://news.ucr.edu/" target="_self">UCR News</a>
                        </li>
            </ul>
  


    </nav>
<div class="block--basic ucr-custom-block" id="block-ucrtobaccofree" data-block-plugin-id="block_content:b0ebddf5-5266-4474-9321-98363ab00dd0">
  
    
          <div class="field field--name-body field--type-text-with-summary field--label-hidden field__items">
                <div class="field__item">
        <p><a href="http://tobaccofree.ucr.edu"><div alt="UCR tobacco smoke free logo" data-embed-button="media_browser" data-entity-embed-display="media_image" data-entity-type="media" data-entity-uuid="fe9fb09e-9a13-4a27-890e-76f6ed6c7a2b" title="UCR tobacco smoke free logo" data-langcode="en" class="embedded-entity">  <img src="/sites/g/files/rcwecm986/files/UCR-TOBACCO-SMOKE-FREE.png" alt="UCR tobacco smoke free logo" title="UCR tobacco smoke free logo" typeof="foaf:Image" /></div>
</a></p>

            </div>
          </div>

  </div>

    </div>

                                </div>
    </div>
    <div class="site-legal-footer">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <ul>
                        <!--<li><a href="/feedback" title="Send Feedback E-mail">Feedback</a></li>-->
                        <li><a href="http://www.ucr.edu/privacy.html">Privacy Policy</a></li>
                        <li><a href="http://www.ucr.edu/terms.html">Terms and Conditions</a></li>
                        <li>© 2020 Regents of the University of California</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

  </div>

  
<script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/1431","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en"},"pluralDelimiter":"\u0003","ajaxPageState":{"libraries":"colorbox\/plain,colorbox_inline\/colorbox_inline,colorbox_load\/colorbox_load,core\/html5shiv,datalayer\/behaviors,google_analytics\/google_analytics,ng_lightbox\/ng_lightbox,statistics\/drupal.statistics,system\/base,ucr_umbrella\/global-css,ucr_umbrella\/global-js","theme":"ucr_umbrella","theme_token":null},"ajaxTrustedUrl":[],"colorbox":{"opacity":"0.85","current":"{current} of {total}","previous":"\u00ab Prev","next":"Next \u00bb","close":"Close","maxWidth":"98%","maxHeight":"98%","fixed":true,"mobiledetect":true,"mobiledevicewidth":"480px"},"dataLayer":{"defaultLang":"en","languages":{"en":{"id":"en","name":"English","direction":"ltr","weight":0}}},"google_analytics":{"trackOutbound":true,"trackMailto":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip","trackColorbox":true},"statistics":{"data":{"nid":"1431"},"url":"\/core\/modules\/statistics\/statistics.php"},"ajax":[],"user":{"uid":0,"permissionsHash":"191a86fe5ca26157187c24cfdb5c0da88fdb3a64a251cef8e2bbf99d52e1f83f"}}</script>
<script src="/sites/g/files/rcwecm986/files/js/js_cm3tRcx3pbdstnxJHwXpbE1B6RSXh3HFlvq7fv1pPhg.js"></script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"07d404edfe","applicationID":"99508828","transactionName":"MVZSYRNWCxBZB0wIWggccVYVXgoNFyBKFEUHX2xbDlMAP3sLVhVHCV9cUBNrKwxcAW4IUBFwX1sVRQoPVAFKTAsQWlVC","queueTime":0,"applicationTime":231,"atts":"HRFRF1tMGB4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>