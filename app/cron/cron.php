<?php

namespace App\Cron;
use DOMDocument;
use XMLReader;

include "CronBase.php";


class NavolneNoze extends CronBase
{
$file = fopen($_SERVER['DOCUMENT_ROOT'] . "/temp/navolnenoze-rss.html", "w");

$rss = simplexml_load_file('https://navolnenoze.cz/prezentace/josef-jebavy/doporuceni/rss/');

//$str= '<h2>'. $rss->channel->title . '</h2>';
$str = '<div id="doporuceni1" class="text" style="display: none">';

$str .= '<p>Výpis doporučení z portálu <a href="https://navolnenoze.cz/prezentace/josef-jebavy/doporuceni/"
                                              target="_blank">Na volné noze</a>';

foreach ($rss->channel->item as $item)
{

if (empty($item->link))
{
$link = "https://navolnenoze.cz/prezentace/josef-jebavy/doporuceni/";
}
else
{
$link = $item->link;
}

$str .= '<div class="about">';
$str .= '<h3><a href="' . $link . '">' . $item->title . "</a></h3>";
//  $str.= "<p>" . $item->pubDate . "</p>";
$str .= "<p>" . $item->description . "</p>";
$str .= '</div>';
}

$str .= '</div>';
echo $str;

fwrite($file, $str);


//-----------
fclose($file);
}