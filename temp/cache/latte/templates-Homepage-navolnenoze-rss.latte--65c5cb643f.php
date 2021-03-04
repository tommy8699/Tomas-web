<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/Homepage/navolnenoze-rss.latte */
final class Template65c5cb643f extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<div id="doporuceni1" class="text" style="display: none">
    <div class="about">
        <h3>
            <a href="https://navolnenoze.cz/prezentace/josef-jebavy/doporuceni/">Pavel Halama</a>
        </h3>
        <p> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "na-volne-noze.text1"));
		echo '</p>
    </div>
    <div class="about">
        <h3>
            <a href="https://navolnenoze.cz/prezentace/josef-jebavy/doporuceni/">Petr S.</a>
        </h3>
        <p>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "na-volne-noze.text2"));
		echo '</p>
    </div>
    <div class="about">
        <h3>
            <a href="http://www.lmnet.cz">LMnet, s.r.o.</a>
        </h3>
        <p>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "na-volne-noze.text3"));
		echo '</p>
    </div>
    <div class="about">
        <h3>
            <a href="https://sievert-consulting.cz/">Jan Zítko</a>
        </h3>
        <p>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "na-volne-noze.text4"));
		echo '</p>
    </div>
</div>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
