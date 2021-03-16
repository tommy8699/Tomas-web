<?php

declare(strict_types=1);

namespace App\Forms;

use App;
use Nette;
use Nette\Application\UI\Form;
use Contributte;


final class commentFormFactory
{
    use Nette\SmartObject;


    /** @var Nette\Localization\ITranslator @inject */
    public Nette\Localization\ITranslator $translator;


    public function __construct(Nette\Localization\ITranslator $translator)
    {
        $this->translator = $translator;
    }

    public function create(): Form
    {


        $date = new Nette\Utils\DateTime();
        $mesic = intval($date->format('m'));

        $form = new Form; // means Nette\Application\UI\Form
        $form->setAction('#form');

        $form->addText('name', $this->translator->translate('form.jmeno'))
            ->setRequired($this->translator->translate('form.jmeno-required'))
            ->setHtmlAttribute("placeholder", $this->translator->translate('form.jmeno-placeholder'));

        $form->addEmail('email', 'E-mail:')
            ->setRequired($this->translator->translate('form.email-required'))
            ->setHtmlAttribute("placeholder", $this->translator->translate('form.email-placeholder'));

        $form->addText('predmet', $this->translator->translate('form.predmet'))
            ->setRequired($this->translator->translate('form.predmet-required'))->setHtmlAttribute("placeholder", $this->translator->translate('form.predmet-placeholder'));

        $form->addTextArea('zprava', $this->translator->translate('form.zprava'))
            ->setRequired($this->translator->translate('form.zprava-required'))->setHtmlAttribute("placeholder", $this->translator->translate('form.zprava-placeholder'));

        $form->addText('mesic', $this->translator->translate('form.mesic'))
            ->setDefaultValue(0)
            ->addRule(Form::INTEGER, $this->translator->translate('form.mesic-rule1'))
            ->addRule(Form::EQUAL, $this->translator->translate('form.mesic-rule2'), [$mesic])
            ->setHtmlType('number')
            ->setRequired($this->translator->translate('form.mesic-required'));
        $form->addSubmit('send', $this->translator->translate('form.submit-btn'));

        $form->onSuccess[] = [$this, 'commentFormSucceeded'];


        return $form;

    }
    public function formSucceeded(Form $form, \stdClass $values): void
    {

        $this->flashMessage($this->translator->translate("form.flashMessage"), 'success');
        $mail = new Nette\Mail\Message;

        $sprava = 'Nová zpráva od: ' . $values->email . '<br> jméno: ' . $values->name . '<br> zpráva: ' . $values->zprava;

        $mail->setFrom("web@josefjebavy.cz")
            ->setReturnPath('email@josefjebavy.cz')
            ->addTo('email@josefjebavy.cz')
            ->addReplyTo($values->email)
            ->setSubject($values->predmet)
            ->setHtmlBody($sprava);

        $mailer = new Nette\Mail\SendmailMailer;
        $mailer->send($mail);

        // presmerovani je potreba
        $this->redirect('this');
    }


}