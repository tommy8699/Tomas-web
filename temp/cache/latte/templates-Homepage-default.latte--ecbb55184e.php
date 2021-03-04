<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/Homepage/skoleni.latte */
final class Templateecbb55184e extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '

';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '

<div class="text about">
<h1>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.head"));
		echo '</h1>
<p>

';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text"));
		echo '<br>
<b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text1"));
		echo '</b> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text2"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text3"));
		echo '</b>.

<br>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text4"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text5"));
		echo '</b>  <b> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text6"));
		echo '</b> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text7"));
		echo '

<br>
<b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text8"));
		echo '</b> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text9"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text9.1"));
		echo '</b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text9.2"));
		echo '
<br>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text9.3"));
		echo '
<br>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text10.1"));
		echo '<b> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text10.2"));
		echo '</b> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text10.3"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text10.4"));
		echo '</b>.

</p>
</div>


<div class="text">
<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text11"));
		echo '
<a href="#kontakt">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.text12"));
		echo '</a>.
</p>
</div>


	<div class="menu">
  <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.menu"));
		echo '</h2>

    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("VyvojSoftware:")) /* line 39 */;
		echo '"> <div class="menu-list">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.menu1"));
		echo '</div></a>
<!--<a n:href="VyvojSoftware: $article[\'locale\']"><div class="menu-list">';
		echo LR\Filters::escapeHtmlComment(call_user_func($this->filters->translate, "text-about.menu1"));
		echo '</div></a> -->

  <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("SoftwareReseni:")) /* line 42 */;
		echo '"><div class="menu-list">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.menu2"));
		echo '</div></a>

  <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("PoradenstviAnalyza:")) /* line 44 */;
		echo '"><div class="menu-list">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.menu3"));
		echo '</div></a>

  <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Skoleni:")) /* line 46 */;
		echo '"><div class="menu-list">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "text-about.menu4"));
		echo '</div></a>

	</div>


<div class="text">
<h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.head"));
		echo '</h2>

<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text1"));
		echo ' <b>ČVUT</b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text2"));
		echo "\n";
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text3"));
		echo '
</p>

<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text4"));
		echo '
</p>

<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text5"));
		echo '<b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text5.1"));
		echo '</b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text5.2"));
		echo '<b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text5.3"));
		echo ' </b>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text6"));
		echo '


';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text7"));
		echo '
 </p>

<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text8"));
		echo '
 <a href="https://blog.josefjebavy.cz/vzdelavani/video-konference" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text9"));
		echo ' </a>.
</p>

<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text10"));
		echo '
</p>

<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text11"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text11.1"));
		echo '</b> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text11.2"));
		echo '
</p>



<p>
<!-- tento link je nefunkcny treba dorobit, nezabudnut !!! -->
 <a  href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":JakZahajitSpolupraci")) /* line 88 */;
		echo '">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-text.text12"));
		echo ' </a>

</p>

</div>


	<div class="text">
<a name="reference"></a>
<h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.head"));
		echo '</h2>


<ul>
<li> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text"));
		echo '<a href="https://dobra-miska.cz/" target="_blank">dobra-miska.cz</a>.</li>
<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text1"));
		echo ' <a href="http://slunecno.cz/" target="_blank">slunecno.cz</a>.</li>
<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text2"));
		echo ' <a href="https://www.swklid.cz/" target="_blank">SW KLID</a>. </li>
<li> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text3"));
		echo ' <a href="https://www.motonet.cz/" target="_blank">Motonet s.r.o.</a>, <a href="https://www.top09.cz/" target="_blank">TOP09</a> a <a href="https://www.potvor.cz"> Potvor.cz</a>
<div>
    <a href="/images/josef-jebavy-linux-admin.jpg"   title="josef jebavy linux admin" class="thickbox">
        <img src="/images/josef-jebavy-linux-admin-small.jpg" alt="josef jebavy linux admin" border="1"></a>
</div>
</li>
    	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text4"));
		echo '  <a href="https://blog.josefjebavy.cz/unix/yocto-project-jak-si-priravit-linuxovy-system-pro-embedded-zarizeni" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text4.1"));
		echo ' </a>.</li>
    	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text5"));
		echo '</li>
<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text6"));
		echo '
