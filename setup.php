<?php
require_once('config.php');
require_once('twig_setup.php');


function start_page($template)
{
    global $twig;
    global $config;

    echo $twig->render($template, ['config' => $config]);
}