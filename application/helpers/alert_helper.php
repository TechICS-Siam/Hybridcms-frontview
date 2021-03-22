<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('setAlertData')) {

    function setAlertData($type, $message, $alartType='', $heading='')
    {
        $CI = &get_instance();
        $sessionAlertTypes = [
            'warning' => 'alert-warning',
            'success' => 'alert-success',
        ];

        $previousAlerts = $CI->session->flashdata('session_alerts') ? $CI->session->flashdata('session_alerts') : array();

        $newAlert = [
            'type' => $sessionAlertTypes[$type],
            'message' => $message,
            'heading' => $heading,
            'alartType' => $alartType,
        ];

        array_push($previousAlerts, $newAlert);

        $CI->session->set_flashdata('session_alerts', $previousAlerts);
    }
}

if (!function_exists('printAlertData')) {

    function printAlertData()
    {
        $CI = &get_instance();
        $sessionAlerts = $CI->session->flashdata('session_alerts');

        if (is_array($sessionAlerts) && count($sessionAlerts)) {
            foreach ($sessionAlerts as $key => $alerts) {
                if($alerts['alartType'] != ''){continue;}
                ?>
                <div class="alert set-alert alert-outline <?=$alerts['type']?> alert-dismissible fade show" role="alert">
                    <strong><?= $alerts['type'] == 'alert-success' ? 'Success' : 'Sorry' ?>!</strong> <?=$alerts['message']?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php

            }
        }
        $CI->session->set_flashdata('session_alerts', null);

    }
}

if (!function_exists('printOldValues')) {

    function printOldValues($fieldName, $default = "")
    {
        $CI = &get_instance();

        if (isset($CI->session->flashdata('old_values')[$fieldName])) {
            echo $CI->session->flashdata('old_values')[$fieldName];
        } else {
            echo $default;
        }

    }
}

if (!function_exists('setOldValues')) {

    function setOldValues($fields)
    {
        $CI = &get_instance();
        $CI->session->set_flashdata('old_values', $fields);
    }
}

if (!function_exists('icsEncode')) {

    function icsEncode($value)
    {
        $key = sha1('EnCRypT10nK#Y!RiSRNnTechICS');
        if (!$value) {return false;}
        $strLen = strlen($value);
        $keyLen = strlen($key);
        $j = 0;
        $crypttext = '';
        for ($i = 0; $i < $strLen; $i++) {
            $ordStr = ord(substr($value, $i, 1));
            if ($j == $keyLen) {$j = 0;}
            $ordKey = ord(substr($key, $j, 1));
            $j++;
            $crypttext .= strrev(base_convert(dechex($ordStr + $ordKey), 16, 36));
        }
        return $crypttext;

    }
}

if (!function_exists('printError')) {

    function printError($fields)
    {
        $CI = &get_instance();

        if (isset($CI->session->flashdata('validation_error')[$fields])) {
            echo $CI->session->flashdata('validation_error')[$fields];
        }

    }
}

if (!function_exists('setError')) {

    function setError($error)
    {
        $CI = &get_instance();
        $CI->session->set_flashdata('validation_error', $error);
    }
}