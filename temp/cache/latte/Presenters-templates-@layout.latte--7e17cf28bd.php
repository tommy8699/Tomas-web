<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/@layout.latte */
final class Template7e17cf28bd extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"   "https://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="/css/body.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

      <meta name="author" content="Bc. Josef Jebavý">
      <meta name="generator" content="Bluefish 2.2.10">
  <meta name="google-site-verification" content="MbeXvsACTdKE7lC10_buc1k0RvfxpVWgl2EoDn--dPo">
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
<script type="text/javascript" src="/js/functions.js"></script>
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen">
      <!-- Tu si vkladam meta tagy -->
';
		$this->renderBlock($ʟ_nm = 'meta', [], 'html') /* line 17 */;
		echo '     <meta property="og:locality" content="Jilemnice">
     <meta property="og:postal-code" content="5140 01">
     <meta property="og:country-name" content="Česká republika">
<style>

    .input-container span{
        display: none;
    }
    .focus span{
        display: block;
        color: #B3EFFF;
        font-size: 1rem;
    }
    .required label{
        color: white;
    }
    placeholder {

        color: #fff;
    }

</style>
  </head>
  <body>
  <div id="main">
    <a href="#">

     <div id="header">
          <div id="header-name">
                Josef Jebavý<br>
                <span>IT specialista</span>
          </div>
         <div id="lang">
         <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default", ['locale'=>'cs'])) /* line 51 */;
		echo '"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 51 */;
		echo '/img/flag-cz.png"></a>
         <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default", ['locale'=>'en'])) /* line 52 */;
		echo '"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 52 */;
		echo '/img/flag-eng.png"></a>
     </div>

';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 55 */ {
			echo '         <div';
			echo ($ʟ_tmp = array_filter(['alert'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 55 */;
			echo '>
             <span class="far fa-envelope"></span>
               <span class="msg"> ';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 57 */;
			echo ' </span>
             <span class="close-btn">
                 <span class="fas fa-times"></span>
             </span>
         </div>
';
			$iterations++;
		}
		echo '     </div>
     </a>

';
		$this->renderBlock($ʟ_nm = 'content', [], 'html') /* line 65 */;
		echo "\n";
		$this->createTemplate("Homepage/kontakt.latte", $this->params, 'include')->renderToContentType('html') /* line 67 */;
		$this->createTemplate("contact-form.latte", $this->params, 'include')->renderToContentType('html') /* line 68 */;
		echo '
	<div id="footer">
          &copy; 2013-';
		echo LR\Filters::escapeHtmlText(($this->filters->date)("now", 'Y')) /* line 71 */;
		echo ', Bc. Josef Jebavý<br>
          Web is <a href="https://linuxserveradmin.eu/">powered by  linux server admin</a>
      </div>

';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('scripts', get_defined_vars()) /* line 75 */;
		echo '
    <noscript><img src="//default.xeres.cz/js/awstats_misc_tracker.js?nojs=y" height=0 width=0 border=0 style="display: none"></noscript>


<!-- Piwik -->

      <script type="text/javascript">


          $(".input").each(
              function(){
                  $(this).data(\'holder\',$(this).attr(\'placeholder\'));
                  $(this).focusin(function(){
                      $(this).attr(\'placeholder\',\'\');
                  });
                  $(this).focusout(function(){
                      $(this).attr(\'placeholder\',$(this).data(\'holder\'));
                  });

              });

              var _paq = _paq || [];
  // tracker methods like "setCustomDimension" should be called before "trackPageView"
  _paq.push(["setDomains", ["*.nabidka-sluzeb.xeres.cz","*.www.xeres.cz"]]);
  _paq.push([\'trackPageView\']);
  _paq.push([\'enableLinkTracking\']);
  (function() {
    var u="https://piwik.xeres.cz/";
    _paq.push([\'setTrackerUrl\', u+\'piwik.php\']);
    _paq.push([\'setSiteId\', \'10\']);
    var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];
    g.type=\'text/javascript\'; g.async=true; g.defer=true; g.src=u+\'piwik.js\'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="https://piwik.xeres.cz/piwik.php?idsite=10&rec=1" style="border:0;" alt=""></p></noscript>
<!-- End Piwik Code -->

</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '55'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block scripts} on line 75 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '	    <script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>

	    <script type="text/javascript" src="//default.xeres.cz/js/awstats_misc_tracker.js"></script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                  crossorigin="anonymous"></script>
        <script src="/js/form.js"></script>
';
	}

}
