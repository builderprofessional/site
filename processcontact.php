<?php
if ($_REQUEST['token'] != '1123581321')
{
    die('invalid token');
}

if ($_REQUEST['name'] == null)
{
    die('invalid name');
}

if ($_REQUEST['email'] == null)
{
    die('invalid email');
}

if ($_REQUEST['subject'] == null)
{
    die('invalid subject');
}

if ($_REQUEST['themeple_content'] == null)
{
    die('no content');
}


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$content = $_REQUEST['themeple_content'];

$body = "
Name: \n
$name\n\n
Email: \n
$email\n\n
Content: \n
$content
";

mail('team@builderprofessional.com', $subject, $body, "From: $email\r\n");
header("Location: contact.php?success=1");