<a href="https://www.google.com/search?q=9300-ENA+router&tbm=isch" target="_blank">9300-ENA - ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text7"));
		echo '</a>.</li>
	<li><a href="https://blog.josefjebavy.cz/warduino" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text8"));
		echo '</a>.
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text9"));
		echo '
<a href="http://www.aradio.cz" target="_blank">PE-AR</a>.</li>
	<li><a href="https://wireless.xeres.cz/" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text10"));
		echo '</a>.</li>
	<li><a href="https://wrttm.xeres.cz/" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text11"));
		echo '</a>
	<br>
	        <div>
        <a href="/images/wireless-real-time-temperature-measurement.png"   title="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "referencie.title1"));
		echo '" class="thickbox">
            <img src="/images/wireless-real-time-temperature-measurement-small.png" alt="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "referencie.title1"));
		echo '" border="1"></a>
        </div>
	</li>
	<li>Wireless Real Time Temperature measurement for Android.</li>
	<li><a href="https://ebook.josefjebavy.cz/ebook/pripojeni-iqrf-k-androidu/" title="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "referencie.text12"));
		echo ' " target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text12"));
		echo '</a></li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text13"));
		echo ' <a href="https://blog.josefjebavy.cz/programovani/eshop-prestashop" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text13.1"));
		echo '</a>, ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text13.2"));
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text14"));
		echo '</li>
	<li><a href="http://www.pocasi-frydlant.cz/webcams.php" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text15"));
		echo ' </a></li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text16"));
		echo '</li>

    	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text17"));
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text18"));
		echo ' </li>
	<li><a href="https://wirelessbee.xeres.cz" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text19"));
		echo '</a></li>
	<li><a href="https://blog.josefjebavy.cz/programovani/spojegui" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text20"));
		echo '</a></li>
	<li><a href="https://maps.xeres.cz/" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text21"));
		echo '</a></li>
	<li><a href="https://blog.josefjebavy.cz/programovani/javacard">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text22"));
		echo '</a>.</li>
	<li><a href="https://blog.josefjebavy.cz/programovani/UPSmonitor.pdf" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "referencie.text23"));
		echo '</a></li>

</ul>

	</div>

<div class="text">
    <a name="doporuceni"></a>


    <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.head"));
		echo '</h2>
    <h3>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.head"));
		echo '</h3>

    <a id="doporuceni1BT" onclick="showDoporuceni(1)">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.text"));
		echo '</a>



';
		$this->createTemplate("navolnenoze-rss.latte", $this->params, 'include')->renderToContentType('html') /* line 155 */;
		echo '


    <h3>LinkedIn</h3>

    <a id="doporuceni2BT" onclick="showDoporuceni(2)">  ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.text1"));
		echo ' </a>


    <div id="doporuceni2" class="text" style="display: none">
        <p>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.text2"));
		echo ' <a href="https://www.linkedin.com/in/josef-jebavy"
                                         target="_blank">linkedin.com</a>
        </p>

        <div class="about">
            <h3><a href="https://www.linkedin.com/in/petrberny/">Petr Berný</a></h3>
            <p>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.LinkedIn"));
		echo '</p>
        </div>

        <div class="about">
            <h3><a href="https://www.linkedin.com/in/radek-hanek-999756154/">Radek Hanek</a></h3>
            <p>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.LinkedIn1"));
		echo '
            </p>
        </div>

    </div>


    <h3>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.head3"));
		echo '</h3>

<p>
    <a href="https://webtrh.cz/members/53014/rating" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-doporuceni.text3"));
		echo '</a>.
</p>
</div>

	<div class="text">

  <a name="technologie"></a>

 <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.head"));
		echo '</h2>
 <p>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text"));
		echo '</p>
