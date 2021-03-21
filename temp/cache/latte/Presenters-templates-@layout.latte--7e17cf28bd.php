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
      <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */;
		echo '/css/thickbox.css" type="text/css" media="screen">
      <meta name="description" content="';
		if ($this->hasBlock("description")) /* line 12 */ {
			$this->renderBlock($ʟ_nm = 'description', [], 'htmlAttr') /* line 12 */;
		}
		else /* line 12 */ {
			echo LR\Filters::escapeHtmlAttr($articles[0]->description) /* line 12 */;
		}
		echo '">
      <meta name="keywords" content="';
		if ($this->hasBlock("keywords")) /* line 13 */ {
			$this->renderBlock($ʟ_nm = 'keywords', [], 'htmlAttr') /* line 13 */;
		}
		else /* line 13 */ {
			echo LR\Filters::escapeHtmlAttr($articles[0]->keywords) /* line 13 */;
		}
		echo '">
      <title>';
		if ($this->hasBlock("title")) /* line 14 */ {
			$this->renderBlock($ʟ_nm = 'title', [], 'html') /* line 14 */;
		}
		else /* line 14 */ {
			echo LR\Filters::escapeHtmlText($articles[0]->title) /* line 14 */;
		}
		echo '  </title>
      <meta property="og:url" content="';
		if ($this->hasBlock("urlseo")) /* line 15 */ {
			$this->renderBlock($ʟ_nm = 'urlseo', [], 'htmlAttr') /* line 15 */;
		}
		else /* line 15 */ {
			echo LR\Filters::escapeHtmlAttr($articles[0]->urlseo) /* line 15 */;
		}
		echo ' ">
      <meta property="og:type" content="website">
      <meta property="og:titleshort" content="';
		if ($this->hasBlock("titleshort")) /* line 17 */ {
			$this->renderBlock($ʟ_nm = 'titleshort', [], 'htmlAttr') /* line 17 */;
		}
		else /* line 17 */ {
			echo LR\Filters::escapeHtmlAttr($articles[0]->titleshort) /* line 17 */;
		}
		echo ' ">
      <meta property="og:image" content="https://www.josefjebavy.cz/';
		if ($this->hasBlock("ogimage")) /* line 18 */ {
			$this->renderBlock($ʟ_nm = 'ogimage', [], 'htmlAttr') /* line 18 */;
		}
		else /* line 18 */ {
			echo LR\Filters::escapeHtmlAttr($articles[0]->ogimage) /* line 18 */;
		}
		echo '">


     <meta property="og:locality" content="Jilemnice">
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
      <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default", ['locale' => $articles[0]->locale])) /* line 46 */;
		echo '">
     <div id="header">
          <div id="header-name">
                Josef Jebavý<br>
                <span>IT specialista</span>
          </div>
         <div id="lang">
         <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default", ['locale'=>'cs'])) /* line 53 */;
		echo '"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 53 */;
		echo '/img/flag-cz.png"></a>
         <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default", ['locale'=>'en'])) /* line 54 */;
		echo '"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 54 */;
		echo '/img/flag-eng.png"></a>
     </div>

';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 57 */ {
			echo '         <div';
			echo ($ʟ_tmp = array_filter(['alert'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 57 */;
			echo '>
             <span class="far fa-envelope"></span>
               <span class="msg"> ';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 59 */;
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
		$this->renderBlock($ʟ_nm = 'content', [], 'html') /* line 67 */;
		echo "\n";
		$this->createTemplate("Homepage/kontakt.latte", $this->params, 'include')->renderToContentType('html') /* line 69 */;
		$this->createTemplate("contact-form.latte", $this->params, 'include')->renderToContentType('html') /* line 70 */;
		echo '
	<div id="footer">
          &copy; 2013-';
		echo LR\Filters::escapeHtmlText(($this->filters->date)("now", 'Y')) /* line 73 */;
		echo ', Bc. Josef Jebavý<br>
          Web is <a href="https://linuxserveradmin.eu/">powered by  linux server admin</a>
      </div>

';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('scripts', get_defined_vars()) /* line 77 */;
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
			foreach (array_intersect_key(['flash' => '57'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block scripts} on line 77 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '	    <script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>

	    <script type="text/javascript" src="//default.xeres.cz/js/awstats_misc_tracker.js"></script>
          <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 81 */;
		echo '/js/jquery.js"></script>

          <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 83 */;
		echo '/js/thickbox.js"></script>
          <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 84 */;
		echo '/js/functions.js"></script>
        <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 85 */;
		echo '/js/form.js"></script>

';
	}

}
