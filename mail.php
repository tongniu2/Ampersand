<?php
    $to = "ampersand.chair@mcgillbasic.com";
    $from = $_REQUEST['name'];
    $headers = "Content-type: text/html;From: $from; Reply-To: $_REQUEST['email']";

    $fields = array();
    $fields["name"] = $_REQUEST['name'];
    $fields["email"] = $_REQUEST['email'];
    $fields["message"] = $_REQUEST['message'];

    $body = "Here is what was sent:\n\n";
    $body .= 'Name : '.$fields['name']. '<br>';
    $body .= 'Email : '.$fields['email']. '<br>';
    $body .= 'Message : '.$fields['message']. '<br>';

    $send = mail('ampersand.chair@mcgillbasic.com', $body, $headers);

?>
