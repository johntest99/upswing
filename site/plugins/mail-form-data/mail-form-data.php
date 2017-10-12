<?php

function mailFormData($data) {
    // $data (array) contains the form's sent data
    $name = $data['name'];
    $emailField = $data['email'];
    $phone = $data['phone'];
    $message = $data['message'];

    // perform form data validation - we can use Kirby's validators,
    // available via "v":
    $errors = array();

    if(empty(trim($name))){ $errors[] = 'name'; }
    if(!v::email($data['email'])) { $errors[] = 'email'; }

    $result = array();
    $result['errors'] = $errors;

    // if we have validation errors, we can stop and return them:
    if(!empty($errors)){
        $result['success'] = false;
        $result['msg'] = 'Validation Failed';
        return $result;
    }

    // if we have no errors, we can go ahead and build an email message.
    // $to, $from and $subject can be hard-coded here, or can alternatively
    // be retrieved from values entered by the user in a page:
    $body = <<<BODY

From: {$name}
--------------------------------------------------------
Email: {$emailField}
--------------------------------------------------------
Phone: {$phone}
--------------------------------------------------------
Message:

{$message}
BODY;

    $to = site()->receiver_email();
    $from = $emailField;
    $subject = site()->subject();

    // send email using php mailFormData
    $email = email(array(
      'to' => $to,
      'from' => $from,
      'subject' => $subject,
      'body' => $body));

    if($email->send()){
        // email was sent successfully
        $result['success'] = true;
        // $result['msg'] = site()->success_msg();
        // $result["to"] = $to;
    } else {
        // email delivery was not successful - report error
        $result['success'] = false;
        $result['msg'] = $email->error();
    }

    return $result;
}
