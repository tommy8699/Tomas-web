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

    protected function createComponentCommentForm(): Form
    {
        $date= new Nette\Utils\DateTime();
        $mesic= intval($date->format('m'));

        $form = new Form; // means Nette\Application\UI\Form
        $form->setAction('#form');

        $form->addText('name', $this->translator->translate('form.jmeno'))
            ->setRequired('form.jmeno-required')
            ->setHtmlAttribute("placeholder" ,  $this->translator->translate('form.jmeno-placeholder'));

        $form->addEmail('email', 'E-mail:')
            ->setRequired('form.email-required')
            ->setHtmlAttribute("placeholder" , $this->translator->translate('form.email-placeholder'));

        $form->addText('predmet', $this->translator->translate('form.predmet'))
            ->setRequired('form.predmet-required')->setHtmlAttribute("placeholder" ,$this->translator->translate('form.predmet-placeholder'));

        $form->addTextArea('zprava',$this->translator->translate('form.zprava'))
            ->setRequired('form.zprava-required')->setHtmlAttribute("placeholder" ,$this->translator->translate('form.zprava-placeholder'));

        $form->addText('mesic', $this->translator->translate('form.mesic'))
            ->setDefaultValue(0)
            ->addRule(Form::INTEGER, $this->translator->translate('form.mesic-rule1'))
            ->addRule(Form::EQUAL, $this->translator->translate('form.mesic-rule2'), [$mesic])
            ->setHtmlType('number')
            ->setRequired();
        $form->addSubmit('send',$this->translator->translate('form.submit-btn'));

        $form->onSuccess[] = [$this, 'commentFormSucceeded'];


        return $form;
    }
    public function commentFormSucceeded(Form $form, \stdClass $values): void
    {


        $this->flashMessage($this->translator->translate("form.flashMessage"), 'success');
        $mail = new Nette\Mail\Message;

        $sprava = 'Nová zpráva od: '.$values->email.'<br> jméno: '.$values->name.'<br> zpráva: '.$values->zprava;

        $mail->setFrom("web@snapbackuper.com")
            ->setReturnPath('info@snapbackuper.com')
            ->addTo('info@snapbackuper.com')
            ->addReplyTo($values->email)
            ->setSubject($values->predmet)
            ->setHtmlBody($sprava);

        $mailer = new Nette\Mail\SendmailMailer;
        $mailer->send($mail);

        // presmerovani je potreba
        $this->redirect('this');
    }
}

