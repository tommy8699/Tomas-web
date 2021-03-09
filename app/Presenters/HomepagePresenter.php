<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Contributte;
use Nette\Application\UI\Form;
use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;

final class HomepagePresenter extends Nette\Application\UI\Presenter
{

    /** @var Nette\Localization\ITranslator @inject */
    public $translator;
    public $langs = ['cs', 'en'];



    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

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
        bdump($articles);
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
