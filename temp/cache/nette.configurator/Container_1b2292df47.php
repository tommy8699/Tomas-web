<?php
// source: /var/www/html/app/config/common.neon
// source: /var/www/html/app/config/devel.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_1b2292df47 extends Nette\DI\Container
{
	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.context',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.context']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Contributte\Translation\LocaleResolver' => [['translation.localeResolver']],
		'Contributte\Translation\LocalesResolvers\ResolverInterface' => [
			['translation.localeResolverRouter', 'translation.localeResolverParameter', 'translation.localeResolverHeader'],
		],
		'Contributte\Translation\LocalesResolvers\Router' => [['translation.localeResolverRouter']],
		'Contributte\Translation\LocalesResolvers\Parameter' => [['translation.localeResolverParameter']],
		'Contributte\Translation\LocalesResolvers\Header' => [['translation.localeResolverHeader']],
		'Contributte\Translation\FallbackResolver' => [['translation.fallbackResolver']],
		'Symfony\Component\Config\ConfigCacheFactoryInterface' => [['translation.configCacheFactory']],
		'Symfony\Component\Config\ConfigCacheFactory' => [['translation.configCacheFactory']],
		'Symfony\Component\Translation\Translator' => [['translation.translator']],
		'Symfony\Contracts\Translation\TranslatorInterface' => [['translation.translator']],
		'Symfony\Component\Translation\TranslatorBagInterface' => [1 => ['translation.translator']],
		'Symfony\Contracts\Translation\LocaleAwareInterface' => [1 => ['translation.translator']],
		'Nette\Localization\Translator' => [['translation.translator']],
		'Contributte\Translation\Translator' => [['translation.translator']],
		'Symfony\Component\Translation\Loader\ArrayLoader' => [['translation.loaderNeon']],
		'Symfony\Component\Translation\Loader\LoaderInterface' => [['translation.loaderNeon']],
		'Contributte\Translation\Loaders\Neon' => [['translation.loaderNeon']],
		'Tracy\IBarPanel' => [['translation.tracyPanel']],
		'Contributte\Translation\Tracy\Panel' => [['translation.tracyPanel']],
		'Nette\Routing\RouteList' => [['router']],
		'Nette\Routing\Router' => [['router']],
		'ArrayAccess' => [2 => ['router', 'application.1', 'application.2', 'application.4']],
		'Countable' => [2 => ['router']],
		'IteratorAggregate' => [2 => ['router']],
		'Traversable' => [2 => ['router']],
		'Nette\Application\Routers\RouteList' => [['router']],
		'Nette\Application\UI\Presenter' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\Control' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\Component' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\ComponentModel\Container' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\ComponentModel\Component' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\IPresenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\Application\UI\Renderable' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\StatePersistent' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\SignalReceiver' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\ComponentModel\IContainer' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\ComponentModel\IComponent' => [2 => ['application.1', 'application.2', 'application.4']],
		'App\Presenters\ArticlePresenter' => [2 => ['application.1']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.2']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.3']],
		'App\Presenters\HomepagePresenter' => [2 => ['application.4']],
		'NetteModule\ErrorPresenter' => [2 => ['application.5']],
		'NetteModule\MicroPresenter' => [2 => ['application.6']],
		'Nette\Forms\FormFactory' => [['forms.factory']],
		'Contributte\Translation\Latte\Filters' => [['translation.latte.filters']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [];
	}


	public function createServiceApplication__1(): App\Presenters\ArticlePresenter
	{
		$service = new App\Presenters\ArticlePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->translator = $this->getService('translation.translator');
		$service->database = $this->getService('database.default.context');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__2(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__4(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->translator = $this->getService('translation.translator');
		$service->database = $this->getService('database.default.context');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__6(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('router'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = null;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'/var/www/html/app/../temp/cache/nette.application/touch'
		));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('/var/www/html/app/../temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/html/app/../temp/cache', $this->getService('cache.journal'));
	}


	public function createServiceContainer(): Container_1b2292df47
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=database;dbname=nabidkasluzeb', 'root', 'pass', []);
		$this->getService('tracy.blueScreen')->addPanel(['Nette\Bridges\DatabaseTracy\ConnectionPanel', 'renderException']);
		Nette\Database\Helpers::createDebugPanel(
			$service,
			true,
			'default',
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen')
		);
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceForms__factory(): Nette\Forms\FormFactory
	{
		return new Nette\Forms\FormFactory($this->getService('http.request'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_1b2292df47 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/html/app/../temp/cache/latte');
				$service->setAutoRefresh();
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				$service->onCompile[] = function (Latte\Engine $engine): void { Contributte\Translation\Latte\Macros::install($engine->getCompiler()); };
				$service->addProvider('translator', $this->container->getService('translation.translator'));
				$service->addFilter('translate', [$this->container->getService('translation.latte.filters'), 'translate']);
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Application\UI\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'));
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceRouter(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			null,
			null,
			$this->getService('security.userStorage')
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function createServiceTranslation__configCacheFactory(): Symfony\Component\Config\ConfigCacheFactory
	{
		return new Symfony\Component\Config\ConfigCacheFactory(true);
	}


	public function createServiceTranslation__fallbackResolver(): Contributte\Translation\FallbackResolver
	{
		return new Contributte\Translation\FallbackResolver;
	}


	public function createServiceTranslation__latte__filters(): Contributte\Translation\Latte\Filters
	{
		return new Contributte\Translation\Latte\Filters($this->getService('translation.translator'));
	}


	public function createServiceTranslation__loaderNeon(): Contributte\Translation\Loaders\Neon
	{
		return new Contributte\Translation\Loaders\Neon;
	}


	public function createServiceTranslation__localeResolver(): Contributte\Translation\LocaleResolver
	{
		$service = new Contributte\Translation\LocaleResolver($this);
		$service->addResolver('Contributte\Translation\LocalesResolvers\Router');
		$service->addResolver('Contributte\Translation\LocalesResolvers\Parameter');
		$service->addResolver('Contributte\Translation\LocalesResolvers\Header');
		return $service;
	}


	public function createServiceTranslation__localeResolverHeader(): Contributte\Translation\LocalesResolvers\Header
	{
		return new Contributte\Translation\LocalesResolvers\Header($this->getService('http.request'));
	}


	public function createServiceTranslation__localeResolverParameter(): Contributte\Translation\LocalesResolvers\Parameter
	{
		return new Contributte\Translation\LocalesResolvers\Parameter($this->getService('http.request'));
	}


	public function createServiceTranslation__localeResolverRouter(): Contributte\Translation\LocalesResolvers\Router
	{
		return new Contributte\Translation\LocalesResolvers\Router($this->getService('http.request'), $this->getService('router'));
	}


	public function createServiceTranslation__tracyPanel(): Contributte\Translation\Tracy\Panel
	{
		$service = new Contributte\Translation\Tracy\Panel($this->getService('translation.translator'));
		$service->addLocaleResolver($this->getService('translation.localeResolverRouter'));
		$service->addLocaleResolver($this->getService('translation.localeResolverParameter'));
		$service->addLocaleResolver($this->getService('translation.localeResolverHeader'));
		$service->addResource('neon', '/var/www/html/app/lang/form/form.cs_CZ.neon', 'cs_CZ', 'form');
		$service->addResource('neon', '/var/www/html/app/lang/form/form.en_US.neon', 'en_US', 'form');
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-doporuceni/home-doporuceni.cs_CZ.neon',
			'cs_CZ',
			'home-doporuceni'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-doporuceni/home-doporuceni.en_US.neon',
			'en_US',
			'home-doporuceni'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-konference/home-konference.cs_CZ.neon',
			'cs_CZ',
			'home-konference'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-konference/home-konference.en_US.neon',
			'en_US',
			'home-konference'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-technologie/home-technologie.cs_CZ.neon',
			'cs_CZ',
			'home-technologie'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-technologie/home-technologie.en_US.neon',
			'en_US',
			'home-technologie'
		);
		$service->addResource('neon', '/var/www/html/app/lang/home-text/home-text.cs_CZ.neon', 'cs_CZ', 'home-text');
		$service->addResource('neon', '/var/www/html/app/lang/home-text/home-text.en_US.neon', 'en_US', 'home-text');
		$service->addResource('neon', '/var/www/html/app/lang/kontakt/kontakt.cs_CZ.neon', 'cs_CZ', 'kontakt');
		$service->addResource('neon', '/var/www/html/app/lang/kontakt/kontakt.en_US.neon', 'en_US', 'kontakt');
		$service->addResource('neon', '/var/www/html/app/lang/na-volne-noze/na-volne-noze.cs_CZ.neon', 'cs_CZ', 'na-volne-noze');
		$service->addResource('neon', '/var/www/html/app/lang/na-volne-noze/na-volne-noze.en_US.neon', 'en_US', 'na-volne-noze');
		$service->addResource('neon', '/var/www/html/app/lang/poradenstvi/poradentsvi.cs_CZ.neon', 'cs_CZ', 'poradentsvi');
		$service->addResource('neon', '/var/www/html/app/lang/poradenstvi/poradentsvi.en_US.neon', 'en_US', 'poradentsvi');
		$service->addResource('neon', '/var/www/html/app/lang/referencie/referencie.cs_CZ.neon', 'cs_CZ', 'referencie');
		$service->addResource('neon', '/var/www/html/app/lang/referencie/referencie.en_US.neon', 'en_US', 'referencie');
		$service->addResource('neon', '/var/www/html/app/lang/skoleni/skoleni.cs_CZ.neon', 'cs_CZ', 'skoleni');
		$service->addResource('neon', '/var/www/html/app/lang/skoleni/skoleni.en_US.neon', 'en_US', 'skoleni');
		$service->addResource('neon', '/var/www/html/app/lang/skoleniBtrfs/skoleniBtrfs.cs_CZ.neon', 'cs_CZ', 'skoleniBtrfs');
		$service->addResource('neon', '/var/www/html/app/lang/skoleniBtrfs/skoleniBtrfs.en_US.neon', 'en_US', 'skoleniBtrfs');
		$service->addResource('neon', '/var/www/html/app/lang/skoleniDocker/skoleniDocker.cs_CZ.neon', 'cs_CZ', 'skoleniDocker');
		$service->addResource('neon', '/var/www/html/app/lang/skoleniDocker/skoleniDocker.en_US.neon', 'en_US', 'skoleniDocker');
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/software-reseni/software-reseni.cs_CZ.neon',
			'cs_CZ',
			'software-reseni'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/software-reseni/software-reseni.en_US.neon',
			'en_US',
			'software-reseni'
		);
		$service->addResource('neon', '/var/www/html/app/lang/text-about/text-about.cs_CZ.neon', 'cs_CZ', 'text-about');
		$service->addResource('neon', '/var/www/html/app/lang/text-about/text-about.en_US.neon', 'en_US', 'text-about');
		$service->addResource('neon', '/var/www/html/app/lang/vyvoj-embeded/vyvoj-embeded.cs_CZ.neon', 'cs_CZ', 'vyvoj-embeded');
		$service->addResource('neon', '/var/www/html/app/lang/vyvoj-embeded/vyvoj-embeded.en_US.neon', 'en_US', 'vyvoj-embeded');
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/vyvoj-software/vyvoj-software.cs_CZ.neon',
			'cs_CZ',
			'vyvoj-software'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/vyvoj-software/vyvoj-software.en_US.neon',
			'en_US',
			'vyvoj-software'
		);
		return $service;
	}


	public function createServiceTranslation__translator(): Contributte\Translation\Translator
	{
		$service = new Contributte\Translation\Translator(
			$this->getService('translation.localeResolver'),
			$this->getService('translation.fallbackResolver'),
			'cs',
			'/var/www/html/app/../temp/cache/translation',
			true
		);
		$service->setLocalesWhitelist(['cs', 'en']);
		$service->setConfigCacheFactory($this->getService('translation.configCacheFactory'));
		$service->setFallbackLocales(['en_US']);
		$service->addLoader('neon', $this->getService('translation.loaderNeon'));
		$service->addResource('neon', '/var/www/html/app/lang/form/form.cs_CZ.neon', 'cs_CZ', 'form');
		$service->addResource('neon', '/var/www/html/app/lang/form/form.en_US.neon', 'en_US', 'form');
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-doporuceni/home-doporuceni.cs_CZ.neon',
			'cs_CZ',
			'home-doporuceni'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-doporuceni/home-doporuceni.en_US.neon',
			'en_US',
			'home-doporuceni'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-konference/home-konference.cs_CZ.neon',
			'cs_CZ',
			'home-konference'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-konference/home-konference.en_US.neon',
			'en_US',
			'home-konference'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-technologie/home-technologie.cs_CZ.neon',
			'cs_CZ',
			'home-technologie'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/home-technologie/home-technologie.en_US.neon',
			'en_US',
			'home-technologie'
		);
		$service->addResource('neon', '/var/www/html/app/lang/home-text/home-text.cs_CZ.neon', 'cs_CZ', 'home-text');
		$service->addResource('neon', '/var/www/html/app/lang/home-text/home-text.en_US.neon', 'en_US', 'home-text');
		$service->addResource('neon', '/var/www/html/app/lang/kontakt/kontakt.cs_CZ.neon', 'cs_CZ', 'kontakt');
		$service->addResource('neon', '/var/www/html/app/lang/kontakt/kontakt.en_US.neon', 'en_US', 'kontakt');
		$service->addResource('neon', '/var/www/html/app/lang/na-volne-noze/na-volne-noze.cs_CZ.neon', 'cs_CZ', 'na-volne-noze');
		$service->addResource('neon', '/var/www/html/app/lang/na-volne-noze/na-volne-noze.en_US.neon', 'en_US', 'na-volne-noze');
		$service->addResource('neon', '/var/www/html/app/lang/poradenstvi/poradentsvi.cs_CZ.neon', 'cs_CZ', 'poradentsvi');
		$service->addResource('neon', '/var/www/html/app/lang/poradenstvi/poradentsvi.en_US.neon', 'en_US', 'poradentsvi');
		$service->addResource('neon', '/var/www/html/app/lang/referencie/referencie.cs_CZ.neon', 'cs_CZ', 'referencie');
		$service->addResource('neon', '/var/www/html/app/lang/referencie/referencie.en_US.neon', 'en_US', 'referencie');
		$service->addResource('neon', '/var/www/html/app/lang/skoleni/skoleni.cs_CZ.neon', 'cs_CZ', 'skoleni');
		$service->addResource('neon', '/var/www/html/app/lang/skoleni/skoleni.en_US.neon', 'en_US', 'skoleni');
		$service->addResource('neon', '/var/www/html/app/lang/skoleniBtrfs/skoleniBtrfs.cs_CZ.neon', 'cs_CZ', 'skoleniBtrfs');
		$service->addResource('neon', '/var/www/html/app/lang/skoleniBtrfs/skoleniBtrfs.en_US.neon', 'en_US', 'skoleniBtrfs');
		$service->addResource('neon', '/var/www/html/app/lang/skoleniDocker/skoleniDocker.cs_CZ.neon', 'cs_CZ', 'skoleniDocker');
		$service->addResource('neon', '/var/www/html/app/lang/skoleniDocker/skoleniDocker.en_US.neon', 'en_US', 'skoleniDocker');
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/software-reseni/software-reseni.cs_CZ.neon',
			'cs_CZ',
			'software-reseni'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/software-reseni/software-reseni.en_US.neon',
			'en_US',
			'software-reseni'
		);
		$service->addResource('neon', '/var/www/html/app/lang/text-about/text-about.cs_CZ.neon', 'cs_CZ', 'text-about');
		$service->addResource('neon', '/var/www/html/app/lang/text-about/text-about.en_US.neon', 'en_US', 'text-about');
		$service->addResource('neon', '/var/www/html/app/lang/vyvoj-embeded/vyvoj-embeded.cs_CZ.neon', 'cs_CZ', 'vyvoj-embeded');
		$service->addResource('neon', '/var/www/html/app/lang/vyvoj-embeded/vyvoj-embeded.en_US.neon', 'en_US', 'vyvoj-embeded');
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/vyvoj-software/vyvoj-software.cs_CZ.neon',
			'cs_CZ',
			'vyvoj-software'
		);
		$service->addResource(
			'neon',
			'/var/www/html/app/lang/vyvoj-software/vyvoj-software.en_US.neon',
			'en_US',
			'vyvoj-software'
		);
		return $service;
	}


	public function initialize()
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer')), 'send'];
			$this->getService('session.session')->start();
			Tracy\Debugger::dispatch();
		})();
		$this->getService('tracy.bar')->addPanel($this->getService('translation.tracyPanel'));
	}
}