<ul>
	<li>OS GNU/Linux</li>
	<li>Ethernet, WiFi, TCP/IP.</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text1"));
		echo ' Java (SE, OpenCard , Android) , Bash, SQL, PHP (Nette, Symfony, Composer), Python, C/C++, Kotlin.</li>
	<li>HTML, XML, LaTeX.</li>
    <li><a href="https://blog.josefjebavy.cz/programovani/rest-api-platform" target="_blank">REST API</a>,
      _home-technologie.text2}
        <a href="https://www.geis-group.cz/cs/ke-stazeni-technicka-podpora" target="_blank">Geis Point</a>,
        <a href="https://www.zasilkovna.cz/eshopy/implementace/xml" target="_blank">Zásilkovna</a>,
        Česká pošta
        <a href="https://www.ceskaposta.cz/sluzby/baliky/cr/balik-do-balikovny#14" target="_blank">Balík do balíkovny</a>
        <a href="https://b2c.cpost.cz/" target="_blank">B2C</a>,
        <a href="https://github.com/PayU-EMEA/openpayu_php" target="_blank">PayU</a>,
        <a href="https://www.fio.cz/bankovni-sluzby/api-bankovnictvi" target="_blank">Fio bank API</a>.
    <a href="https://docs.packetery.com/03-creating-packets/06-packetery-api-reference.html">SOAP API Zásilkovna</a>,
     PPL myAPI, API Česká pošta, Geis API.
    </li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text3"));
		echo ' (SVN, Git, GitLab).</li>
    <li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text4"));
		echo ' </li>
    <li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text5"));
		echo '</li>
    <li> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text6"));
		echo ' <a href="https://www.debian.cz/" target="_blank">Debian</a>): RAID, Apache, Nginx, Postfix, Dovecot,
                <a href="https://blog.josefjebavy.cz/programovani/sql-postgresql-mysql-mariadb" target="_blank">MySQL, PostgreSQL</a>,
        named, LTSP, samba, asterisk,
        openvpn, openfire, ssh, ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text7"));
		echo '
        (VMware, <a href="https://blog.josefjebavy.cz/unix/virtualizace-proxmox" target="_blank">Proxmox</a>, Qemu/KVM), Docker, NodeJS atd.</li>
    <li>
        <a href="https://blog.josefjebavy.cz/unix/gitlab" target="_blank">GitLab</a>,
        <a href="https://blog.josefjebavy.cz/programovani/ispconfig-hosting" target="_blank">ISP Config</a>, Ansible.
    </li>
    <li><a href="https://blog.josefjebavy.cz/unix/yocto-project-jak-si-priravit-linuxovy-system-pro-embedded-zarizeni" target="_blank">Yocto project</a>, Bitbake, embedded Linux.</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text8"));
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text9"));
		echo '</li>
	<li>ARM single board PC: Raspberry Pi, Banana Pi R1.</li>
</ul>

</div>

<div class="text">

<h2>Soft skills</h2>
<ul>
    <li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text10"));
		echo '</li>
     <li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text11"));
		echo '</li>
    <li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text12"));
		echo '</li>
    <li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text13"));
		echo '</li>
</ul>

</div>





	<div class="text">

  <a name="publications"></a>
 <h2>Odborné publikace</h2>
<ul>

    <li><a href="https://www.root.cz/serialy/souborovy-system-btrfs/" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text14"));
		echo '</a> (Root.cz 2020)</li>
	<li><a href="https://blog.josefjebavy.cz/programovani/wireless-arduino-low-power-consumption" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text15"));
		echo '</a> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text15.1"));
		echo ' Amatérské Radio  2017/02)</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text16"));
		echo ' <a href="https://www.root.cz/serialy/bezdratovy-modul-warduxere/" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text16.1"));
		echo '</a> (www.root.cz 2016)</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text17"));
		echo ' <a href="https://www.root.cz/serialy/banana-pi-r1/" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text17.1"));
		echo '</a> (www.root.cz 2015)</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text18"));
		echo '<a href="http://www.rcmodely.cz/archiv/2014/4/9/"  target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text18.1"));
		echo ' </a>)</li>
	<li><a href=" https://blog.josefjebavy.cz/elektronika/usb-redukce#verze2release" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text19"));
		echo '</a>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text19.1"));
		echo ' </li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text20"));
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text21"));
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-technologie.text22"));
		echo '<a href="https://wirelessbee.xeres.cz/cs/napsali-o-nas" target="_blank">Včelařství 2010/09</a>)</li>
</ul>



	</div>


 	<div class="text">

  <a name="konference"></a>
 <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.head"));
		echo '</h2>
 ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text"));
		echo '
