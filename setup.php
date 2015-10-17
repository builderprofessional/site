<?php
require_once('config.php');
require_once('twig_setup.php');

global $config;

$dbhost = $config['dbhost'];
$dbname = $config['dbname'];
$dbuser = $config['dbuser'];
$dbpass = $config['dbpass'];

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);

global $conn;

function start_page($template, $extra = [])
{
    global $twig;
    global $config;

    echo $twig->render($template, ['config' => $config, 'extra' => $extra]);
}