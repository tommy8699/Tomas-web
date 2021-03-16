<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/article/software-development-on-peace.latte */
final class Templatef6c8e945e6 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['meta' => 'blockMeta', 'description' => 'blockDescription', 'keywords' => 'blockKeywords', 'title' => 'blockTitle', 'url' => 'blockUrl', 'type' => 'blockType', 'titleshort' => 'blockTitleshort', 'ogimage' => 'blockOgimage', 'content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('meta', get_defined_vars()) /* line 1 */;
		echo '

';
		$this->renderBlock('content', get_defined_vars()) /* line 13 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block meta} on line 1 */
	public function blockMeta(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '
    ';
		$this->renderBlock('description', get_defined_vars()) /* line 3 */;
		echo '
    ';
		$this->renderBlock('keywords', get_defined_vars()) /* line 4 */;
		echo '
    ';
		$this->renderBlock('title', get_defined_vars()) /* line 5 */;
		echo '
    ';
		$this->renderBlock('url', get_defined_vars()) /* line 6 */;
		echo '
    ';
		$this->renderBlock('type', get_defined_vars()) /* line 7 */;
		echo '
    ';
		$this->renderBlock('titleshort', get_defined_vars()) /* line 8 */;
		echo '
    ';
		$this->renderBlock('ogimage', get_defined_vars()) /* line 9 */;
		echo '

';
	}


	/** {block description} on line 3 */
	public function blockDescription(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo ' <meta name="description" content="';
		echo LR\Filters::escapeHtmlAttr($articles[0]->description) /* line 3 */;
		echo '"> ';
	}


	/** {block keywords} on line 4 */
	public function blockKeywords(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo ' <meta name="keywords" content="';
		echo LR\Filters::escapeHtmlAttr($articles[0]->keywords) /* line 4 */;
		echo '">  ';
	}


	/** {block title} on line 5 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo ' <title> ';
		echo LR\Filters::escapeHtmlText($articles[0]->title) /* line 5 */;
		echo ' </title> ';
	}


	/** {block url} on line 6 */
	public function blockUrl(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '  <meta property="og:url" content="';
		echo LR\Filters::escapeHtmlAttr($articles[0]->urlseo) /* line 6 */;
		echo ' "> ';
	}


	/** {block type} on line 7 */
	public function blockType(array $ʟ_args): void
	{
		echo '<meta property="og:type" content="website"> ';
	}


	/** {block titleshort} on line 8 */
	public function blockTitleshort(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo ' <meta property="og:titleshort" content="';
		echo LR\Filters::escapeHtmlAttr($articles[0]->titleshort) /* line 8 */;
		echo ' "> ';
	}


	/** {block ogimage} on line 9 */
	public function blockOgimage(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '  <meta property="og:image" content="https://www.josefjebavy.cz/';
		echo LR\Filters::escapeHtmlAttr($articles[0]->ogimage) /* line 9 */;
		echo '"> ';
	}


	/** {block content} on line 13 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '
<div class="text">
    <h1>Software development</h1>

    <p>
        Software development not only programs but also performs many other activities:
    <ol>
        <li>Collection of software / equipment requirements, analysis, concept creation and detailed assignment.</li>
        <li>Ověření, zda neexistuje podobné hotové řešení, které by bylo možné použít nebo přizpůsobit pro řešení vašich potřeb, což může znamenat různé finance a čas.</li>
        <li>Software architecture design.</li>
        <li>Software development.</li>
        <li>Software testing.</li>
        <li>Choosing the right computer or hosting. Application deployment.</li>
        <li>Remote application management.</li>
        <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Article:default", ['locale' => $articl[16]->locale , 'urlseo' => $articl[16]->urlseo])) /* line 28 */;
		echo '">Development of embeded devices</a></li>
        <li>Further development of the application.</li>
    </ol>
    </p>

    <p>
        I have experience with the development of applications for desktops, servers,<a href="https://multi.xeres.cz/unix/raspberry_pi" target="_blank">embedded HW</a>,
        tablets / mobile phones with Android and web application development.
        In today\'s information world, interconnection of systems such as e-shops and accounting is required.
    </p>

    <p>
        I am able to <strong>take over the development of an existing project</strong> and further develop it.
        When editing an existing program, it is necessary <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Article:default", ['locale' => $articl[1]->locale , 'urlseo' => $articl[1]->urlseo])) /* line 41 */;
		echo '">start cooperation after
            steps</a>.
    </p>
</div>';
	}

}
