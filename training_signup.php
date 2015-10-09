<?php
require_once('setup.php');

if (!isset($_REQUEST['classId']))
{
    start_page('training_signup.twig', []);
    exit;
}


global $conn;

$query = "
  SELECT * FROM training_class
    JOIN training_subject USING (training_subject_id)
    WHERE start > NOW()
    ORDER BY start";

$dbResult = mysql_query($query, $conn);

$classes = [];
while ($row = mysql_fetch_assoc($dbResult))
{
    $classes[] = $row;
}


start_page('training_signup.twig');