<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
        $router->addRoute('', "Homepage:index");
        $router->addRoute('[<locale= cs|en>/]<presenter>/<action>[/<id>]', "Homepage:default");
        $router->addRoute('sitemap.xml', 'Article:sitemap');
        $router->addRoute('/<locale= cs|en>/<urlseo>', 'Article:default');
        return $router;
	}
}
