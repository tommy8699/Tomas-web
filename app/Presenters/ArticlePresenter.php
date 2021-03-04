<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Nette\Database\Context;

final class ArticlePresenter extends Nette\Application\UI\Presenter
{

    /** @var Context @inject */
    public $article;

    public function actionDefault(string $locale, string $urlseo): void
    {
        $this->template = $this->article->findOneBy(['locale' => $locale, 'urlseo' => $urlseo]);

//   $this->template->article = $this->db->findOneBy(['locale' => $locale, 'urlseo' => $urlseo]);
// místo DB 🔼 prostě sestavím cestu k souboru a nastavím jako view 🔽
        $template = $this->getTemplate();
        if (Strings::contains('..', $locale) || Strings::contains('..', $urlseo)) {
            $this->error(); // ošetření nežádoucích vstupů -> e404
        }

        $filePath = __DIR__ . '/cesta-k-sablonam/' . $locale . '/'  . $urlseo . '.latte';


        $template->setFile($filePath);
    }
}

