<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Nette\Database\Context;
use App\Forms;

final class ArticlePresenter extends Nette\Application\UI\Presenter
{
    /** @var Nette\Localization\ITranslator @inject */
    public $translator;
    public $langs = ['cs', 'en'];




    /** @var Context @inject */
    public $database;


    public function actionDefault(string $locale,  $urlseo): void
    {
        $articles = $this->database->table('articles')->where(['locale'=> $locale])->where(['urlseo'=> $urlseo])->fetchAll();
        $this->template->articles = $articles;

        $articl = $this->database->table('articles')->where(['locale'=> $locale])->fetchAll();
        $this->template->articl = $articl;
        if (!$urlseo) {
            $this->error('Stránka nebyla nalezena');
        }
        bdump($articl);
        //$this->template->article = $this->article->findOneBy(['locale' => $locale, 'urlseo' => $urlseo]);
// míesto DB 🔼 proste zostavím cestu k souboru a nastavím ako view 🔽
        $template = $this->getTemplate();
//        if (Strings::contains('..', $locale) || Strings::contains('..', $urlseo)) {
  //          $this->error(); // ošetřenie nežiadoucích vstupov -> e404
    //    }

        $filePath = __DIR__ . '/templates/'.'article/' . $urlseo . '.latte';


        $template->setFile($filePath);
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

        //bdump($articles);
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

