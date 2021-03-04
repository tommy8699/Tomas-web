<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/Skoleni/skoleni.latte */
final class Templatea7b2302e8d extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '
<div class="text">


<h1>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.head"));
		echo '</h1>

<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text"));
		echo '
</p>

<p>
<strong> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text1"));
		echo ' </strong>
</p>
<center>
	 <a href="/images/skoleni.jpg"   title="josef jebavý školení" class="thickbox">
            <img src="/images/skoleni-small.jpg" alt="školení josef jebavý" border="1"></a>
 </center>
</p>


    <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.head2"));
		echo '</h2>

    <p>
    <ul>

        <li>
            ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text2"));
		echo ' <a href="https://covid-19.xeres.cz/" target="_blank">koronavirus (covid-19)</a>
            ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text3"));
		echo '
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniRemoteWork")) /* line 30 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text4"));
		echo '</a>,
            ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text5"));
		echo ' <strong> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text6"));
		echo ' </strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text7"));
		echo '
        </li>

        <li>
           ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text8"));
		echo ' <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniVyvojWebovychAplikaci")) /* line 35 */;
		echo '"> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text9"));
		echo ' </a>
             ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text10"));
		echo ' <strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text11"));
		echo '</strong> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text12"));
		echo '<strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text13"));
		echo '</strong> a <strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text14"));
		echo ' </strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text15"));
		echo '
        </li>


        <li>
            ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text16"));
		echo '
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniDocker")) /* line 42 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text17"));
		echo '  </a> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text18"));
		echo ' <strong> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text18.0"));
		echo '</strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text18.1"));
		echo '
             <a href="https://blog.josefjebavy.cz/unix/docker">Docker</a>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text19"));
		echo '  <strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text20"));
		echo '  </strong> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text21"));
		echo '
        </li>

        <li>
            ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text22"));
		echo ' <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniGit")) /* line 47 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text23"));
		echo '</a>.
            ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text24"));
		echo '  <b> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text25"));
		echo '</b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text26"));
		echo '  <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text26.1"));
		echo '</b>.
        </li>

        <li>

            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniIspConfig")) /* line 53 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text27"));
		echo '</a>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text27.1"));
		echo '<strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text27.2"));
		echo ' </strong>.
        </li>


        <li>
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniLinux")) /* line 58 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text28"));
		echo '</a>
        </li>


        <li>
           ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text29"));
		echo '  <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniProxmox")) /* line 63 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text29.1"));
		echo '</a>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text29.2"));
		echo '
            <strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text29.3"));
		echo '</strong>.
        </li>
        <li>
           ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text30"));
		echo '
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniFilesystemBtrfs")) /* line 68 */;
		echo '"> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text30.1"));
		echo '</a> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text30.2"));
		echo ' <strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text30.3"));
		echo '</strong>.
        </li>

        <li>
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniParalelniProgramovani")) /* line 72 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text31"));
		echo '</a>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text31.1"));
		echo '  <strong>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text31.2"));
		echo '</strong>.
        </li>

        <li>
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":skoleniKarieraHrNabor")) /* line 76 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text32"));
		echo ' </a>
        </li>

    </ul>

    </p>


    <p>
    ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "skoleni.text33"));
		echo '

</p>


</div>
';
	}

}
