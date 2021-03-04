<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/contact-form.latte */
final class Template694e481e48 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<div id="contact">

';
		$this->createTemplate("form.latte", $this->params, 'include')->renderToContentType('html') /* line 3 */;
		echo '</div>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
