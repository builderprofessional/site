<?php
require_once('setup.php');

global $conn;

$query = "SELECT * FROM recurring_plan WHERE id=%s";
$query = sprintf($query, mysql_real_escape_string($_REQUEST['plan_id']));

$dbResult = mysql_query($query);
$plan = mysql_fetch_assoc($dbResult);

start_page('recurring_signup.twig', ['plan' => $plan]);