<ul>
    <li><a href="https://www.youtube.com/watch?v=TjuFBk7Tcgk" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text1"));
		echo '</a> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text1.1"));
		echo '  <a href="https://installfest.cz/if20/" target="_blank">InstallFest 2020</a></li>
    <li><a href="https://youtu.be/GZW2Jm50lhQ" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text2"));
		echo '</a> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text2.1"));
		echo ' <a href="https://opencamp.sk/" target="_blank">OpenCamp Bratislava</a> 2019</li>
<li> Workshop <b><a href="https://www.youtube.com/watch?v=xnVWX7RFY0o" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text3"));
		echo '</a></b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text3.1"));
		echo '
<a href="https://installfest.cz/if19/" target="_blank">InstallFest 2019</a>.
</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text4"));
		echo ' <a href="https://www.youtube.com/watch?v=30QVNoK4bJg" 	target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text4.1"));
		echo ' </a>
	';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text4.2"));
		echo '  <a href="https://openalt.cz/2018/">OpenAlt 2018</a></li>
	<li><a href="https://blog.josefjebavy.cz/vzdelavani/konference-openalt_2017" 	target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text5"));
		echo '</a></li>
	<li> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text5.1"));
		echo '
<a href="https://openalt.cz/2015/cs/home.html" target="_blank">';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text6"));
		echo '</a> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text6.1"));
		echo '
<a href="https://www.superlectures.com/openalt2015/banana-pi-r1"	target="_blank"> ';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text7"));
		echo ' </a>

</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text8"));
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text9"));
		echo ' </li>
</ul>
</div>

 	<div class="text">

 <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.head2"));
		echo '</h2>
<p>
<ul>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text10"));
		echo ' </li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text11"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text11.1"));
		echo '</b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text11.2"));
		echo '</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text12"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text12.1"));
		echo '</b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text12.2"));
		echo ' </li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text13"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text13.1"));
		echo '</b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text13.2"));
		echo ' <b>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text13.3"));
		echo ' </b>.</li>
		<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text14"));
		echo '</li>
</ul>

</p>

</div>

 	<div class="text">
 <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.head3"));
		echo '</h2>
<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text15"));
		echo '
</p>

</div>

 	<div class="text">
 <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.head4"));
		echo '</h2>
<p>
';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text16"));
		echo '<a href="https://geeklab.cz/">Geeklab</a>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text17"));
		echo '<a href="https://openalt.cz">OpenAlt</a>.

</p>

</div>


 	<div class="text">
 <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.head5"));
		echo ' </h2>
<p>
<ul>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text18"));
		echo '<br>
  <a href="/images/certifikat_IT_Jebavy_Josef.jpg"   title="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "home-konference.title1"));
		echo ' " class="thickbox">
            <img src="/images/certifikat_IT_Jebavy_Josef-small.jpg" alt="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "home-konference.alt1"));
		echo '" border="1"></a>

</li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text19"));
		echo '<br>
	   <a href="/images/certifikat-prace-na-dalku.png"   title="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "home-konference.img1"));
		echo '" class="thickbox">
            <img src="/images/certifikat-prace-na-dalku-small.png" alt="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "home-konference.img1"));
		echo '" border="1"></a>
       </li>
	<li>
	';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.img2"));
		echo ':<br>
	   <a href="/images/certifikat-projektove-rizeni.png"   title="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "home-konference.img2"));
		echo '" class="thickbox">
            <img src="/images/certifikat-projektove-rizeni-small.png" alt="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "home-konference.img2"));
		echo '" border="1"></a>
       </li>
	<li>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.text20"));
		echo '<br>
	 <a href="/images/certifikat-plavcik-CZ-1-clear.jpg"   title="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "home-konference.img3"));
		echo '" class="thickbox">
            <img src="/images/certifikat-plavcik-CZ-1-clear-small.jpg" alt="';
		echo LR\Filters::escapeHtmlAttr(call_user_func($this->filters->translate, "home-konference.img3"));
		echo '" border="1"></a>
       </li>
</ul>

</p>

</div>

 	<div class="text">

 <h2>';
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "home-konference.head6"));
		echo ' </h2>
<p>
';
		$this->createTemplate("soc-site.latte", $this->params, 'include')->renderToContentType('html') /* line 361 */;
		echo '</p>

</div>

';
	}

}
