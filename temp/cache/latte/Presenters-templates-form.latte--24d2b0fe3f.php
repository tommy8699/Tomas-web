<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/form.latte */
final class Template24d2b0fe3f extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $this->global->formsStack[] = $this->global->uiControl["commentForm"], []) /* line 1 */;
		echo '

';
		if ($form->hasErrors()) /* line 3 */ {
			echo '<ul class="errors">
';
			$iterations = 0;
			foreach ($form->errors as $error) /* line 4 */ {
				echo '    <li>';
				echo LR\Filters::escapeHtmlText($error) /* line 4 */;
				echo '</li>
';
				$iterations++;
			}
			echo '</ul>
';
		}
		echo '
<div class="form">
    <span class="circle one"> </span>
    <span class="circle two"> </span>

    <h2 class="title">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "form.head"));
		echo '</h2>

    <div class="input-container">
       ';
		echo end($this->global->formsStack)["name"]->getControl()->addAttributes(['class'=>"input"]) /* line 14 */;
		echo '
        <span>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "form.jmeno"));
		echo '</span>
    </div>

    <div class="input-container">
      ';
		echo end($this->global->formsStack)["email"]->getControl()->addAttributes(['class'=>"input"]) /* line 19 */;
		echo '
        <span>Email</span>
    </div>

    <div class="input-container">
        ';
		echo end($this->global->formsStack)["predmet"]->getControl()->addAttributes(['class'=>"input"]) /* line 24 */;
		echo '
        <span>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "form.predmet"));
		echo '</span>
    </div>

    <div class="input-container textarea">
        ';
		echo end($this->global->formsStack)["zprava"]->getControl()->addAttributes(['class'=>"input"]) /* line 29 */;
		echo '
        <span>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "form.zprava"));
		echo '</span>
    </div>

    <div>
        <p>';
		if ($ʟ_label = end($this->global->formsStack)["mesic"]->getLabel()) echo $ʟ_label->addAttributes(['class'=>"otazka"]);
		echo '</p>

    </div>

    <div class="input-container">
        <p>';
		echo end($this->global->formsStack)["mesic"]->getControl()->addAttributes(['class'=>"input mesic"]) /* line 39 */;
		echo '</p>
    </div>

    <div class="input-container">
        <p>';
		echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class'=>"btn"]) /* line 43 */;
		echo '</p>
    </div>

</div>
';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['error' => '4'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
