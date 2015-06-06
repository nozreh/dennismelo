<?php
require 'Mandrill.php';

$mandrill = new Mandrill("PRgkkKrIhLWZvXbFh9YugA");
$recipient = 'herzgarlan22@gmail.com';

// If are not using environment variables to specific your API key, use:
// $mandrill = new Mandrill("YOUR_API_KEY")

 // check for empty required fields
if (!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['contact_number']))
{
    return_error('incomplete');
}

/*
// form field values
$name = $_POST['name']; // required
$email = $_POST['email']; // required
$contact_number = $_POST['contact_number']; // not required

print '<pre>';
var_dump($mandrill);
print '</pre>';

exit;

$message = array(
    'subject' => 'RSVP Confirmation',
    'from_email' => 'dennis-melo@dmgreatestadventure.com',
    'html' => '<p>Name: '.$name.'</p>'.
              '<p>Email: '.$email.'</p>'. 
              '<p>Contact: '.$contact_number.'</p>',
    'to' => array(array('email' => $recipient, 'name' => 'Melo')),
    'merge_vars' => array(array(
        'rcpt' => $recipient,
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => $name)
    ))));

$template_name = 'Stationary';

$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi *|FIRSTNAME|*, thanks for your confirmation. See yah'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2015.')

);

print_r($mandrill->messages->sendTemplate($template_name, $template_content, $message));*/


$message = array(
    'subject' => 'Test message',
    'from_email' => $recipient,
    'html' => '<p>this is a test message with Mandrill\'s PHP wrapper!.</p>',
    'to' => array(array('email' => $recipient, 'name' => 'Recipient 1')),
    'merge_vars' => array(array(
        'rcpt' => $recipient,
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => 'Recipient 1 first name'),
            array(
                'name' => 'LASTNAME',
                'content' => 'Last name')
    ))));

$template_name = 'Stationary';

$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2012.')

);

print_r($mandrill->messages->sendTemplate($template_name, $template_content, $message));


?>