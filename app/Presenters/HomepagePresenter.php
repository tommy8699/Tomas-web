<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Contributte;
use Nette\Application\UI\Form;
use Nette\Mail\SendmailMailer;
use App\Forms;
use Nette\Database\Context;

final class HomepagePresenter extends Nette\Application\UI\Presenter
{

    /** @var Nette\Localization\ITranslator @inject */
    public $translator;
    public $langs = ['cs', 'en'];




    /** @var Context @inject */
    public $database;
    


    public function renderIndex(): void
    {

        $httpRequest = $this->getHttpRequest();
        $locale = $httpRequest->detectLanguage($this->langs);
        // bdump($locale);
        if (is_null($locale)) {
            $locale = "cs";
        }
        $this->redirect('Homepage:default', $locale);
    }

    public function renderDefault(string $locale): void
    {

        //TODO - nacitat jazyky z konfigurace
        $this->template->lang = $locale;
        $articles = $this->database->table('articles')->where(['locale'=> $locale])->fetchAll();
        $this->template->articles = $articles;
      //  bdump($articles);
    }


    public function renderSitemap(): void
    {
        $articles = $this->database->table('articles')->fetchAll();

        //pouziji jako hlavni sablonu prazdnou sablonu
        $this->setLayout('empty');
        // zajisti genrovani ablolutnich URL
        $this->absoluteUrls = true;
        $this->template->articles = $articles;
        $this->template->langs=$this->langs;
        $this->getHttpResponse()->setContentType('application/xml');

    }
    /** @var Forms\commentFormFactory */
    private Forms\commentFormFactory $commentFormFactory;


    public function __construct(Forms\commentFormFactory $commentFormFactory )
    {
        $this->commentFormFactory = $commentFormFactory;
    }
    protected function createComponentCommentForm(): Form
    {
        return $this->commentFormFactory->create();
    }

    public function commentFormSucceeded(Form $form, \stdClass $values): void
    {
        $this->commentFormFactory->formSucceeded($form, $values);
    }


}
