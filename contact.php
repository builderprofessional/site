<?php
require_once('setup.php');

$successAlertClass = $_REQUEST['success'] ? '' : 'hiddenaway';
start_page('contact.twig', ['successAlertClass' => $successAlertClass]);