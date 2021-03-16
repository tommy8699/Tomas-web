<?php

declare(strict_types=1);

namespace App\Forms;

use App;
use Nette;
use Nette\Application\UI\Form;
use Contributte;


final class formSucceeded
{
    use Nette\SmartObject;


    /** @var Nette\Localization\ITranslator @inject */
    public Nette\Localization\ITranslator $translator;

    public function __construct(Nette\Localization\ITranslator $translator)
    {
        $this->translator = $translator;
    }


    public function create(Form $form, \stdClass $values): void
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
