<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/Homepage/kontakt.latte */
final class Templatefef58c83f5 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<div class="text about">

    <a href="/img/bc_josef_jebavy-7.jpg" title="programátor Josef Jebavý" class="mediaright thickbox">
        <img width="140" height="145" src="/img/bc_josef_jebavy-7.jpg" alt="programátor Josef Jebavý"></a>

    <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "kontakt.head"));
		echo '</h2>
    <a name="kontakt"></a>
    <div itemscope="" itemtype="https://schema.org/PostalAddress">
        Bc. Josef Jebavý<br>
        <span itemprop="postalCode">51401</span> <span itemprop="addressLocality">Jilemnice</span><br>
    </div>
    IČO: <a href="https://wwwinfo.mfcr.cz/cgi-bin/ares/darv_res.cgi?odp=html&ICO=02532271#tab_odkazy">02532271</a><br>
        ID ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "kontakt.text"));
		echo ' <a href="https://www.mojedatovaschranka.cz/sds/detail.do?dbid=887kyhs">887kyhs</a><br>
    email: <b>
        <a href="mailto:&#101;&#109;&#97;&#105;&#108;&#64;&#106;&#111;&#115;&#101;&#102;&#106;&#101;&#98;&#97;&#118;&#121;&#46;&#99;&#122;?subject=ma zajem o Vase sluzby">&#101;&#109;&#97;&#105;&#108;&#64;&#106;&#111;&#115;&#101;&#102;&#106;&#101;&#98;&#97;&#118;&#121;&#46;&#99;&#122;</a>
    </b><br>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "kontakt.text1"));
		echo '


</div>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
