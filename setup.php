<?php
require_once('config.php');
require_once('twig_setup.php');

$dbhost = 'localhost';
$dbname = 'builderp_stage';
$dbuser = 'builderp_stage';
$dbpass = 'builderp_stage';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);

global $conn;

function start_page($template, $extra = [])
{
    global $twig;
    global $config;

    echo $twig->render($template, ['config' => $config, 'extra' => $extra]);
}