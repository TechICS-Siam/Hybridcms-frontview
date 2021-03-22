<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('sendMail')) {

    // function sendMail($from, $to, $subject, $body, $headers) {
    //      mail($to, $subject, $body, $headers);
    // }

    function sendMail($from, $to, $subject, $body, $headers) {
        $CI = &get_instance();
        $CI->load->library('email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.googlemail.com',
            'smtp_port' => 587,
            'smtp_user' => 'techicsdev@gmail.com',
            'smtp_pass' => 'Techics_12345$',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $CI->email->initialize($config);
        $CI->email->set_newline("\r\n");
        $CI->email->from($from);
        $CI->email->to('sk@sk-associates.org');
        $CI->email->subject($subject);
        $CI->email->message($body);
        if(!$CI->email->send()) {
            $mymail = '<br>Email is Not Sent!';
        } else {
            $mymail =  "<br>mail sent successfully";
        }

        return $mymail;
    }

}